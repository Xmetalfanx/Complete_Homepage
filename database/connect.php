<?php

  $mysql_host='localhost';
  $mysql_user='xmetalx1_view';
  $mysql_password='+1P.hdn5bu}^';
  $database='xmetalx1_linux';

  $conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $database);

  if($conn->connect_error)
  {
    // Connection Failed
    echo 'Connection to Database failed ' . mysqli_connect_errno();

  }

?>
