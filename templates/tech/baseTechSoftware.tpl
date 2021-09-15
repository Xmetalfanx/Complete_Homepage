<?php

	$sectionTitle = 'Software Section - ';

	include($rootDir .'/modules/tech/baseTechHead.tpl');

?>

<body onload="softwareData()">
	<?php include($rootDir . '/modules/tech/techHQNavMenus.tpl'); ?>
		<div class="main-section--right-wide">
			<div class="sidebar">
				<?php include($rootDir . '/techHQ/modules/sections/techSoftwareCol1.tpl'); ?>
			</div>
			<div id="softwareSection" class="primary-content">

			</div>

		<!-- include baseTechFooter -->
		<?php include($rootDir . '/modules/tech/baseTechFooter.tpl'); ?>
  </div>

<script type="application/javascript" src="/techHQ/scripts/software-min.js"></script>
