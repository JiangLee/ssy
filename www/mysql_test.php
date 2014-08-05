<?php
$con = mysql_connect("localhost","root","");
if (!$con){
  die('Could not connect: ' . mysql_error());
} else {
  echo 'Database connected successfully';
}
mysql_close($con);