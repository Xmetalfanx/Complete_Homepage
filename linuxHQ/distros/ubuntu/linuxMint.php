 <?php
   
  $localdistroname = 'mint';
  $pageTitle = 'Linux Mint';

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

  echo '<script type="text/javascript">';
    echo 'var localDistroName = "mint"; ';
echo '</script>';

?>
