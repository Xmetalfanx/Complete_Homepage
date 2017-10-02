<?php

  $the_title = 'Useful Programs Section - Graphics Related Software';
  $sitePath = "/home/xmetalx1/public_html";

  include $sitePath . "/techHQ/modules/programs.php" ;
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>

<?php


  $localmaincat = 'graphics';
  sortApps($localmaincat);
?>

<?php include $sitePath . "/modules/footer.tpl"; ?>
