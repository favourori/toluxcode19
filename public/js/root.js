function showNumber(num) {
    event.preventDefault();
    // alert(num);
    $("#show-number").text(num);
}

Vue.component('user-message', {
    mounted() {
        this.getAuthUser();
        Event.$on('open', (id, firstname, lastname) => {
            this.chatter_name = firstname + " " + lastname;
            this.clicked = true;
            this.getUserMessages(id);
        });
    },
    data() {
        return {
            message: "",
            messages: [],
            message_id: 0,
            chatter_name: '',

            auth: 0,
            clicked: false
        }
    },

    methods: {
        getAuthUser() {
            axios.get('/api/v1/auth')
                .then(response => {
                    this.auth = response.data.data.id;

                })
                .catch(err => {

                });
        },
        getUserMessages: function (id) {
            axios.get('/api/v1/messages/related/' + id)
                .then(response => {
                    this.messages = response.data.data;
                    this.message_id = id;
                })
                .catch(err => {

                });
        },

        proper(sender_id) {
            return sender_id != this.auth;
        },
        chat() {
            if (event.keyCode == '13') {
                axios.post('/api/v1/chat/' + this.message_id, { message: this.message })
                    .then(response => {
                        this.messages.push(response.data.data);
                        this.message = "";
                    })
                    .catch(err => {

                    });
            }

        }
    }
});

window.Event = new Vue();

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
        subcategory_off: true,
        type_off: true,
        subtype_off: true,
        latitude: 0,
        longitude: 0,
        address: '',
        phone: '',
        facebook: '',
        twitter: '',
        instagram: '',
        google: '',
        snapchat: '',
        linkedin: '',
        categories: [],
        subcategories: [],
        types: [],
        subtypes: [],
        category_id: 0,
        subcategory_id: 0,
        type_id: 0,
        subtype_id: 0,
        specifications: [],
        title: '',
        price: 0,
        phone1: '',
        address1: '',
        description: '',
        search: {
            result: false,
            query: [],
            category_id: 0
        },
        param: '',
        report: '',
        store_name: '',
        store_url: '',
        store_description: '',
        specs: [],

    },

    watch: {

        param: function (oldval, newval) {
            this.search.result = false;
            this.search.query = [];
            if (this.param.trim().length == 0) {

            } else {
                var self = this;
                setTimeout(function () { self.searchAdvert() }, 500);

            }

        },
        country_id: function (oldval, newval) {
            if (oldval != 0) {
                this.getStates();
                this.state_off = false;
            } else {
                this.state_off = true;
            }

        },
        state_id: function (oldval, newval) {
            if (oldval != 0) {
                this.getLgas();
                this.lga_off = false;
            } else {
                this.lga_off = true;
            }

        },

        category_id: function (oldval, newval) {
            if (oldval != 0) {
                this.getSubCategories();

                this.subcategory_off = false;
            } else {
                this.getSubCategories();
                this.subcategory_off = true;
            }

        },

        subcategory_id: function (oldval, newval) {
            if (oldval != 0) {
                this.getTypes();
                this.type_off = false;
            } else {
                this.getTypes();
                this.type_off = true;
            }

        },

        type_id: function (oldval, newval) {
            if (oldval != 0) {
                this.getSubTypes();
                this.type_off = false;
            } else {
                this.type_off = true;
            }

        }
    },

    mounted() {
        this.getUserProfile();
        this.getCountries();
        this.getUser();
        this.getCategories();
    },

    methods: {

        emitValue(id, firstname, lastname) {
            Event.$emit('open', id, firstname, lastname);
        },

        addInput() {
            this.specs.push(1);
        },

        removeInput(index) {
            this.specs.splice(index - 1, 1);
            this.specifications.splice(index - 1, 1);
        },

        reportAdvert(id) {
            let data = {
                _token: this.csrf,
                report: this.report
            };
            axios.post('/advert/report/' + id, data)
                .then(response => {
                    success('Success', 'You have reported this advert');
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

        searchAdvert() {
            if (this.search.category_id == 0) {
                error('Oops!', 'Select a Category');
                return;
            }
            data = {
                category_id: this.search.category_id,
                param: this.param,
                _token: this.csrf
            }
            axios.post('/advert/search', data)
                .then(response => {
                    this.search.query = response.data.data;
                    this.search.result = this.search.query.length > 0 ? true : false;
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

        // gets user
        getCategories() {

            axios.get('/api/v1/categories')
                .then(response => {
                    this.categories = response.data.data;

                })
                .catch(err => {

                });
        },

        // gets user
        getSubCategories() {

            axios.get('/api/v1/subcategories/' + this.category_id)
                .then(response => {
                    this.subcategories = response.data.data;
                })
                .catch(err => {

                });
        },

        // gets user
        getTypes() {

            axios.get('/api/v1/types/' + this.subcategory_id)
                .then(response => {
                    this.types = response.data.data;

                })
                .catch(err => {

                });
        },

        // gets user
        getSubType() {

            axios.get('/api/v1/subtypes/' + this.type_id)
                .then(response => {
                    this.subtypes = response.data.data;

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
            axios.get('/api/v1/countries')
                .then(response => {
                    this.countries = response.data.data;
                })
                .catch(err => {

                });
        },

        // Gets states
        getStates() {
            axios.get('/api/v1/states/' + this.country_id)
                .then(response => {
                    this.states = response.data.data;
                })
                .catch(err => {

                });
        },

        // Gets lgas
        getLgas() {
            axios.get('/api/v1/lgas/' + this.state_id)
                .then(response => {
                    this.lgas = response.data.data;
                })
                .catch(err => {

                });
        },

        createAdvert() {
            let file = new FormData();
            let files = document.querySelector('#image1').files;
            $.each(files, function (key, value) {
                file.append('image1', value);
            });

            files = document.querySelector('#image2').files;
            $.each(files, function (key, value) {
                file.append('image2', value);
            });

            files = document.querySelector('#image3').files;
            $.each(files, function (key, value) {
                file.append('image3', value);
            });

            files = document.querySelector('#image4').files;
            $.each(files, function (key, value) {
                file.append('image4', value);
            });

            let types = this.types;
            let attributes = {};
            // console.log($("#" + this.replaceSpace(types[0].name)));
            for (var i = 0; i < types.length; i++) {
                var name = {};
                if (types[i].form_type == 'select') {
                    name['value'] = [$("#" + this.replaceSpace(types[i].name) + " :selected").val()];
                }

                if (types[i].form_type == 'radio') {
                    name['value'] = [$("#" + this.replaceSpace(types[i].name) + ":checked").val()];
                }

                if (types[i].form_type == 'checkbox') {
                    var temp = $("#" + this.replaceSpace(types[i].name) + ":checked");
                    secondtemp = [];
                    temp.each(function (i) {
                        secondtemp.push($(this).val());
                    });
                    name['value'] = secondtemp;
                }
                attributes[this.replaceSpace(types[i].name)] = name;

            }
            attributes = JSON.stringify(attributes).replace(new RegExp("\"", 'g'), '\'');
            // console.log(attributes);

            file.append('title', this.title);
            file.append('description', this.description);
            file.append('phone', this.phone);
            file.append('state_id', this.state_id);
            file.append('country_id', this.country_id);
            file.append('lga_id', this.lga_id);
            file.append('category_id', this.category_id);
            file.append('subcategory_id', this.subcategory_id);
            file.append('latitude', this.latitude);
            file.append('longitude', this.longitude);
            file.append('address1', this.address1);
            file.append('price', this.price);
            file.append('phone1', this.phone1);
            file.append('attr', attributes);
            file.append('specifications', JSON.stringify(this.specifications));

            axios.post('/account/advert/create', file)
                .then(response => {
                    success('Success', 'Advert Created Successfully');
                    setTimeout(function () { location.href = "/account/dashboard" }, 2000);
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
                });
        },

        apply() {
            let data = new FormData();
            let files = document.querySelector('#image1').files;
            $.each(files, function (key, value) {
                data.append('business_docs', value);
            });

            data.append('store_name', this.store_name);
            data.append('store_url', this.store_url);
            data.append('store_description', this.store_description);

            axios.post('/account/seller/apply', data)
                .then(response => {
                    success('Success', 'Application Successful');
                    setTimeout(function () { location.href = '/account/dashboard' }, 2000);
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
                });
        },

        replaceSpace(value) {
            return value.replace(" ", "_");
        },

        triggerFile(idname) {

            $("#" + idname).trigger('click');
        },

        readDoc(idname, imgshow) {

            let input = document.querySelector('#' + idname);

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#' + imgshow).attr('src', '/img/doc.jpg');

                }

                reader.readAsDataURL(input.files[0]);
            }
        },


        readIMG(idname, imgshow) {

            let input = document.querySelector('#' + idname);

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#' + imgshow).attr('src', e.target.result);

                }

                reader.readAsDataURL(input.files[0]);
            }
        }


    }
});

