<?php
  $host="localhost";
  $user="root";
  $pass="root";  

  $dbname = "blog_php_5_6";
  $tablename = "crud";

  $db=mysql_connect($host,$user,$pass);

  //create database if not exists
  $sql ="CREATE DATABASE IF NOT EXISTS `$dbname` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci";
  $message = mysql_query($sql,$db);
  if ($message) {
    print_r("Create database success.\n");
  }

  $sql="USE `$dbname`";
  $message = mysql_query($sql,$db);
  if ($message) {
    print_r("Choose database success.\n");
  }

  //create table if not exists
  $sql = "CREATE TABLE IF NOT EXISTS `$tablename` (
            id bigint( 20 ) AUTO_INCREMENT PRIMARY KEY,
            name varchar( 50 ) NOT NULL,
            email varchar( 150 ) NOT NULL, 
            address text( 150 ) NULL,
            created_at timestamp NULL,
            updated_at timestamp NULL
          );";
  $message = mysql_query($sql,$db);
  if (!$message) { 
    print_r(mysql_error($db)."\n");
  } else {
    print_r("Create table success.\n");
  }

  //add primary key
  $sql = "ALTER TABLE `$tablename` ADD PRIMARY KEY (`id`)";
  mysql_query($sql,$db);

  //add auto increment
  $sql = "ALTER TABLE `$tablename` MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT";
  mysql_query($sql,$db);
?>
