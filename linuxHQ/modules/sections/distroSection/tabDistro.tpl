
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
          <?php

            // For Screenshots in the desktop section 
            $sshotDE = "SELECT * FROM sshots WHERE ssde = '$localdename' ";
            $sshotDEResult = mysqli_query($conn, $sshotDE) or ('Error querying database');
            $sshotDEDisplay = mysqli_fetch_assoc($sshotDEResult);
            // mysqli_free_result($sshotDEResult);


            // IF THERE ARE RESULTS 
            if (mysqli_num_rows($sshotDEResult) > 0) {
                while($row = mysqli_fetch_assoc($sshotDEResult))
                {

                  echo "<a href=\"" . $row['src'] . " \" target=\"_blank\" >";
                  echo "<img class=\"d-block img-fluid\" src=\" " . $row['src'] . " \" alt=\" whatever alt tag here \" /> ";
                  echo "</a> <br />";
             
                  echo "<a href=\" " . $row['href'] . " \" > LINK TO PAGE WITH SCREENSHOTS </a>";

                }
            }
        ?>      

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

            <?php include $sitePath . '/linuxHQ/modules/database/usbdb.php'; ?>

        </div>
      </div>
    </div>
  </li>
</ul>
