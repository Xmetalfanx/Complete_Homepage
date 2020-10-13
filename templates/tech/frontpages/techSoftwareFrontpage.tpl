<?php

	$sectionTitle = 'Software Section - ';

	include $path . '/modules/tech/baseTechHead.tpl';
?>


<body onload="softwareData()">
	<div class="flexContainer">
	<?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

	<div class="mainSection">
		<div class="col-xs-12 col-md-3 col-xl-2">
			<?php include $path . '/techHQ/modules/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="softwareSection" class="col-xs-12 col-md-9 col-xl-10">

		</div>
	</div>

<!-- Call to my software.js file here -->
<script src="/techHQ/scripts/software.js">
</script>
<script src="/scripts/lazysizes.min.js"></script>

<!-- include baseTechFooter -->
<?php include $path . '/modules/footer.tpl'; ?>
