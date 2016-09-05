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

    <link rel="alternate" href="xml/site_updates.xml" type="application/rss+xml"
      title="Xmetalfanx Site Updates and Information">
    <link rel="alternate" href="security/securityIndex.php" type="application/rss+xml"
      title="Xmetalfanx Must Have Programs">
    <link rel="alternate" href="xml/program_updates.xml" type="application/rss+xml"
      title="Xmetalfanx Recently Added Programs">

    <link rel="index" href="/index.php">
    <link rel="home" href="/index.php">

    <!-- Link to a Cumlative Javascript file -->
    <script type="text/javascript" src="/scripts/MassJavascripts.js"></script>

    <!-- Link to External Style Sheet -->
    <link href="/windowsHQ/stylesheets/layout.css" rel="stylesheet" type="text/css" media="(min-width: 640px)">
    <link href="/windowsHQ/stylesheets/general.css" rel="stylesheet" type="text/css" media="(min-width: 640px)">

    <!-- Moble Style Sheets -->
    <link href="/windowsHQ/stylesheets/Mlayout.css" rel="stylesheet" type="text/css" media="(max-width: 639px) and (min-width: 400px)">
    <link href="/windowsHQ/stylesheets/Mgeneral.css" rel="stylesheet" type="text/css" media="(max-width: 639px) and (min-width: 400px)">
    <link href="/windowsHQ/stylesheets/startPageBox.css" rel="stylesheet" type="text/css" media="(min-width: 400px)">

    <!-- Small Screen CSS -->
    <link href="/windowsHQ/stylesheets/smallGeneral.css" rel="stylesheet" type="text/css" media="(max-width: 399px)">
    <link href="/windowsHQ/stylesheets/smallLayout.css" rel="stylesheet" type="text/css" media="(max-width: 399px)">

</head>

<body>
      <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/windows/baseWindowsHeader.php') ?>

<div id="mainBody">
    <?php include $_SERVER['DOCUMENT_ROOT'].('/windowsHQ/modules/WINDOWS_FAQN_Col1.php') ?>
      <div id="col2">
        <?php echo $the_content; ?>
      </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].('/windowsHQ/modules/winMainCol3.php') ?>
  
   <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/windows/baseWindowsFooter.php') ?>

</body>
</html>
