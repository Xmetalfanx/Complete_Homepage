<!DOCTYPE html>
<head>
  <meta name="Description" content="Xmetafanx's LinuxHQ site is a page for ..">
  <title>Xmetal&apos;s LinuxHQ Section -</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="index" href="/index.php">


    <!-- JQuery-->
    <script src="/scripts/jquery-3.2.1.min.js"></script>

    <!-- For Navigation Menu from Bourbon.io and it's Refills section   -->
    <script src="/scripts/nav.js" type="text/javascript"></script>

    <script src="/scripts/tabRefills.js" type="text/javascript"></script>
    <script type="text/javascript">

    $(".js-vertical-tab-content").hide();
    $(".js-vertical-tab-content:first").show();

    /* if in tab mode */
    $(".js-vertical-tab").click(function(event) {
      event.preventDefault();

      $(".js-vertical-tab-content").hide();
      var activeTab = $(this).attr("rel");
      $("#"+activeTab).show();

      $(".js-vertical-tab").removeClass("is-active");
      $(this).addClass("is-active");

      $(".js-vertical-tab-accordion-heading").removeClass("is-active");
      $(".js-vertical-tab-accordion-heading[rel^='"+activeTab+"']").addClass("is-active");
    });

    /* if in accordion mode */
    $(".js-vertical-tab-accordion-heading").click(function(event) {
      event.preventDefault();

      $(".js-vertical-tab-content").hide();
      var accordion_activeTab = $(this).attr("rel");
      $("#"+accordion_activeTab).show();

      $(".js-vertical-tab-accordion-heading").removeClass("is-active");
      $(this).addClass("is-active");

      $(".js-vertical-tab").removeClass("is-active");
      $(".js-vertical-tab[rel^='"+accordion_activeTab+"']").addClass("is-active");
    });

    </script>

    <!-- Tether-->
    <script src="/frameworks/tether133/js/tether.min.js"></script>

    <!-- Bootstrap 4 alpha 6 -->
    <link rel="stylesheet" href="/frameworks/bootstrap/css/bootstrap.min.css">
    <script src="/frameworks/bootstrap/js/bootstrap.min.js"></script>

    <!-- Universal CSS file-->
    <link href="/universalCSS/styling.css" rel="stylesheet" type="text/css" media="all">

    <link href="/linuxHQ/stylesheets/styling.css" rel="stylesheet" type="text/css">

</head>
<!-- script type="text/javascript" src="/scripts/snow.js"></script>-->
<body>

    <header class="navigation">
      <div class="navigation-wrapper">
      <a href="/linuxHQ/index.php" class="logo hidden-md-down">Linux HQ</a>
      <a id="js-mobile-menu" href="/linuxHQ/index.php" class="navigation-menu-button">Linux HQ</a>
      <nav>
        <ul id="js-navigation-menu" class="navigation-menu show">
          <li class="nav-link">
            <a href="/linuxHQ/distros/distroHome.php"> Distributions</a></li>
          <li class="nav-link">
            <a href="/linuxHQ/desktops/desktopsIndex.php">Desktops</a></li>
          <li class="nav-link">
            <a href="/linuxHQ/tutorials/tutorialIndex.php">Tutorial</a></li>
          <li class="nav-link">
            <a href="/linuxHQ/apps/appIndex.php">Linux Apps</a></li>
          <li class="nav-link">
            <a href="/linuxHQ/tic/TICHome.php">Theme/Icons/Cursors</a></li>
        </ul>
      </nav>
    </div>
    </header>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Introduction</h3>
  </div>
  <div class="panel-body">
		<p>This section will contain PPA information and other linux program information not suitable for the
		TechHQ Software section which contains main cross platform </p>
  </div>
</div>

<div class="vertical-tabs-container">
  <div class="vertical-tabs">
    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab is-active">Graphics Programs</a>
    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab">Internet Programs</a>
    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab">Multimedia Programs</a>
    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab">Item 4</a>
  </div>

  <div class="vertical-tab-content-container">
    <a href="#graphics" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading is-active">Graphics Programs</a>
    <div id="graphics" class="js-vertical-tab-content vertical-tab-content">
      <h3>Editors</h3>
      <ul>
        <li><a href="https://www.gimp.org/">GIMP</a></li>
        <li><a href="https://pinta-project.com/pintaproject/pinta/">Pinta</a></li>
      </ul>
      <h3>Viewers</h3>
    </div>

    <a href="#internet" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">Internet Apps</a>
    <div id="internet" class="js-vertical-tab-content vertical-tab-content">
      <h3>Chat Programs</h3>
      <ul>
        <li>Hexchat</li>
        <li>Pidgin</li>
      </ul>
      <h3>Emails Programs</h3>
      <ul>
        <li>Thunderbird</li>
      </ul>
      <h3>Web Browsers</h3>
      <ul>
        <li>Chromium</li>
        <li>Google Chrome</li>
        <li>Mozilla Firefox</li>
        <li>Pale Moon</li>
        <li>Vivaldi</li>
      </ul>
    </div>

    <a href="#tab3" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">Multimedia Apps</a>
    <div id="tab3" class="js-vertical-tab-content vertical-tab-content">
      <p>Donec  turpis.</p>
    </div>

    <a href="#tab4"  class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">Item 4</a>
    <div id="tab4" class="js-vertical-tab-content vertical-tab-content">
      <p>Sociis sapien.</p>
    </div>
  </div>
</div>


<hr>

</body>
</html>
