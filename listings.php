
<?php

require 'config.php';

$sql = "SELECT * FROM jobs ORDER BY jobID DESC";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  ?><div class='well well-sm'>
    <div data-toggle='collapse' data-target='#<?php echo($row['jobID']) ?>' style='padding: 1%;'>
      <h3 class='text-center'>
        <?php echo($row['name']) ?><i class='fa fa-chevron-circle-down' aria-hidden='true' style='float:right;'></i>
      </h3>
    </div>
    <div class='collapse job-info' id='<?php echo($row['jobID']) ?>'>
      <div id='description'>
        <h4>Description:</h4>
        <p class='text-justify'><?php echo($row['description']) ?></p>
      </div>
      <br>
      <div class='row'>
        <div class='col-sm-6'>
          <h4>Email:</h4><p class='contact'><?php echo($row['email']) ?></p>
          <h4>Phone:</h4><p class='contact'><?php echo($row['phone']) ?></p>
        </div>
        <div class='col-sm-6'>
          <h4>Type:</h4><p class='contact'><?php echo($row['type']) ?></p>
          <h4>Location:</h4><p class='contact'><?php echo($row['location']) ?></p>
        </div>
      </div>
    </div>
  </div><?php
  }

$conn->close();
?>
