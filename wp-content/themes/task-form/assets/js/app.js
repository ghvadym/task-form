$(document).ready(function () {

    $('.form__register').submit(function (e) {
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
                $('.errors').hide();
                $('body').prepend(response);
            })
            .fail(function() {
                console.log('response error submit');
            });
    });

    $('.form__login').submit(function (e) {
        e.preventDefault();

        var data = {
            'action' : 'form_login',
            'user_login' : $('.form__item input[type=text]').val(),
            'user_password' : $('.form__item input[type=password]').val(),
            'remember' : true,
        }

        $.ajax({
            type: 'post',
            url: MyAjax.ajaxurl,
            data: data,
        })
            .done(function(response) {
                console.log(response);
                $('.errors').hide();
                $('body').prepend(response);
            })
            .fail(function() {
                console.log('response error submit');
            });
    });

});
