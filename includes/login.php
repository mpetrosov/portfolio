<?php
    session_start();

    if (isset($_POST['submit'])) {
        include_once 'connect.php';

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        //Error handlers
        //Check for empty fields
        if ( empty($username) ||empty($pwd)){
            header("Location: ../inlog.php?login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_name = '$username' OR email = '$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck < 1){
                header("Location: ../inlog.php?login=error");
                exit();
            } else {
                if ($row = mysqli_fetch_assoc($result)){
                    //De-hashing the password
                    $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                    if ($hashedPwdCheck == false){
                        header("Location: ../inlog.php?login=error");
                        exit();
                    } elseif ($hashedPwdCheck == true) {
                        //Log in the user here 
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['user_name'] = $row['user_name'];
                        // $_SESSION['is_admin'] = $row['is_admin'];
                        header("Location: ../main.php?login=success");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../inlog.php?login=error");
        exit();
    }
