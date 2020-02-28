<?php

	$sectionTitle = 'Software Section - ';

	include($path .'/modules/tech/baseTechHeader.tpl');

?>

<body onload="softwareData()">
	<div class="flexContainer">
		<?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>

			<div class="row mainSection mx-auto w-100">
				<div class="col-xs-12 col-md-2">
					<?php include($path . '/techHQ/modules/techSoftwareCol1.tpl'); ?>
				</div>

				<div id="softwareSection" class="col-xs-12 col-md-10">

				</div>
			</div>


		<!-- include baseTechFooter -->
		<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>

	<script type="application/javascript" src="/techHQ/scripts/software.js"></script>
