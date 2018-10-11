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

// window.onload = function(){
//     var str = 'Hi! I am Marat Petrosov. Now you are on website of a junior full-stack web developer. On this website you can test your knowledge of CSS, HTML, JavaScript, PHP. For this website I have integrated the coding languages of CSS, HTML, JavaScript, PHP. All projects/quiz`s are developed in JavaScript. For more projects you can visit my github.';
//     var arr = str.split(' ');
//     document.getElementById('aboutMe').innerHTML = arr;
// }
