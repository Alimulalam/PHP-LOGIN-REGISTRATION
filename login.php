<?php

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
                <?php
                    if (isset($_GET['usercreated'])) {
                        echo 'Registration Successfully';
                    };
                ?>
                <form action="process.php" method="POST">

                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name= "user_email" value = <?php if (isset($_POST['submit'])) {
                            echo $user_email ;
                        } ?>>

                        <?php if (isset($_POST['submit'])) {
                            echo $empty_email;
                        } ?>
                        
                    </div>

                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="user_password" value = <?php if (isset($_POST['submit'])) {
                            echo $user_password ;
                        } ?>>

                        <?php if (isset($_POST['submit'])) {
                            echo $empty_password;
                        } ?>

                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>
                <h5>Not Have An Account? <a href="registration.php">Register</a></h5>
            </div>
            <div class="col-4">
            </div>
        </div>
    </div>
</body>

</html>