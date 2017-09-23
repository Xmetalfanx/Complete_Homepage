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
      <a href="#" class="tab-link">Various Tools</a>
      <div class="tab-content">
        <?php
          $localsubcat = 'various';
          sortApps($localmaincat, $localsubcat);
          include $sitePath . '/techHQ/modules/database/softwaretest.php';
        ?>

      </div>
    </li>
</ul>






<br /><br /><br /><br />




<h2> KEEP BELOW FOR LATER </H2>

<ul class="accordion-tabs-minimal">
  <li class="tab-header-and-content">
    <a href="#" class="tab-link is-active">Various Tools</a>
    <div class="tab-content">


      <ul class="list-unstyled">



        <div class="media">
          <img src="/techHQ/progIcons/system_tools/1833__Eventlogexplorer_icon.png" alt="Event Log Explorer " class="d-flex mr-3"/>
          <div class="media-body">
            <h5 class="mt-0">
              <a href="http://www.eventlogxp.com/">Event Log Explorer</a></h5>


              <p>A simple program that has some filtering features for Administrators to view Window 2000 (and higher) \&apos;s Event log.</p>
              <p>Not to say &quot;Oh my God, the viewer, built into Windows is SO HARD to use&quot;; however, little additions (like right clicking an error and being able to:</p>
              <p>
                A) search Google for that error/fix for that error or
                B) Go directly to the MS Knowledge base for a description (hey .. its an error being reported by MS anyway, eh?) have made this program catch my eye, the moment I tried it
              </p>

            <p class="center">
              <a href="../screenshots/System/Event_log.jpg" target="_blank">Event Log Explorer Screenshot </a></p>
          </div>
        </div>





        <div class="media">
          <img src="/techHQ/progIcons/system_tools/File_Association_Fixer_32512.png" alt="File Association Fixer Icon" class="d-flex mr-3"/>
          <a href="http://www.thewindowsclub.com/file-association-fixer-for-windows-7-vista-released">File Association Fixer (for Windows 7)</a>
          <div class="media-body">
            <h5 class="mt-0"></h5>Fixes problems with common file associates with a simple click.
          </div>
        </div>




        <div class="media">
          <img src="/techHQ/progIcons/system_tools/GodMode_Creator_32512.png" alt="God Mode Creator" class="d-flex mr-3"/>
          <div class="media-body">
            <h5 class="mt-0"><a href="http://www.thewindowsclub.com/godmode-creator-windows-7-vista-released" target="_blank">Godmode Creator</a>
              <p>This allows you to access &quot;God Mode&quot; (a mode that gives you access to changing specific settings, options, and information &quot;hidden&quot; by Microsoft.</p>
              <p>This is made for Windows Vista and Windows 7</p>
            </h5>
          </div>
        </div>

        <div class="media">
          <img src="/techHQ/progIcons/system_tools/QuickRestoreMaker.png" alt="Quick Restore Maker" class="d-flex mr-3"/>
          <div class="media-body">
            <a href="http://www.thewindowsclub.com/create-a-system-restore-point-in-1-click-with-quick-restore-maker"></a>
          </div>
        </div>


        <div class="media">
          <img src="/techHQ/progIcons/systemtools/SRM_icon.png" alt="SRN Icon" class="d-flex mr-3"/>
          <div class="media-body">

            <a href="http://www.thewindowsclub.com/system-restore-manager-for-windows-released"> System Restore Manager</a>Great little program that allows for better management of System Restore Points.
          </div>
        </div>





        <div class="media">
          <img src="/techHQ/progIcons/system_tools/TrayIt!_101.png" alt="TrayIT Icon" class="d-flex mr-3"/>
          <div class="media-body">
            <h5 class="mt-0"><a href="http://www.majorgeeks.com/files/details/trayit.html">TrayIt </a></h5>The best &quot;Send to the system tray&quot; program I have found so far. Small and Effective. Works fine on my Windows 7 64bit OS too.
            Note: it appears the Homepage is down though portals (not just MajorGeeks which I link to, here) still have downloads for it ... i think ...
          </div>
        </div>


        <div class="media">
          <img src="/techHQ/progIcons/system_tools/TreeSize_MAINICON.png" alt="TreeView Free" class="d-flex mr-3"/>
          <div class="media-body">
            <h5 class="mt-0"><a href="http://www.jam-software.com/freeware/">Tree View Freeware Ed.</a></h5>
          </div>
        </div>
        <div class="media"><img src="/techHQ/progIcons/security/Unlocker_106.png" alt="Unlocker Icon" class="d-flex mr-3"/>
          <div class="media-body">
            <h5 class="mt-0"><a href="http://www.softpedia.com/get/System/System-Miscellaneous/Unlocker.shtml">Unlocker </a></h5>Frustrated by &quot;Can not delete&quot; and &quot;File Currently in use&quot; even though you are sure it shouldn&apos;t be?... this is a freeware, that in my opinion, the best program for unlocking the file, or cancelling the specific process that says its using that file.
          </div>
        </div>


      </ul>
    </div>
  </li>


  <li class="tab-header-and-content"><a href="#" class="tab-link">Overall System Suites </a>
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


      <div class="media"><img src="/techHQ/progIcons/system_tools/File_Association_Fixer_32512.png" alt="File Association Fixer Icon" class="d-flex mr-3"/>
        <div class="media-body">
          <h5 class="mt-0"><a href="http://www.thewindowsclub.com/file-association-fixer-for-windows-7-vista-released">File Association Fixer (for WIndows 7)</a>Fixes problems with common file associates with a simple click</h5>
        </div>
      </div>


      <div class="media"><img src="/techHQ/progIcons/system_tools/jv16PT_MAINICON.png" alt="Jv16 power tools icon" class="d-flex mr-3"/>
        <div class="media-body">
          <h5 class="mt-0"><a href="http://www.macecraft.com/">jv16 Power Tools</a></h5>
          <p class="redtext">*** NO LONG FREEWARE; however, one of the few non-free programs i recommend 100% ***</p>
          <p>
            This is by far the best registry cleaner I have come across. I will post a full epinion (opinion) at epinion.com, as
            soon as they are done with the maintenance on their site. (I cant not post it until then). It will have details on this program there.
          </p>
          <p>
            This is an overall system Tools program with start menu cleaner, registry cleaner, registry compactor (I have run into
            ALOT OF issues with this on Vista and Windows 7, but Reg Compactor works 100% no issues on Windows XP), and many many more options.
          </p>
          <p>
            THIS IS THE ONLY REGISTRY &quot;CLEANER&quot; I recommend. (Although its really not a complete reg cleaner ...
            Ccleaner&apos;s reg cleaner is not bad) ... alot of other reg cleaners have caused more problems then there worth. That is
            NOT THE CASE with JV16 Power Tools
          </p>
          <p class="maroonText">
            HAVING SAID ALL THAT .. I wouldn&apos;t use this program if you are really new to computers and dont
            know what your doing (unless your like me, years ago, and accept you can mess things up .. .but want to learn and test stuff anyway)
            jv16 Power Tools Lite
            This is a very lite version of Jv16 Power tools that I found to be decent, while not having some &quot;advanced&quot; features the regular paid version of Jv16 Power tools has.
          </p>
        </div>
      </div>
      <div class="media">
        <img src="/techHQ/progIcons/system_tools/WiseCare365_MAINICON.png" alt="wise care 360 icon" class="d-flex mr-3"/>
        <div class="media-body">
          <h5 class="mt-0"><a href="">Wise Care 360</a></h5>
          <p>Has multiple program from &quot;Wise&quot; all in one freeware) to help</p>
          <ul>
            <li>Clear Temperary Files,</li>
            <li>Slim down Windows by clearing out un-wanted/un-needed items</li>
            <li>Disk and Registry Cleaning,</li>
            <li>Registry Defragmenting&lt;</li>
            <li>Disk Defragmenting
              <ul>
                <li>and much more.</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </li>



  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Program Updaters </a>
    <div class="tab-content">
      Sub-Sorted Application updaters will go here

    </div>
  </li>

</ul>

<?php include $sitePath . "/modules/footer.tpl"; ?>
