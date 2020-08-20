<?php
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
  //Username, Password and Database
  $con = new mysqli("us-cdbr-east-02.cleardb.com", "b5fa0b95ded162", "f8e7bd45", "heroku_a1d0ef3aa1ab808");
  $con->set_charset("utf8mb4");
} catch(Exception $e) {
  error_log($e->getMessage());
  //Should be a message a typical user could understand
}

?>

