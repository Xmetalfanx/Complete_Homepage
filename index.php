<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Xmetal&apos;s Homepage</title><?php include 'modules/headerInclude.tpl'; ?>
    <!-- Universal CSS file-->
    <link href="/universalCSS/styling.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body>
    <!-- Header "navigation"-->
    <?php include 'modules/frontnav.tpl'; ?>
    <div class="coverImage d-none d-lg-block"></div>

    <div id="mainBody" class="row">
      <div class="col-6">
        <div class="font-weight-bold">October 11th Update</div>
        <div>The site is a bit of a mess atm, while I try to get some things I have been planning for awhile, out of the idea state and into production so to speak. Please bear with me here</div>
      
      
        <div class="font-weight-bold">July 30 Update</div>
        <div>I am working on the JSON/AJAX idea I have to completely redo a number of things on both sides of the site, and hopefully this will allow me to have better code, and make it easier to manage things </div>
        <div>I am also in the process of trying out <a href="https://bootswatch.com/" target="_blank">Bootswatch </a>for styling so things may have changed in odd ways now .. for instance I notice there are lime-green links with the theme I choose ... the GOAL of this is to have styles pre-done and that will allow me to focus on the CONTENT of the site </div>
      </div>

      <div class="col-6">
        <a href="https://github.com/Xmetalfanx" target="_blank">
        <i class="fa fa-github fa-inverse fa-2x"></i></a>
        
        <div class="font-weight-bold">My Github Other Github project</div>
        <a href="https://github.com/Xmetalfanx/linuxSetup" target="_blank">LinuxSetup</a>- 
        Helps a user setup some things with a menu system on Ubuntu, Fedora, OpenSuse, and 
        (minor things for this distro ... so far) Solus.   This includes adding well known third party repos, 
        enabling coming setings not set by default, and adding common software in one shot<br><br>
        
        <a href="https://github.com/Xmetalfanx/linuxThemes" target="_blank">LinuxThemeing</a> 
        This originally was going to be a part of the LinuxSetup scripts, though it grew too much and I decided 
        to branch it out.
        This installs themes and icon packs of well liked Linux Themes into your system.  
        I have alot of plans for this for version and distro detection.
      </div>
    </div>
    <?php include 'modules/footer.tpl'; ?>
  </body>
</html>
