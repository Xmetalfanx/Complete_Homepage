
<?php
    foreach($recResults as $field)
    {
      echo "<div class=\"row\"> ";

          echo "<div class=\"col-lg-6\" > ";
            echo "Would I recommend this distrobution to anyone curious about it?: ";
          echo "</div>";
          echo "<div class=\"col-lg-6\" > ";
            echo "Any reason given:  "
          echo "</div> ";

      echo "</div>";


      echo "<div class=\"row\"> ";

        echo "<div class=\"col-lg-6\" > ";
          echo "Would I recommend this distrobution to a new user to Linux?: ";
        echo "</div>";
        echo "<div class=\"col-lg-6\" > ";
          echo "Reason :  "
        echo "</div> ";

      echo "</div>";

      echo "<div class=\"row\"> ";


      echo "</div>";

    }
?>





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
