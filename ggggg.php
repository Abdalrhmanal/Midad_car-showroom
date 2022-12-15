<?php
 $Password=['Password'];
 $confpassword=['confirm-password'];
 if ($Password==$confpassword) {
    
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
</style>
</head>
<body>
    <div class="container" style="width: 40%; background-color: gray; border-radius: 15px ; margin-top: 20px;">
 
<div class="mb-3">
  <label for="" class="form-label">Name</label>
  <input type="text"
    class="form-control" name="Name" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>
<div class="mb-3">
  <label for="" class="form-label">Jop</label>
  <input type="text"
    class="form-control" name="Jop" id="" aria-describedby="helpId" placeholder="">
  <small id="helpId" class="form-text text-muted">Help text</small>
</div>
<div class="mb-3">
  <label for="" class="form-label">Email</label>
  <input type="email" class="form-control" name="Email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
  <small id="emailHelpId" class="form-text text-muted">Help text</small>
</div>
<div class="mb-3">
  <label for="" class="form-label">Password</label>
  <input type="password" class="form-control" name="Password" id="" placeholder="">
</div>
<div class="mb-3">
  <label for="" class="form-label">confirm password</label>
  <input type="password" class="form-control" name="confirm-password" id="" placeholder="">
</div>

<?php

?>

<a href="http://localhost/mdad/new-midad/ViewCar.html"><button type="submit" class="btn btn-primary gap-4" name="login">Log in</button><br><br></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
</body>
</html>

