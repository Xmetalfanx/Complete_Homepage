<?php include $_SERVER['DOCUMENT_ROOT'].("backend/functionsWindows.php"); ?>

<!doctype html>
<html> 
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title> <?php echo $the_title; ?> </title>
    
    <meta name="Keywords" content="Xmetalfanx, Xmetalfanx's Homepage, File Sharing, Freeware, Shareware, Antiviruses, Spyware Scanners, Computer FAQ's, Computer Help, Computer Security, Firefox">
    <meta name="Description" content="Xmetafanx's Homepage is a site that can help you with Computer Problem, File Sharing News, Computer FAQ's, Security Information, Antivirus and Spyware Removal, and much much more..">
    
	<!-- Various Meta Tags -->
    <meta name="robots" content="index,follow,noarchive">
    <meta name="googlebot" content="nofollow">

<div id="body">
  <?php include('/modules/baseWindowsHeader.php'); ?>
  <div id="mainBody">
		<?php include('/windowsHQ/modules/winSoftwareCol1.php'); ?>
	
			<?php echo $the_content; ?>
		</div> <!-- end of col2 -->
   <!-- </div> end of mainBody DIV -->

  <?php include('modules/baseWindowsFooter.php');  ?>
</div>