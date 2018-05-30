<?php

  $sectionTitle='Distrobution Section - ';

  $sitePath = "/home/xmetalx1/public_html";

  require $sitePath . '/linuxHQ/modules/totaldbrequests.php';
  require $sitePath . '/linuxHQ/modules/database_requests/distrorequests.php';

  include $sitePath . '/modules/linux/linuxBaseHeader.tpl';

?>

<div id="mainBody" class="row col-12">

  <div class="col-xs-12 col-md-2">
    <?php include $sitePath . '/linuxHQ/modules/sections/linuxDistroCol1.tpl';  ?>
  </div>
  <div class="col-xs-12 col-md-10">
    <?php

        include $sitePath . '/linuxHQ/modules/sections/distroSection/linuxDistroContent.tpl';

    ?>
  </div> <!-- Ends main content on the right, column -->
</div> <!-- Ends Row Class -->


<!-- Site Footer -->
<?php include $sitePath . '/modules/footer.tpl'; ?>

</body>
</html>
