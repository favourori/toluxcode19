$("#register-button").prop("disabled", true);

$("#agree").on('click', function () {
    if ($(this).is(':checked'))
        $("#register-button").prop("disabled", false)
    else
        $("#register-button").prop("disabled", true);
});

$("#register").submit(function (event) {
    event.preventDefault();
    register();
});

$("#login").submit(function (event) {
    event.preventDefault();
    login();
});

function login() {
    $("#login").LoadingOverlay('show');
    var data = $('#login').serialize();
    axios.post('/login', data)
        .then(response => {
            success('Success', 'Login Successful');
            location.href = "/account/dashboard";
        })
        .catch(err => {
            $("#login").LoadingOverlay('hide');
            if (err.response.data.response == 422) {
                var firstkey = Object.keys(err.response.data.errors)[0];
                error('Oops!', err.response.data.errors[firstkey][0]);
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

function register() {

    $("#register").LoadingOverlay('show');
    var data = $('#register').serialize();
    axios.post('/register', data)
        .then(response => {
            success('Success', 'Registration Successful');
            location.href = "/account/dashboard";
        })
        .catch(err => {
            $("#register").LoadingOverlay('hide');
            // console.log(err.response.data);
            if (err.response.data.response == 422) {

                var firstkey = Object.keys(err.response.data.errors)[0];

                error('Oops!', err.response.data.errors[firstkey][0]);

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


window.fbAsyncInit = function () {
    // FB JavaScript SDK configuration and setup
    FB.init({
        appId: '169823097049622', // FB App ID
        cookie: true,  // enable cookies to allow the server to access the session
        xfbml: true,  // parse social plugins on this page
        version: 'v2.8' // use graph api version 2.8
    });
};

// Load the JavaScript SDK asynchronously
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    $("#login").LoadingOverlay("show");
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserData();
            $("#login").LoadingOverlay("hide");
        } else {
            error('Oops!', 'Process cancelled by user');
            $("#login").LoadingOverlay("hide");
        }
    }, { scope: 'email' });
}

$("#register-with-facebook").on('click', function () {
    fbRegister();
});
// Facebook login with JavaScript SDK
function fbRegister() {
    $("#register").LoadingOverlay("show");
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserDataRegister();
            $("#register").LoadingOverlay("hide");
        } else {
            error('Oops!', 'Process cancelled by user');
            $("#register").LoadingOverlay("hide");
        }
    }, { scope: 'email' });
}

// Fetch the user profile data from facebook
function getFbUserData() {
    FB.api('/me', { locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture' },
        function (response) {
            let firstname = response.first_name;
            let lastname = response.last_name;
            let email = response.email;
            let link = response.link;

            let data = {
                firstname: firstname,
                lastname: lastname,
                email: email,
                username: email,

            }

            postData('/login/facebook', data);
            // console.log("facebook user details", firstname + " " + lastname + " " + email + " " + link + " " + avatar);
        });
}

// Fetch the user profile data from facebook
function getFbUserDataRegister() {
    FB.api('/me', { locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture' },
        function (response) {
            let firstname = response.first_name;
            let lastname = response.last_name;
            let email = response.email;
            let link = response.link;

            let data = {
                firstname: firstname,
                lastname: lastname,
                email: email,
                username: email,

            }
            // console.log(data);
            postDataRegister('/register/facebook', data);
            // console.log("facebook user details", firstname + " " + lastname + " " + email + " " + link + " " + avatar);
        });
}

function postData(url, data) {
    axios.post(url, data)
        .then(response => {

            success('Success', 'Login Successful');
            location.href = "/account/dashboard";

        })
        .catch(err => {

            if (err.response.data.response == 422) {

                var firstkey = Object.keys(err.response.data.errors)[0];

                error('Oops!', err.response.data.errors[firstkey][0]);

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
        })
}

function postDataRegister(url, data) {
    axios.post(url, data)
        .then(response => {

            success('Success', 'Login Successful');
            location.href = "/account/dashboard";

        })
        .catch(err => {

            if (err.response.data.response == 422) {

                var firstkey = Object.keys(err.response.data.errors)[0];

                error('Oops!', err.response.data.errors[firstkey][0]);

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
        })
}
