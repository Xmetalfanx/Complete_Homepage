<?php

  $pageTitle = "TechHQ Frontpage";

  $path = getenv('DOCUMENT_ROOT');
  include ($path . '/templates/tech/open/baseTechMAIN.tpl');

?>

<div class="EducationalSites card">
  <div class="card__header">Educational Sites</div>
  <div class="card__body">
    <figure>
      <a href="https://www.khanacademy.org/" target="_blank" rel="noreferrer" aria-label="Link to Khan Academy">
        <img class="d-none d-md-block img-fluid" src="/techHQ/graphics/khan-academy.svg" alt="Khan Academy website Graphic" />
        <figcaption>Khan Academy</figcaption>
      </a>
    </figure>

    <figure>
      <a href="https://www.digitalocean.com/community/" target="_blank" rel="noreferrer" aria-label="Link to Digital Ocean">
        <img class="d-none d-md-block img-fluid"  src="/techHQ/graphics/digitalOcean.png" alt="Digital Ocean website Graphic" />
        <figcaption>Digital Ocean</figcaption>
      </a>
    </figure>

    <figure>
      <a href="http://www.kristakingmath.com/" target="_blank" rel="noreferrer" aria-label="Link to Krista King's Math related site">
        <img class="d-none d-md-block img-fluid" src="/graphics/kking_logo.png" alt="Krista King Math Site website graphics">
      <figcaption>Krista King Math Tutor</figcaption>
      </a>
    </figure>

    <figure>
      <a href="http://www.scienceandmath.com/" target="_blank" rel="noreferrer" aria-label="Link to ScienceandMath.com">
        <img class="d-none d-md-block" src="/graphics/mathandscience.jpg" alt="Science and Math.com website graphics">
        <figcaption>ScienceandMath.com</figcaption>
      </a>
  </figure>



  </div> <!-- closes card__body -->
</div> <!-- closes Edu link, card -->


<div class="EducationalSites card">
  <div class="card__header">Learning Linux</div>
  <div class="card__body">
    <h4>Learning the Commandline</h4>

    <div class="d-flex">
      <figure>
        <a href="https://linuxjourney.com/" target="_blank">
          <img class="d-none d-md-block img-fluid" src="../graphics/linux-journey.png" alt="Linux Journey website graphic" />
          <figcaption>Linux Journey</figcaption>
        </a>
      </figure>

      <figure>
          <a href="http://www.explainshell.com" target="">
          ExplainShell.com
          </a>
      </figure>
    </div>

  </div> <!-- closes card__body -->

</div> <!-- closes card -->


<?php include $path . '/techHQ/modules/GAOTD.tpl'; ?>



<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
