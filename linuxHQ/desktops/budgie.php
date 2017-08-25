<?php

    $sitePath="/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/baseLinuxDE.tpl";

    // Variables
    $deName = 'Budgie-Desktop';
    $deSShot = $budgie1 . $budgie2 . $budgie3;

    // installs
	  $installUbuntu = '


    $installDebian = ' ';
    $installArch = '(via <a href="https://aur.archlinux.org/packages/budgie-desktop-git/ target="_blank">Arch Unoffical Repo </a>  ';

    $installFedora = 'Fedora 22/23 <br />
    						<a href="https://software.opensuse.org/package/budgie-desktop"  target="_blank" >Info on OpenSuse and Fedora Repos for Budgie-Desktop</a> <br />

    						<a href="https://build.opensuse.org/package/show?project=home%3Aikeydoherty%3Asolus-project&package=budgie-desktop">More Specifically</a>';


	  $installSuse = 'Tumbleweed and 42.1 <br />
    					<a href="https://software.opensuse.org/package/budgie-desktop"  target="_blank" >Info on OpenSuse Repos for Budgie-Desktop</a>

    					<a href="https://build.opensuse.org/package/show?project=home%3Aikeydoherty%3Asolus-project&package=budgie-desktop">More Specifically</a>
    					';

    $installGentoo = ' ';

    $title = 'DE/WM Section - Budgie-Desktop ';

?>

<?php include $sitePath . "/modules/footer.tpl"; ?>
