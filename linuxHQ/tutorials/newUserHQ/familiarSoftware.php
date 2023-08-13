<?php

	$pageTitle = 'Familiar Software that you may use in Window';

	switch ($_SERVER['HTTP_HOST']) {
    case 'xmetal.x10.mx':
        $siteRoot = '/home/xmetalx1/domains/xmetal.x10.mx/public_html';
        break;
    case 'xmetal.awardspace.us':
        $siteRoot = '/srv/disk1/xmetalfanx/www/xmetal.awardspace.us/';
        break;
    default:
        $siteRoot = 'local.domain';
        break;
  }

	include $siteRoot . "/templates/linux/open/baseLinuxTutorBlank.tpl";

?>


<h3> I am  worried about being confused by &ldquo;new&rdquo; software I am not familiar with.
  <p>Before I even begin, I will say some new users are under the impression that they will have to re-learn basic tasks, such as  copying, pasting, saving a file, just to name a few &hellip; that is NOT  THE CASE.  These tasks (while you may be doing them in a different program than what your use to), are the same in Windows and Linux.</p>
  <p>First I want to say that other than an  unfamiliar name for a program, the functioning of many programs (say  play, stop, &ldquo;next track&rdquo; ..etc in video or audio players) are no  different from Microsoft Windows programs for the same task&hellip; its just the name of the program you'd use that changes </p>
  <p>Many of the (opinion here) best Windows program for a particular task, are cross platform, so that means you can find &ldquo;familiar faces&rdquo; in Linux  that you have used in Windows for years.</p>
  <ul> 
    <li>Libre Office</li>
    <li>VLC for media converting/playback</li>
    <li>Audacity for audio file editing</li>
    <li>SMPlayer &ndash; another media player</li>
    <li>Firefox, Chromium, Brave, Google Chrome or Vivaldi for Web Browsing</li>
    <li>Avidemux &ndash; video player editor</li>
    <li>GIMP &ndash; FREE alternative to Photoshop</li>
  </ul>
  <p>These programs, listed above, are just a  few programs that work perfectly (and in some cases originated in  Linux, then got tranformed to work in Windows later.  </p></p>
  <p>Program like DEVEDE (video ~&gt; DVD  program), I never got working on Windows EVER.  In Linux, its my &ldquo;go  to&rdquo; program for the task (Creating DVDs playable in DVD Players from various video files) </p>
</h3>

<?php require $siteRoot ."/modules/footer.tpl"; ?>
