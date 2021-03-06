<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!-- normalisation of styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <!-- own styles -->
    <link rel="stylesheet" href="css/css.css">
    <!-- webstyles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Handlee|Source+Code+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fredericka+the+Great" rel="stylesheet">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icons8-toolbox-50.png">
    <script src="js/css.js"></script>
    <title>CSS3 quiz</title>
</head>

<body>
    <div class="jmain">
        <div class="jheader">
            <div class="jheader-title">CSS3</div>
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
                    <h2>Result</h2>
                </div>
                <div class="modal-body">
                    <p id="results"></p>
                </div>
                <div class="modal-footer" id="modalFooter">
                    <h3><img id="gifs"></h3>
                </div>
            </div>

        </div>

        <div class="h1">
            <h1>Test your knowledge in basic CSS3 </h1>
        </div>
        <div id="results"></div>
        <div class="form-container" id="container">
            <div class="qrow">
                <div class="jcol-3"></div>
                <div class="jcol-3m">
                    <form name="quizForm" onsubmit="return submitAnswers()">
                        <h3>1. In CSS, Select the property to set an image in a list instead of a standard bullet?</h3>
                        <input class="form-radio" type="radio" name="q1" value="a" id="q1a">a) image-list:<br>
                        <input class="form-radio" type="radio" name="q1" value="b" id="q1b">b) list-image:<br>
                        <input class="form-radio" type="radio" name="q1" value="c" id=q1c">c) None<br>
                        <input class="form-radio" type="radio" name="q1" value="d" id=q1d">d) list-style-image:<br>

                        <h3>2.Select the property that is used to create spacing between HTML elements?</h3>
                        <input class="form-radio" type="radio" name="q2" value="a" id="q2a">a) spacing<br>
                        <input class="form-radio" type="radio" name="q2" value="b" id="q2b">b) margin<br>
                        <input class="form-radio" type="radio" name="q2" value="c" id="q2c">c) padding<br>
                        <input class="form-radio" type="radio" name="q2" value="d" id="q2d">d) border<br>
                        <input class="form-radio" type="radio" name="q2" value="e" id="q2e">e) None<br>

                        <h3>3. In CSS, what is the correct option to select all the tags on a page?</h3>
                        <input class="form-radio" type="radio" name="q3" value="a" id="q3a">a) #p {}<br>
                        <input class="form-radio" type="radio" name="q3" value="b" id="q3b">b) p {}<br>
                        <input class="form-radio" type="radio" name="q3" value="c" id="q3c">c) .p {}<br>
                        <input class="form-radio" type="radio" name="q3" value="d" id="q3d">d) &lt;p&gt;{}<br>
                        <input class="form-radio" type="radio" name="q3" value="e" id="q3e">e) None<br>

                        <h3>4. In CSS, choose the correct option to select this image by its id? &lt;img id=”mainpic”
                            src=”cat.png”&gt;</h3>
                        <input class="form-radio" type="radio" name="q4" value="a" id="q4a">a) .mainpic {}<br>
                        <input class="form-radio" type="radio" name="q4" value="b" id="q4b">b) img {}<br>
                        <input class="form-radio" type="radio" name="q4" value="c" id=q4c">c) None<br>
                        <input class="form-radio" type="radio" name="q4" value="d" id="q4d">d) mainpic {}<br>
                        <input class="form-radio" type="radio" name="q4" value="e" id="q4e">e) #mainpic {}<br>

                        <h3>5. Select the property used to create space between the element’s border and inner content</h3>
                        <input class="form-radio" type="radio" name="q5" value="a" id="q5a">a) padding<br>
                        <input class="form-radio" type="radio" name="q5" value="b" id="q5b">b) spacing<br>
                        <input class="form-radio" type="radio" name="q5" value="c" id="q5c">c) None<br>
                        <input class="form-radio" type="radio" name="q5" value="d" id="q5d">d) margin<br>
                        <input class="form-radio" type="radio" name="q5" value="e" id="q5e">e) border<br>

                        <h3>6. Which of the following property specifies whether a border should be solid, dashed line,
                            double line, or one of the other possible values?</h3>
                        <input class="form-radio" type="radio" name="q6" value="a" id="q6a">a) :border-color<br>
                        <input class="form-radio" type="radio" name="q6" value="b" id="q6b">b) :border-style<br>
                        <input class="form-radio" type="radio" name="q6" value="c" id=q6c">c) :border-width<br>
                        <input class="form-radio" type="radio" name="q6" value="d" id=q6d">d) :border-bottom-color<br>

                        <h3>7.Which of the following property is used to control the scrolling of an image in the
                            background?</h3>
                        <input class="form-radio" type="radio" name="q7" value="a" id="q7a">a) background-attachment<br>
                        <input class="form-radio" type="radio" name="q7" value="b" id="q7b">b) background<br>
                        <input class="form-radio" type="radio" name="q7" value="c" id=q7c">c) background-repeat<br>
                        <input class="form-radio" type="radio" name="q7" value="c" id=q7d">d) background-position<br>

                        <h3>8. Which of the following property of a table element specifies whether the border should
                            be shown if a cell is empty?</h3>
                        <input class="form-radio" type="radio" name="q8" value="a" id="q8a">a) :border-collapse<br>
                        <input class="form-radio" type="radio" name="q8" value="b" id="q8b">b) :border-spacing<br>
                        <input class="form-radio" type="radio" name="q8" value="c" id="q8c">c) :caption-side<br>
                        <input class="form-radio" type="radio" name="q8" value="d" id="q8d">d) :empty-cells<br>

                        <h3>9. What is the default value of the position property?</h3>
                        <input class="form-radio" type="radio" name="q9" value="a" id="q9a">a) relative<br>
                        <input class="form-radio" type="radio" name="q9" value="b" id="q9b">b) static<br>
                        <input class="form-radio" type="radio" name="q9" value="c" id="q9c">c) absolute<br>
                        <input class="form-radio" type="radio" name="q9" value="d" id="q9d">d) fixed<br>

                        <h3>10. How do you select elements with class name "test"?</h3>
                        <input class="form-radio" type="radio" name="q10" value="a" id="10a">a) .test<br>
                        <input class="form-radio" type="radio" name="q10" value="b" id="10b">b) #test<br>
                        <input class="form-radio" type="radio" name="q10" value="c" id="10c">c) test<br>
                        <input class="form-radio" type="radio" name="q10" value="d" id="10d">d) *test<br>
                        <br>
                        <div class="fInput">
                            <input class="submit" type="submit" value="submit">
                        </div>
                    </form>
                </div>
                <div class="jcol-3">

                </div>
            </div>

        </div>

        <div class="scoreBtn">
            <button class="myBtn" id="myBtn">Score</button>
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