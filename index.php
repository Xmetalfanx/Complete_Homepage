<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Xmetal&apos;s Homepage</title>
    <!-- JQuery-->
    <script src="http://xmetal.x10.mx/scripts/jquery-3.2.1.min.js"></script>
    <!-- For Navigation Menu from Bourbon.io and it's Refills section-->
    <script src="http://xmetal.x10.mx/scripts/nav.js" type="text/javascript"></script>
    <!-- Tether-->
    <script src="http://xmetal.x10.mx/frameworks/tether133/js/tether.min.js"></script>
    <!-- Bootstrap 4 alpha 6-->
    <link rel="stylesheet" href="http://xmetal.x10.mx/frameworks/bootstrap/css/bootstrap.min.css">
    <script src="http://xmetal.x10.mx/frameworks/bootstrap/js/bootstrap.min.js"></script>
    <link href="/universalCSS/styling.css" rel="stylesheet" type="text/css" media="all"> </head>

<body>
  
<div id="container">
    <header class="navigation">
      <div class="navigation-wrapper">
        <a href="http://xmetal.x10.mx" class="logo hidden-md-down">Xmetal's Homepage</a>

        <a id="js-mobile-menu" href="http://xmetal.x10.mx" class="navigation-menu-button">Xmetal's Homepage</a>
        <nav>
          <ul id="js-navigation-menu" class="navigation-menu show">
            <li class="nav-link"><a href="/linuxHQ/index.php">Linux HQ</a></li>
            <li class="nav-link"><a href="/techHQ/index.php">Tech HQ</a></li>
          </ul>
        </nav>
      </div>
    </header>



    <div class="hero">
        <div class="hero-content">
           <p>Please visit</p>
           <img src="/graphics/midfngr.jpg" alt="midfngr thumbnail" class="show-for-medium">
           <a href="https://www.youtube.com/user/midfingr/undefined" target="_blank" class="show-for-medium"> Midfngr's Youtube Channel</a>
       </div>
    </div>


    <ul class="bullets">
        <li class="bullet">
            <div class="bullet-content">
                <p>July 20, 2017 - Site under construction... I hope to make things look alot better on mobile devices .. this is part of the reason for the big change from alot of custom CSS Styles to "Bourbon.io" and Bootstrap (though Foundation looks like a good Bootstrap alternative)</p>
            </div>
        </li>
        <li class="bullet">
            <div class="bullet-content">
                <h4>My Github Other Github project </h4> <a href="https://github.com/Xmetalfanx/linuxSetup" target="_blank">
        LinuxSetup</a> - Helps a user setup some things with a menu system on Ubuntu, Fedora, OpenSuse, and (minor things for this distro ... so far) Solus. This includes adding well known third party repos, enabling coming setings not set by default, and adding common software in one shot
                <br />
                <br />
                <a href="https://github.com/Xmetalfanx/linuxThemes" target="_blank">
        LinuxThemeing</a> This originally was going to be a part of the LinuxSetup scripts, though it grew too much and I decided to branch it out. This installs themes and icon packs of well liked Linux Themes into your system. I have alot of plans for this for version and distro detection. </div>
        </li>
    </ul>

    <?php include 'modules/footer.tpl'; ?>

</div> <!-- Ends Container DIV -->

</body>

</html>
