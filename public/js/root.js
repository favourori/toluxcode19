

var vapp = new Vue({
    el: '#root',
    data: {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        firstname: '',
        lastname: '',
        profile: {},
        errors: {},
        countries: [],
        states: [],
        country_id: 0,
        state_id: 0,
        lgas: [],
        lga_off: true,
        state_off: true,
    },

    watch: {

        country_id: function (oldval, newval) {
            if (oldval != 0) {
                this.getStates(oldval);
                this.state_off = false;
            }

        },
        state_id: function (oldval, newval) {
            if (oldval != 0) {
                this.getLgas(oldval);
                this.lga_off = false;
            }

        }
    },

    mounted() {
        this.getUserProfile();
        this.getCountries();
    },

    methods: {
        updateProfile() {
            let data = {
                firstname: this.firstname,
                lastname: this.lastname,
                _token: this.csrf
            }
            axios.post('/account/profile/update', data)
                .then(response => {
                    success('Success', 'Profile Update Successful');
                })
                .catch(err => {
                    if (err.response.data.response == 422) {
                        error('Oops!', 'Check required fields')
                        this.errors = err.response.data.errors;
                    }
                    if (err.response.data.response == 401) {
                        error('Oops!', 'Not Authorized')
                    }
                    if (err.response.data.response == 404) {
                        error('Oops!', err.response.data.message)
                    }
                });
        },

        getUser() {

            axios.get('/account/apiuser')
                .then(response => {
                    this.firstname = response.data.data.firstname;
                    this.lastname = response.data.data.lastname;
                })
                .catch(err => {

                });
        },

        getUserProfile() {

            axios.get('/account/apiprofile')
                .then(response => {
                    this.profile = response.data.data;
                })
                .catch(err => {

                });
        },

        getCountries() {
            axios.get('/countries')
                .then(response => {
                    this.countries = response.data.data;
                })
                .catch(err => {

                });
        },

        getStates() {
            axios.get('/states/' + this.country_id)
                .then(response => {
                    this.states = response.data.data;
                })
                .catch(err => {

                });
        },

        getLgas() {
            axios.get('/lgas/' + this.state_id)
                .then(response => {
                    this.lgas = response.data.data;
                })
                .catch(err => {

                });
        }


    }
});