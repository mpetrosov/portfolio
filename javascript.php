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
    <title>Javascript quiz</title>
</head>

<body>



    <div class="jmain">
        <div class="jheader">
            <div class="jheader-title">JavaScript</div>
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
            <h1>Test your knowledge in JavaScript Fundamentals </h1>
        </div>
        <div id="results"></div>
        <div class="form-container" id="container">
            <div class="qrow">
                <div class="jcol-3"></div>
                <div class="jcol-3m">
                    <form name="quizForm" onsubmit="return submitAnswers()">
                        <h3>1. In wich HTML element do we put in javascript code?</h3>
                        <input class="form-radio" type="radio" name="q1" value="a" id="q1a">a) &lt;js&gt;<br>
                        <input class="form-radio" type="radio" name="q1" value="b" id="q1b">b) &lt;script&gt;<br>
                        <input class="form-radio" type="radio" name="q1" value="c" id=q1c">c) &lt;body&gt;<br>
                        <input class="form-radio" type="radio" name="q1" value="d" id="q1d">d) &lt;link&gt;<br>

                        <h3>2. Wich HTML attribut is used to reference an external javascript file?</h3>
                        <input class="form-radio" type="radio" name="q2" value="a" id="q2a">a) src<br>
                        <input class="form-radio" type="radio" name="q2" value="b" id="q2b">b) rel<br>
                        <input class="form-radio" type="radio" name="q2" value="c" id="q2c">c) type<br>
                        <input class="form-radio" type="radio" name="q2" value="d" id="q2d">d) href<br>

                        <h3>3. How would you write "Hello" in an alert box?</h3>
                        <input class="form-radio" type="radio" name="q3" value="a" id="q3a">a) msg("Hello");<br>
                        <input class="form-radio" type="radio" name="q3" value="b" id="q3b">b) alertbox("Hello");<br>
                        <input class="form-radio" type="radio" name="q3" value="c" id="q3c">c) document.write("Hello");<br>
                        <input class="form-radio" type="radio" name="q3" value="d" id="q3d">d) alert("Hello");<br>

                        <h3>4. Javascript is a directly related to the "Java" programming language</h3>
                        <input class="form-radio" type="radio" name="q4" value="a" id="q4a">a) True<br>
                        <input class="form-radio" type="radio" name="q4" value="b" id="q4b">b) False<br>

                        <h3>5. A variable in javascript must start with which special characters?</h3>
                        <input class="form-radio" type="radio" name="q5" value="a" id="q5a">a) @<br>
                        <input class="form-radio" type="radio" name="q5" value="b" id="q5b">b) $<br>
                        <input class="form-radio" type="radio" name="q5" value="c" id="q5c">c) #<br>
                        <input class="form-radio" type="radio" name="q5" value="d" id="q5d">d) No Special Character<br>

                        <h3>6. Which of the following function of String object would compare a regular expression with
                            a string?</h3>
                        <input class="form-radio" type="radio" name="q6" value="a" id="q6a">a) search()<br>
                        <input class="form-radio" type="radio" name="q6" value="b" id="q6b">b) match()<br>
                        <input class="form-radio" type="radio" name="q6" value="c" id="q6c">c) replace()<br>
                        <input class="form-radio" type="radio" name="q6" value="d" id="q6d">d) concat()<br>

                        <h3>7. Which of the following method of Boolean object returns a string depending upon the
                            value of the object?</h3>
                        <input class="form-radio" type="radio" name="q7" value="a" id="q7a">a) toSource()<br>
                        <input class="form-radio" type="radio" name="q7" value="b" id="q7b">b) toString()<br>
                        <input class="form-radio" type="radio" name="q7" value="c" id="q7c">c) valueOf()<br>
                        <input class="form-radio" type="radio" name="q7" value="d" id="q7d">d) None<br>

                        <h3>8. What is the function of Array object that adds and/or removes elements from an array?</h3>
                        <input class="form-radio" type="radio" name="q8" value="a" id="q8a">a) toSource()<br>
                        <input class="form-radio" type="radio" name="q8" value="b" id="q8b">b) sort()<br>
                        <input class="form-radio" type="radio" name="q8" value="c" id="q8c">c) unshift()<br>
                        <input class="form-radio" type="radio" name="q8" value="d" id="q8d">d) splice()<br>

                        <h3>9. Which of the following methods removes the last element from an array and returns that
                            element?</h3>
                        <input class="form-radio" type="radio" name="q9" value="a" id="q9a">a) pop()<br>
                        <input class="form-radio" type="radio" name="q9" value="b" id="q9b">b) get()<br>
                        <input class="form-radio" type="radio" name="q9" value="c" id="q9c">c) last()<br>
                        <input class="form-radio" type="radio" name="q9" value="d" id="q9d">d) None()<br>

                        <h3>10. What is the function of Array object that runs through each element of the array?</h3>
                        <input class="form-radio" type="radio" name="q10" value="a" id="q10a">a) concat()<br>
                        <input class="form-radio" type="radio" name="q10" value="b" id="q10b">b) forEach()<br>
                        <input class="form-radio" type="radio" name="q10" value="c" id="q10c">c) every()<br>
                        <input class="form-radio" type="radio" name="q10" value="d" id="q10d">d) filter()<br>

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