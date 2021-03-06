window.onload = function () {

    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    // ********************

// TIC-TAC-TOE game

// ********************

    for(var i = 0; i < 9; i++){
        document.getElementById('board').innerHTML +='<div class="block"></div>'; 
    }

    var step = 0;

    document.getElementById('board').onclick = function(event){
        // console.log(event);
        if(event.target.className == 'block'){
            if(step % 2 == 0){
                event.target.innerHTML = 'X'
            }else{
                event.target.innerHTML = '0';
            }
            step++;

            checkWinner();
        }
    }

    function checkWinner(){
        var allblock = document.getElementsByClassName('block');

       if(allblock[0].innerHTML == 'X' && allblock[1].innerHTML == 'X' && allblock[2].innerHTML == 'X') {
            alert('X`s won!'); 
            window.location.reload();
       }
       if(allblock[3].innerHTML == 'X' && allblock[4].innerHTML == 'X' && allblock[5].innerHTML == 'X') {
            alert('X`s won!'); 
            window.location.reload();
       }
       if(allblock[6].innerHTML == 'X' && allblock[7].innerHTML == 'X' && allblock[8].innerHTML == 'X') {
            alert('X`s won!');
            window.location.reload();
       }
       if(allblock[0].innerHTML == 'X' && allblock[3].innerHTML == 'X' && allblock[6].innerHTML == 'X') {
            alert('X`s won!');
            window.location.reload();
       }
       if(allblock[1].innerHTML == 'X' && allblock[4].innerHTML == 'X' && allblock[7].innerHTML == 'X') {
            alert('X`s won!');
            window.location.reload();
       }
       if(allblock[2].innerHTML == 'X' && allblock[5].innerHTML == 'X' && allblock[8].innerHTML == 'X') {
            alert('X`s won!');
            window.location.reload();
       };
       if(allblock[0].innerHTML == 'X' && allblock[4].innerHTML == 'X' && allblock[8].innerHTML == 'X') {
            alert('X`s won!');
            window.location.reload();
       }
       if(allblock[2].innerHTML == 'X' && allblock[4].innerHTML == 'X' && allblock[6].innerHTML == 'X') {
           alert('X`s won!');
           window.location.reload();
       }


       //zero`s O
       if(allblock[0].innerHTML == '0' && allblock[1].innerHTML == '0' && allblock[2].innerHTML == '0') {
            alert('0`s won!');
            window.location.reload();
       }
       if(allblock[3].innerHTML == '0' && allblock[4].innerHTML == '0' && allblock[5].innerHTML == '0') {
            alert('0`s won!');
            window.location.reload();
       } 
       if(allblock[6].innerHTML == '0' && allblock[7].innerHTML == '0' && allblock[8].innerHTML == '0') {
            alert('0`s won!');
            window.location.reload();
       }
       if(allblock[0].innerHTML == '0' && allblock[3].innerHTML == '0' && allblock[6].innerHTML == '0') {
            alert('0`s won!');
            window.location.reload();
       }
       if(allblock[1].innerHTML == '0' && allblock[4].innerHTML == '0' && allblock[7].innerHTML == '0') {
            alert('0`s won!');
            window.location.reload();
       }
       if(allblock[2].innerHTML == '0' && allblock[5].innerHTML == '0' && allblock[8].innerHTML == '0') {
            alert('0`s won!');
            window.location.reload();
       }
       if(allblock[0].innerHTML == '0' && allblock[4].innerHTML == '0' && allblock[8].innerHTML == '0') {
            alert('0`s won!');
            window.location.reload();
       }
       if(allblock[2].innerHTML == '0' && allblock[4].innerHTML == '0' && allblock[6].innerHTML == '0') {
            alert('0`s won!');
            window.location.reload();
       }
    }

};



function submitAnswers() {
    var total = 10;
    var score = 0;

    //get User input
    var q1 = document.forms['quizForm']['q1'].value;
    var q2 = document.forms['quizForm']['q2'].value;
    var q3 = document.forms['quizForm']['q3'].value;
    var q4 = document.forms['quizForm']['q4'].value;
    var q5 = document.forms['quizForm']['q5'].value;
    var q6 = document.forms['quizForm']['q6'].value;
    var q7 = document.forms['quizForm']['q7'].value;
    var q8 = document.forms['quizForm']['q8'].value;
    var q9 = document.forms['quizForm']['q9'].value;
    var q10 = document.forms['quizForm']['q10'].value;


    //validation
    for (var i = 1; i <= total; i++) {

        if (eval('q' + i) == null || eval('q' + i) == '') {
            alert('You missed question ' + i + '!');
            return false;
        }
    }

    // if(q1 == null || q1 == ''){
    //     alert('You missed question 1');
    //     return false;
    // }

    //set correct answers
    var answers = ['b', 'a', 'd', 'b', 'd', 'b', 'b', 'd', 'a', 'b'];

    //check answers
    for (var i = 1; i <= total; i++) {

        if (eval('q' + i) == answers[i - 1]) {
            score++;
        }
    }
    // if(q1 == answers[0]){
    //     score++;
    // }

    var gifsArr = ['gifs/victory.gif', 'gifs/average.gif', 'gifs/lose.gif'];
    var results = document.getElementById('results');

    if (score >= 8) {
        results.innerHTML = '<h3> Perfect! You scored <span>' + score + ' </span> out of <span> ' + total + '</span></h3>';
        document.getElementById('gifs').src = gifsArr[0];
    }
    if (score > 6 && score <= 7) {
        var modalFooter = document.getElementById('modalFooter');
        modalFooter.style.backgroundColor = '#FFA500';
        var modalHeader = document.getElementById('modalHeader');
        modalHeader.style.backgroundColor = '#FFA500';
        results.innerHTML = '<h3> You are an average performer! You scored <span>' + score + ' </span> out of <span> ' + total + '</span></h3>';
        document.getElementById('gifs').src = gifsArr[1];
    }

    if (score <= 5) {
        var modalFooter = document.getElementById('modalFooter');
        modalFooter.style.backgroundColor = 'red';
        var modalHeader = document.getElementById('modalHeader');
        modalHeader.style.backgroundColor = 'red';
        results.innerHTML = '<h3>You scored <span>' + score + ' </span> out of <span> ' + total + '<br>Don`t worry. There is always time to improve your skills. </span></h3> ';
        document.getElementById('gifs').src = gifsArr[2];

    }

    return false;
}



// ********************

// TIC-TAC-TOE game

// ********************

var t = new Array(9);

//wright 0`s and 0`s
function zero(){
    var id = Math.floor(Math.rondom() * 9);

}