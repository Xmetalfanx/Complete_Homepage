<?php

  $mysql_host='localhost';
  $mysql_user='xmetalx1_view';
  $mysql_password='+1P.hdn5bu}^';
  $database='xmetalx1_techHQ';

  $conn2 = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $database);

  if(mysqli_connect_errno())
  {
    // Connection Failed
    echo 'Connection to Database failed ' . mysqli_connect_errno();

  }

?>
