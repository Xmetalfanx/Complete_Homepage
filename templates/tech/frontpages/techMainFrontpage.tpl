<?php

	$sectionTitle = 'Software Section - ';

	include $rootDir . '/modules/tech/baseTechHead.tpl';
?>


<body>
	<div >
		<?php include $rootDir . '/modules/tech/techHQNavMenus.tpl'; ?>

			<div class="main-section main-section--right-wide">
				<div class="sidebar">
					<?php include $rootDir . '/techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
				</div>


				<div id="outputSection" class="primary-content">
				</div>
			</div>


	<!-- include baseTechFooter -->
	<?php include $rootDir . '/modules/tech/baseTechFooter.tpl'; ?>
