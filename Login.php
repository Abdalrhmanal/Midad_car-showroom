<?php
$emailErr = $PasswordErr = "";
 $email = $Password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["Password"])) {
    $PasswordErr = "Password is required";
  } else {
    $Password = test_input($_POST["Password"]);
  }
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<title>Log in View Car</title>
<style>
    body {
        background-image: url('https://i2.wp.com/knoww.cc/wp-content/uploads/2020/01/932-9.jpg');
        background-attachment: fixed;
    }
.error {color: #FF0000;}
    
</style>
</head>
<body>
<div class="container" style="width: 40%;height: 40%; background-color: gray; border-radius: 15px; margin-top: 200px;">
    <div class="mb-3" >
      <label for="" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
      * <?php echo $emailErr;?></span>
      <small id="emailHelpId" class="form-text text-muted">Help text</small>
      </div>
    <div class="mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password" class="form-control" name="Password" id="" placeholder="">* <?php echo $PasswordErr;?></span>
    </div>
    <a href="http://localhost/mdad/new-midad/Sgen%20up.php"><button type="submit" class="btn btn-primary gap-4" >Sugen up</button></a>
    <a href="http://localhost/mdad/new-midad/ViewCar.html"><button type="submit" class="btn btn-primary gap-4">Log in</button><br><br></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
</body>
</html>