<?php

	$sectionTitle = 'Software Section - ';

	include $sitePath . '/techHQ/modules/variables/icons.php';
	include $sitePath . '/modules/tech/baseTechHeader.tpl';
	include $sitePath . '/techHQ/modules/techderequest.php';

?>
<body>
  <?php include $sitePath . '/modules/linux/linuxNavMenu.tpl'; ?>

	<div class="row">
		<div class="col-xs-12 col-md-2">
				<?php include $sitePath . '/techHQ/modules/techSoftwareCol1.tpl'; ?>
			</div>

			<div id="softwareSection" class="col-xs-12 col-md-10">

			</div>

		</div>
	</div>

	<!-- include baseTechFooter -->
	<?php include $sitePath . '/modules/tech/baseTechFooter.tpl'; ?>
