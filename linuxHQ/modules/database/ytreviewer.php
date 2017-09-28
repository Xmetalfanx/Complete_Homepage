
<h3>Youtube Video Section</h3>
<?php
    foreach($ytResult as $field)
    {
      echo "<div class=\"row\" >";

        echo "<div class=\"col-lg-6\" >";

          echo "<a href=\" " . ($field['mmoore']) . "\" target=\"_blank\" > Matthew Moore's Reviews </a> <br />  ";

          echo "<a href=\" " .($field['spatry']) . "\" target=\"_blank\"  >Spatry</a> <br />  ";

          echo "<a href=\" " . ($field['dasgregor']) . "\" target=\"_blank\" >DasGregor's Review</a> <br />  ";

          echo "<a href=\" " . ($field['quidsup']) . "\" target=\"_blank\" >quidsup's Review</a> <br />  ";

          echo "<a href=\" " . ($field['ig']) . "\" target=\"_blank\" >InfinitelyGalactic's Review</a> <br />  ";

          echo "<a href=\" " . ($field['tostoday']) . "\" target=\"_blank\" >Tostoday's Review</a> <br />  ";

          echo "<a href=\" " . ($field['fishman']) . "\" target=\"_blank\" >Fishman Loves Linux's Review</a> <br />  ";

          echo "<a href=\" " . ($field['maverick']) . "\" target=\"_blank\" >Maverick Gaming (formerly \"Terry's Tech\" </a> <br />  ";

          echo "<a href=\" " . ($field['ghost']) . "\" target=\"_blank\" >Ghost SixtySeven's Review</a> <br />  ";
      echo "</div>";

        echo "<div class=\"col-lg-6\" >";
          echo "<a href=\" " . ($field['midfngr']) . "\" target=\"_blank\" >midfingr</a> <br />  ";

          echo "<a href=\" " . ($field['ohheyitslou']) . "\" target=\"_blank\" >OhHeyItsLou</a> <br />  ";

          echo "<a href=\" " . ($field['RLZ']) . "\" target=\"_blank\" >Run Level Zero</a> <br />  ";

          echo "<a href=\" " . ($field['fishman']) . "\" target=\"_blank\" >UrAvgLinuxUser</a> <br />  ";

          echo "<a href=\" " . ($field['aj']) . "\" target=\"_blank\" >AJ Reissig</a> <br />  ";

          echo "<a href=\" " . ($field['chenson']) . "\" target=\"_blank\" >Charlie Henson</a> <br />  ";

          echo "<a href=\" " . ($field['jcollins']) . "\" target=\"_blank\" >Joe Collins</a> <br />  ";

          echo "<a href=\" " . ($field['graham']) . "\" target=\"_blank\" >GrahamLinux's Review</a> <br />  ";
        echo "</div>";

      echo "</div>";

    }
?>
