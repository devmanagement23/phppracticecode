
<?php


// connection to database

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "assignment";
  

  //create a connection
  //$conn = mysqli_connect($servername,$username,$password);
  $conn = mysqli_connect($servername,$username,$password,$database);

  if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
  }
  else{
    echo "Connection is successful";
  }

//  $sqlone = "CREATE database assignment";
//  $sqltwo = "CREATE TABLE candidateDetail (sno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,name VARCHAR(20) NOT NULL,mobile INT,email varchar(25),address varchar(50),qualification varchar(15),gender varchar(1),state varchar(20),dob date)";
//  $sqlthree = "INSERT INTO candidateDetail VALUES (1,'ambar',9878978786,'ambar@gmail.com','yeshwantpur bangalore','bca','m','hyderabad','2001-12-26')";
    $sqlfour = "INSERT INTO candidateDetail (name,mobile,email,address,qualification,gender,state,dob) VALUES('ram',897878987,'ram@gmail.com','adhoya delhi','graduation','m','delhi','2000-01-01')";

  //  $query1 = "INSERT INTO employee (first_name,last_name,designation) VALUES ('John','Rambo','CSO')";



/* 
if($result){
    echo "<br> entry done";  
}
else{
    
    echo "entry problem";
}

*/

echo "<br>";

 
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];
$qualification = $_POST["qualification"];
$gender = $_POST["gender"];
$selectstate = $_POST["selectstate"];
$dateofbirth = $_POST["dateofbirth"];

/*
 echo "Thankyou     ".$name."     for submitting your information.<br>"; 
echo "Thankyou     ".$mobile."     for submitting your information.<br>"; 
echo "Thankyou     ".$email."     for submitting your information.<br>"; 
echo "Thankyou     ".$address."     for submitting your information.<br>"; 
echo "Thankyou     ".$qualification."     for submitting your information.<br>"; 
echo "Thankyou     ".$gender."     for submitting your information.<br>"; 
echo "Thankyou     ".$selectstate."     for submitting your information.<br>"; 
echo "Thankyou     ".$dateofbirth."     for submitting your information.<br>";  
 */

$result = mysqli_query($conn,$sqlfour); 
if($result){
  echo "<br> entry done";  
}
else{
  
  echo "entry problem";
}
 ?>