<?php

	$sectionTitle = 'Software Section - ';

	include($path .'/modules/tech/baseTechHead.tpl');

?>

<body onload="softwareData()">
	<div >
		<?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>

			<div class="main-section">
				<div class="sidebar">
					<?php include($path . '/techHQ/modules/techSoftwareCol1.tpl'); ?>
				</div>

				<div id="softwareSection" class="pContent">

				</div>
			</div>


		<!-- include baseTechFooter -->
		<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>

	<script type="application/javascript" src="/techHQ/scripts/software.js"></script>
