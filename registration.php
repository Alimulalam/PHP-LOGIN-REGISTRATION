<?php

    $conn = new mysqli('localhost','root','','myloginsystem');
    if (!$conn) {
        echo 'Not Connent';
    }

    $emptymsg_first_name = $emptymsg_last_name = $emptymsg_email = $emptymsg_password = $emptymsg_confirmpassword ='';

    if (isset($_POST['submit'])){
        $user_first_name = $_POST['user_first_name'];
        $user_last_name = $_POST['user_last_name'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_confirm_password = $_POST['user_confirm_password'];

        $md5_user_password = md5($user_password);

        if (empty($user_first_name)) {
            $emptymsg_first_name = "Please fill up this field";
        }
        if (empty($user_last_name)) {
            $emptymsg_last_name = "Please fill up this field";
        }
        if (empty($user_email)) {
            $emptymsg_email = "Please fill up this field";
        }
        if (empty($user_password)) {
            $emptymsg_password = "Please fill up this field";
        }
        if (empty($user_confirm_password)) {
            $emptymsg_confirmpassword = "Please fill up this field";
        }

        if (!empty($user_first_name) && !empty($user_last_name) && !empty($user_email) && !empty($user_password) && !empty($user_confirm_password)) {
            if ($user_password === $user_confirm_password) {

                $sql = "INSERT INTO users (user_first_name,user_last_name,user_email,user_password) VALUES('$user_first_name','$user_last_name','$user_email','$md5_user_password')";

                if($conn->query($sql)=== TRUE){
                    header('location:login.php?usercreated');
                }
                else{
                    echo 'Password not match';
                }

            }
        }
    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4 mt-5" >
            
                <form action="registration.php" method="POST">

                    <div class="mb-3">
                        <label for="first-name" class="form-label">Fisrt Name</label>
                        <input type="text" class="form-control" id="first-name" name= "user_first_name" value = <?php if (isset($_POST['submit'])) {
                            echo $user_first_name ;
                        } ?> >
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg_first_name;
                        } ?>
                        
                    </div>

                    <div class="mb-3">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last-name	" name= "user_last_name" value = <?php if (isset($_POST['submit'])) {
                            echo $user_last_name ;
                        } ?>>
                        
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg_last_name;
                        } ?>
                        
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name= "user_email" value = <?php if (isset($_POST['submit'])) {
                            echo $user_email ;
                        } ?>>
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg_email;
                        } ?>
                        
                    </div>

                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="user_password" value = <?php if (isset($_POST['submit'])) {
                            echo $user_password ;
                        } ?>>
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg_password;
                        } ?>
                    </div>

                    <div class="mb-3">
                        <label for="ConfirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="ConfirmPassword" name="user_confirm_password" value = <?php if (isset($_POST['submit'])) {
                            echo $user_confirm_password ;
                        } ?>>
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg_confirmpassword;
                        } ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                <h5>Already Have An Account? <a href="login.php">Login</a></h5>
                
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
</body>

</html>