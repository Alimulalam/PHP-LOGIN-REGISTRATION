<?php

    session_start();
    require_once 'connection.php';
    $empty_email = $empty_password = '';

    if (isset($_POST['submit'])) {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        $md5_user_password = md5($user_password);


        if (empty($user_email)) {
            $empty_email = "Please fill up this field";
        }
        if (empty($user_password)) {
            $empty_password = "Please fill up this field";
        }

        if (!empty($user_email) && !empty($user_password)) {

           $sql = "SELECT * FROM users WHERE user_email= '$user_email' AND user_password = '$md5_user_password'";

           $query = $conn->query($sql);

           if ($query-> num_rows > 0) {
                $_SESSION['login']='Login Success';
                $_SESSION['mailaddress'] = 'alimul@gmail.com';
                header('location:dashboard.php');

           }else{
            header('location:login.php');
           }

        }
    }
?>
