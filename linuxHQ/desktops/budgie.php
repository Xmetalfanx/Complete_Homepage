<?php

    $sitePath="/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/baseLinuxDE.tpl";

    // Variables
    $deName = 'Budgie-Desktop';
    $deSShot = $budgie1 . $budgie2 . $budgie3;

    // installs
	  $installUbuntu = '** for 15.10 or higher (?? Lubuntu, Xubuntu ???)<br />
    						sudo add-apt-repository ppa:fossfreedom/budgie-desktop <br />
    						sudo apt-get update <br />
    						sudo apt-get install budgie-desktop <br />
    						Reference: AJ Reissig https://www.youtube.com/watch?v=MKFkHD6kbU4';


    $installMint =	'Not Available';
    $installDebian = ' ';
    $installArch = '(via <a href="https://aur.archlinux.org/packages/budgie-desktop-git/ target="_blank">Arch Unoffical Repo </a>  ';

    $installFedora = 'Fedora 22/23 <br />
    						<a href="https://software.opensuse.org/package/budgie-desktop"  target="_blank" >Info on OpenSuse and Fedora Repos for Budgie-Desktop</a> <br />

    						<a href="https://build.opensuse.org/package/show?project=home%3Aikeydoherty%3Asolus-project&package=budgie-desktop">More Specifically</a>';


	  $installSuse = 'Tumbleweed and 42.1 <br />
    					<a href="https://software.opensuse.org/package/budgie-desktop"  target="_blank" >Info on OpenSuse Repos for Budgie-Desktop</a>

    					<a href="https://build.opensuse.org/package/show?project=home%3Aikeydoherty%3Asolus-project&package=budgie-desktop">More Specifically</a>
    					';


    $installPCLOS = 'PROBABLY N/A ';
    $installGentoo = ' ';

    $title = 'DE/WM Section - Budgie-Desktop ';

?>

<?php include $sitePath . "/modules/footer.tpl"; ?>
