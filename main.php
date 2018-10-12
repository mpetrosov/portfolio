<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- normalisation of styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <!-- own styles -->
    <link rel="stylesheet" href="css/main.css">
    <!-- webstyles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Handlee|Source+Code+Pro" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icons8-toolbox-50.png">
    <title>Portfolio</title>
</head>

<body>
    <!-- ............................... -->

    <!-- Header -->

    <!-- ......................................... -->
    <div class="hmain">
        <div class="header">
            <img alt="" class="img-circle" src="https://netsamenwerken.files.wordpress.com/2014/08/guy-incognito-avatar-crop.jpg"
                "="">
        <div class=" header-title">Marat Petrosov</div>
        <div class="header-slogan">Junior SoftWare Developer</div>
        <div class="header-arrow">
            <i class="fas fa-chevron-down" aria-hidden="true"></i>
        </div>
    </div>
    <div class="modalbox" id="text">
        <div class="box">
            <a class="close" href="#">X</a>
            <p class="title">About Me</p>
            <div class="content">
                <h3>Hi! I am Marat Petrosov.
                Now you are on website of a junior full-stack web developer .
                On this website you can test your knowledge of CSS, HTML, JavaScript, PHP.
                For this website I have integrated the coding languages of CSS, HTML, JavaScript, PHP. All projects/quiz`s are developed in JavaScript. 
                For more projects you can visit my <a href="https://github.com/mpetrosov?tab=repositories" target="_blank">github</a>.
                </h3>
            </div>
        </div>
    </div>
    <div id="mySidenav" class="sidenav">
        <a href="#text" id="about">About Me</a>
    </div>
    <!-- 
        ........................................

        PORTFOLIO


        ...................................... -->
    <div class="portfolio">
        <div class="container">
            <div class="title">
                My Projects
            </div>
            <div class="row">
                <!-- We are in portfolio -->
                <div class="col-3">
                    <div class="portfolio-item">
                        <div class="portfolio-item-img">
                            <a href="html.php"><img src="img/html.jpg" alt="HTML5"></a>
                        </div>
                        <div class="portfolio-item-title">
                            <a href="html.php">Test HTML</a>
                        </div>
                        <div class="portfolio-item-text">
                            <p>How to learn HTML</p>
                        </div>
                    </div>
                </div>
                <!-- We are in portfolio -->
                <div class="col-3">
                    <div class="portfolio-item">
                        <div class="portfolio-item-img">
                            <a href="css.php"><img src="img/css1.jpg" alt="CSS3"></a>
                        </div>
                        <div class="portfolio-item-title">
                            <a href="css.php">Test CSS3</a>
                        </div>
                        <div class="portfolio-item-text">
                            <p>How to learn CSS</p>
                        </div>
                    </div>
                </div>
                <!-- We are in portfolio -->
                <div class="col-3">
                    <div class="portfolio-item">
                        <div class="portfolio-item-img">
                            <a href="javascript.php"><img src="img/javascript1.jpg" alt="JavaScrip"></a>
                        </div>
                        <div class="portfolio-item-title">
                            <a href="javascript.php">Test JavaScript</a>
                        </div>
                        <div class="portfolio-item-text">
                            <p>How to learn JavaScrip</p>
                        </div>
                    </div>
                </div>
                <!-- We are in portfolio -->
                <div class="col-3">
                    <div class="portfolio-item">
                        <div class="portfolio-item-img">
                            <a href="php.html"><img src="img/php.jpg" alt="PHP"></a>
                        </div>
                        <div class="portfolio-item-title">
                            <a href="php.php">Test PHP</a>
                        </div>
                        <div class="portfolio-item-text">
                            <p>How to learn PHP</p>
                        </div>
                    </div>
                </div>
                <!-- We are in portfolio -->
            </div>
        </div>
        <div class="row">
                <!-- We are in portfolio -->
                <div class="col-3">
                    <div class="portfolio-item">
                        <div class="portfolio-item-img">
                            <a href="tictactoe.php"><img src="img/krestikinoliki1.jpg" alt="HTML5"></a>
                        </div>
                        <div class="portfolio-item-title">
                            <a href="tictactoe.php">play <strong>Tictactoe</strong></a>
                        </div>
                        <div class="portfolio-item-text">
                        <a href="tictactoe.php">How to play Tictactoe</a>
                        </div>
                    </div>
                </div>
                <!-- We are in portfolio -->
                <div class="col-3">
                  
                </div>
                <!-- We are in portfolio -->
                <div class="col-3">
                  
                </div>
                <!-- We are in portfolio -->
                <div class="col-3">
                   
                </div>
                <!-- We are in portfolio -->
            </div>
        </div>
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
                        <div class="href"><a href="mailto:marat.petrosov@gmail.com?Subject=Hello%20again" class="button"
                                target="_blank">email</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>