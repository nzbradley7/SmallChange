<?php include 'header.php' ?>
<div class='container well'>
  <form action = "" method = "post" class="form-group">
    <label>Username  :</label><input type = "text" name = "username" class = "form-control"/>
    <label>Email  :</label><input type = "email" name = "email" class = "form-control"/>
    <label>Password  :</label><input type = "password" name = "password" class = "form-control" />
    <label>Confirm Password  :</label><input type = "password" name = "confirm_password" class = "form-control" /><br>
    <input type = "submit" class="btn" value = " Submit " role="button"><br>
  </form>
  <?php
  require 'config.php';
  require 'inputTest.php';


  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $password = md5($_POST['password']);
    if($password == md5($_POST['confirm_password'])){
      $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

      if ($conn->query($sql) === TRUE) {
          session_start();
          $_SESSION["myusername"] = $username;
          $_SESSION['login_user'] = $username;

          header("location: index.php");
      } else {
          echo "Username or Email already registered.";
      }
    }else{
      echo "Passwords do not match!";
    }

  }
  ?>
</div>
</body>
