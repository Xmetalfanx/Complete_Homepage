<?php

  $pageTitle = 'Software Section Main Page';

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/frontpages/baseTechSoftwareFrontpage.tpl";

  $phpTestVar = "Hello Folks";

  echo "<script type=\"text/javascript\">";
    echo "var jsTestVar = echo $phpTestVar; ";
    echo "outputVariable = document.getElementByID(\"softwareSection\")";
    echo "outputVarible.insertAdjacentHTML(\"beforeend\", jsTestVar)";
  echo "</script> ";
?>

