<?php

	 $pageTitle = 'Ad/Content Blocking - ';

	 switch ($_SERVER['HTTP_HOST']) {
    case 'xmetal.x10.mx':
        $siteRoot = '/home/xmetalx1/domains/xmetal.x10.mx/public_html';
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

<h2>Dynamic Filtering Examples </h2>
<div class="card shadow">
  <div class="card-header">Allowing a connection from a third party domain, on a site, BYPASSING any static filter</div>
  <div class="card-text p-3">
    <div>A Website needs a connection from a domain for something, and with the active Static filters (filter lists), the element coming from that domain is blocked, because, something in a filter list is being triggered.</div>
    <div>Here you can set the connection from, that particular domain to Allow (Green), which will allow the connection, BYPASSING any static filtering that may be getting in the way.</div>
  </div>
</div><br/> 
<h2>Examples of Noop Filtering</h2>
<div class="card shadow">
  <div class="card-header">Overiding a global Block (Red), Dynamic filter</div>
  <div class="card-text p-3">
    <div>OK just remember a global filter for a domain will effect ANY/EVERY site you are on.   A Global block filter will block the connection from that domain and it doesn't matter if it's in one of the static filter lists or not ... it WILL BE BLOCKED.</div><br/>
    <div>Now what if for a certain domain you want "to block it IF it's in one of the typical static filterlists, BUT do not want to outright block it via the global BLOCK dynamic filter.".  </div><br/>
    <div>Here is where the Noop (Dark Grey) LOCAL Dynamic filter would come in.   You set the local dynamic filter for that domain to Noop, then it will "allow, UNLESS on a blocklist", just for that site, but since that domain has a GLOBAL dynmaic filter, set to BLOCK, that domain's connections on any other website would still be BLOCKED.</div>
  </div>
</div>



<?php require $siteRoot . "/modules/tech/baseTechFooter.tpl"; ?>
