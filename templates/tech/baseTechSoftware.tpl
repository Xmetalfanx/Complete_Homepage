<?php

	$sectionTitle = 'Software Section - ';

	include($siteRoot .'/modules/tech/baseTechHead.tpl');

?>

<body onload="softwareData()">
	<?php include($siteRoot . '/modules/tech/techHQNavMenus.tpl'); ?>
		<div class="main-section--right-wide">
			<div class="sidebar">
				<?php include($siteRoot . '/techHQ/modules/sections/techSoftwareCol1.tpl'); ?>
			</div>
			<div id="softwareSection" class="primary-content">

			</div>

		<!-- include baseTechFooter -->
		<?php include($siteRoot . '/modules/tech/baseTechFooter.tpl'); ?>
  </div>

<script type="application/javascript" src="/techHQ/scripts/software-min.js"></script>
