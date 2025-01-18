const {fetch: origFetch} = window;
window.fetch = async (...args) => {
  console.log("fetch called with args:", args);
  const response = await origFetch(...args);

  /* work with the cloned response in a separate promise
     chain -- could use the same chain with `await`. */
  response
    .clone()
    .json()
    .then(data => {
        if(data.redirect){
            location.href = data.redirect;
        }
    })
    .catch(err => console.error(err));

  /* the original response can be resolved unmodified: */
  //return response;

  /* or mock the response: */
  return new Response(JSON.stringify({
    userId: 1,
    id: 1,
    title: "Mocked!!",
    completed: false
  }));
};