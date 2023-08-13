<?php

	$pageTitle = 'Software and Package Management in Linux';

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



<h5>Graphical (GUI) Software Centers</h5>
<ul>
  <li>Gnome Software Center</li>
  <li>Linux Mint Software Manager</li>
  <li>Muon Discover</li>
</ul>
<h5>Graphical (GUI) Package Managers</h5>
<ul>
  <li>Muon Package Manager</li>
  <li>Synaptic Package Manager</li>
</ul>
<h5>CLI Package Managers</h5>
<ul>
  <li class="font-weight-bold">Arch based
    <ul><span class="font-style-italics">Pacman</span>
      <ul>
        <li>Searching<kbd>sudo pacman -Ss <package></kbd></li>
        <li>Installing<kbd>sudo pacman -S <package></kbd></li>
        <li>Updating
          <ul>
            <li>Regular Updating
              <ul><kbd>sudo pacman -Syu</kbd></ul>
            </li>
            <li>Updating, forcing a refresh
              <ul><kbd>sudo pacman -Syyu</kbd></ul>
            </li>
          </ul>
        </li>
      </ul>
    </ul>
  </li>
  <li class="font-weight-bold">Debian / Ubuntu Based</li>
  <ul>
    <li> <span class="font-weight-bold">apt</span>
      <ul>
        <li>Searching<kbd>sudo apt search <package></kbd></li>
        <li>Installing<kbd>sudo apt install <package></kbd></li>
        <li>Updating (Repo/ &apos;Software List&apos;)<kbd>sudo apt update</kbd></li>
        <li>
          Updating the software (typically done after updating the repo list)
          - &nbsp;This is what &ldquo;updater&rdquo; applets do
          <ul>
            <li><kbd>sudo apt upgrade</kbd></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
  <li class="font-weight-bold">OpenSuse</li>
  <ul>
    <li> <span class="font-weight-bold">zypper</span>
      <ul> 
        <li>Searching<kbd>sudo zypper search <package></kbd></li>
        <li>Installing<kbd>sudo zypper install <package></kbd></li>
      </ul>
    </li>
  </ul>
  <li class="font-weight-bold">Fedora</li>
  <ul><span class="font-style-italics">dnf</span>
    <ul> 
      <li>Searching<kbd>sudo dnf search <package></kbd></li>
      <li>Installing<kbd>sudo dnf install <package></kbd></li>
      <li> Updating<kbd>dnf update <package></kbd></li>
    </ul>
  </ul>
</ul>


<?php require $siteRoot ."/modules/footer.tpl"; ?>
