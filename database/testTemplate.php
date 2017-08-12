<div class="well">
  <?php
      foreach($result as $field)
      {
          echo "<strong>Distro Name: </strong> ";
          echo ($row['distroTitle'] . " <br /> ");
          echo "<em>Homepage:</em> <a href=\" " . ($row['homepage'] . "\" target=\"_blank\" >" . ($row['distroTitle']) . " Homepage </a> <br />" );
          
      }
  ?>
</div>
