<?php
		$the_title = 'TechCenter - How to Update Windows without connecting to Microsoft';
		$sitePath = "/home/xmetalx1/public_html";
		include $sitePath . "/templates/tech/baseTechCenterTemp.tpl";

?>
      <p class="boldCenter">
      <a href="#m1">Method 1 of Updating (Firefox and free plugin) </a>|
      <a href="#M2">Method 2 of Updating (Belarc)</a></p>
      <hr />
      <p class="boldTitles"><a name="m1" id="m1"></a>Method 1</p>
      <p class="header">What you need </p>
      <ul>
        <li><a href="http://www.getfirefox.com" target="_blank">Firefox</a> (a web browser alternative to IE ... for those that do not already know) </li>
        <li><a href="http://windowsupdate.62nds.com/" target="_blank">WindizUpdate Plugin / Addon</a></li>
      </ul>
      <p class="header">What to do? </p>
      <ol>
        <li>Once you have Firefox Installed, </li>
        <li>go to the Windiz Website above and install the plugin. (note: you may need to specifically allow that site to be able to install plugins) ... </li>
        <li>Run &quot;Scan my Computer&quot; like you would on Microsoft's Update. </li>
        <li>INSTALLING THE UPDATES
          <ol>
            <li>First you may (Like MS's) just let the updater do everything ... download and install ... ) which is perfectly fine</li>
            <li>This site also allows you to (in an easier manner) download them and install them later.... they are located in the <span class="redtext">C:|WUTEMP</span> folder </li>
          </ol>
        </li>
      </ol>
      <p><span class="boldText">Comments</span>: What this does is basically the same as Microsoft, but for those who don't like MS scanning their system OR have problems with Microsoft's Website. I do currently have my AutoUpdate/Automatic update( ..whatever) Service in XP set at DISABLED. I know you have to turn on two of the services to even get MS's scanner to work. </p>
      <p class="mainProgDescript">Note: i am not sure if this is &quot;XP Only&quot; at the moment. ... not saying it is or it isn't </p>
      <hr />
      <p class="boldTitles">   Method 2      </p>
      <p class="header">What you Need?</p>
      <p> <a href="http://www.belarc.com/free_download.html" target="_blank">Belarc Adviser</a> -  is a tool that scans various areas in your system and then tell you what programs you have installed, what some of the &quot;basic&quot; and &quot;no so basic&quot; hardware info about your computer is AND according to the latest Security bulletin (I THINK its the latest at the time the last version of Belarc was released .. . ) what Windows updates and/or hotfixes your system is missing, it also may find problem updates that &quot;need to be reinstalled&quot; ... this is a GREAT TOOL if you ask me </p>
      <p class="header">What to do?</p>
      <ol>
        <li>Just run Belarc by clicking the Belarc Icon on your Start Menu OR Desktop </li>
        <li>Your Browser will open with &quot;Profile&quot; of your PC and look for where it says <span class="redtext">System Security Scanner</span> and look at where it says <span class="redtext">&quot;Microsoft Security Updates&quot;</span> (This screenshot was taken from a PC with all patches, but you may have a red X
          and a message like &quot;3 patches/hotfixes missing)
          <ul>
            <li><img src="UPDATE/SSS.jpg" alt="Belarc Summary Screenshot" width="518" height="76" /></li>
          </ul>
        </li>
        <li>when you Click that it will take you down the page and list the patches you need in a link for to Microsoft</li>
        <li>go to the MS link and download the patches manually or go to a site like <a href="http://windowsupdate.62nds.com/" target="_blank">WindizUpdate Plugin / Addon</a> (Listed above) and go to the &quot;search&quot; menu on the left ... copy and paste the patch you need (AKA &quot;<span class="redtext">Q22423</span>&quot;) into that and manually get the exe of the patch from <a href="http://windowsupdate.62nds.com/" target="_blank">WindizUpdate Plugin / Addon</a> ... this way you can back those exe's up onto a CD-R and install them in other computers or just plain know what updates you need if you reformat so that you do not have to waste a ton of time re-downloading the updates you previously had already :D </li>
      </ol>
    </div>


<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
