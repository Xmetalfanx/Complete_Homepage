<?php

	 $pageTitle = 'Ad/Content Blocking - Ublock Tutorial';

	 $path = getenv('DOCUMENT_ROOT');
	 include $path . "/templates/tech/open/baseTechBrowser.tpl";

?>

<div class="card w-75 mx-auto border border-primary">
  <div class="card-header">Knowing if Ublock Origin is enabled or disabled</div>
  <div class="card-text mx-auto">
    <div>
      <img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockEnabled.jpg" alt="Ublock Enabled"> Ublock Enabled (note: Blue color)
    </div>
    <div>
      <img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockDisabled.jpg" alt="Ublock Disabled"> Ublock Disabled (note: Grey Color)
    </div>
  </div>
</div>

<br /><br />

<div class="card w-75 mx-auto border border-primary d-none d-lg-block">
  <div class="card-header">Enable Advanced Mode in Ublock Origin</div>
  <div class="card-text mx-auto">
    <img class="" src="/techHQ/browsers/adblocking/screenshots/ublock/ublockDashSettingsAdvancedUser.jpg" alt="Ublock Disabled">
  </div>
</div>

<?php include $path . "/modules/tech/baseTechFooter.tpl"; ?>
