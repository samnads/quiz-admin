let login_form = document.querySelector('form#login');
login_form.addEventListener("submit", function (event) {
    event.preventDefault();
    let object = {};
    new FormData(event.target).forEach(function (value, key) {
        object[key] = value;
    });
    let json = JSON.stringify(object);
    fetch(_api_url + 'login', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: json
    })
    .then(function (res) {
        console.log(res);
    })
    .catch((error) => {
        console.log("error")
      });
});