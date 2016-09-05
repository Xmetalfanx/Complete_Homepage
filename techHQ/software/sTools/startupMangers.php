<?php

  $the_title ='Xmetalfanx Software Section - Startup Managers';
  $the_content = <<<EOD

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
          <span class="redtext">Autoruns works on all versions of Windows.</span>
        </p>
        </div>


      <li>
        <div class="progTitles">
          <a href="http://www.Windowsstartup.com">Startup Inspector</a>
        </div>

        <div class="progDesc">
          <p>Very Similar to Startup Mechanic, although you can create profiles with this programs, and the &quot;database&quot; that
          tells you what Items are, is on the net so you have to run it while your connected.</p>
        </div>
      </li>
    </ul>
</div>

EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechSoftwareTemplate.php"); ?>
