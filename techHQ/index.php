<?php

  $pageTitle = "Tech HQ Main Index Page";

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/baseTechMAINTemp.tpl";

?>


<div class="hidden-sm-down">Educational Sites</div>

  <div class="row">
    <div class="col-md-3 col-lg-3 col-xl-3">
      <a href="https://www.khanacademy.org/" target="_blank">
        <img src="/techHQ/graphics/khan-logo.png" alt="Khan Academy Graphic"/></a>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
      <a href="https://linuxacademy.com/" target="_blank">
        <img src="/techHQ/graphics/linuxAcad.png" alt="Linux Academy Graphic"/></a>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
      <a href="https://www.digitalocean.com/community/" target="_blank">
        <img src="/techHQ/graphics/digital-ocean.png" alt="Digital Ocean Graphic"/></a>
    </div>
  </div>
  <!-- Ends Row--><br/><br/>
  <div class="row">
    <div class="col-md-9 col-lg-9 col-xl-9"><a href="http://www.kristakingmath.com/" target="_blank">Krista King Math                </a><img src="/techHQ/graphics/kking.png" alt="Krista King Math Site graphics"/><br/><a href="https://www.youtube.com/channel/UCUDlvPp1MlnegYXOXzj7DEQ">(or Her Channel on Youtube)</a></div>
  </div>
  <!-- Ends Row-->

  <div class="hidden-sm-up">
    <p>Content not intended to be seen on a screen this small</p>
  </div>


<div class="container">
  <?php include $sitePath . "/techHQ/modules/GAOTD.tpl"; ?>
</div>



</div>        <!-- closes card-text opened in template  -->
</div>        <!-- Closes card-block from templete -->
</div>        <!-- Closes card -->
</div>        <!-- ends Row -->

<?php include $sitePath . "/modules/tech/startpage.tpl"; ?>


<?php  include $sitePath . "/modules/footer.tpl"; ?>
