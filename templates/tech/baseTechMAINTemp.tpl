<?php

	$sectionTitle = 'Main Section - ';

	include($path . '/modules/tech/baseTechHeader.tpl');

?>
<body>
	<?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>

	<div class="row col-12" id="mainBody my-1">
		<div class="col-xs-12 col-md-2">
			<?php include($path . '/techHQ/modules/techMainCol1.tpl'); ?>
		</div>
	</div>

		<div class="col-xs-12 col-md-10" id="outputSection">

		</div>
	</div>

<!-- include baseTechFooter -->
<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>
