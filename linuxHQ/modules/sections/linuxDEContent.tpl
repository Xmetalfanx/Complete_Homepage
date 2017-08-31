
<div id="LinuxSection">
  <!-- Call Distro Title Here -->
</div>
<div class="row"><h2>
  <?php echo $mainInfoDisplay["dename"]; ?></h2>

</div>
<div class="row">
  <div class="card col-lg-6">
    <div class="card-block">
      <div class="card-text">
        <div class="screenshots">
          <div class="font-weight-bold">Screenshots </div>

            <?php include $sitePath . '/linuxHQ/modules/database/sshotsdb.php'; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-lg-6">
    <div class="card-block">
      <div class="card-text">
        <div class="font-weight-bold">Homepage: </div>
        <div class="font-weight-normal">
          <?php echo $mainInfoDisplay["homepage"]; ?>
        </div>

        <div class="font-weight-bold">Desktop Catagory:
          <div class="font-weight-normal">
            <?php echo $mainInfoDisplay["category"];  ?>
          </div>
        </div>
        <div class="font-weight-bold">General Requirements:
          <div class="font-weight-normal"></div>
        </div>
        <div class="font-weight-bold">Distros that Feature:
          <div class="font-weight-normal"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <div class="card-text">
      <div class="container"><?php include $sitePath . "/linuxHQ/modules/sections/installHowTo.tpl"; ?></div>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <div class="card-text">
      <p>* "Distros that feature" means distributions that have an official ISO or officially supported version with the DE in question. That is not to say that you can not install this DE on other distros.<br /><br /></p>
      <p>Please note I have to double check any content about PCLinuxOS ...not saying its not accurate... just that I am not 100% sure of the line of code... when i check all of the package names (which is the only thing that WOULD be different if I got it wrong) .. I will remove this notation</p>
    </div>
  </div>
</div>
