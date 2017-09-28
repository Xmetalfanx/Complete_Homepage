<?php

  $the_title = 'Xmetalfanx Software Section - SysInternals Programs';
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/techHQ/modules/programs.php" ;
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>

<div id="softwareSection">
    <p>
      <img src="../../graphics/programs/sys_logo.gif" alt="sysinternals Logo" width="192" height="49" vspace="2" border="0"
      class="center" />
      <br />
    </p>

    <h3>Sysinternals Programs -</h3>
    <p>
      <span class="mainSiteUpdates">These are programs I use, and are in no way all of the programs by this developer</span>
    </p>
    <ul>
      <li>
        <div class="progTitles">
          <img src="../../progIcons/system_tools/autorunsc_EVERYTHING.png" alt="autoruns icon" />
          <a href="http://www.sysinternals.com/">Autoruns</a>
          </div>

          <div class="progDesc">
              <p class="redtext">This program has the most comprehensive knowledge of auto-starting locations of any startup monitor (A
              starting list of auto-run locations was obtained from David Solomon&#39;s &quot;Windows Internals&quot; seminar), shows you
              what programs are configured to run during system boot-up or login, and shows you the entries in the order Windows
              processes them. These programs include ones in your startup folder, Run, RunOnce, and other Registry keys. A &quot;Hide
              Signed Microsoft Entries&quot; option helps you to zoom in on third-party auto-starting images that have been added to your
              system.</p>
              <p>
                <span class="redtext">Autoruns works on all versions of Windows.</span>
              </p>
              <p class="mainSiteUpdates">(Autoruns Help File)</p>
        </div>
      </li>

      <li>
        <div class="progTitles">
          <img src="../../progIcons/system_tools/process/procexp_101.png" alt="Process Explorer Icon" /> [Process Explorer ]
          <a href="http://www.sysinternals.com/">Process Explorer </a>
        </div>

        <div class="progDesc">
        <p>&quot;Yeah, yeah, what&#39;s the big deal?, Windows has a task manager. I can just use that, eh?&quot;...</p>
        <p>Well not providing any &quot;OMG, that is so COOL&quot; features, this program&#39;s GUI is just enough to make my
        &quot;wow, i should have gotten this awhile ago&quot; list. the ability to see the services and the &quot;tree (see</p>
        <p>
        <a href="../../smiles/shock/eek2.gif" target="_blank">screenshot</a>) of the running processes, is also cool.</p>
        <p>Also ..&quot;Process Explorer also has a powerful search capability that will quickly show you which processes have
        particular handles opened or DLLs loaded. The unique capabilities of Process Explorer make it useful for tracking down
        DLL-version problems or handle leaks, and provide insight into the way Windows and applications work&quot;</p>
        <p>
          <span class="mainSiteUpdates">(Copied from the Help File for Process Explorer)</span>
        </p>

        <pre>
            <code>&lt;a href=&quot;http://www.sysinternals.com/&quot; target=&quot;_blank&quot;&gt;Process Explorer Screenshot&lt;/a&gt;
            </code>
        </pre>
        </div>
      </li>
    </ul>
	</div>

EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechSoftwareTemplate.php"); ?>
