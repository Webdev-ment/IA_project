<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Patient Record</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Patients
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="./AddPatientInfo"><b>Create Patient Records</b></a>
          <a class="dropdown-item" href="./viewPatientInfo"><b>View Patient Records</b></a>
          <a class="dropdown-item" href="#"><b>Edit Patient Record</b></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" style="color: red;"><b>Delete Patient Records</b></a>
        </div>
      </li>

  </ul>
  

</nav>
<body class="patientbg" >
<form action="PatientController.php" method="POST">
<div class="py-3">  
  <div class="container">
    <h1>Create Patient Record</h1>
    <hr>
    <label for="fname"><b>First Name</b></label>
    <input type="text" name="fname" placeholder="First Name">
    <label for="lname"><b>Last Name</b></label>
    <input type="text" name="lname" placeholder="Last Name">
    <label for="gender"><b>Gender</b></label>
    <input type="text" name="gender" placeholder="Gender"></input>
    <label for="dob"><b>Date of Birth </b></label>
    <input type="date" name="dob"><!-- Format: YYYY-MM-DD --></input>
        
    <br>
    <label for="age"><b>Age</b></label>
    <input type="text" name="age" placeholder="Age"></input>
    <label for="address"><b>Address</b></label>
    <input type="text" name="address" placeholder="Address"></input>
    <label for="email"><b>Email Address</b></label>
    <input type="text" name="email" id="" placeholder="Email Address"></input>
    <label for="phone"><b>Phone</b></label>
    <input type="text" name="phone" placeholder="Phone Number"></input>
    <label for="affiction"><b>Affliction</b></label>
    <input type="text" name="affliction" placeholder="Affliction/Condition"></input>
    <!-- <button type="submit" name="insert" value="Insert" class="btn  patientbtn">Insert</button>
    <button  type="submit" name="view" value="View" class="btn  patientbtn">View</button> -->
    <div class="row justify-content-center">
        <div class="col-4">
        <button type="submit" name="insert" value="Insert" class="btn patientbtn">Create Record</button>
        </div>
        <!-- <div class="col-4">
        <button  type="submit" name="view" value="View" class="btn  patientbtn">View</button>
        </div> -->
    </div>
    <br><br>
    <!-- <input type="submit" name="insert" value="Insert"></input>
        <input type="submit" name="view" value="View"></input> -->
   
  </div>
</div>
</form>
<br><br>
</body>
</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
