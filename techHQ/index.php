<?php

    $the_title = 'Xmetalfanxs Homepage';
    $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/scripts/nav.js";
    include $sitePath . "/templates/tech/baseTechMAINTemp.tpl";


?>

<div class="card hidden-sm-down">
  <div class="card-block">
    <h2 class="card-title">Educational Sites        </h2>
    <div class="card-text">
      <div class="graphics">
        <div class="row">
          <div class="col-lg-5">
            <a href="https://www.khanacademy.org/" target="_blank">
            <img src="/techHQ/graphics/khan-logo.png" alt="Khan Academy Graphic"> </a>
          </div>
          <div class="col-lg-5">
            <a href="https://linuxacademy.com/" target="_blank">
            <img src="/techHQ/graphics/linuxAcad.png" alt="Linux Academy Graphic"/></a>
          </div>
        </div>
        <a href="http://www.kristakingmath.com/" target="_blank">Krista King Math
          <img src="/techHQ/graphics/kking.png" alt="Krista King Math Site graphics"/></a><br/>
          <a href="https://www.youtube.com/channel/UCUDlvPp1MlnegYXOXzj7DEQ">(or Her Channel on Youtube)</a>
      </div>
      <div class="hidden-sm-up">
        <p>Content not intended to be seen on a screen this small </p>
      </div>
    </div>
  </div>
</div>

<!-- This ends whats not in this file -->
  </div> <!-- Ends former Col2 -->


<?php include $sitePath . "/techHQ/modules/GAOTD.tpl"; ?>
</div> <!-- Ends mainBody -->

<?php  include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
