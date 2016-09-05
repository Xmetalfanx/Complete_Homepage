<?php
    // variables
    DEFINE ('$dbhost','localhost');
    DEFINE ('$dbuser','xmetalx1_user2');
    DEFINE ('$dbpass', 'B-,^t}.}10Th');
    DEFINE ('$dberror1', 'Can not Connect to Database');
    DEFINE ('$dbname', 'xmetalx1_linux');

	// Connect to Database
    $conn = new my_sqli($dbhost,$dbuser,$dbpass,$dbname) or die ($dberror1);
    if ($conn->connect_errno) {
      printf("Connection Failed: %s\n", $mysqli->connect_error);
      exit();
    }
    
?>
