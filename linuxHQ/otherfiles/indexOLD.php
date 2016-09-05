<?php include $_SERVER['DOCUMENT_ROOT'].("backend/functionsLinux.php"); ?>
<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/aboutme/experience.php'); ?>


<!doctype html>
<html>

<?php 
        $title = 'Homepage';
        include $_SERVER['DOCUMENT_ROOT'].('/modules/linux/linuxBaseHeadTag.php'); 

?>
<body>
 
 <div id="totalBody">
    <?php include $_SERVER['DOCUMENT_ROOT'].("/modules/linux/linuxBaseHeader.php"); ?>

    <div id="mainBody">
      <div id="distrowatch">
          <script language="JavaScript" src="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Fdistrowatch.com%2Fnews%2Fdw.xml&chan=y&num=5&desc=1&utf=y&css=full"
                    charset="UTF-8" type="text/javascript"></script>
          <noscript>
            <a href="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Fdistrowatch.com%2Fnews%2Fdw.xml&chan=y&num=5&desc=1&utf=y&css=full&html=y">
              View RSS feed</a>
          </noscript>
      </div>


      <img src="graphics/tux-penguin-clip-art.jpg" width="119" height="117"  alt="Tux Peguin Graphic" /><br />
              <p class="boldUnderline">Changes: December 27, 2014</p>
        
        <div class="mainSiteUList">
          <ul>
            <li>Fixed the fonts to make them look better in Linux</li>
            <li>I have tweaked/fixed the CSS in the Distro sections to look better </li>
            <li>TO DO: Add Netrunner (both versions) and Neptune to the Distro Section AND actually put
              the Desktop Section up</li>
          </ul>
        </div>
        <p class="boldUnderline">Introduction</p>
        <p class="justified">Hello, I'd like to give a little background about my  experience with Linux, before
          you start browsing my site, to get a sense for where I am coming from. For a number of years now , I  have
          been using Linux to some degree, and  have been using it more and more, while using  Windows less and less.</p>

		<div id="999linuxAboutMe">
          <?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/aboutme/linuxAboutMe.php'); ?>
		</div>
          <p class="justified">I  have recently found a number of Linux reviewers on Youtube that have  inspired me
            to make a  page that hopefully can show that Linux is not something that is just  for programmers or
            advanced users.</p>

            <p class="justified">Showing  Tutorials, My reviews (as well as others), and sites that have helped me over
              the years, is TRUE goal I have with this site, as a Linux  Section to my first site
              ( <A HREF="http://xmetalfanx.x10.mx/">http://xmetalfanx.x10.mx</A> ) seems to be getting a more out of
              hand section, the more ideas I come up with.</p>


              <p><a href="info/aboutMe.php">( Read More )</a></p>

              <?php include $_SERVER['DOCUMENT_ROOT'].('/modules/linux/linuxBaseFooter.php'); ?>
              </div>
              <div id="valIcons">
                  <img src="../../../graphics/val/w3ccss.gif"  alt="w3css icon" width="88" height="31" class="right"/>

                  <a href="https://www.totalvalidator.com/" target="_blank"><img src="/techHQ/graphics/val/tValIcons/xhtml/valid_n_xhtml_5.gif" 
                  alt="Total Validator Icon"
                     width="88" height="31" class="right"/></a>
              </div>
              
      </div>

</body>
</html>
