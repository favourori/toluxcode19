

var vapp = new Vue({
    el: '#root',
    data: {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        firstname: '',
        lastname: '',
        profile: {},
        website: '',
        errors: {},
        countries: [],
        states: [],
        country_id: 0,
        state_id: 0,
        lga_id: 0,
        lgas: [],
        lga_off: true,
        state_off: true,
        latitude: 0,
        longitude: 0,
        address: '',
        phone: '',
        facebook: '',
        twitter: '',
        instagram: '',
        google: '',
        snapchat: '',
        linkedin: ''
    },

    watch: {

        country_id: function (oldval, newval) {
            if (oldval != 0) {
                this.getStates(oldval);
                this.state_off = false;
            } else {
                this.state_off = true;
            }

        },
        state_id: function (oldval, newval) {
            if (oldval != 0) {
                this.getLgas(oldval);
                this.lga_off = false;
            } else {
                this.lga_off = true;
            }

        }
    },

    mounted() {
        this.getUserProfile();
        this.getCountries();
        this.getUser();
    },

    methods: {
        // Update Profile
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

        // Update contact
        updateContact() {
            let data = {
                latitude: document.getElementById('latitude').value,
                longitude: document.getElementById('longitude').value,
                address: this.address,
                country_id: this.country_id,
                state_id: this.state_id,
                lga_id: this.lga_id,
                website: this.website,
                phone: this.phone,
                _token: this.csrf
            }
            axios.post('/account/address/update', data)
                .then(response => {
                    success('Success', 'Contact Update Successful');
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

        // Update contact
        updateSocial() {
            let data = {
                facebook: this.facebook,
                twitter: this.twitter,
                instagram: this.instagram,
                snapchat: this.snapchat,
                linkedin: this.linkedin,
                google: this.google,
                _token: this.csrf
            }
            axios.post('/account/social/update', data)
                .then(response => {
                    success('Success', 'Socials Update Successful');
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

        // gets user
        getUser() {

            axios.get('/account/apiuser')
                .then(response => {
                    this.firstname = response.data.data.firstname;
                    this.lastname = response.data.data.lastname;
                })
                .catch(err => {

                });
        },

        // Gets user profile
        getUserProfile() {

            axios.get('/account/apiprofile')
                .then(response => {
                    this.profile = response.data.data;
                    document.getElementById('latitude').value = this.profile.latitude;
                    document.getElementById('longitude').value = this.profile.longitude;
                    if (this.profile.state_id != null) {
                        this.state_id = this.profile.state_id;
                        this.state_off = false;
                    }
                    if (this.profile.lga_id != null) {
                        this.lga_id = this.profile.lga_id;
                        this.lga_off = false;
                    }
                    if (this.profile.country_id != null) {
                        this.country_id = this.profile.country_id;
                    }
                    this.website = this.profile.website;
                    this.address = this.profile.address;
                    this.phone = this.profile.phone;

                    this.facebook = this.profile.facebook;
                    this.twitter = this.profile.twitter;
                    this.instagram = this.profile.instagram;
                    this.snapchat = this.profile.snapchat;
                    this.google = this.profile.google;
                    this.linkedin = this.profile.linkedin;
                })
                .catch(err => {

                });
        },

        //  Gets countries
        getCountries() {
            axios.get('/countries')
                .then(response => {
                    this.countries = response.data.data;
                })
                .catch(err => {

                });
        },

        // Gets states
        getStates() {
            axios.get('/states/' + this.country_id)
                .then(response => {
                    this.states = response.data.data;
                })
                .catch(err => {

                });
        },

        // Gets lgas
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