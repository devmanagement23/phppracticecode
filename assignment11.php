<!-- pdo connection -->
<?php

$conn = new PDO("mysql:host=localhost; dbname=assignment;","root","");

if($conn){
    echo "Connected";
}


?>