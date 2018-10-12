<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!-- normalisation of styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <!-- own styles -->
    <link rel="stylesheet" href="css/javascript.css">
    <!-- webstyles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Handlee|Source+Code+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fredericka+the+Great" rel="stylesheet">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icons8-toolbox-50.png">
    <script src="js/javascript.js"></script>
    <title>Tic-Tac-Toe</title>
</head>

<body>
    <div class="jmain">
        <div class="jheader">
            <div class="jheader-title">Tic-tac-toe</div>
            <div class="jheader-arrow">
                <i class="fas fa-chevron-down" aria-hidden="true"></i>
            </div>
        </div>
        <div class="html-main">
            <div class="container">
                <a href="main.php" class="button-back">&larr; Back to home</a>
            </div>
        </div>


        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header" id="modalHeader">
                    <span class="close">&times;</span>
                    <h2>Rules</h2>
                </div>
                <div class="modal-body">
                    <h1 id="results">Tic-tac-toe (also known as noughts and crosses or Xs and Os) is a paper-and-pencil 
                        game for two players, X and O, who take turns marking the spaces in a 3×3 grid. 
                        The player who succeeds in placing three of their marks in a horizontal, vertical, or diagonal row wins the game.</h1>
                </div>
                <div class="modal-footer" id="modalFooter">
                </div>
            </div>

        </div>

        <div class="h1">
            <h1>Play Tic-tac-toe </h1>
        </div>
        <div id="results"></div>
        <div class="form-container" id="container">
            <div class="qrow">
                <div class="jcol-3">
                   
                </div>
                
                <div class="col-3" id="mgame">
                    <div class="board" id="board">
                    </div>
                </div>
            </div>

        </div>

        <div class="scoreBtn">
            <button class="myBtn" id="myBtn" >The Rules of the Game</button>
        </div>


        <div class="portfolio">
            <div class="footer">
                <div class="fcontainer">
                    <div class="frow">
                        <div class="col-3">
                            <p class="footer-name">Marat Petrosov</p>
                            <p class="lang">HTML CSS JavaScript PHP</p>
                        </div>
                        <div class="col-3">
                            <p class="footer-social">My social network</p>
                            <div class="footer-social-icons">
                                <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="col-3">
                            <p class="contact">Contact</p>
                            <div class="href"><a href="#" class="button" target="_blank">email</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>