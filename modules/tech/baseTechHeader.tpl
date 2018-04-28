
<!DOCTYPE html>
<!-- the closing HTML tag has to be removed too -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    <?php

    $mainTitle = 'Xmetal TechHQ Section - ';

    global $sectiontitle;         // Allows the use of the $sectionTitle variable
    echo $mainTitle . $sectionTitle . $pageTitle;
    ?>

    </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="Description" content="Xmetafanx's Homepage is a site that can help you with Computer Problem, File Sharing News, Computer FAQ's, Security Information, Antivirus and Spyware Removal, and much much more..">

  <!-- Various Meta Tags-->
  <meta name="robots" content="index,follow,noodp">
  <meta name="googlebot" content="index,follow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="http://xmetal.x10.mx">
  <link rel="index" href="/index.php">
  <link rel="home" href="/index.php">

  <!-- JQuery-->
  <script src="/scripts/jquery.min.js"></script>

  <!-- Needed since 2017 for different Bourbon and related additions -->
  <script src="/scripts/tabRefills.js" type="text/javascript"></script>
  <script src="/scripts/vertTabs.js" type="text/javascript"></script>

  <!-- Tether-->
  <script src="/frameworks/tether/js/tether.min.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="/frameworks/bootstrap/css/bootstrap.min.css">
  <script src="/frameworks/bootstrap/js/bootstrap.min.js"></script>

  <!-- For Navigation Menu from Bourbon.io and it's Refills section   -->
  <script src="/scripts/nav.js" type="text/javascript"></script>

  <!-- Universal CSS file-->
  <link href="../universalCSS/styling.css" rel="stylesheet" type="text/css" media="all">

  <!-- Link to My External Style Sheet - Specific for tech HQ -->
  <link rel="stylesheet" href="/techHQ/stylesheets/styling.css">

  <!-- script type="text/javascript" src="/scripts/snow.js"></script>-->

</head>

<body>

<?php include 'techHQNavMenus.tpl'; ?>
