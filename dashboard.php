<?php
    session_start();

    if (!empty($_SESSION['login']) && !empty($_SESSION['mailaddress'])) {
        echo $_SESSION['login'];
        echo ' '. $_SESSION['mailaddress'];
    }else{
        header(location:login.php);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Check List</title>
</head>

<body>
<div class="mx-auto w-75 border border-info-subtle shadow rounded p-5 m-5">
        <form action="" method="post">
            <h2 class="text-center">Show All Data From database</h2>
            <table class="table table-striped">
                <tr class="text-start bg-warning text-black">
                    <td>User ID</td>
                    <td>User Name</td>
                    <td>Email</td>
                <tr>
                    <?php
                    require("DataProcess.php");
                    ?>

                </tr>
            </table>
        </form>

    </div>

</body>

</html>