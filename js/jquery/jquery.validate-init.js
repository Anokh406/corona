jQuery(".form-valide").validate({
    rules: {
        "first_name":{required:true},
        "last_name":{required:true},
        "user_email": {required: !0,email: !0},
        "user_password": {required: !0,minlength: 5},
        "company_name": {required:!0},
        // "val-username": {required: !0,minlength: 3},
        // "val-section": {required: !0},
        // "val-rollno": {required: !0},
        // "val-fees": {required: !0},
        // "val-age": {required: !0},
        // "val-salary":{required:!0},
        // "val-confirm-password": {required: !0,equalTo: "#val-password"},
        // "val-select2": {required: !0},
        // "val-select2-multiple": {required: !0,minlength: 2},
        // "val-suggestions": {required: !0,minlength: 5},
        // "val-skill": {required: !0},
        // "val-currency": {required: !0,currency: ["$", !0]},
        // "val-website": {required: !0,url: !0},
        // "val-phonein": {required: !0,phonein: !0},
        // "val-digits": {required: !0,digits: !0},
        // "val-number": {required: !0,number: !0},
        // "val-range": {required: !0,range: [1, 5]},
        // "val-terms": {required: !0}
    },
    messages: {
        "first_name":{required:"Please enter first name"},
        "last_name":{required:"Please enter last_name"},
        "user_email": "Please enter a valid email address",
        "user_password": {required: "Please provide a password",minlength: "Your password must be at least 5 characters long"},
        "company_name": {required: "Please enter company name"},
        // "val-username": {required: "Please enter a username",minlength: "Your username must consist of at least 3 characters"},
        // "val-class": {required: "Please enter your class"},
        // "val-section": {required: "Please enter your section"},
        // "val-rollno": {required: "Please enter your rollno"},
        // "val-fees": {required: "Please enter your fees"},
        // "val-salary": "Please Enter an amount",
        "val-confirm-password": {required: "Please provide a password",minlength: "Your password must be at least 5 characters long",
        equalTo: "Please enter the same password as above"}
        // "val-select2": "Please select a value!",
        // "val-select2-multiple": "Please select at least 2 values!",
        // "val-suggestions": "What can we do to become better?",
        // "val-skill": "Please select a skill!",
        // "val-currency": "Please enter a price!",
        // "val-website": "Please enter your website!",
        // "val-phonein": "Please enter a phone!",
        // "val-digits": "Please enter only digits!",
        // "val-number": "Please enter a number!",
        // "val-range": "Please enter a number between 1 and 5!",
        // "val-terms": "You must agree to the service terms!"
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
});


jQuery(".form-valide-with-icon").validate({
    rules: {
        "val-username": {
            required: !0,
            minlength: 3
        },
        "val-password": {
            required: !0,
            minlength: 5
        }
    },
    messages: {
        "val-username": {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 3 characters"
        },
        "val-password": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        }
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-valid")
    }




});