$(document).ready(function () {

    $('.form__item form').submit(function (e) {
        e.preventDefault();

        var data = {
            'action' : 'form_register',
            'name' : $('.form__item input[type=text]').val(),
            'email' : $('.form__item input[type=email]').val(),
            'pass' : $('.form__item input[type=password]').val(),
        }

        $.ajax({
            type: 'post',
            url: MyAjax.ajaxurl,
            data: data,
        })
            .done(function(response) {
                console.log(response);
            })
            .fail(function() {
                console.log('response error submit');
            });
    });

});
