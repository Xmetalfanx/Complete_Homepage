
<ul class="accordion-tabs-minimal">

  <li class="tab-header-and-content">
    <a href="#screeshot" class="tab-link is-active">Version Chart</a>
    <div class="tab-content">
        <div class="card hidden-md-down">
          <div class="card-block">
            <div class="card-text">
              <?php include $sitePath . '/linuxHQ/modules/database/mainDistroVer.php'; ?>

            </div>
          </div>
        </div>
    </div>
  </li>


  <li class="tab-header-and-content hidden-sm-down">
    <a href="#arch" class="tab-link">Arch</a>
    <div class="tab-content ">
        <?php

            echo "<strong>Current Pacman Version in Arch: </strong>" . $archDisplay['pacmanversion'] . "<br />";

            echo "<strong>How to Install: </strong>" . $archDisplay['install'];
          
        ?>
    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#fedora" class="tab-link"> Fedora</a>
    <div class="tab-content">
      <?php

       
          echo "Version Comparision Chart";
          echo "<table>";
          echo "<tr>";
            echo "<th> Fedora 25 </th>";
            echo "<th> Fedora 26</th>";
            echo "<th>Rawhide </th>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>" . $fedoraDisplay['f25version'] . "</td>";
            echo "<td>" . $fedoraDisplay['f26version'] . "</td>";
            echo "<td>" . $fedoraDisplay['rawhideversion'] . "</td>";
          echo "</tr>";
          echo "</table>";
          echo "<strong>How to Install: </strong>" . $fedoraDisplay['install'];


      ?>

    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#youtube" class="tab-link">OpenSuse</a>
    <div class="tab-content">

      <?php

          echo "Version Comparision Chart";

          echo "<table>";
          echo "<tr>";
              echo "<th>Leap 42.2 </th>";
              echo "<th>Leap 42.3 </th>";
              echo "<th>Tumbleweed </th>";
            echo "</tr>";
            echo "<tr>";
              echo "<td>" . $suseDisplay['leap422version'] . "</td>";
              echo "<td>" . $suseDisplay['leap423version'] . "</td>";
              echo "<td>" . $suseDisplay['twversion']  . "</td>";
          echo "</tr>";
          echo "</table>";

          echo "<strong> How to install: </strong>" . $suseDisplay['install'];

      ?>    
    </div>
  </li>


  <li class="tab-header-and-content">
    <a href="#ubuntu" class="tab-link">Ubuntu </a>
    <div class="tab-content">
      <?php

          echo "<table>";
          echo "<tr>";
            echo "<th>16.04.0 LTS ISO</th>";
            echo "<th>16.04.3 LTS ISO </th>";
            echo "<th>17.04 ISO </th>";
            echo "<th>17.10 Alpha ISO</th>";
            echo "<th>Linux Mint 17.3 ISO </th>";
            echo "<th>Linux Mint 18.2 ISO </th>";
          echo "</tr>";
          echo "<tr>";
            echo "<td>" . $ubuntuDisplay['lts16040ver'] . "</td>";
            echo "<td>" . $ubuntuDisplay['lts16043ver'] . "</td>";
            echo "<td>" . $ubuntuDisplay['1704ver'] . "</td>";
            echo "<td>" . $ubuntuDisplay['1710ver'] . "</td>";
            echo "<td>" . $ubuntuDisplay['mint173ver'] . "</td>";
            echo "<td>" . $ubuntuDisplay['mint18ver'] . "</td>";
          echo "</tr>";
          echo "</table>";

          echo "<em>put code here to check if its plasma 5 and if its not a plasma5 page, do not show this.... this will eventually be in the table above</em><br /><br /> ";

          echo "KDE Neon version:" . $ubuntuDisplay['neonversion'] . "<br />";

          echo "<strong>How to Install: </strong>" . $ubuntuDisplay['install'] . "<br />";

          echo "<strong>How to install specifically in Linux Mint: </strong>" . $ubuntuDisplay['mintinstall'] . "<br />";

      ?>
    </div>
  </li>

</ul>
