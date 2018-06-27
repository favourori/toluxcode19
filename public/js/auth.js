function login() {
    event.preventDefault();
    var data = $('#login').serialize();
    axios.post('/login', data)
        .then(response => {
            success('Success', 'Login Successfully');
            location.href = "/account/dashboard";
        })
        .catch(err => {
            if (err.response.data.response == 422) {
                error('Oops!', 'Check required fields')
                this.errors = err.response.data.errors;
            }
            if (err.response.data.response == 401) {
                error('Oops!', err.response.data.message)
            }
            if (err.response.data.response == 404) {
                error('Oops!', err.response.data.message)
            }

            if (err.response.data.response == 409) {
                error('Oops!', err.response.data.message)
            }
        });
}