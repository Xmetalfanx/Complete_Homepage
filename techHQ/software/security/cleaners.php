<?php

    $the_title= ' Useful Progs Section - Security Software - Cleaners';

    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/techHQ/modules/programs.php" ;
    include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>


<?php

  $localmaincat = 'security';
  $localsubcat = 'cleaner';

  sortApps($localmaincat, $localsubcat);

?>


<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
