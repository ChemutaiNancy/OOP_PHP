<?php

require "conn.php";


$message = "";

if (isset($_POST["names"])){
    extract($_POST);

    //clean form inputs-encodes special characters such as semi-colon

    $names = mysqli_real_escape_string($conn, $names);
    $weight = mysqli_real_escape_string($conn, $weight);
    $height = mysqli_real_escape_string($conn, $height);


    $sql = "insert into users values (null, '$names', '$weight', '$height')";

    /*echo $sql;

    die();*/

    $result = mysqli_query($conn, $sql);// or die(mysqli_error($conn));//checks if the record exists

    if (!$result){
        $message = "The user already exists";//not true
    } else{
        $message = "User registered";
    }
}

//header("location:login.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>


<?php
include "navbar.php";
?>

<div class="container">
    <h2 class="text-center">New User Registration</h2>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <form action="save.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="names">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Weight" name="weight">
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Height" name="height">
                </div>

                <button type="submit" class="btn btn-success btn-sm">Add</button>

                <p> <?=$message?></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>