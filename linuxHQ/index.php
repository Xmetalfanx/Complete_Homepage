<?php

    $title = 'Homepage';
    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/baseLinuxTemplate.tpl";
?>

  <div class="row">

    <div class="col-lg-6">
      <h4>Introduction</h4>

      <p>Hello, I'd like to give a little background about my  experience with Linux, before you start browsing my site, to get a sense for where I am coming from. For a number of years now , I have been using Linux to some degree, and  have been using it more and more, while using  Windows less and less.</p>
      <p>I have recently found a number of Linux reviewers on Youtube that have  inspired me&#x9;to make a  page that hopefully can show that Linux is not something that is just  for programmers or advanced users.</p>
      <p>Showing  Tutorials, My reviews (as well as others), and sites that have helped me over&#x9;the years, is TRUE goal I have with this section. The Linux related ideas I came up with to add to the main site started to get way out of hand to put in a "small section" so that's when I decided to do the split into TechHQ (former WIndows Section ... and still has some crossplatform stuff) and LinuxHQ.</p>

      <!-- not sure if i still have this file -->
      <a href="/linuxHQ/info/LinuxAboutMe.php">( Read More )</a>
    </div>

    <div class="col-lg-6 hidden-xs hidden-sm col-md-12 col-lg-12 col-xl-12">

      <!-- Distrowatch RSS Feed -->
      <?php include $sitePath . "/linuxHQ/modules/distrowatch.tpl"; ?>

    </div>

  </div> <!--- Ends Row -->

  <!-- OMGUbuntu RSS feed/news -->
  <!-- should be OUTSIDE of the row above BUT INSIDE #mainBody -->
  <?php include $sitePath . "/linuxHQ/modules/omgubuntu.tpl"; ?>



<?php include $sitePath . "/modules/footer.tpl"; ?>
