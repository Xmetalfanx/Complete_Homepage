<?php

  $the_title ='Software Section - Startup Managers';
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/techHQ/modules/programs.php" ;
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>
<div id="softwareSection">
    <h2>Startup Control Programs</h2>

    <ul>
      <li>
        <div class="progTitles">
          <img src="../../progIcons/system_tools/autorunsc_EVERYTHING.png" alt="autoruns icon" />
            <a href="http://www.sysinternals.com/">Autoruns</a>
          </div>
      </li>

      <div class="progDesc">
        <p>This program has the most comprehensive knowledge of auto-starting locations of any startup monitor (A starting list of
        auto-run locations was obtained from David Solomon&#39;s &quot;Windows Internals&quot; seminar), shows you what programs are
        configured to run during system boot-up or login, and shows you the entries in the order Windows processes them. These programs
        include ones in your startup folder, Run, RunOnce, and other Registry keys. A &quot;Hide Signed Microsoft Entries&quot; option
        helps you to zoom in on third-party auto-starting images that have been added to your system.</p>
        <p>
          Autoruns works on all versions of Windows.
        </p>
        </div>

    </ul>
</div>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
