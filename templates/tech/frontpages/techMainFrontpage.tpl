<?php

	$sectionTitle = 'Software Section - ';

	$path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/baseTechHeader.tpl';
?>


<body>
 
  <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

	<div class="row">
		<div class="col-xs-12 col-md-2">
			<?php $path = getenv('DOCUMENT_ROOT'); include $path . '/techHQ/modules/techSoftwareCol1.tpl'; ?>
		</div>


		<div id="outputSection" class="col-xs-12 col-md-10">
		</div>
	</div>

<!-- Call to my software.js file here --> 
<script src="/scripts/lazyload.js"> </script>

<!-- include baseTechFooter -->
<?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/baseTechFooter.tpl'; ?>
