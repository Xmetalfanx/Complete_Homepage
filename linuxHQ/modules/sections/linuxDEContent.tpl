<?php require $sitePath . '/linuxHQ/modules/screenshotSetup.php'; ?>


<div class="row">
  <h2>
  <?php echo $mainInfoDisplay["detitle"]; ?>
  </h2>

</div>

<div class="row">
  <div class="card col-lg-6">
    <div class="card-block">
      <div class="card-text">
        <div class="screenshots">
          <div class="font-weight-bold">Screenshots </div>
            
            <?php include $sitePath . '/linuxHQ/modules/screenshotSetup.php'; ?>
            
        </div>
      </div>
    </div>
  </div>


  <div class="card col-lg-6">
    <div class="card-block">
      <div class="card-text">
        <div class="font-weight-bold">Current Version: </div>
        <div class="font-weight-normal">
          <?php
            echo $mainInfoDisplay["currentversion"];
            ?>

        </div>
        <div class="font-weight-bold">Homepage: </div>
        <div class="font-weight-normal">
          <?php
            echo "<a href=\" " . $mainInfoDisplay["homepage"] . " \" target=\"_blank\" > " . $mainInfoDisplay["detitle"] . " Homepage </a>";
          ?>

        </div>
        <br />
        <div class="font-weight-bold">Desktop Catagory:
          <div class="font-weight-normal">
            <?php echo $mainInfoDisplay["catagory"];  ?>
          </div>
        </div>
        <br />
        <div class="font-weight-bold">General Requirements:
          <div class="font-weight-normal">
           <?php

              echo "Required Processor: " . $reqInfoDisplay['reqprocessor'] . "<br />";
              echo "Required Hard Drive Space:" . $reqInfoDisplay['reqhddspace'] . "<br />";
              echo "Required Memory: " . $reqInfoDisplay['reqmemory'] . "<br />";

          ?>
          </div>
        </div>

        <br />
        <div class="font-weight-bold">Distros that Feature:
          <div class="font-weight-normal">

            <?php echo $mainInfoDisplay["distrosfeature"]; ?>

          </div>
        </div>


        <br />
        <div class="font-weight-bold">Default Software</div>
          <div class="font-weight-normal">
            <?php

              echo "Text Editor: " . $softwareDisplay['texteditor'] . "<br />";
              echo "File Manager: " . $softwareDisplay["filemanager"] . "<br />";
              echo "Media Player: " . $softwareDisplay["mediaplayer"] . "<br />";
              echo "Image Viewer: " . $softwareDisplay["imageviewer"] . "<br />";
              echo "Archiver: " . $softwareDisplay["archiver"] . "<br />";
            ?>

          </div>

      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-block">
    <div class="card-text">
        
        <?php include $sitePath . "/linuxHQ/modules/sections/installHowTo.tpl"; ?>
          
    </div>
  </div>
</div>
<div class="card">
  <div class="card-block">
    <div class="card-text">
      
      <p class="smalltext">* "Distros that feature" means distributions that have an official ISO or officially supported version with the DE in question. That is not to say that you can not install this DE on other distros.<br /><br /></p>
      <p class="smalltext">Please note I have to double check any content about PCLinuxOS ...not saying its not accurate... just that I am not 100% sure of the line of code... when i check all of the package names (which is the only thing that WOULD be different if I got it wrong) .. I will remove this notation</p>
    
    </div>
  </div>
</div>
