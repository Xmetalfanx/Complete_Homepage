
<?php
    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/linuxHQ/modules/variables/varInclude.php";
    include $sitePath . '/modules/linux/linuxBaseHeader.tpl';

?>

<div class="row">

  <div class="col-lg-2">
    <?php include $sitePath . '/linuxHQ/modules/sections/linuxNDistroCol1.tpl';  ?>
  </div>
  <div class="col-lg-9">
    <?php include $sitePath . '/linuxHQ/modules/sections/distroSection/linuxDistroContent.tpl'; ?>
  </div>

</div>

</body>
</html>
