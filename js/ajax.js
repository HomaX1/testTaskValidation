$().ready(function () {

    $('.submitBtn').on('click', function (elem) {
        elem.preventDefault();
        var formData = {
            "name": $('#name').val(),
            "password": $('#password').val(),
            "password2": $('#confirmPassword').val(),
            "mail": $('#email').val(),
            "city": $('#city').val(),
            "link": $('#link').val()
        };

        $.ajax({
            type: "POST",
            url: "../login.php",
            data: JSON.stringify(formData),
            success: function(data) {
                $('#signForm').hide();
                console.log(data);
            }
        });
    });
});