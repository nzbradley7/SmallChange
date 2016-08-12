
<?php

require 'config.php';

$sql = "SELECT * FROM jobs ORDER BY jobID DESC";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  echo("<div class='well well-sm'>
    <div data-toggle='collapse' data-target='#" . $row['jobID'] . "' style='padding: 1%;'>
      <h3 class='text-center'>
        ". $row['name'] . "<i class='fa fa-chevron-circle-down' aria-hidden='true' style='float:right;'></i>
      </h3>
    </div>
    <div class='collapse job-info' id='" . $row['jobID'] . "'>
      <div id='description'>
        <h4>Description:</h4>
        <p class='text-justify'>". $row['description'] . "</p>
      </div>
      <br>
      <div class='row'>
        <div class='col-sm-6'>
          <h4>Email:</h4><p class='contact'>". $row['email'] . "</p>
          <h4>Phone:</h4><p class='contact'>". $row['phone'] . "</p>
        </div>
        <div class='col-sm-6'>
          <h4>Type:</h4><p class='contact'>". $row['type'] . "</p>
          <h4>Location:</h4><p class='contact'>" . $row['location'] . "</p>
        </div>
      </div>
    </div>
  </div>");
  }

$conn->close();
?>
