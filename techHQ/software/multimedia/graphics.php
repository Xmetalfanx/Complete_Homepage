<?php

  $the_title = 'Useful Programs Section - Graphics Related Software';
  $sitePath = "/home/xmetalx1/public_html";

  include $sitePath . "/techHQ/modules/programs.php" ;
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>

<?php


  // function call test
  // echo "calling sortApps function";
  $localmaincat = 'graphics';

  sortAppsMain($localmaincat);

  include $sitePath . '/techHQ/modules/database/softwaretest.php';

?>



<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
