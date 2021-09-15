<?php

	 $pageTitle = 'Ad/Content Blocking - Ublock Tutorial';

	 $rootDir = '/home/xmetalx1/domains/xmetal.x10.mx/public_html/';
	 include $rootDir . "/templates/tech/open/baseTechBrowser.tpl";

?>

<div class="card w-75 mx-auto border border-primary">
  <div class="card-header">Knowing if Ublock Origin is enabled or disabled</div>
  <div class="card-text mx-auto p-3">
    <ul>
      <li>Ublock Enabled (note: Blue Color)
      <img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockEnabled.jpg" alt="Ublock Enabled"></li>
      <br/> 
      <li>Ublock Disabled (note: Grey Color)
      <img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockDisabled.jpg" alt="Ublock Disabled"></li>
    </ul>
  </div>
</div>

<br/><br/>

<div class="card d-none d-lg-block w-75 mx-auto border border-primary">
  <div class="card-header">Enable Advanced Mode in Ublock Origin</div>
  <div class="card-text mx-auto p-3">
    <img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockDashSettingsAdvancedUser.jpg" class="w-80" alt="Ublock Disabled">
  </div>
</div>

<?php require $rootDir . "/modules/tech/baseTechFooter.tpl"; ?>
