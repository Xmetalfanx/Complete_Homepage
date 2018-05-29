<?php

  $pageTitle = "Tech HQ Main Index Page";

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/baseTechMAINTemp.tpl";

  // needs two </div> before the footer

?>

<div id="supportedSites">
  <div class="hidden-sm-down">

    <h3>Educational Sites  </h3>
    <br />
      <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3">
          <a href="https://www.khanacademy.org/" target="_blank">
            <img src="/techHQ/graphics/khan-logo.png" alt="Khan Academy Graphic"/>
          </a>
          </div>
        <div class="col-md-3 col-lg-3 col-xl-3">
          <a href="https://linuxacademy.com/" target="_blank">
            <img src="/techHQ/graphics/linuxAcad.png" alt="Linux Academy Graphic"/>
          </a>
          </div>
        <div class="col-md-3 col-lg-3 col-xl-3">
          <a href="https://www.digitalocean.com/community/" target="_blank">
            <img src="/techHQ/graphics/digital-ocean.png" alt="Digital Ocean Graphic" class="float-right"/>
          </a>
        </div>
      </div> <!-- Ends Row -->

      <br/><br/>

      <div class="row">
        <div class="col-md-9 col-lg-9 col-xl-9">

          <a href="http://www.kristakingmath.com/" target="_blank">Krista King Math</a>
          <img src="/techHQ/graphics/kking.png" alt="Krista King Math Site graphics"/><br/>

          <a href="https://www.youtube.com/channel/UCUDlvPp1MlnegYXOXzj7DEQ">(or Her Channel on Youtube)</a>
        </div>
      </div> <!-- Ends K. King div tag -->

  </div> <!-- </div> for hidden-sm-down -->
</div> <!-- Ends Support Site DIV -->


<?php include $sitePath . "/techHQ/modules/GAOTD.tpl"; ?>


</div>        <!-- ends second column from the template  -->


<?php include $sitePath . "/modules/tech/startpage.tpl"; ?>


</div>        <!-- Closes mainBody container  -->



<?php  include $sitePath . "/modules/footer.tpl"; ?>
