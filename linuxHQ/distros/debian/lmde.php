<?php

    $title = 'Distribution Section - Linux Mint Debian Edition ';

    $localName = 'lmde';

   $description = <<<DES
    Linux Mint Debian Edition is the version of Linux Mint based on Debian (versus  Linux Mint,
    which is based on Ubuntu).  Linux Mint Debian edition use to follow the Debian Testing branch
    (Slighly more updated packages), though it has been said they will follow Debian \"Stable\" for
    increased stability.

DES;

    $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

    ?>

    <?php include $sitePath . "/modules/footer.tpl"; ?>
