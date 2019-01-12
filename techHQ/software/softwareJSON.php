<?php

  $pageTitle = 'Software Section Main Page';

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/frontpages/techMainFrontpage.tpl";

    $phpTestVar = <<<EOT
    Hello Folks - HEREDOC TEST
EOT;

  echo "<script type='text/javascript'>
        outputLocation = document.getElementById('outputSection');
        
        outputLocation.insertAdjacentHTML('afterbegin', '$phpTestVar' );
  
  
    </script>";

?>