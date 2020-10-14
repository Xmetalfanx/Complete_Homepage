<?php

	$sectionTitle = 'Main Section - ';

	include($path . '/modules/tech/baseTechHead.tpl');

?>
<body>
    <div >
		<?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>

		<!-- Why is this mainBody id CSS here? --> 
		<div class="mainSection" id="mainBody">
			<div class="col-xs-12 col-md-3 col-xl-2">
				<?php include($path . '/techHQ/modules/techMainCol1.tpl'); ?>
			</div>
			<div class="col-xs-12 col-md-9 col-xl-10" id="outputSection">

			</div>


		</div>
		<!~~ at this point the main row with the menu on the left and the right column is CLOSED -->

	<!-- include baseTechFooter -->
	<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>
