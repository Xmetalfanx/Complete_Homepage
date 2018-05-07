
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

  <!-- JQuery and Popper -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <!-- Boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>



  <!-- Universal CSS file-->
  <link href="../universalCSS/styling.css" rel="stylesheet" type="text/css" media="all">

  <!-- Link to My External Style Sheet - Specific for tech HQ -->
  <link rel="stylesheet" type="text/css" media="all" href="/techHQ/stylesheets/styling.css">

</head>

<body>

<?php include 'techHQNavMenus.tpl'; ?>
