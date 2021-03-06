<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!-- normalisation of styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <!-- own styles -->
    <link rel="stylesheet" href="css/html.css">
    <!-- webstyles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Handlee|Source+Code+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Fredericka+the+Great" rel="stylesheet">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icons8-toolbox-50.png">
    <script src="js/html.js"></script>
    <title>HTML quiz</title>
</head>

<body>
    <div class="jmain">
        <div class="jheader">
            <div class="jheader-title">HTML</div>
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
            <h1>Test your knowledge in HTML </h1>
        </div>
        <div id="results"></div>
        <div class="form-container" id="container">
            <div class="qrow">
                <div class="jcol-3"></div>
                <div class="jcol-3m">
                    <form name="quizForm" onsubmit="return submitAnswers()">
                        <h3>1. Where is the meta tag only found?</h3>
                        <input class="form-radio" type="radio" name="q1" value="a" id="q1a">a. The last page<br>
                        <input class="form-radio" type="radio" name="q1" value="b" id="q1b">b. The home page<br>
                        <input class="form-radio" type="radio" name="q1" value="c" id=q1c">c. The second page<br>

                        <h3>2.What is the difference in an opening tag and a closing tag?</h3>
                        <input class="form-radio" type="radio" name="q2" value="a" id="q2a">a. Opening tag has a / in
                        front<br>
                        <input class="form-radio" type="radio" name="q2" value="b" id="q2b">b. Closing tag has a / in
                        front<br>
                        <input class="form-radio" type="radio" name="q2" value="c" id="q2c">c. There is no difference<br>

                        <h3>3. Graphics defined by SVG is in which format?</h3>
                        <input class="form-radio" type="radio" name="q3" value="a" id="q3a">a. HTML<br>
                        <input class="form-radio" type="radio" name="q3" value="b" id="q3b">b. XML<br>
                        <input class="form-radio" type="radio" name="q3" value="c" id="q3c">c. CSS<br>

                        <h3>4. Which HTML element is used to specify a header for a document or section?</h3>
                        <input class="form-radio" type="radio" name="q4" value="a" id="q4a">a. &lt;head&gt;<br>
                        <input class="form-radio" type="radio" name="q4" value="b" id="q4b">b. &lt;header&gt;<br>
                        <input class="form-radio" type="radio" name="q4" value="c" id=q4c">c. &lt;top&gt;<br>
                        <input class="form-radio" type="radio" name="q4" value="d" id="q4d">d. &lt;section&gt;<br>

                        <h3>5. In HTML, what does the &lt;aside&gt; element define?</h3>
                        <input class="form-radio" type="radio" name="q5" value="a" id="q5a">a. A navigation list to be
                        shown at the left side of the page<br>
                        <input class="form-radio" type="radio" name="q5" value="b" id="q5b">b. The ASCII character-set;
                        to send information between computers on the Internet<br>
                        <input class="form-radio" type="radio" name="q5" value="c" id="q5c">c. Content aside from the
                        page content<br>

                        <h3>6. Which HTML element defines navigation links?</h3>
                        <input class="form-radio" type="radio" name="q6" value="a" id="q6a">a. &lt;navigate&gt;<br>
                        <input class="form-radio" type="radio" name="q6" value="b" id="q6b">b. &lt;navigation&gt;<br>
                        <input class="form-radio" type="radio" name="q6" value="c" id=q6c">c. &lt;nav&gt;<br>

                        <h3>7. Which HTML element is used to display a scalar measurement within a range?</h3>
                        <input class="form-radio" type="radio" name="q7" value="a" id="q7a">a. &lt;meter&gt;<br>
                        <input class="form-radio" type="radio" name="q7" value="b" id="q7b">b. &lt;range&gt;<br>
                        <input class="form-radio" type="radio" name="q7" value="c" id=q7c">c. &lt;measure&gt;<br>
                        <input class="form-radio" type="radio" name="q7" value="c" id=q7d">d. &lt;gauge&gt;<br>

                        <h3>8. Which input type defines a slider control?</h3>
                        <input class="form-radio" type="radio" name="q8" value="a" id="q8a">a. search<br>
                        <input class="form-radio" type="radio" name="q8" value="b" id="q8b">b. slider<br>
                        <input class="form-radio" type="radio" name="q8" value="c" id="q8c">c. range<br>
                        <input class="form-radio" type="radio" name="q8" value="d" id="q8d">d. controls<br>

                        <h3>9. In HTML, which attribute is used to specify that an input field must be filled out?</h3>
                        <input class="form-radio" type="radio" name="q9" value="a" id="q9a">a. validate<br>
                        <input class="form-radio" type="radio" name="q9" value="b" id="q9b">b. placeholder<br>
                        <input class="form-radio" type="radio" name="q9" value="c" id="q9c">c. formvalidate<br>
                        <input class="form-radio" type="radio" name="q9" value="d" id="q9d">d. required<br>

                        <h3>10. The HTML &lt;canvas&gt; element is used to:</h3>
                        <input class="form-radio" type="radio" name="q10" value="a" id="10a">a. create draggable
                        elements<br>
                        <input class="form-radio" type="radio" name="q10" value="b" id="10b">b. display database
                        records<br>
                        <input class="form-radio" type="radio" name="q10" value="c" id="10c">c. draw graphics<br>
                        <input class="form-radio" type="radio" name="q10" value="d" id="10d">d. manipulate data in
                        MySQL<br>
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
                            <div class="href">
                                <a href="#" class="button" target="_blank">email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>