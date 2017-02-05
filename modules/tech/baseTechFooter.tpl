</div> <!-- Ends mainBody -->

<div id="bottomHeader">
    <div id="siteInfo">
        <a href="/tecHQ/index.php">Home</a> |
        <a href="/techHQ/personal/personalIndex.php">About Me | </a>
        <a href="/techHQ/credit.php">Credits | </a>
        <a href="http://xmetalfanx.x10.mx/phpbb/" target="_blank">Forums</a> |
        <a href="/references.php">References | </a>
        <a href="/techHQ/references.php">Site Map | </a>
        <a href="/link.php"> Links | </a>
        <a href="#">Contact Me</a>
    </div><!-- Ends SiteInfo -->

    <?php

          $path = $_SERVER['DOCUMENT_ROOT'];
          $path .= "/modules/startpage.tpl";
          include_once($path);

    ?>

</div> <!-- Ends Bottom Header -->


<footer>
<!--for left aligned icons -->
	<div id="LBottomIcons">
		<a href="xml/rss_feeds.php">
		<img src="/techHQ/graphics/xmlgraphics/rss.gif" alt="RSS Graphic" class="bottomIcons">
		<img src="/techHQ/graphics/xmlgraphics/xml.gif" alt="Feed 2 J - RSS Feed to Javascript" class="bottomIcons"> </a>
	</div> <!-- End of LBottomIcons div -->

	<div id="copyrightFooter">
		2002- Present - Xmetalfanx@yahoo.com

		<a href="../techHQ/link.php">Website Validation Information</a>
	</div> <!--ends copyright footer  -->

</footer>

</body>
