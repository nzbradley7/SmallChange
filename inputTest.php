<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = addslashes($data);
  $data = htmlspecialchars($data);
  $data = nl2br($data);
  return $data;
}
?>
