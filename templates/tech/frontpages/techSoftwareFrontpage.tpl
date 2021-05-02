<?php

	$sectionTitle = 'Software Section - ';

	include $path . '/modules/tech/baseTechHead.tpl';
?>


<body onload="softwareData()">

	<?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

	<div class="main-section main-section--right-wide">
		<div class="sidebar">
			<?php include $path . '/techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="softwareSection" class="primary-content">

		</div>
	</div>

<!-- Call to my software.js file here -->
<script src="/techHQ/scripts/software-min.js"></script>

<!-- include baseTechFooter -->
<?php include $path . '/modules/footer.tpl'; ?>
