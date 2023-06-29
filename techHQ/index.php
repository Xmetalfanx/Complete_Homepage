<?php

  $pageTitle = "TechHQ Frontpage";

  switch ($_SERVER['HTTP_HOST']) {
    case 'xmetal.x10.mx':
        $siteRoot = '/home/xmetalx1/domains/xmetal.x10.mx/public_html/';
        break;
    case 'xmetal.awardspace.us':
        $siteRoot = '/srv/disk1/xmetalfanx/www/xmetal.awardspace.us/';
        break;
    default:
        $siteRoot = 'local.domain';
        break;
    }

  include $siteRoot . "templates/tech/open/baseTechMAIN.tpl";

?>


<div class="d-none d-md-flex flex-dir-columns jc-center">
  <div class="h3 text-center">Educational Sites</div>
  <div class="list-container">
    <ul>
      <li> 
        <a href="https://www.khanacademy.org/" target="_blank" rel="noreferrer" aria-label="Link to Khan Academy">
          <img class="img-fluid" src="/techHQ/graphics/khan-academy.svg" alt="Khan Academy website Graphic"></a></li>
      <li> 
        <a href="https://www.digitalocean.com/community/" target="_blank" rel="noreferrer" aria-label="Link to Digital Ocean">
          <img class="img-fluid" src="/techHQ/graphics/digitalOcean.png" alt="Digital Ocean website Graphic"></a></li>
      <li> 
        <a href="http://www.scienceandmath.com/" target="_blank" rel="noreferrer" aria-label="Link to ScienceandMath.com">
          <img class="img-fluid" src="/graphics/mathandscience.png" alt="Science and Math.com website graphics" loading="lazy">
        </a>
      </li>
    </ul>
  </div>
  
  <div class="h3 text-center">Learning Linux</div>
  <div class="h4 text-center">Learning the Commandline</div>
  <div class="list-container">
    <ul>
      <li> <a href="https://linuxjourney.com/" target="_blank"></a><img class="d-none d-md-block img-fluid" src="../graphics/linux-journey.png" alt="Graphic link to Linux Journey website"></li>
      <li> <a href="http://www.explainshell.com" target="_blank"><img class="d-none d-md-block img-fluid" src="../graphics/explainshell.png" alt="graphic link to Explain Shell.com website"></a></li>
    </ul>
  </div>
</div>


<?php include $siteRoot . '/techHQ/modules/gaotd.tpl'; ?>

<?php include $siteRoot . '/modules/tech/baseTechFooter.tpl'; ?>
