<!DOCTYPE html>
<!-- the closing HTML tag has to be removed too -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $completeTitle; ?></title>
  <meta name="Description" content="Xmetafanx's Homepage is a site that can help you with Computer Problem, File Sharing News, Computer FAQ's, Security Information, Antivirus and Spyware Removal, and much much more..">

  <!-- Various Meta Tags-->
  <meta name="robots" content="index,follow,noodp">
  <meta name="googlebot" content="index,follow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="http://xmetal.x10.mx">
  <link rel="index" href="/index.php">
  <link rel="home" href="/index.php">

  <!-- JQuery-->
  <script src="/scripts/jquery-3.2.1.min.js"></script>

  <!-- Needed for tab'd layout options I am trying -->
  <script src="/scripts/tabRefills.js" type="text/javascript"></script>


  <!-- Tether-->
  <script src="/frameworks/tether133/js/tether.min.js"></script>

  <!-- Bootstrap 4 alpha 6 -->
  <link rel="stylesheet" href="/frameworks/bootstrap/css/bootstrap.min.css">
  <script src="/frameworks/bootstrap/js/bootstrap.min.js"></script>

  <!-- For Navigation Menu from Bourbon.io and it's Refills section   -->
  <script src="/scripts/nav.js" type="text/javascript"></script>

  <!-- Universal CSS file-->
  <link href="../universalCSS/styling.css" rel="stylesheet" type="text/css" media="all">

  <!-- Link to My External Style Sheet - Specific for tech HQ -->
  <link rel="stylesheet" href="/stylesheets/styling.css">

  <!-- script type="text/javascript" src="/scripts/snow.js"></script>-->

</head>

<body>

  <header class="navigation">
    <div class="navigation-wrapper">
      <a href="/techHQ/index.php" class="logo hidden-md-down">Tech HQ</a>
      <a id="js-mobile-menu" href="/techHQ/index.php" class="navigation-menu-button">Tech HQ</a>
      <nav>
        <ul id="js-navigation-menu" class="navigation-menu show">
          <li class="nav-link">
            <a href="/techHQ/software/softwareIndex.php">Software</a></li>
          <li class="nav-link">
            <a href="/techHQ/techcenter/techCenterIndex.php">Tech Center ( Tips/Tutorials )</a></li>
          <li class="nav-link">
            <a href="/techHQ/browsers/browserIndex.php">Web Browser </a></li>
          <li class="nav-link">
            <a href="/techHQ/security/securityIndex.php">Security</a></li>
        </ul>
      </nav>
    </div>
  </header>
