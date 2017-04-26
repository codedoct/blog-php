<?php
  $host="localhost";
  $user="root";
  $pass="root";
  $dbname="blog_php_5_6";

  $db=mysql_connect($host,$user,$pass);
  mysql_select_db($dbname,$db);
?>
