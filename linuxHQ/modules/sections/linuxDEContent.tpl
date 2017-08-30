
<div id="LinuxSection">

  <div class="row">
    <div class="col-lg-2">
      <h2>Distro Title goes Here</h2>
    </div>
  </div>

<div class="card">
  <div class="card-block">
    <div class="card-text">


      <div id="screenshots">
        <div class="font-weight-bold">Screenshots </div>
        <?php

            foreach($sshotDEResults as $field)
            {

              echo "<a href=\"" . ($field['src']) . " \" target=\"_blank\" >";
                echo "<img src=\" " . ($field['src']) . " \" alt=\" whatever alt tag here \" /> ";
              echo "</a>";

            }

            $localdeName="";
        ?>
      </div>


      <div class="font-weight-bold">Desktop Catagory: </div>

      <div class="font-weight-bold">General Requirements:</div>

      <div classs="card">
        <div class="card-block">
          <div class="card-text">
            Hard-drive space: <br />
            Memory: <br />
            Processor: <br />

          </div>
        </div>

      </div>


      <div class="font-weight-bold">Distros that Feature:  </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-block">
    <div class="card-text">
        <span class="font-bold">How to Install and Version Information</span>    

		    <?php include $sitePath . "/linuxHQ/modules/sections/installHowTo.tpl"; ?>

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

</div>
