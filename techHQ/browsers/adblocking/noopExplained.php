<?php

	 $pageTitle = 'Ad/Content Blocking - Noop Filters Explained';

	 switch ($_SERVER['HTTP_HOST']) {
    case 'xmetal.x10.mx':
        $siteRoot = 'xmetal.x10.mx';
        break;
    case 'xmetal.awardspace.us':
        $siteRoot = '/srv/disk1/xmetalfanx/www/xmetal.awardspace.us/';
        break;
    default:
        $siteRoot = 'local.domain';
        break;
  }

	 include $siteRoot . "/templates/tech/open/baseTechBrowser.tpl";

?>

<div class="card w-95 mx-auto border">
  <div class="card-header">Noop Filtering</div>
  <div class="card-text mx-auto p-3">
    <div>When using Dynamic (Ublock Origin Advanced Mode) and Static Filtering (the typical filter lists that most adblockers user); together, Dynamic filtering take priority.  For example, you could use a green (allow) filter on a site to ALLOW a connection that would have been blocked in the one of the filter lists.</div>
    <br/>

    <div>Noop filtering DISABLES the Dynamic filtering, but still allows the static filtering to block if need-be. I admit when I didn't understand Noop Filtering, I would just set something to Allow (green), though now I see this is the better option because this is sort of an "allow, IF the "</div>
    <br/>

    <div>A Way to think of the three filtering levels is this:</div>
    
    <ul>
      <li>
        <span class="greenText">Green</span>
        - ALLOW - Green Dynamic Filters allow the connection.  If the item is in one of the enabled blocklists (the Static filtering lists), this will allow the connection anyway... This is an alternative to for that page "turning Ublock Origin off completely", I suppose</li>
      <li>
        <span class="darkGreyText">Dark Grey</span>
        - Noop - This disables any dynamic filtering on that particular element but still allows static lists to block, IF the element is found in any of them.</li>
      <li>
        <span class="redText">Red</span>
        - BLOCK - This blocks an element/connection "no matter what".</li>
    </ul>
  
  </div>
</div>

<div>Also remember as I said on another Ublock Origin page I have .. there are Global (this would apply for that domain no matter the page you are on) and local (only applies to that current website you are on, for the domain you are setting a rule for), rules</div>

<?php require $siteRoot . "/modules/tech/baseTechFooter.tpl"; ?>
