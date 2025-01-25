let login_form = document.querySelector('form#login');
login_form.addEventListener("submit", function (e) {
    e.preventDefault();
    let submit_button = e.target.querySelectorAll("[type=submit]")[0];
    submit_button.disabled = true;
    let object = {};
    new FormData(e.target).forEach(function (value, key) {
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
        .then(response => { response.json(); })
        .then(data => {
            console.log("original caller received:", data);
            submit_button.disabled = false;
        })
        .catch(err => {
            console.error(err);
            submit_button.disabled = false;
        });
});