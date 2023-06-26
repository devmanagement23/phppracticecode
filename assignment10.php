<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<form action="" method="post">
<h3>Enter a String To transforg upper case</h3>
<input type="text" name="txt" value=" " >
<input type="submit" >


</form>




<?php 
$string=$_POST['txt'];

$str= trim(strtoupper($string));

echo "<h1>Upper Case here 👉".$str."</h><br>";


?>



<?php 
$string=$_POST['txt'];

$strl=strtolower($string);

echo "<h1>Lower Case here 👉".$strl."</h><br>";


?>

<?php 
$string="";

$strl=strtolower($string);

echo "<h1>Lower Case here 👉".$strl."</h><br>";


?>

</body>

</html>
