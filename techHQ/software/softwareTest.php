<?php

    $the_title = 'Xmetalfanxs Homepage';
    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>

<?php


  // function call test
  // echo "calling sortApps function";
  $localmaincat = 'security';

  sortApps($localmaincat);



  include $sitePath . '/techHQ/modules/database/softwaretest.php';



?>



<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
