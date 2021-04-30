<?php
session_start();

// if($_SERVER["REQUEST_METHOD"] == "GET") {
//     //User tries to access page without logging in. Send them back to index.php
//     if(!isset($_SESSION["USER"])) header("Location: index.php");
//     else {
        
//         echo "<h1>This person is currently logged in...</h1>";
//         echo "<h1>".$_SESSION["USER"]["type"]." ".$_SESSION["USER"]["fname"]." ".$_SESSION["USER"]["lname"]."</h1>";
//         echo "<h1>Address: ".$_SESSION["USER"]["address"]."</h1>";
//         echo "<h1>Phone: ".$_SESSION["USER"]["phone"]."</h1>";
//         echo "<h1>Email: ".$_SESSION["USER"]["email"]."</h1>";
//     }
// }
?>

<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="stylesheet.css">
</head>
<nav class=" navi navbar navbar-expand-sm  sticky-top" >
<div class="">
    <a class="navbar-brand" href="./index.php">
      <img src="./EMR_S.png" alt="" width="200px" height="50px">
    </a>
</div>
<ul class="navbar-nav" style="font-weight:bold;">
    <li class="nav-item active">
      <a class="nav-link" href="./index.php" >Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="./registration.php">Register</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="./profile.php">Profile</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="./logout.php">Log Out</a>
    </li>
    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Patients
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./AddPatientInfo.php"><b>Create Patient Records</b></a>
          <a class="dropdown-item" href="./viewPatientInfo.php"><b>View Patient Records</b></a>
          <a class="dropdown-item" href="./viewPatientInfo.php"><b>Edit Patient Record</b></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./viewPatientInfo.php" style="color: red;"><b>Delete Patient Records</b></a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Visitations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./addVisitation.php"><b>Create Visitations Records</b></a>
          <a class="dropdown-item" href="./Visitation.php"><b>View Visitations Records</b></a>
          <a class="dropdown-item" href="./Visitation.php"><b>Edit Visitations Record</b></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./Visitation.php" style="color: red;"><b>Delete Visitations Records</b></a>
        </div>
      </li> 

  </ul>
  

</nav>

<body class="body-bg" >
<div class="py-3">  
<div class="container bg-secondary center" style="">

                <h1 class="card-title" style="text-align: center; color: #8d0404">My Profile</h1>
                <?php
                // session_start();

                if($_SERVER["REQUEST_METHOD"] == "GET") {
                    //User tries to access page without logging in. Send them back to index.php
                    if(!isset($_SESSION["USER"])) header("Location: index.php");
                    else {
                        echo "<h2 style=color:white;>Welcome ".$_SESSION["USER"]["fname"]." !! You are logged in...</h2>";
                        echo "\n";
                        echo "<h2 style=color:white;>Name: ".$_SESSION["USER"]["type"]." ".$_SESSION["USER"]["fname"]." ".$_SESSION["USER"]["lname"]."</h2>";
                        echo "<h2 style=color:white;>Address: ".$_SESSION["USER"]["address"]."</h2>";
                        echo "<h2 style=color:white;>Phone: ".$_SESSION["USER"]["phone"]."</h2>";
                        echo "<h2 style=color:white;>Email: ".$_SESSION["USER"]["email"]."</h2>";
                    }
                }
                ?>

            </div>
        </div>    
               
    </div>
  
</body>
<!-- <footer class="bg-warning">
    <p>Group2</p>
</footer> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

