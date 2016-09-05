<div id="col2">
	<?php

        // variables
    $dbhost = "localhost";
    $dbuser = "xmetalx1_user2";
    $dbpass = "B-,^t}.}10Th";
    $dberror1 = "Can not Connect to Database";
    $dbname = "xmetalx1_linux";

	// Connect to Database
    $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die ($dberror1);
    echo "Connection Established";
    
        // variables
    $queryerror1 = 'could not connect to database for query';
    $query = 'SELECT * FROM mainData WHERE distroName="linuxMint" ';

    // Start Query
    $result = $conn->query($query) or die ('Error displaying query result');
    
       //Variables
      $distroTitle = $display['name'];
      $distroBase = $display['base'];
	    
		 

       while ($display = mysql_fetch_array($result))
       {   
          echo $distroTitle;
          echo "<br/><br />";
          echo "testing ... testing 123";
          echo $distroBase;
       
       };

     ?>
</div>
