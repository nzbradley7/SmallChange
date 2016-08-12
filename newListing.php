<?php include 'header.php'; ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 well text-center">
            <h2>
            <?php

            require 'config.php';
            require 'session.php';

            $name = $description = $type = $location = $email = $phone = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $name = test_input($_POST["name"]);
              $description = test_input($_POST["description"]);
              $type = test_input($_POST["type"]);
              $location = test_input($_POST["location"]);
              $email = test_input($_POST["email"]);
              $phone = test_input($_POST["phone"]);
            }

            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              $data = nl2br($data);
              return $data;
            }

            $sql = "INSERT INTO jobs (name, description, type, location, email, phone) VALUES ('$name', '$description', '$type', '$location', '$email', '$phone');
            ";
            if ($conn->query($sql) === TRUE) {
                echo "New job listed successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            ?>
          </h2><br>
          <a href="index.php" class="btn btn-add-job" role="button"><h4>Return to home</h4></a>
          </div>
        </div>
      </div>
      <a href="#top">
        <i class="fa fa-caret-square-o-up" aria-hidden="true" id="to-top"></i>
      </a>
    </body>
