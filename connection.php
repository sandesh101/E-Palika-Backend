<?php

function dbconnection(){
    $conn = mysqli_connect("localhost", "root", "", "e_palika");
    return $conn;
}


?>