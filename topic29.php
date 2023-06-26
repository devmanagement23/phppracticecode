<?php


    

  // code for submit to database.
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "dbharry6";

  //create a connection
  $conn = mysqli_connect($servername,$username,$password,$database);

  if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "Connection was successfull";
}

$sql = "SELECT * FROM contacts";
$sqltwo = "SELECT * FROM contacts where name ='dev'";
$sqlthree = "UPDATE contacts SET concern ='short circuit problem' where SNO =10";
$result = mysqli_query($conn,$sqltwo);
echo "<br>"; 

// no of rows in table
$num = mysqli_num_rows($result);
echo $num; 

echo "<br>";

if($num > 0){
    /* 
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";

    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";

    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";

    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";

    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";

    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";
 */
    // above output can be get with help of while loop

    $serialNo = 1;

    while($row = mysqli_fetch_assoc($result)){
        //echo var_dump($row);   echo "<br>";
        
        echo $serialNo. " Hello ".$row['name']." your complaint of ".$row['concern']." has been register.
        We will send our technical team at your service as soon as possible.";
        echo "<br>";

        $serialNo++;
    }
}

while($row = mysqli_fetch_assoc($result)){
    
    
    echo  " Hello ".$row['name']." your complaint of ".$row['concern']." has been register.
    We will send our technical team at your service as soon as possible.";
    echo "<br>";

   
}
?>