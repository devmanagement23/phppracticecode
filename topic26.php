<?php

    $servername = "localhost";
    $username = "root";
    $password ="";

    //create connection
    $conn = mysqli_connect($servername,$username,$password);

    if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }
    else{
        echo "Connection was successful "."<br>";
    }

    //create a database
    $sql1 = "CREATE DATABASE lab1";
    $result = mysqli_query($conn,$sql1);

    if($result){
        echo "The database is created successfully"."<br>";
    }
    else{
        echo "The database was not created becaues of this error -->".mysqli_error($conn);
    }

    

?>