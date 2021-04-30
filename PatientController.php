<?php

require_once ("PatientModel.php");
//require_once ("View.php");


if (!empty($_POST))
{
switch (true)
    {
    case isset($_POST['insert']): // Runs if the insert button is click.
        echo "\n Insert detected successfully";

        create_Patient($_POST["fname"], $_POST["lname"], $_POST["gender"], $_POST["dob"], $_POST["age"], $_POST["address"], $_POST["email"], $_POST["phone"], $_POST["affliction"]);
    break;

    case isset($_POST['view']): // Runs if the view button is click.
        // echo "\n View detected successfully";

        view_Patient();
    break;

    case isset($_POST['edit']): // Runs if the edit button is click.
        echo "\n Edit detected successfully";


        edit_Patient($_POST["edit_ID"], $_POST["edit_fname"], $_POST["edit_lname"], $_POST["edit_gender"], $_POST["edit_dob"], $_POST["edit_age"], $_POST["edit_address"], $_POST["edit_email"], $_POST["edit_phone"], $_POST["edit_affliction"]);
        
        echo "\n Edit Patient called successfully.";
    break;

    case isset($_POST['delete']): // Runs if the delete button is click.
        echo "\n Delete called successfully";
                
        delete_Patient($_POST["delete_ID"]);
    break;
    }
}




// if(isset($_POST['insert'])) //If the insert button is click the function will be called.
// {
//     echo "\n Insert detected successfully";

//     create_Patient($_POST["fname"], $_POST['lname'], $_POST["gender"], $_POST["dob"], $_POST["age"], $_POST["address"], $_POST["email"], $_POST["phone"], $_POST["affliction"]);
// }
// else
// {
//     if(isset($_POST['view']))
//     {
//         echo "\n View detected successfully";

//         view_Patient();
//     }
//     else{
//         if(isset($_POST['edit']))
//         {
//             echo "\n Edit detected successfully";


//             edit_Patient($_POST["edit_ID"], $_POST["edit_fname"], $_POST["edit_lname"], $_POST["edit_gender"], $_POST["edit_dob"], $_POST["edit_age"], $_POST["edit_address"], $_POST["edit_email"], $_POST["edit_phone"], $_POST["edit_affliction"]);
//         }
//         else{
//             if(isset($_POST['delete']))
//             {
//                 echo "\n Delete called successfully";
                
//                 delete_Patient($_GET["id"]);
//             }
//         }
//     }
// }




// Function that calls the Create Paitient Table and Insert Patient Functions from the Patient Model.
function create_Patient(string $fname, string  $lname, string $gender, string $dob, int $age, string $address, string $email, string $phone, string $affliction)
{

    echo "\n Create Patient called successfully";

    $Object = new PatientModel();

    // $Object->Connect();
    // $Object->CreatePatientTable();
    // $Object->InsertPatient($fname, $lname, $gender, $dob, $age, $address, $email, $phone, $affliction);

    header("location: AddPatientInfo.php");

}

// Function that calls the get all patients function from the Patient Model.
function view_Patient()
{
    // echo "\n View Patient called succefully";
    $Object = new PatientModel();

    $Object->get_all_Patients();

    //header("location: viewPatientInfo.php");

}

function edit_Patient(int $ID, string $fname, string $lname, string $gender, string $dob, int $age, string $address, string $email, string $phone, string $affliction)
{
    echo "\n edit Patient called succefully";

    $Object = new PatientModel();

    $Object->Connect();
    $Object->Update_Patient($ID, $fname, $lname, $gender, $dob, $age, $address, $email, $phone, $affliction);

    view_Patient();
}


function delete_Patient(int $ID)
{
    echo "\n Delete Patient called succefully";

    $Object = new PatientModel();

    $Object->Connect();
    $Object->Delete_Patient($ID);

    view_Patient();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Patient Record</title>
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

<body class="patientbg" >

<br><br>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>