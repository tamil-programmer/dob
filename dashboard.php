<?php
// !get month data _____________--->
include_once('config.php');

for ($i=1; $i <13 ; $i++) { 
  # code...
$jan = "select count(id) as total  from birth where month(d)=$i";

$bes = $conn->query($jan);

while ($rw = mysqli_fetch_assoc($bes)) {
  setcookie("jan".$i."",$rw['total'],time() + (86400 * 30),"/");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/res.css">
<!-- ======================================================================== -->
    <title>Document</title>
</head>
<body>

<div class="d-md-flex" id="k">

<div id="main-div1" class="main-div">
    <nav>
        <ul>
            <img id="jim" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiu73pjqhlVyS3Qg4ItSYOdM94j3t6Te-9vA&usqp=CAU" alt="">
            <hr>
               <li> <a href="/dob/dashboard.php">Board</a>    </li>
               <li> <a href="/dob/add.php">Add one</a></li>
               <li> <a href="/dob/view.php">View all</a></li>
               <li> <a href="/dob/search.php">Search</a></li>
              
               
               <li> <a href="/dob/adminRoom.php"><span class="material-symbols-outlined">
                settings
                </span></a></li>
           
        </ul>
    </nav>
</div>


<div id="main-div2" class="main-div">
<div  class="header">
    <div class="head container-fluid well">
        <h2 class="text-primary">Welcome to DashBoard</h2>
    </div>
    
</div>

<div id="main-box">

<div id="" class="box constainer-fluid text-primary">
<h5 class="container-fluid align-middle"><span class="material-symbols-outlined">
add
</span><hr><a href="/dob/add.php">  <button style="background-color: transparent; border: none;color: #1a154f;" class=" btn  btn-primary"> add new birthday member </button></a></h5>
</div>


<div id="" class="box text-primary">
<h5 class="container-fluid align-middle"><span class="material-symbols-outlined">
today
</span><br><hr> Today Birthday count <br>
<?php
include_once('config.php');
$vim = "select count(id) as fg from birth; ";
    
if ($rest = $conn->query($vim)) {

  while ($e = mysqli_fetch_assoc($rest)) {
    // print_r($e);
    echo $e['fg'];
  }

}
?></h5>

</div>
<div id="" class="box text-primary">
<h5 class="container-fluid align-middle"><span class="material-symbols-outlined">
free_cancellation
</span><br><hr> Added Today
<br>
<?php
include_once('config.php');
$vim = "SELECT count(id) as fg FROM birth WHERE 
date(tom)=CURDATE();";
    
if ($rest = $conn->query($vim)) {

  while ($e = mysqli_fetch_assoc($rest)) {
    // print_r($e);
    echo $e['fg'];
  }

}
?></h5>


</div>
<div id="" class="box align-middle container-fluid text-primary">
<h5 class="container-fluid align-middle"><span class="material-symbols-outlined">
group
</span><br><hr>Total Members
<br>
1

</h5>


</div>




</div>





<div id="recent">




<table class="table ui">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">Short Name</th>
      <th scope="col">Sid</th>
      <th scope="col">Date</th>
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
</tr>';
}

  }
?>
<!-- <td>'.$got['comment'].'</td> -->
</center>
  </tbody>
</table>
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
<canvas id="myChart" width="90px" height="90px"></canvas>

</div>




  <?php

// $ty= "select count(id) as cont from birth where month(d)=8";

// if($d= $conn->query($ty)){
// while ($rew = mysqli_fetch_assoc($d)) {
// print_r($rew);
// }
// }

$ty= "select fname from birth where day(d)=day(CURRENT_TIMESTAMP) and month(d)=month(CURRENT_TIMESTAMP)";

if($d= $conn->query($ty)){
while ($rew = mysqli_fetch_assoc($d)) {
echo "<div class='container-fluid message'>
  
message 1
<hr><center class='text-success'>
Today is ".$rew['fname']." birthday  </center>
</div>";
}
}

?>



    
    


</div>

</div>


</body>
</html>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>

const d = document.cookie;
console.log(d);
function getCookie(cName) {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie); //to be careful
    const cArr = cDecoded.split('; ');
    let res;
    cArr.forEach(val => {
      if (val.indexOf(name) === 0) res = val.substring(name.length);
    })
    return res
  }
  const  jan = getCookie("jan1");
  const  feb = getCookie("jan2");
  const  mar = getCookie("jan3");
  const  apr = getCookie("jan4");
  const  may = getCookie("jan5");
  const  jun = getCookie("jan6");
  const  jul = getCookie("jan7");
  const  aug = getCookie("jan8");
  const  sep = getCookie("jan9");
  const  oct = getCookie("jan10");
  const  nov = getCookie("jan11");
  const  dec = getCookie("jan12");

  
  





  let a=[23,23]
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: '# of Votes',
            data: [jan, feb , mar ,apr,may, jun, jul ,aug ,sep, oct,nov,dec],
            backgroundColor: [
                '#6f6af8',
                '#6f6af8',
                '#6f6af8',
                '#6f6af8',
                '#6f6af8',
                '#6f6af8'
            ],
            borderColor: [
                '#6f6af8',
                '#6f6af8',
                '#6f6af8',
                '#6f6af8',
                '#6f6af8',
                '#6f6af8'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true     
            }
        }
    }
});



</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

