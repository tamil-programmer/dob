
<?php 

include_once("config.php");

$vim = "select * from birth; ";




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
               <li> <a href="">home</a></li>
              
               
               <li> <a href="/dob/admin.php"><span class="material-symbols-outlined">
                settings
                </span></a></li>
           
        </ul>
    </nav>
</div>













<div id="main-div2" class="main-div">



<div  class="header">
    <div class="head container well">
        <h2 class="text-primary">View All</h2>
    </div>
</div> 

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Short name</th>
      <th scope="col">SID</th>
      <th scope="col">DATE</th>
      <th scope="col">Comment</th>

    </tr>
  </thead>
  <tbody>
   
    <?php
    
    
    if ($res = $conn->query($vim)) {

      while ($row = mysqli_fetch_assoc($res)) {
        

        $r1 = $row['id'];
        $r2 = $row['fname'];
        $r3 = $row['sname'];
        $r4 = $row['sid'];
        $r5 = $row['d'];
        $r6 = $row['comment'];

     echo '   <tr>';
     echo '   <th scope="row">'.$r1.'</th>';
     echo '   <td>'.$r2.'</td>';
     echo '   <td>'.$r3.'</td>';
     echo '   <td>'.$r4.'</td>';
     echo '   <td>'.$r5.'</td>';
     echo '   <td>    <img class="img" src='.$r6.' alt="">
     </td>';
     echo ' </tr>';
      
      }
      
      
      }
    
    
    
    
    
    
    ?>
   
  </tbody>
</table>




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