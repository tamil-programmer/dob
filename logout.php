<?php 

include_once('config.php');
session_start();
session_destroy();
    header("Location: http://localhost/dob/admin.php");



?>