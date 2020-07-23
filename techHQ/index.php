<?php

  $pageTitle = "TechHQ Frontpage";

  $path = getenv('DOCUMENT_ROOT');

  include ($path . '/templates/tech/open/baseTechMAINTemp.tpl');

?>

<div class="card d-none d-md-block w-75 mx-auto mb-5">
  <div class="card-header">Educational Sites</div>
  <div class="card-body">
    <div class="row mx-auto text-center">

        <div class="col-lg-3 col-md">
          <a href="https://www.khanacademy.org/" target="_blank" rel="noreferrer" aria-label="Link to Khan Academy">
            <img class="mx-auto d-none d-lg-block lazyload" data-src="/techHQ/graphics/khan-logo.png" alt="Khan Academy Graphic">Khan Academy
          </a>
        </div>
        <div class="col-lg-3 col-md">
          <a href="https://linuxacademy.com/" target="_blank" rel="noreferrer" aria-label="Link to Linux Academy">
            <img class="mx-auto d-none d-lg-block lazyload" data-src="/graphics/linuxAcademy.png" alt="Linux Academy Graphic">Linux Academy
          </a>
        </div>
        <div class="col-lg-3 col-md">
          <a href="https://www.digitalocean.com/community/" target="_blank" rel="noreferrer" aria-label="Link to Digital Ocean">
            <img class="mx-auto d-none d-lg-block lazyload"  data-src="/techHQ/graphics/digital-ocean.png" alt="Digital Ocean Graphic">Digital Ocean
          </a>
        </div>
        <div class="col-lg-3 col-md">
          <a href="http://www.kristakingmath.com/" target="_blank" rel="noreferrer" aria-label="Link to Krista King's Math related site">
            <img class="mx-auto d-none d-lg-block lazyload" data-src="/graphics/kking_logo.png" alt="Krista King Math Site graphics">Krista King Math Tutor
          </a>

          <a href="https://www.youtube.com/channel/UCUDlvPp1MlnegYXOXzj7DEQ" rel="noreferrer" aria-label="Link to Krista King's Youtube page">(or Her Channel on Youtube)</a>
        </div>
    </div>

      <div class="px-3 mt-4">
        <a href="http://www.scienceandmath.com/" target="_blank" rel="noreferrer" aria-label="Link to ScienceandMath.com">
          <img class="d-none d-lg-block lazyload" data-src="/graphics/mathandscience.jpg" alt="Science and Math.com graphics">
          Science and Math.com
        </a>
      </div>
  </div>
</div>

<?php include $path . "/techHQ/modules/GAOTD.tpl"; ?>


</div> <!-- closes right hand column -->
</div> <!-- use main row -->


<!-- include baseTechFooter -->
<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
