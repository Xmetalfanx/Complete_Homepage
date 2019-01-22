<?php

  $pageTitle = 'Software Section Main Page';

  $sitePath = "/home/xmetalx1/public_html";
<<<<<<< HEAD
  include $sitePath . "/templates/tech/frontpages/techMainFrontpage.tpl";

    $phpTestVar = <<<EOT
    Hello Folks - HEREDOC TEST
EOT;

  echo "<script type='text/javascript'>
        outputLocation = document.getElementById('outputSection');
        
        outputLocation.insertAdjacentHTML('afterbegin', '$phpTestVar' );
  
  
    </script>";

?>
=======
  include $sitePath . "/templates/tech/frontpages/baseTechSoftwareFrontpage.tpl";

  $phpTestVar = "Hello Folks";

  echo "<script type=\"text/javascript\">";
    echo "var jsTestVar = echo $phpTestVar; ";
    echo "outputVariable = document.getElementByID(\"softwareSection\")";
    echo "outputVarible.insertAdjacentHTML(\"beforeend\", jsTestVar)";
  echo "</script> ";
?>

>>>>>>> 7cfcad70... TechHQ Software Section work
