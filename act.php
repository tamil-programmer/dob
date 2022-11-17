<?php
include_once('config.php');

if(isset($_GET['delid'])){
$delid = $_GET['delid'];
echo $delid;

$del = "delete from birth where id = $delid";
$conn->query($del);

header("Location: http://localhost/dob/adminRoom.php");
    // header("Location: http://localhost/dob/adminRoom.php");


}

if(isset($_GET['updateid'])){
    $delid = $_GET['updateid'];
    echo $delid;
    }
    





?>