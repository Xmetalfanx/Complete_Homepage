<?php

  $pageTitle = 'Software Section Main Page';

  $path = getenv('DOCUMENT_ROOT');

  include $path . "/templates/tech/open/baseTechSoftwareTemp.tpl";

?>

not sure what to put here atm ... and this MAY BE below the footer for some reason ... the other software pages display correctly though

</div> <!-- closes the pContent class -->


<!-- include tech footer, than the startpage box and then the regular footer -->
<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>
