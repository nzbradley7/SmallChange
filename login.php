<?php
   include "config.php";
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = $_POST['username'];
      $mypassword = md5($_POST['password']);

      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION["myusername"] = $myusername;
         $_SESSION['login_user'] = $myusername;

         header("location: index.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
<?php include 'header.php' ?>
<div class="container well">
  <div class="row">
    <div class="col-sm-6" style="border-right: 2px solid #aaa;">
      <form action = "" method = "post" class="form-group">
        <label>UserName  :</label><input type = "text" name = "username" class = "form-control"/>
        <label>Password  :</label><input type = "password" name = "password" class = "form-control" /><br>
        <input type = "submit" class="btn" value = " Submit " role="button">
      </form>
    </div>
    <div class="col-sm-6 text-center">
      <a href="register.php" class="btn btn-add-job" role="button"><h4>Register</h4></a>
    </div>
  </div>
</div>
</body>
