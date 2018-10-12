<?php

    if (isset($_POST['submit'])) {
        include_once 'connect.php';

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        //Error handlers
        //Check for empty fields
        if (empty($email) || empty($username) ||empty($pwd)){
            header("Location: ../inlog.php?register=empty");
            exit();
        } else {
            //Check if input characters are valid
            if (!preg_match("/^[a-zA-Z]*$/",  $username)){
                header("Location: ../inlog.php?register=invalid");
                exit();
            } else {
                //Check if email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: ../inlog.php?register=email");
                    exit();
                } else {
                    //Check if username typed in
                    $sql = "SELECT * FROM users WHERE username = '$username'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        header("Location: ../inlog.php?register=usertaken");
                        exit();
                    } else {
                        // Hashing the password
                        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT);
                        // Insert the user into the database
                        $sql = "INSERT INTO users (username, email, user_pwd) VALUES ('$username','$email','$hashedPwd');";
                        mysqli_query($conn, $sql);
                        header("Location: ../inlog.php?register=succes");
                        exit();

                    }
                }
            }
        }
    } else {
        header("Location: ../inlog.php");
        exit();
    }

