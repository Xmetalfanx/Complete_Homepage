<?php

	$sectionTitle = 'TechHQ Section - ';
	$path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/baseTechHeader.tpl';

?>

  <?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/techHQNavMenus.tpl'; ?>

<div class="row">
	<div class="col-xs-12 col-md-2">
	    <?php $path = getenv('DOCUMENT_ROOT'); include $path .'/techHQ/modules/techCenterCol1.tpl'; ?>
	</div>

	<div class="col-xs-12 col-md-10">

	</div>

</div>

<!-- include baseTechFooter -->
<?php $path = getenv('DOCUMENT_ROOT'); include $path . '/modules/tech/baseTechFooter.tpl'; ?>
