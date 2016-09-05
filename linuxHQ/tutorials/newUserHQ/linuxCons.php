<?php

	$title = 'New User Section - Linux Cons/Negitive Things about Linux';
	$content = <<<EOD

  <p>
    <a href="linuxPros.php">Linux Pros </a>
  </p>
  <p>Despite what some Linux enthusiasts say, Linux is not perfect... not yet.
  </p>
  <p>There
    <span class="bold">are
    </span> drawbacks to Linux, which include
  </p>
  <ul>
    <li>
    <span class="boldUnderline">Gambling with Hardware.
    </span>
    <ul>
      <li>While hardware support is improving, if you run linux, there is a chance that say your printer goes out and you need to go to the store and buy a new one .. there is a 50% chance the new printer you choose will work just fine with Linux (some may work with some distibutions, but not with others).... there is also a 50% chance that, that printer will not work with the distribution of Linux you have installed
      <ul>
        <li>A) Will not work = &quot;for now ... there may be an update evetually
        </li>
        <li>B) This is one reason to dualboot or at least if your like me and use Linux most of the time and you run into an issue like this, you can also boot into Windows and do what you need to do (print, for example), then reboot into Linux again.
        </li>
      </ul>
      </li>
    </ul>
    </li>
    <li>
    <span class="boldUnderline">NOT ALL SOFTWARE you know and love works in Linux
    </span>
    <ul>
      <li>Even if you count &quot;WINE&quot; which is really finicky with some bigger software packages, and while in alot of cases, there are Linux alternatives, this may not always be the best option for some people
      <ul>
        <li>You can try Windows in a virtual machine OR ....(yet again) another reason to dualboot, keeping Windows installed... getting your &quot;feet wet&quot; with Linux, though keeping Microsoft Windows around for those &quot;Must have&quot; programs, that do not work well in Linux
        </li>
      </ul>
      </li>
    </ul>
    </li>
    <li>
    <span class="boldUnderline">There is a learning curve
    </span>
    <ul>
      <li>Alot of &quot;how much of a curve&quot; depends on a number of factors, including
      <ul>
        <li>What distro you choose, What desktop (aka &quot;DE&quot;) you choose, how much time you are willing to at least read up on a few things that differ from MS Windows
        </li>
      </ul>
      </li>
    </ul>
    </li>
  </ul>
  <p>&nbsp;
  </p>

EOD;
?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNTutorials.php"); ?>
