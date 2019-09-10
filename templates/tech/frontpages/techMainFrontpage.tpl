<?php

	$sectionTitle = 'Software Section - ';

	include $sitePath . '/modules/tech/baseTechHeader.tpl';
?>


<body>
 
  <?php include $sitePath . '/modules/tech/techHQNavMenus.tpl'; ?>

	<div class="row">
		<div class="col-xs-12 col-md-2">
			<?php include $sitePath . '/techHQ/modules/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="outputSection" class="col-xs-12 col-md-10">
		</div>
	</div>

<!-- Call to my software.js file here --> 
<script src="/scripts/lazyload.js"> </script>

<!-- include baseTechFooter -->
<?php include $sitePath . '/modules/tech/baseTechFooter.tpl'; ?>
