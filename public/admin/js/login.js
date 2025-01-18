let login_form = document.querySelector('form#login');
login_form.addEventListener("submit", function (event) {
    event.preventDefault();
    let object = {};
    new FormData(event.target).forEach(function (value, key) {
        object[key] = value;
    });
    let json = JSON.stringify(object);
    fetch(_base_url + 'authenticate', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: json
    })
        .then(response => response.json())
        .then(data => console.log("original caller received:", data))
        .catch(err => console.error(err));
});