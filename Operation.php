<?php
require_once('Constants.php');
header('Content-Type: application/json');
$GLOBALS['mysql'] = new mysqli('localhost','root','','test');


function get_users()
{
  $array_users = array();
  $result = $GLOBALS['mysql']->query("SELECT * FROM `sharaga`");
    while ($row = mysqli_fetch_assoc($result))
    {
      $array_users[] = $row;
    }
   return $array_users;
   $GLOBALS['mysql']->close();
}
//get_users();

function get_logs($id)
{
  $array_logs = array();
  $result = $GLOBALS['mysql']->query("SELECT * FROM `log` WHERE `id`=$id");
    while ($row = mysqli_fetch_assoc($result))
    {
      $array_logs[] = $row;
    }
   return $array_logs;
   $GLOBALS['mysql']->close();
}
//get_logs();
 ?>
