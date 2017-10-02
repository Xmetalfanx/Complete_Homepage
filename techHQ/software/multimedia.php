<?php
  $the_title = "Useful Programs Section - Internet Related Software";
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";
  $pageTitle = 'Multimedia Programs';


?>


<ul class="accordion-tabs-minimal">
  <li class="tab-header-and-content">
    <a href="#" class="tab-link is-active">Audio Media Players</a>
    <div class="tab-content">
      <?php

        $localmaincat = 'multimedia';
        $localsubcat = 'musicplayer';

        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>

    </div>
  </li>
  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Video Media Players</a>
    <div class="tab-content">
      * These do play audio files just fine... though I think they are more for videos, there is no
      reason you cant &quot;group these&quot; programs with the ones above, when you talking about audio.

      <?php

        $localmaincat = 'multimedia';
        $localsubcat = 'videoplayer';

        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>
    </div>
  </li>
  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Converters</a>
    <div class="tab-content">
      <?php

        $localmaincat = 'multimedia';
        $localsubcat = 'converter';

        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>
    </div>
  </li>
  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Rippers</a>
    <div class="tab-content">
      <?php

        $localmaincat = 'multimedia';
        $localsubcat = 'ripper';

        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>
    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">ID3 Tag related</a>
    <div class="tab-content">
      <?php

        $localmaincat = 'multimedia';
        $localsubcat = 'id3tag';

        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>
    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Winamp/XMPlay/AIMP Plugins</a>
    <div class="tab-content">
      Not sure if any of these are needed anymore.

    </div>
  </li>
</ul>


<?php include $sitePath . "/modules/footer.tpl"; ?>