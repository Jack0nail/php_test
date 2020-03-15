<?php
header('Content-Type: application/json');

$mysql = new mysqli('localhost','root','','test');
$array_test = array();
$result = $mysql->query("SELECT * FROM `sharaga`");
while ($row = mysqli_fetch_assoc($result)) {
  $array_test = $row;
}
$mysql->close();
echo $array_test;
 ?>
