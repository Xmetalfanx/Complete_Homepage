<?php

  $pageTitle = "TechHQ Frontpage";

  $path = getenv('DOCUMENT_ROOT');

  include ($path . '/templates/tech/open/baseTechMAINTemp.tpl');

?>

<div id="EducationalSites" class="card d-none d-md-block">
  <div class="card__header card__header--dark-bg">Educational Sites</div>
  <div class="card__body">
    <a href="https://www.khanacademy.org/" target="_blank" rel="noreferrer" aria-label="Link to Khan Academy">
      <img class="d-none d-lg-block lazyload img-fluid" data-src="/techHQ/graphics/khan-logo.png" alt="Khan Academy Graphic">Khan Academy
    </a>
    <a href="#" target="_blank" rel="noreferrer" aria-label="Link to Linux Academy">
      <img class="d-none d-lg-block lazyload img-fluid" data-src="/graphics/linuxAcademy.png" alt="Linux Academy Graphic">Linux Academy
      <br />Acquired by "A Cloud Guru" - December 2019
    </a>
    <a href="https://www.digitalocean.com/community/" target="_blank" rel="noreferrer" aria-label="Link to Digital Ocean">
      <img class="d-none d-lg-block lazyload img-fluid"  data-src="/techHQ/graphics/digital-ocean.png" alt="Digital Ocean Graphic">Digital Ocean
    </a>
    <a href="http://www.kristakingmath.com/" target="_blank" rel="noreferrer" aria-label="Link to Krista King's Math related site">
      <img class="d-none d-lg-block lazyload img-fluid" data-src="/graphics/kking_logo.png" alt="Krista King Math Site graphics">Krista King Math Tutor
    </a>

    <a href="http://www.scienceandmath.com/" target="_blank" rel="noreferrer" aria-label="Link to ScienceandMath.com">
      <img class="d-none d-lg-block lazyload" data-src="/graphics/mathandscience.jpg" alt="Science and Math.com graphics">
      Science and Math.com
    </a>

  </div> <!-- closes card__body -->
</div> <!-- closes Edu link, card -->


<?php include $path . '/techHQ/modules/GAOTD.tpl'; ?>



<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
