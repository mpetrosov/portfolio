$(function(){
    $('#log-in').click(function(){
        $('.login-form').show();
        $('.register-form').hide();
    });
    
    $('#sign-up').click(function () {
        $('.login-form').hide('hidden');
        $('.register-form').show('hidden');
    });
});
