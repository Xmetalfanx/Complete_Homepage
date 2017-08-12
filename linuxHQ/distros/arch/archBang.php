 <?php
    $title = 'Distribution Section - ArchBang';

    $localName= 'archbang';

		$newbRecComments = ' Basically &quot;No&quot;, just because I wouldn\'t recommend an Arch based Distro to any new user ';

   $description = <<<DES
     Archbang is an Arch Spin with the OpenBox Window Manager preinstalled and preconfigured.  Archbang is geared for Arch users and users who want a desktop experienece that puts speed and eviencie above so called flash.

DES;

$sitePath = "/home/xmetalx1/public_html";

include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
<?php include $sitePath . '/modules/footer.tpl'; ?>
