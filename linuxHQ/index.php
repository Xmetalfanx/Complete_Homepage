<?php

    $title = 'Homepage';
    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/baseLinuxTemplate.tpl";
?>


<div class="row hidden-xs hidden-sm hidden-md">
  <div class="col-lg-6">
    <img src="graphics/tux-penguin-clip-art.jpg" width="119" height="117" alt="Tux Peguin Graphic"/>
  </div>


    <?php include "/home/xmetalx1/public_html" .'/linuxHQ/modules/distrowatch.tpl'; ?>
</div>


<div class="card">
  <div class="card-block">
    <h4 class="card-title">Introduction</h4>
    <div class="card-text">
      <p></p>Hello, I&amp;#8217d like to give a little background about my  experience with Linux, before you start browsing my site, to get a sense for where I am coming from. For a number of years now , I have been using Linux to some degree, and  have been using it more and more, while using  Windows less and less.
      <p></p>I  have recently found a number of Linux reviewers on Youtube that have  inspired me&#x9;to make a  page that hopefully can show that Linux is not something that is just  for programmers or advanced users.
      <p></p>Showing  Tutorials, My reviews (as well as others), and sites that have helped me over&#x9;the years, is TRUE goal I have with this section. The Linux related ideas I came up with to add to the main site started to get way out of hand to put in a "small section" so that's when I decided to do the split into TechHQ (former WIndows Section ... and still has some crossplatform stuff) and LinuxHQ.<a href="/linuxHQ/info/LinuxAboutMe.php">( Read More )</a>
    </div>
  </div>
</div>
<?php include $sitePath . '/modules/footer.tpl'; ?>
