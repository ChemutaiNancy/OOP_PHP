
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Users</title>
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
    <h2 class="text-center">View Users</h2>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-primary">
                <thead>
                <tr>
                    <th>Names</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>BMI</th>
                </tr>
                </thead>

                <tbody>
                <?php
                require "conn.php";

                $sql = "SELECT * FROM `users`";

                $result = mysqli_query($conn, $sql);

                while ($row=mysqli_fetch_assoc($result))
                {
                    extract($row);
                    echo "<tr>
                                        <td>$names</td>
                                        <td>$weight</td>
                                        <td>$height</td>
                                        <td><a href='bmi.php?user_id=$user_id&names=$names&weight=$weight&height=$height' class='btn btn-info btn-sm'>Calculate BMI</a></td>
                                    </tr>";
                }
                ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>
