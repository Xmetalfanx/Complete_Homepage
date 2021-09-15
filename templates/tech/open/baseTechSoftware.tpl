<?php

	$sectionTitle = 'Software Section - ';

	include($rootDir .'/modules/tech/baseTechHead.tpl');

?>

<!-- why is this up here? -->
<script src="/techHQ/scripts/software.js"></script>

<body onload="softwareData()">
	<?php include($rootDir . '/modules/tech/techHQNavMenus.tpl'); ?>

		<div class="main-section main-section--right-wide">
			<div class="sidebar">
				<?php include($rootDir . '/techHQ/modules/sections/techSoftwareCol1.tpl'); ?>
			</div>


			<div id="softwareSection" class="primary-content">
