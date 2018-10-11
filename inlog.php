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
    <link rel="shortcut icon" type="image/x-icon" href="img/icons8-toolbox-50.png">
    
    <title>Login</title>
</head>

<body>
    
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
    <div class="portfolio">
        <div class="wcontainer">
            <div class="wrow">
                <div class="col-1">
                    
                </div>
                <div class="col-2">
                    <div class="register-form">
                        <span id="log-in" class="switch-forms">login</span>
                        <h1>Sign up here</h1>
                        <form class="form register" action="includes/register.inc.php" method="POST">
                            <input class="signup_up" type="text" name="email" placeholder="example@example.com" >
                            <input class="signup_middel" type="text" name="username" placeholder="Username" >
                            <input class="signup_down" type="password" name="pwd" placeholder="Password" >
                            <button class="button-back" type="submit">signup</button>
                        </form>
                    </div>
                    
                    <div class="login-form">
                        <span id="sign-up" class="switch-forms">sign up</span> 
                        <h1>Login here</h1>
                        <form class="form-login" action="includes/login.inc.php" method="POST">
                            <input class="login_up" type="text"  name="username" placeholder="Username/email"/>
                            <input class="login_down" type="password"  name="pwd" placeholder="password"/>
                            <button class="button-back" type="submit">login</button>
                        </form>
                        <a href="forgot_password.php"> forgot your password?</a></br>
                    </div>
                </div>
                <div class="col-3">

                </div>
            </div>

        </div>
        <div class="modalbox" id="text">
            <div class="box">
                <a class="close" href="#">X</a>
                <p class="title">Title Here</p>
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
                            <a href="https://github.com/mpetrosov?tab=repositories" target="_blank"><i class="fab fa-github-square"></i></a>
                        </div>
                    </div>
                    <div class="col-3">
                        <p class="contact">Contact</p>
                        <div class="href"><a href="mailto:marat.petrosov@gmail.com?Subject=Hello%20again" class="button"
                                target="_blank">email</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
  </script>
  <script src="js/login.js"></script>
</body>

</html>