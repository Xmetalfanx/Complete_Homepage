<?php

	$sectionTitle = 'Main Section - ';

	include($path . '/modules/tech/baseTechHead.tpl');

?>
<body>

		<?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>

		<!-- Why is this mainBody id CSS here? -->
		<div class="mainSection" id="mainBody">
			<div class="sidebar">
				<?php include($path . '/techHQ/modules/sections/techMainCol1.tpl'); ?>
			</div>
			<div class="primaryContent" id="outputSection">

			</div>


		</div>
		<!~~ at this point the main row with the menu on the left and the right column is CLOSED -->

	<!-- include baseTechFooter -->
	<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>
