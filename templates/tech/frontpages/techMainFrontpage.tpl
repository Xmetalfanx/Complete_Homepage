<?php

	$sectionTitle = 'Software Section - ';

	include $siteRoot . '/modules/tech/baseTechHead.tpl';
?>


<body>
	<div >
		<?php include $siteRoot . '/modules/tech/techHQNavMenus.tpl'; ?>

			<div class="main-section main-section--right-wide">
				<div class="sidebar">
					<?php include $siteRoot . '/techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
				</div>


				<div id="output-section" class="primary-content">
				</div>
			</div>


	<!-- include baseTechFooter -->
	<?php include $siteRoot . '/modules/tech/baseTechFooter.tpl'; ?>
