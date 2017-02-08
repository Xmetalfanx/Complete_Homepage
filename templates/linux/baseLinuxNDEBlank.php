<?php
    $sitePath = "/home/xmetalx1/public_html";
	  include $sitePath . "/templates/linux/massLinuxIncludes.tpl"
    include $sitePath . '/modules/linux/linuxBaseHeader.php';
?>

<div id="mainBody">
  <?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/linuxNDesktopEnvCol1.php'); ?>

    <div id="col2">
    	<?php echo $content; ?>
    </div>

</div>
