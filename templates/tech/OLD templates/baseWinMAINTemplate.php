<?php include $_SERVER['DOCUMENT_ROOT'].("backend/functionsWindows.php"); ?>

<!doctype html>
<html> 
<head>
  <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/tech/baseTechHeadTag.php'); ?>
</head>

<body>
      <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/tech/baseTechHeader.php'); ?>

<div id="mainBody">
    <?php include $_SERVER['DOCUMENT_ROOT'].('/techHQ/modules/winMainCol1.php'); ?>
      <div id="col2">
        <?php echo $the_content; ?>
      </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].('/techHQ/modules/winMainCol3.php') ?>
  
   <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/tech/baseTechFooter.php') ?>

</body>
</html>
