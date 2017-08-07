$().ready(function () {

    $('.signUpForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 30,
                lettersonly: true
            },
            password: {
                required: true,
                minlength: 8
            },
            confirmPassword: {
                required: true,
                minlength: 8,
                equalTo: '#password'
            },
            email: {
                required: true,
                email: true
            },
            city: {
                required: true,
                minlength: 2,
                maxlength: 20,
                lettersonly: true
            },
            age: {
                maxlength: 3,
                digits: true
            },
            link: {
                required: true,
                url: true
            }
        }
    });

    $.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "Letters only please");

});