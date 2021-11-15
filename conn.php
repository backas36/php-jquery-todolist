<?php
  $server_name = 'localhost';
  $username = 'mtr04group5';
  $password = 'Lidemymtr04group5';
  $db_name = 'mtr04group5';

  //$server_name = 'localhost';
  //$username = 'ashi';
  //$password = '1234';
  //$db_name = 'ashi';
  $conn = new mysqli($server_name, $username, $password, $db_name);
  
  if($conn->connect_error){
    die('資料庫連線錯誤'.$conn->connent_error);
  }

  $conn->query('SET NAMES utf8mb4');
  $conn->query('SET time_zone="+8:00"');
?>