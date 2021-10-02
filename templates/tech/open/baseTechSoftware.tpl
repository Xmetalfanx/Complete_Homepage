<?php

	$sectionTitle = 'Software Section - ';

	include($siteRoot .'/modules/tech/baseTechHead.tpl');

?>

<!-- why is this up here? -->
<script src="/techHQ/scripts/software.js"></script>

<body onload="softwareData()">
	<?php include($siteRoot . '/modules/tech/techHQNavMenus.tpl'); ?>

		<div class="main-section main-section--right-wide">
			<div class="sidebar">
				<?php include($siteRoot . '/techHQ/modules/sections/techSoftwareCol1.tpl'); ?>
			</div>


			<div id="softwareSection" class="primary-content">
