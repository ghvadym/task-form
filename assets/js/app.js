$(document).ready(function () {

    $('.form__item').submit(function (e) {
        e.preventDefault();

        console.log('submit')

        // var data = {
        //     'action': 'dashboard_add_user',
        //     'name' : $('.form__item input[type=text]').val(),
        //     'password' : $('.form__item input[type=password]').val(),
        // };
        //
        // $.ajax({
        //     type: "POST",
        //     url: ajaxurl,
        //     data: data
        // })
        //     .done(function(response) {
        //         console.log(response);
        //     })
        //     .fail(function() {
        //         $('#dash-cf .dash-cf-unsuccess').css({display:'block'});
        //     });
    });

});
