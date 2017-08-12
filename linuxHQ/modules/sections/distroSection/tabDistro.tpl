
<ul class="accordion-tabs-minimal">

<li class="tab-header-and-content">
  <a href="#screeshot" class="tab-link is-active">Description</a>
  <div class="tab-content">
    <div class="screenshots hidden-md-down">
      <div class="card">
        <div class="card-block">
          <div class="card-text"><?php echo $description; ?></div>
        </div>
      </div>
  </div>
  </div>
</li>


  <li class="tab-header-and-content">
    <a href="#screeshot" class="tab-link">Screenshots</a>
    <div class="tab-content">
      <div class="screenshots hidden-md-down">
        <!-- Grabs Screenshot info from online database table -->
        <?php
            foreach($ssResults as $field)
            {

                echo "<div id=\"screenshots\"> ";

                  echo "<img src=\"" . ($field['src']) . "\" alt=\" whatever alt tag here \" /> ";

                  echo "<a href=\"" . ($field['href']) . "\" > LINK TO PAGE WITH SCREENSHOTS HERE </a>";

              echo "</div>";
            }
        ?>
    </div>
    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">
      My Thoughts/Recommendations</a>
    <div class="tab-content">

      <div class="card">
        <div class="card-block">
          <h4 class="card-title">My Experience: </h4>
          <div class="card-text">
            <?php echo $EXP; ?> <br/>
            <?php echo $experience; ?> <br/><br/>

            <div class="boldUnderline">
              Any other comments I have about this distro:
              <?php echo $otherComments; ?>
              <br/>
              SECTION UNDER CONSTRUCTION

            </div>
          </div>
        </div>
      </div>
    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#youtube" class="tab-link">Youtube Reviews</a>
    <div class="tab-content">
      <!-- think removed this
      <?php include $sitePath .  '/linuxHQ/modules/variables/linuxDistroReviewer.php' ; ?>
    -->
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


            <?php include $sitePath . '/linuxHQ/modules/database/usbdb.php'; ?>

        </div>
      </div>
    </div>
  </li>
</ul>
