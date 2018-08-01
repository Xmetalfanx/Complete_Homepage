<?php

  $pageTitle = "Tech HQ Main Index Page";

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/baseTechMAINTemp.tpl";

  // needs two </div> before the footer

?>


<div class="card d-none d-md-block">
  <div class="card-header">
    <h3>Educational Sites</h3>
  </div>
  <div class="row">
    <div class="col-3">
      <a href="https://www.khanacademy.org/" target="_blank"></a>
      <img src="/techHQ/graphics/khan-logo.png" alt="Khan Academy Graphic"/></div>
    <div class="col-3">
      <a href="https://linuxacademy.com/" target="_blank"></a>
      <img src="/techHQ/graphics/linuxAcad2.png" alt="Linux Academy Graphic"/></div>
    <div class="col-3">
      <a href="https://www.digitalocean.com/community/" target="_blank"></a>
      <img src="/techHQ/graphics/digital-ocean.png" alt="Digital Ocean Graphic" class="float-right"/>
    </div>

  </div>
  <br/><br/>
  <div class="row">
    <div class="col-9">
      <a href="http://www.kristakingmath.com/" target="_blank">Krista King Math </a>
      <img src="/techHQ/graphics/kking.png" alt="Krista King Math Site graphics"/><br/><a href="https://www.youtube.com/channel/UCUDlvPp1MlnegYXOXzj7DEQ"></a>(or Her Channel on Youtube)</div>
  </div>
</div>


<?php include $sitePath . "/techHQ/modules/GAOTD.tpl"; ?>
</div>

<!-- ends second column from the template  -->
<?php include $sitePath . "/modules/tech/startpage.tpl"; ?>
</div>

<!-- Closes mainBody container  -->
<?php  include $sitePath . "/modules/footer.tpl"; ?>
