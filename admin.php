<?php
include_once('config.php');


error_reporting(0);
session_start();







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- css style sheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <center class="ff mt-5 pt-5">
    <form action="admin.php" class="f" method="post">

<label class="m-2" for="">username</label><br>
<input  class="m-2" required name="pas" type="password"><br>
<button  class="m-2 btn btn-success"type="submit">Login</button>
<a href="/dob/dashboard.php" class="m-2 btn btn-success"type="submit">DashBoard</a>

<?php

if($_POST['pas']=="admin7"){

    $_SESSION['user']="ADMIN";
    header("Location: http://localhost/dob/adminRoom.php");
 

}

else{
    echo "";
}


?>
    </form>
</center>

</body>
</html>
<script src="js.js"></script>