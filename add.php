
<?php 
    $submitted = "";

include_once('config.php');
if(isset($_POST['send'])){



$fname =  $_POST['fname'];
$sname =  $_POST['sname'];
$sid =  $_POST['sid'];
$d =  $_POST['d'];
$comment =  $_POST['comment'];
// $comment1 =  "787";


// echo "$fname $sname $sid $d $comment";

$tb = "CREATE TABLE if not exists birth (`id` INT(20) NOT NULL AUTO_INCREMENT , `fname` VARCHAR(255) NOT NULL , `sname` VARCHAR(255) NOT NULL , `sid` INT(20) NOT NULL , `d` DATE NOT NULL , `comment` VARCHAR(255) NOT NULL , `tom` TIMESTAMP(6) NOT NULL , PRIMARY KEY (`id`));";
$conn->query($tb);
// if($conn->query($tb)) {
    // echo "DONE1";
// }


$ins = "insert into birth (fname,sname,sid,d,comment) values('$fname','$sname','$sid','$d','$comment');";

if($conn->query($ins)) {
    $submitted = "DATA ADDED SUCCESSFULLY";
}




}












?>





















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- ======================================================================== -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- css style sheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/res.css">
<!-- ======================================================================== -->
    <title>Document</title>
</head>
<body>

<div id="k">

<div id="main-div1" class="main-div">
    <nav>
    <ul>
            <img id="jim" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiu73pjqhlVyS3Qg4ItSYOdM94j3t6Te-9vA&usqp=CAU" alt="">
            <hr>
               <li> <a href="/dob/dashboard.php">Board</a>    </li>
               <li> <a href="/dob/add.php">Add one</a></li>
               <li> <a href="/dob/view.php">View all</a></li>
               <li> <a href="/dob/search.php">serarh</a></li>
              
               
               <li> <a href="/dob/adminRoom.php"><span class="material-symbols-outlined">
                settings
                </span></a></li>
           
        </ul>
    </nav>
</div>













<div id="main-div2" class="main-div">



<div  class="header">
    <div class="head container well">
        <h2 class="text-primary">Welcome to Addmission </h2>
    </div>



</div> 

<div class="container ml-4 mr-4">

<div class="container m-6">
    <h5 class=" text-success p-4 align-middle text-center">
<?php echo $submitted; ?>
    </h5>
</div>

</div>

<div class="container" id="fom" >

<div>
<form action="" method="post">
<input name="fname" class="in border p-2 border-primary" placeholder="Full Name" type="text">
<input name="sname" class="in border p-2 border-primary" placeholder="Short Name" type="text"><br>
<input name="sid" class="in border p-2 border-primary" placeholder="Special id" type="number">
<input name="d" class="in border p-2 border-primary"  type="date"><br>
<textarea name="comment" class="in inn border p-2 border-primary"  placeholder="Comment about the person .. . ." type="text"></textarea><br>
<button name="send" type="submit" class="btn btn-primary in">add</button>
<a href="/dob/add.php"><button type="reset" class="btn btn-primary in">Reset</button></a>
</form>
</div>

<?php

require_once('config.php');

?>

</div>


</div>


























<div id="main-div3" class="main-div">

<div class="left-box">

<div class="container-fluid">
  <span class="material-symbols-outlined col-md-2 spany">
    notifications
    </span>
    <span class="material-symbols-outlined col-md-2 spany ">
      send
      </span>
      <span class="material-symbols-outlined col-md-2 spany ">
        help
        </span>
        <span class="material-symbols-outlined col-md-2 spany ">
          insights
          </span>
        <hr>
</div>


<div class="container-fluid message">
  
message 1
<hr>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut possimus rerum nesciunt odio sunt molestiae aperiam hic culpa atque in adipisci odit tenetur ducimus labore animi, eius dolorum a ipsam consequatur blanditiis nisi assumenda. Magni architecto error velit placeat id?
</div>


<div class="container-fluid message">
  
  message 1
  <hr>
  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut possimus rerum nesciunt odio sunt molestiae aperiam hic culpa atque in adipisci odit tenetur ducimus labore animi, eius dolorum a ipsam consequatur blanditiis nisi assumenda. Magni architecto error velit placeat id?
  </div>


  <div class="container-fluid message">
  
    message 1
    <hr>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut possimus rerum nesciunt odio sunt molestiae aperiam hic culpa atque in adipisci odit tenetur ducimus labore animi, eius dolorum a ipsam consequatur blanditiis nisi assumenda. Magni architecto error velit placeat id?
    </div>
    
    
    <div class="container-fluid message">
      
      message 1
      <hr>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut possimus rerum nesciunt odio sunt molestiae aperiam hic culpa atque in adipisci odit tenetur ducimus labore animi, eius dolorum a ipsam consequatur blanditiis nisi assumenda. Magni architecto error velit placeat id?
      </div>
    







</div>

</div>

</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>