<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contact Us</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/harry/lec21form.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->


<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];    //name attribute is used 
    $email = $_POST['email'];  //name attribute is used 
    $description = $_POST['desc'];
    

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

  //INSERT INTO `contacts` (`sno`, `name`, `email`, `concern`, `date`) VALUES ('2', 'bhola', 'bhola@gmail.com', 'phone audio not working', current_timestamp());
  //$sqltwo = "INSERT INTO contacts(sno,name,dest) VALUES(1,'rohan','jammu'),(2,'mohan','delhi')";
  //CREATE TABLE `dbharry6`.`contacts` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `email` VARCHAR(30) NOT NULL , `concern` TEXT NOT NULL , `date` DATETIME NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB;

  $sqlthree = "INSERT INTO `contacts` (`name`, `email`, `concern`, `date`) VALUES ('$name', '$email', '$description', current_timestamp())";

  $result = mysqli_query($conn,$sqlthree);

  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been submitted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';  
  }
  else{
      //echo "The table was not created because of this error -->".mysqli_error($conn);
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> We are facing some technical issue and your entry was not 
    submitted.We regret the inconvienence caused.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }

  }

?>


<!-- ---------------------------------------------------------------------------------------------------------------------- -->



<div class="container mt-3">
    <h2>Contact us for your concern</h2>   
    <form action="/projectone/ss lec28.php" method="post">
        
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">We'll never share your name with anyone else.</div>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>


        <div class="form-group">
            <label for="pass" class="form-label">Description</label>
            <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>