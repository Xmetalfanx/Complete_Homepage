<?php

		$pageTitle = 'Linux Distribution (AKA Version) Section Frontpage';
    $sitePath = "/home/xmetalx1/public_html";
    
		include $sitePath . "/templates/linux/blankTemplates/baseLinuxDistroBlank.tpl";
?>


<div class="container">
  <div class="card"> <span>code for Icon/graphic for distro goes here</span><span>code for Distro Name goes here as well </span></div>
  <div class="card">
    <div class="card-header">
      <h3>Basic Information</h3>
    </div>
    <div><span class="strong">Homepage: </span><br/><span class="strong">Downloads: </span><br/><span class="strong">Forums: </span><br/><span class="strong">Distrowatch Page: </span><br/><span class="strong">Desktop Options: </span></div>
  </div><br/>
  <div class="card">
    <div class="card-header">
      <h3>More Information</h3>
    </div>
    <div> <span class="strong">Target User</span><br/><span class="strong">Distros that are similiar:</span></div>
  </div><br/>
  <div class="card">
    <div class="card-header"> </div>
    <h3>Youtube Playlists</h3>
    <div>(note: there may not be links for "every distro, here")<br/><span class="strong">Youtube Reviews and Comments</span><br/><span class="strong">Youtube Tweaks/Tips/...etc </span></div>
  </div><br/><br/>
  <ul class="nav nav-tabs">
    <li class="nav-item"><a href="#" class="nav-link active">Screenshots</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Youtube Reviews</a></li>
    <li class="nav-item"><a href="#" class="nav-link">USB Creation </a></li>
  </ul>
</div>


<!-- SHOULD be outside OF THE mainBody DIV ... if its not, there is a problem -->
<?php include $sitePath . "/modules/footer.tpl"; ?>
