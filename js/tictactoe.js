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



