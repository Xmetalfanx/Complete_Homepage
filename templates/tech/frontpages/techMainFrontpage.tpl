<?php

	$sectionTitle = 'Software Section - ';

	include $path . '/modules/tech/baseTechHead.tpl';
?>


<body>
	<div >
		<?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

			<div class="main-section main-section--right-wide">
				<div class="sidebar">
					<?php include $path . '/techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
				</div>


				<div id="outputSection" class="primary-content">
				</div>
			</div>


	<!-- include baseTechFooter -->
	<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
