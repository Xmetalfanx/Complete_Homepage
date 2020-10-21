<?php

	$sectionTitle = 'Software Section - ';

	include $path . '/modules/tech/baseTechHead.tpl';
?>


<body>
	<div >
		<?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

			<div class="main-section main-section--right-wide">
				<div class="sidebar">
					<?php include $path . '/techHQ/modules/techSoftwareCol1.tpl'; ?>
				</div>


				<div id="outputSection" class="pContent">
				</div>
			</div>

	<script src="/scripts/lazysizes.min.js"> </script>

	<!-- include baseTechFooter -->
	<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
