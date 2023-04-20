<?php

// create the database parameters
$Username = "root";
$Hostname = "localhost";
$Password = "";
$dbName = "students";

// Connect to my SQL server 
$conn = mysqli_connect($Hostname, $Username, $Password,$dbName);

// check if conncetion was succesful
if ($conn) {
    echo "Connection was Successful";
}
else{
    echo "Connection was Not Successful";
}
    // C ->Create
    // R ->Read/Retrieve
    // U ->Update
    // D ->Delete

//  1.Create the Data Base 
//   Create a table in our Data Base
