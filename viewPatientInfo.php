<?php
require_once ("PatientModel.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Record</title>
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
<?php 
  $Object = new PatientModel();
  $Object->get_all_Patients();
?>

<body class="bg-light" >
<h1><center>Patient Record</center></h1>
<hr>
<br>

<div class="container-sm mx-auto" style="width: 400px;">

    <div class="card text-warning bg-dark">
    <div class="card-header">
    <h5 class="card-title">Delete Patient Record</h5>
    </div>
    <div class="card-body">
        <!-- <h5 class="card-title">Delete Patient Record</h5> -->
        <form action="PatientController.php" method="POST">
            <input type="text" name="delete_ID" placeholder="Enter ID of Patient to be deleted">
            <!-- <input type="submit" name="delete" value="Delete"> -->
        </form>
        <button type="submit" name="delete" value="Delete" class="btn btn-danger">Delete</button>
    </div>
    </div>

</div>

<br><br>

<div class="container-sm mx-auto " style="width: 1000px; ">

    <div class="card border border-success ">
    <div class="card-header">
    <h5 class="card-title">Edit Patient Record</h5>
    </div>
    <div class="card-body mt-0">
        <!-- <h5 class="card-title">Delete Patient Record</h5> -->
        <form action="PatientController.php" method="POST">
        <div class="form-group row">
            <div class="col-sm-4">
            <label for=""><b>ID</b></label>
            <input type="text" name="edit_ID" placeholder="Eg. 0 ">
            </div>

            <div class="col-sm-4">
            <label for="fname"><b>First Name</b></label>
            <input type="text" name="edit_fname" placeholder="Eg. Mary">
            </div>

            <div class="col-sm-4">
            <label for="lname"><b>Last Name</b></label>
            <input type="text" name="edit_lname" placeholder="Eg. Doe">
            </div>

            <div class="col-sm-4">
            <label for="gender"><b>Gender</b></label>
            <input type="text" name="edit_gender" placeholder="Eg. Female"></input>
            </div>

            <div class="col-sm-4">
            <label for="dob"><b>Date of Birth</b></label> <br>
            <input type="date" name="edit_dob" placeholder="Eg. 02/12/2008"><!-- Format: YYYY-MM-DD --></input>
            </div>

            <div class="col-sm-4">
            <label for="age"><b>Age</b></label>
            <input type="text" name="edit_age" placeholder="Eg. 12"></input>
            </div>

            <div class="col-sm-4">
            <label for="address"><b>Address</b></label>
            <input type="text" name="edit_address" placeholder="Eg. 12 Rose Street"></input>
            </div>

            <div class="col-sm-4">
            <label for="email"><b>Email Address</b></label>
            <input type="text" name="edit_email" id="" placeholder="Eg. sasha123@gmail.com"></input>
            </div>

            <div class="col-sm-4">
            <label for="phone"><b>Phone</b></label>
            <input type="text" name="edit_phone" placeholder="Eg. 1876-222-3333"></input>
            </div>

            <div class="col-sm-12">
            <label for="affiction"><b>Affliction</b></label>
            <input type="text" name="edit_affliction" placeholder="Eg. Fractured Bones, High Fever"></input>
            </div>



        </div>
        <!-- <button type="submit" name="" value="" class="btn btn-success">Update</button> -->

        <!-- ID: <input type="text" name="edit_ID" placeholder="Enter ID of Patient to be edited">
          First Name: <input type="text" name="edit_fname">
          Last Name: <input type="text" name="edit_lname">
          Gender: <input type="text" name="edit_gender">
          Date of Birth: <input type="date" name="edit_dob">
          Age: <input type="text" name="edit_age">
          Address: <input type="text" name="edit_address">
          Email: <input type="text" name="edit_email">
          Phone: <input type="text" name="edit_phone">
          Affliction: <input type="text" name="edit_affliction"> -->
        </form>
        <button type="submit" name="edit" value="Edit" class="btn btn-success">Update</button>
    </div>
    </div>

</div>

<br><br>

  


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

