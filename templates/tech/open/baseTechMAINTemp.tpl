<?php

	$sectionTitle = 'Main Section - ';

	include($path . "/modules/tech/baseTechHeader.tpl");

?>
<body>
    <div class="flexContainer">

		<?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>

			<div class="row mainSection">
				<div class="col-xs-12 col-md-2">
					<?php include($path . '/techHQ/modules/techMainCol1.tpl'); ?>
				</div>

				<div class="col-xs-12 col-md-10" id="outputSection">
