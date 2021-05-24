$(document).ready(function () {

    $('.form__item').submit(function (e) {
        e.preventDefault();

        var data = $(this).serialize(),
            url = window.location.href + 'functions.php';

        $.ajax({
            type: 'post',
            url: url,
            data: data
        })
            .done(function(response) {
                alert(response);
            })
            .fail(function() {
                console.log('response error submit');
            });
    });

});
