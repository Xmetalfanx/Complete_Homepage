<?php

	$sectionTitle = 'TechHQ Section - ';
	include $path . '/modules/tech/baseTechHead.tpl';

?>
<body>
    <div >

		<?php include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

		<div class="main-section">
			<div class="sidebar">
				<?php include $path .'/techHQ/modules/sections/techCenterCol1.tpl'; ?>
			</div>

			<div class="primaryContent">

			</div>

		</div>

		<!-- include baseTechFooter -->
		<?php include $path . '/modules/tech/baseTechFooter.tpl'; ?>
