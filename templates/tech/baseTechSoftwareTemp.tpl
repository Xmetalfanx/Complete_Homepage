<?php

	$sectionTitle = 'Software Section - ';

	include($path .'/modules/tech/baseTechHead.tpl');

?>

<body onload="softwareData()">
	<?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>
		<div class="main-section main-section--right-wide">
			<div class="sidebar">
				<?php include($path . '/techHQ/modules/sections/techSoftwareCol1.tpl'); ?>
			</div>
			<div id="softwareSection" class="primary-content">

			</div>
		</div>

		<!-- include baseTechFooter -->
		<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>

	<script type="application/javascript" src="/techHQ/scripts/software.js"></script>
