 <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/tech/baseTechHeadTag.php'); ?>

<body>
<div id="topBody">      <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/tech/baseTechHeader.php'); ?>
<div id="mainBody">
	   <div id="col1">
	      <?php include $_SERVER['DOCUMENT_ROOT'].('/techHQ/modules/techBrowsersCol1.php'); ?>
	   </div>

	  <div id="wideCol2">
	  	 <?php echo $the_content; ?>
	  </div>

	<?php include $_SERVER['DOCUMENT_ROOT'].('/techHQ/modules/techMainCol3.php') ?>

</div>

  <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/tech/baseTechFooter.php') ?>

</body>
</html>
