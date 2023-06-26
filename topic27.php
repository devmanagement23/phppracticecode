<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database ="lab1";
    //create connection
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Sorry we failed to connect: ".mysqli_connect_error());
    }
    else{
        echo "Connection was successful "."<br>";
    }

    // create table
    $sqlone = "CREATE TABLE tableone (sno INT(6) NOT NULL AUTO_INCREMENT,
                ename VARCHAR(13) NOT NULL ,dest VARCHAR(6) NOT NULL, PRIMARY KEY(sno))";

    $sqltwo = "INSERT INTO tableone(sno,ename,dest) VALUES (1,'rohan','jammu')";
    $sqlthree = "INSERT INTO tableone(ename,dest) VALUES ('mohan','delhi'),('aman','agra')";

    $result = mysqli_query($conn,$sqlthree);

    if($result){
        echo "The table is created successfully"."<br>";
    }
    else{
        echo "The table was not created becaues of this error -->".mysqli_error($conn);
    }



 /*    
    //create a database
    $sql1 = "CREATE DATABASE lab1";
    $result = mysqli_query($conn,$sql1);

    if($result){
        echo "The database is created successfully"."<br>";
    }
    else{
        echo "The database was not created becaues of this error -->".mysqli_error($conn);
    }

  */   

  
?>