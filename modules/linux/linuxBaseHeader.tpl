<!DOCTYPE html>
<head>
  <meta name="Description" content="Xmetafanx's LinuxHQ site is a page for ..">
  <title>
  <?php

    $mainTitle = 'Xmetal LinuxHQ Section - ';

    global $sectiontitle;         // Allows the use of the $sectionTitle variable

    echo $mainTitle . $sectionTitle . $pageTitle;
    ?>

  </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="index" href="/index.php">


    <!-- JQuery-->
    <script src="/scripts/jquery.min.js"></script>

    <!-- For Navigation Menu from Bourbon.io and it's Refills section   -->
    <script src="/scripts/nav.js" type="text/javascript"></script>

    <script src="/scripts/tabRefills.js" type="text/javascript"></script>
    <script src="/scripts/vertTabs.js" type="text/javascript"></script>

    <!-- Tether-->
    <script src="/frameworks/tether/js/tether.min.js"></script>

    <!-- Bootstrap 4 alpha 6 -->
    <link rel="stylesheet" href="/frameworks/bootstrap/css/bootstrap.min.css">
    <script src="/frameworks/bootstrap/js/bootstrap.min.js"></script>

    <!-- Universal CSS file-->
    <link href="/universalCSS/styling.css" rel="stylesheet" type="text/css" media="all">

    <link href="/linuxHQ/stylesheets/styling.css" rel="stylesheet" type="text/css">

</head>
<!-- script type="text/javascript" src="/scripts/snow.js"></script>-->
<body>

  <?php include 'linuxNavMenu.tpl'; ?>
