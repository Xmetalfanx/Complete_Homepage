<?php

			$title = 'Distribution Section -  Point Linux'

			$localName = 'pointlinux';

      $description = <<<DES
        Point Linux is a preconfigued Debian based distrobution that uses the Mate Desktop OR Gnomeshell in
        newer versions.

DES;

$sitePath = "/home/xmetalx1/public_html";

include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
<?php include $sitePath . "/modules/footer.tpl"; ?>
