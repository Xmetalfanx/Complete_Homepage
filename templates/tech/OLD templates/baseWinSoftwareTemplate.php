<?php include $_SERVER['DOCUMENT_ROOT'].("backend/functionsWindows.php"); ?>

<!doctype html>
<html> 
<head>
   
  <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/tech/baseTechHeadTag.php'); ?>
</head>

<body>
      <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/windows/baseWindowsHeader.php'); ?>
  <div id="mainBody">
      <?php include $_SERVER['DOCUMENT_ROOT'].("/windowsHQ/modules/winSoftwareCol1.php"); ?>
        <div id="wideCol2">
           <?php echo $the_content; ?>
        </div>
        
   <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/windows/baseWindowsFooter.php') ?>

</body>
</html>
