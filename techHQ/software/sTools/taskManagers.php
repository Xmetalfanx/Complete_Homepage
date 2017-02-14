<?php

  $the_title =' Software Section - System Tools - Task Managers';
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/techHQ/modules/programs.php" ;
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>

<h2>Process Managers/Task Manager Alternatives</h2>
    <div id="softwareSection">

    	<ul>
          <li>
            <div class="progTitles">
              <img src="../../progIcons/system_tools/process/procexp_101.png" alt="Process Explorer Icon" />
              <a href="http://www.sysinternals.com/">Process Explorer</a>
            </div>

            <div class="progDesc">
            <p>SysInternal&#39;s Process Explorer is the one I have used for years and
            install on most systems I work on.</p>
            </div>

          </li>

          <li>
            <div class="progTitles">
              <img src="../../progIcons/system_tools/process/ProcessHacker_101.png" alt="Process Hacker 2" />
              <a href="http://sourceforge.net/projects/processhacker">Process Hacker 2 Icon</a>
            </div>

            <div class="progDesc">
              <p>Task Manager Replacement that I install on most systems I work on.</p>
            </div>

          </li>


          <li>
            <div class="progTitles">
              <img src="../../progIcons/system_tools/process/SystemExplorer_MAINICON.png" alt="System Explorer Icon" />
              <a href="http://systemexplorer.net/">System Explorer</a>
            </div>
          </li>
        </ul>
	</div>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
