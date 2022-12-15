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
<?php
// define variables and set to empty values
$nameErr = $emailErr = $PasswordErr = $confirm_passwordErr= "";
$name = $email = $Password  =$confirm_passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
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

  if (empty($_POST["confirm_password"])) {
    $confirm_passwordErr = "confirm password  is required";
  } else {
    $confirm_password = test_input($_POST["confirm_password"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="container" style="width: 60%; background-color: gray; border-radius: 15px; margin-top: 20px;">
<!--<p><span class="error">* required field.</span></p>-->
<br><br>
<center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<h4>Name</h4><br>
  <input type="text" name="name"  style="border-radius: 8px ;"><br>
  <span class="error">* <?php echo $nameErr;?></span>
    
  <br><br>
  <h4>Jop</h4><br>
   <input type="text" name="name"  style="border-radius: 8px ;"><br>
  
  <br><br>
  <h4>Email</h4><br>
  <input type="email" name="email"  style="border-radius: 8px ;"><br>
  <span class="error">* <?php echo $emailErr;?></span>
  
  <br><br>
  <h4>password</h4><br>
  <input type="password" name="password"  style="border-radius: 8px ;"><br>
  <span class="error">* <?php echo $PasswordErr;?></span>

  <br><br>
  <h4>confirm_password</h4><br>
 <input type="password" name="confirm_password"  style="border-radius: 8px ;"><br>
  <span class="error">* <?php echo $confirm_passwordErr;?></span>
  
  <br><br>

  <!--<a href="http://localhost/mdad/new-midad/ViewCar.html"><input type="submit" name="submit" value="Log in" class="btn btn-primary gap-4"></a>-->
  </hr>
  </form>

<a href="http://localhost/mdad/new-midad/ViewCar.html"><input type="submit" name="submit" value="Log in" class="btn btn-primary gap-4"></a>

<br><br><br>
</center>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
</body>
</html>