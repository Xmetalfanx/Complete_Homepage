<?php

	$sectionTitle = 'Software Section - ';

	include $siteRoot . '/modules/tech/baseTechHead.tpl';
?>


<body onload="softwareData()">

	<?php include $siteRoot . '/modules/tech/techHQNavMenus.tpl'; ?>

	<div class="main-section main-section--right-wide">
		<div class="sidebar">
			<?php include $siteRoot . '/techHQ/modules/sections/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="softwareSection" class="primary-content">

		</div>
	</div>

<!-- Call to my software.js file here -->
<script src="/techHQ/scripts/software-min.js"></script>

<!-- include baseTechFooter -->
<?php include $siteRoot . '/modules/footer.tpl'; ?>
