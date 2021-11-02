<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'microparque'
) or die(mysqli_erro($mysqli));

?>
