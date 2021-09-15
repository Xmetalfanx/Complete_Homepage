<?php

	$sectionTitle = 'Software Section - ';

	include $rootDir . '/modules/tech/baseTechHead.tpl';
?>


<body onload="softwareData()">

	<?php include $rootDir . '/modules/tech/techHQNavMenus.tpl'; ?>

	<div class="main-section main-section--right-wide">
		<div class="sidebar">
			<?php include $rootDir . '/techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="softwareSection" class="primary-content">

		</div>
	</div>

<!-- Call to my software.js file here -->
<script src="/techHQ/scripts/software-min.js"></script>

<!-- include baseTechFooter -->
<?php include $rootDir . '/modules/footer.tpl'; ?>
