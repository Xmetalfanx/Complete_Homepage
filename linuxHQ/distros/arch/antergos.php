<?php

    
    $path = getenv('DOCUMENT_ROOT'); include $path . "/templates/linux/baseLinuxDistro.tpl";

    $pageTitle = 'Antergos';

?>

echo '<script type="text/javascript">';
    echo 'var localDistroName = "antergos"; ';
echo '</script>';