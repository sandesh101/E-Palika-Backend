<?php

    include("../connection.php");

    $con = dbconnection();

    if(isset($_POST["fname"])){
        $fname = $_POST["fname"];
    }
    else return;
    
    if(isset($_POST["birthPlace"])){
        $birthPlace = $_POST["birthPlace"];
    }
    else return;

    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
    }
    else return;

    if(isset($_POST["permAddress"])){
        $permAddress = $_POST["permAddress"];
    }
    else return;

    if(isset($_POST["dob"])){
        $dob = $_POST["dob"];
    }
    else return;

    $query = "INSERT INTO `citizenship_user_details`(`Full Name`, `Birth Place`, `Gender`, `Perm_address`, `DOB`) 
              VALUES ('$fname','$birthPlace','$gender','$permAddress','$dob')";
    
    $exe = mysqli_query($con, $query);

    $arr = [];

    if($exe){
        $arr["Success"] = "true";
    }
    
    else{
        $arr["Success"] = "false";
    }

    print(json_encode($arr));


?>