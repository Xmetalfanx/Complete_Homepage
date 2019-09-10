<?php

	$sectionTitle = 'Software Section - ';

<<<<<<< HEAD
	include $sitePath . '/techHQ/modules/variables/icons.php';
	include $sitePath . '/modules/tech/baseTechHeader.tpl';
=======
	include($path .'/modules/tech/baseTechHeader.tpl');
>>>>>>> 826e5e6a... TechHQ Frontpage and Footer Tweaks

?>


<body onload="softwareData()">
 
  <?php include($path . '/modules/tech/techHQNavMenus.tpl'); ?>

	<div class="row">
		<div class="col-xs-12 col-md-2">
			<?php include($path . '/techHQ/modules/techSoftwareCol1.tpl'); ?>
		</div>

		<div id="softwareSection" class="col-xs-12 col-md-10">

		</div>
	</div>

<!-- Call to my software.js file here -->
<script src="/techHQ/scripts/software.js"></script>
<script src="/scripts/lazysizes.min.js"></script>

<!-- include baseTechFooter -->
<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>

<script src="/techHQ/scripts/software.js"></script>
