<?php
        $title = 'Homepage';
        $sitePath = "/home/xmetalx1/public_html";
        include $sitePath . "/templates/linux/baseLinuxTemplate.tpl";
?>

<div class="row">
  <div class="col-lg-6">
    <img src="graphics/tux-penguin-clip-art.jpg" width="119" height="117" alt="Tux Peguin Graphic" />

  </div>

  <div class="col-lg-6 hidden-xs hidden-md hidden-sm">
    <?php include $sitePath . "/linuxHQ/modules/distrowatch.tpl"; ?>

  </div>

</div>

<div class="panel panel-default">
  <div class="panel-heading"> Introduction</div>
  <div class="panel-body">

      <p class="justified">Hello, I&#8217d like to give a little background about my  experience with Linux, before you start browsing my site, to get a sense for where I am coming from. For a number of years now , I have been using Linux to some degree, and  have been using it more and more, while using  Windows less and less.</p>

      <p class="justified">I  have recently found a number of Linux reviewers on Youtube that have  inspired me	to make a  page that hopefully can show that Linux is not something that is just  for programmers or advanced users.</p>

      <p class="justified">Showing  Tutorials, My reviews (as well as others), and sites that have helped me over	the years, is TRUE goal I have with this site, as a Linux  Section to my first site	( <A HREF="http://xmetalfanx.x10.mx/">http://xmetalfanx.x10.mx</A> ) seems to be getting a more out ofhand section, the more ideas I come up with.</p>

      <p>
        <a href="info/aboutMe.php">( Read More )</a>
      </p>
  </div>
</div>


<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
