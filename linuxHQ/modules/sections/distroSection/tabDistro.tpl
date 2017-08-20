
<ul class="accordion-tabs-minimal">

<li class="tab-header-and-content">
  <a href="#screeshot" class="tab-link is-active">Description</a>
  <div class="tab-content">
      <div class="card hidden-md-down">
        <div class="card-block">
          <div class="card-text">
            Description
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
          include $sitePath . '/linuxHQ/modules/database/sshotsdb.php';
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
            <?php include $sitePath . '/linuxHQ/modules/database/recExpDB.php'; ?>

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
