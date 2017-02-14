<?php
    $sitePath = "/home/xmetalx1/public_html";

    include $sitePath . "/templates/linux/massLinuxIncludes.tpl";
?>

<?php include $sitePath . '/modules/linux/linuxBaseHeader.tpl'; ?>

<div class="col-lg-4">
  <?php include $sitePath . '/linuxHQ/modules/sections/linuxNDistroCol1.tpl';  ?>
</div>


<div class="col-lg-8">
  <?php include $sitePath . '/linuxHQ/modules/sections/linuxDistroContent.tpl'; ?>
