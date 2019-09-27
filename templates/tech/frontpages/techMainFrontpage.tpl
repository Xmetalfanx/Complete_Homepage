<?php

	$sectionTitle = 'Software Section - ';

	include $path . '/modules/tech/baseTechHeader.tpl';
?>


<body>
 
  <?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

	<div class="row">
		<div class="col-xs-12 col-md-2">
			<?php include $path . '/techHQ/modules/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="outputSection" class="col-xs-12 col-md-10">
		</div>
	</div>

<script src="/scripts/lazysizes.min.js"> </script>

<!-- include baseTechFooter -->
<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
