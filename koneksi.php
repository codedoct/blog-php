<?php
  $host="localhost";
  $user="root";
  $pass="root";
  $dbname="blog-php";

  $db=mysql_connect($host,$user,$pass);
  mysql_select_db($dbname,$db);
?>
