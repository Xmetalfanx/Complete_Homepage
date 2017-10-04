<?php

  $pageTitle = 'Software Section - System Tools';

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

  $localmaincat = 'systemtools';

?>



<ul class="accordion-tabs-minimal">
  <li class="tab-header-and-content">
    <a href="#" class="tab-link is-active">Various Tools</a>
    <div class="tab-content">
      <h3>General System Tools</h3>These are more of a variety of &quot;System Tools&quot; freewares.  The list was getting too long, so I moved many of
      them to the System Tools &quot;Subpages&quot;, listed to the left.  If there is a well known freeware not listed on this | page, odds are its in one of the subpages.

      <?php
        $localsubcat = 'various';
        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>

    </div>
  </li>
  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Overall System Suites </a>
    <div class="tab-content">
      <p>
        These are the tools I like that fall under the &quot;Overall System Suite&quot; Category. Some of the overall tools (all
        in one place) these programs have include: Invalid Shortcut Fixer/Remover, Temp File Remover (scans whole HDD),
        Trace remover, Registry Cleaner, Start-up Manager, and more.
      </p>
      <p>
        As with all programs on my site, these are safe to use... if you find them useful... well that is your (the person "
        reading this) call. None of the programs I list are shareware/spyware.
      </p>


      <?php
        $localsubcat = 'systemsuite';
        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>
    </div>
  </li>
  <li class="tab-header-and-content">
    <a href="#" class="tab-link">CD/DVD Burners </a>
    <div class="tab-content">
      <?php
        $localsubcat = 'burner';
        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>

    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Defragmenters </a>
    <div class="tab-content">
      <?php
        $localsubcat = 'defrag';
        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>

    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Process Managers</a>
    <div class="tab-content">
      <?php
        $localsubcat = 'processmanager';
        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>
    </div>
  </li>


  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Program Updaters </a>
    <div class="tab-content">
      <?php
        $localsubcat = 'installer/updater';
        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>
    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Startup Managers</a>
    <div class="tab-content">
      <?php
        $localsubcat = 'startup';
        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>
    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Archivers</a>
    <div class="tab-content">
      <?php
        $localsubcat = 'archiver';
        sortApps($localmaincat, $localsubcat);
        include $sitePath . '/techHQ/modules/database/softwaretest.php';
      ?>

    </div>
  </li>

</ul>

<br />



<?php include $sitePath . "/modules/footer.tpl"; ?>
