<?php

  $path = getenv('DOCUMENT_ROOT');

  $path = getenv('DOCUMENT_ROOT'); include $path . '/templates/tech/open/baseTechMAINTemp.tpl';

?>

<div class="card d-none d-md-block mb-5 border-secondary">
  <div class="card-header bg-primary text-white pb-1 mb-4 font-weight-bold">Educational Sites</div>
  <div class="card-text px-3">
    <div class="row text-center">
      <div class="col-lg-3 col-md">
        <a href="https://www.khanacademy.org/" target="_blank">
          <img class="mx-auto d-none d-md-block" src="/techHQ/graphics/khan-logo.png" alt="Khan Academy Graphic">Khan Academy</a>
      </div>
      <div class="col-lg-3 col-md">
        <a href="https://linuxacademy.com/" target="_blank">
        <img class="mx-auto d-none d-md-block" src="/graphics/linuxAcademy.png" alt="Linux Academy Graphic">Linux Academy</a>
      </div>
      <div class="col-lg-3 col-md">
        <a href="https://www.digitalocean.com/community/" target="_blank">
          <img class="mx-auto d-none d-md-block" src="/techHQ/graphics/digital-ocean.png" alt="Digital Ocean Graphic">Digital Ocean</a>
      </div>
      <div class="col-lg-3 col-md">
        <a href="http://www.kristakingmath.com/" target="_blank">
          <img class="mx-auto d-none d-md-block" src="/graphics/kking_logo.png" alt="Krista King Math Site graphics">Krista King Math Tutor</a>
        <a href="https://www.youtube.com/channel/UCUDlvPp1MlnegYXOXzj7DEQ">(or Her Channel on Youtube)</a>
      </div>
    </div>
    <div class="row col-12 px-3 mt-4">
      <a href="http://www.mathtutordvd.com/" target="_blank">Science and Math.com
        <img class="d-none d-1g-block" src="/graphics/mathandscience.jpg" alt="Science and Math.com graphics"></a>
    </div>
  </div>
</div>


<!-- include baseTechFooter -->
<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>
