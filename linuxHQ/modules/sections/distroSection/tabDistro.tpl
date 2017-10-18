
<ul class="accordion-tabs-minimal">

  <li class="tab-header-and-content">
    <a href="#screeshot" class="tab-link is-active">Description</a>
    <div class="tab-content">
        <div class="card hidden-md-down">
          <div class="card-block">
            <div class="card-text">
              <?php               
                foreach($descriptResult as $field)
                  {
                    echo ($field['description']);
                  }           
                ?>
            </div>
          </div>
        </div>
    </div>
  </li>


  <li class="tab-header-and-content hidden-sm-down">
    <a href="#screeshot" class="tab-link">Screenshots</a>
    <div class="tab-content hidden-md-down">
      <div id="screenshots">
          <?php include $sitePath . '/linuxHQ/modules/database/sshotsdb_distro_section2.php'; ?>

      </div>
    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">
      My Thoughts/Recommendations</a>
    <div class="tab-content">

          <h4>My Experience: </h4>
            <?php include $sitePath . '/linuxHQ/modules/database/recExpDB.php'; ?>
      </div>

  </li>

  <li class="tab-header-and-content">
    <a href="#youtube" class="tab-link">Youtube Reviews</a>
    <div class="tab-content">
      <?php include $sitePath .  '/linuxHQ/modules/database/ytreviewer.php'; ?>

    </div>
  </li>



  <li class="tab-header-and-content">
    <a href="#usb" class="tab-link">USB Creation </a>
    <div class="tab-content">

      <div class="card">
        <div class="card-block">
          <h4 class="card-title">USB Drive Creation Experience</h4>
        </div>
        <div class="card-text">
          <p>
            <a href="/linuxHQ/info.php" target="_blank">Explaination of what this section is</a>
          </p>

            <?php 

                echo "<div id=\"usb\" >";
                  echo "<br /> <ul> Cross Platform: ";
                    echo "<li> Etcher.io "  . $usbDisplay['etcher'] .  " </li>";
                    echo "<li> UNetBootin " . $usbDisplay['unetbootin'] ." </li>";
                  echo "</ul>";
                echo "<br /><ul> Windows Related: ";
                  echo "<li> Rufus: " . $usbDisplay['rufus'] . " </li>";
                  echo "<li> ImageUSB: " . $usbDisplay['imageusb'] . " </li>";
                  echo "<li> YUMI: " . $usbDisplay['yumi'] . " </li>";
                echo "</ul>";
                echo "<br /><ul> Linux Related";
                  echo "<li> dd command " . $usbDisplay['ddcommand'] . " </li>";
                  echo "<li> Linux Mint Image Creator: " . $usbDisplay['mintusb'] . " </li>";
                  echo "<li> OpenSuse Image Writer " . $usbDisplay['opensuseimage'] . " </li>";
                echo "</ul>";
              echo "</div>";

            ?>

        </div>
      </div>
    </div>
  </li>
</ul>
