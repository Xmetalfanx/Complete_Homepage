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

  <!-- JQuery and Popper -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <!-- Tether-->
    <script src="/frameworks/tether/js/tether.min.js"></script>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="/frameworks/bootstrap//css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="/frameworks/bootstrap/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <!-- Universal CSS file-->
    <link href="/universalCSS/styling.css" rel="stylesheet" type="text/css" media="all">

    <link href="/linuxHQ/stylesheets/styling.css" rel="stylesheet" type="text/css">

</head>
<!-- script type="text/javascript" src="/scripts/snow.js"></script>-->
<body>

  <?php include 'linuxNavMenu.tpl'; ?>
