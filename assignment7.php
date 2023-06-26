<!-- Create a form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      .outer{
        width:600px;
        
        margin:auto;
        margin-top:80px;
        padding :10px;
        border:2px solid rgb(226, 90, 226);
      }
    </style>
</head>

<body>

<!-- --------------------------------------------------------------------------- -->

    <h1 align="right" style="margin-right:40px";> Job portal</h1>
    <hr>
    <form action="assignment7data.php" method="post">
    <div class="outer">

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="">
      </div>
      <div class="mb-3">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="number" class="form-control" name="mobile" id="mobile" placeholder="">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="">
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
      </div>

      <div class="mb-3">
      <label for="qualification" class="form-label">Qualification</label>               
          <select class="form-control" id="qualification" name="qualification">
            <option value="">Select</option>
            <option value="Matriculate">Matriculate</option>
            <option value="Highersecondary">Higher Secondary</option>
            <option value="diploma">Diploma</option>
            <option value="graduation">Graduation</option>
            <option value="postgraduation">Post Graduation</option>
            <option value="doctrate">Doctrate</option>
          </select>
      </div>
      
      <div class="mb-3">
      <label for="gender" class="form-label">Gender</label><br>
        <input class="form-check-input" type="radio" name="gender" id="gender1" value="Male" >
        <label class="form-check-label" for="gender">
          Male
        </label>
      
        <input class="form-check-input" type="radio" name="gender" id="gender2" value="Female" >
        <label class="form-check-label" for="gender">
          Female
        </label>
      </div>

      <div class="mb-3">
        <label for="selectstate">State</label>
          <select class="form-control" name="selectstate" id="selectstate">
          <option value="select">Select</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
          <option value="Daman and Diu">Daman and Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Puducherry">Puducherry</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
        </select>
      </div>        
      
      <div class="mb-3">
        <label for="dateofbirth">Date of Birth</label>
        <input type="date" name="dateofbirth" class="form-control"/>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
</form>  
      
    
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------PHP Code for connection to database------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>

