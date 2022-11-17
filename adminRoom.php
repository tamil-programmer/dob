<?php 

include_once('config.php');

session_start();
if($_SESSION['user']=="ADMIN" ){
    echo "";
}
else{
    header("Location: http://localhost/dob/admin.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN Room</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- css style sheet -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form  class="ml-4 m-2 d-flex flex-row-reverse" action="adminRoom.php" method="post">
        <a class="btn btn-danger " href="logout.php">lOgOut</a>
    </form>
    <hr>
    <div class="container view">
        <div class="container">
        

<!-- <div id="recent"> -->
<!--  -->



<table class="table ui">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">Short Name</th>
      <th scope="col">Sid</th>
      <th scope="col">Date</th>
      <th scope="col">ACTION</th>
      <th scope="col">ACTION</th>

      <!-- <th scope="col">Comment</th> -->

    </tr>
  </thead>
  <tbody>
    <center>
  <?php

$recent = "select * from birth";

if($b = $conn->query($recent)){

while ($got = mysqli_fetch_assoc($b)) {



echo '<tr>
<th>'.$got['id'].'</th>
<td>'.$got['fname'].'</td>
<td>'.$got['sname'].'</td>
<td>'.$got['sid'].'</td>
<td>'.$got['d'].'</td>


<td>
<img class="img" src='.$got['comment'].' alt="NIL">
</td>
<td><a href="/dob/act.php?updateid='.$got['id'].'" class="btn btn-success">Update</a></td>
<td><a href="/dob/act.php?delid='.$got['id'].'" class="btn btn-danger"> Delete</a></td>
</tr>';
}

  }
?>
<!-- <td>'.$got['comment'].'</td> -->
</center>
  </tbody>
</table>
<!-- </div> -->

</div>



    




        </div>
    </div>
</body>
<script>




  
</script>
</html>