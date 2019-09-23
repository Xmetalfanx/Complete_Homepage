<?php
    $subTitle= 'Security Section - ';

	  require $_SERVER["DOCUMENT_ROOT"] . '/include/variables.php';

    include($path .'/modules/tech/baseTechHeader.tpl');

?>

<body>
  <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/linux/linuxNavMenu.tpl'; ?>

  <div class="row">
    <div class="col-xs-12 col-md-2">

      <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/techHQ/modules/techSecurityCol1.tpl'; ?>
    </div>

    <div class="col-xs-12 col-md-10">
