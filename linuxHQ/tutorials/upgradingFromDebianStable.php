<?php

	$title = 'Tutorial Section - Upgrading Debian Stable';
	$content = <<<EOD

  <p class="col2SectionHeaders">Upgrading Debian Stable (What you have to start with)</p>
  <p class="col1SubSectionHeaders">. *** DO THESE IN ORDER ***</p>
  <p class="col1SubSectionHeaders"><strong>Update and Upgrade (Current Stable) to the newest it can be </strong></p>
  <ul>
    <li>Update the repository &quot;database&quot; </li>
  </ul>
  <blockquote>
    <p class="terminal">sudo apt-get update</p>
  </blockquote>
  <ul>
    <li>Upgrade the system </li>
  </ul>
  <blockquote>
    <p class="terminal">sudo apt-get upgrade</p>
  </blockquote>
  <ul>
    <li>Do a Distributuon upgrade </li>
  </ul>
  <blockquote>
    <p class="terminal">sudo apt-get distr-upgrade</p>
  </blockquote>
  <ul>
    <li>Now (it may not be needed, but I choose to do it) Reboot the computer</li>
  </ul>
  <p>&nbsp;</p>
  <p class="col2SectionHeaders">Get ready to upgrade to &quot;Testing&quot; </p>
  <ul>
    <li>Go into the Terminal and type in whats below to edit your &quot;sourcelist&quot;</li>
  </ul>
  <blockquote>
    <p class="terminal">sudo nano /etc/apt/sources.list</p>
  </blockquote>
  <ul>
    <li>Once the file is opened, go to the line where it says &quot;CD_Rom&quot; or something to that effect and comment it out by putting a &quot; # &quot; in front of the entire line.
      <ul>
        <li>The point of this is everytime you &quot;sudo apt-get update&quot; (without it being commented out), it will check to see if it can find the Flashdrive/CD-Rom/..etc ... this just tells the system not to check that </li>
      </ul>
    </li>
    <li>You will see something similar to the following lines </li>
  </ul>
  <div class="terminal">
    <blockquote>
      <p class="terminal">deb http://ftp.us.debian.org/debian stable main contrib non-free<br />
        deb-src http://ftp.us.debian.org/debian stable main contrib non-free</p>
      <p class="terminal">deb http://ftp.debian.org/debian/ wheezy-updates main contrib non-free<br />
        deb-src http://ftp.debian.org/debian/ wheezy-updates main contrib non-free</p>
      <p class="terminal">deb http://security.debian.org/ wheezy/updates main contrib non-free<br />
        deb-src http://security.debian.org/ wheezy/updates main contrib non-free</p>
    </blockquote>
  </div>
  <blockquote>
    <p><em>Yours may only have &quot;main&quot; listed ... same process though</em></p>
  </blockquote>
  <ul>
    <li><span class="boldUnderline">STEP 1 </span>: ADJUST THE SOURCES.LIST file to the new branch
      <ul>
        <li>(if you only have &quot;MAIN&quot; listed at the end, you may want to add the following, too)
          <ul>
            <li><span class="terms">contrib</span> ... and <span class="terms">non-free</span></li>
            </ul>
          </li>
        <li>IF YOUR UPGRADING TO TESTING (whatever is in &quot;testing)
          <ul>
            <li>Change where you see <span class="terms">Wheezy</span> .... to <span class="terms">Testing</span> ... THATS IT (AS FAR AS EDITING THIS FILE) </li>
            </ul>
          </li>
        <li>IF YOUR UPGRADING TO (whats currently the testing branch when I am typing this) Jessie
          <ul>
            <li>Change where you see <span class="terms">Wheezy</span> .... to <span class="terms">Jessie</span> ... THATS IT (AS FAR AS EDITING THIS FILE) </li>
            </ul>
          </li>
        </ul>
    </li>
  </ul>
  <blockquote>
    <p>	<em>(YES these nex steps are exactly the same as before, when you hadn't changed the sources.list file, yet)</em></p>
  </blockquote>
  <ul>
    <li><span class="boldUnderline">Step 2:</span> Update the repository &quot;database&quot; </li>
</ul>
  <blockquote>
    <p class="terminal">sudo apt-get update</p>
  </blockquote>
  <ul>
    <li><span class="boldUnderline">Step 3:</span> Upgrade the system </li>
  </ul>
  <blockquote>
    <p class="terminal">sudo apt-get upgrade</p>
  </blockquote>
  <ul>
    <li><span class="boldUnderline">Step 4</span>: Do a Distributuon upgrade </li>
  </ul>
  <blockquote>
    <p class="terminal">sudo apt-get distr-upgrade</p>
  </blockquote>
  <ul>
    <li>Now (it may not be needed, but I choose to do it) Reboot the computer</li>
    </ul>
  <p>If nothing went wrong, You are now done ... You are now on Debian &quot;Testing&quot;/&quot;Wheezy&quot; depending on what you picked </p>
  <p>&nbsp;</p>
  
EOD;

 ?>
  
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNTutorials.php"); ?>

