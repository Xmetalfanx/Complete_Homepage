<?php

	$sectionTitle = 'Main Section - ';
	include $sitePath . '/modules/tech/baseTechHeader.tpl';

?>
<body>
  <?php include $sitePath . '/modules/tech/techHQNavMenus.tpl'; ?>

	<div class="row">
		<div class="col-xs-12 col-md-2">
			<?php include $sitePath . '/techHQ/modules/techMainCol1.tpl'; ?>
		</div>

		<div class="col-xs-12 col-md-10" id="outputSection">

		</div>

	</div>

<!-- include baseTechFooter -->
<?php include $sitePath . '/modules/tech/baseTechFooter.tpl'; ?>
