<?php

  $pageTitle = 'Software Section Main Page';

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/frontpages/techSoftwareFrontpage.tpl";

    echo '<script type="text/javascript">

    output = `
        This is a Template String and no longer using the HEREDOC like i had been in this test 
    `;
	
    outputLocation = document.getElementById("softwareSection");
    outputLocation.innerHTML = output;

    </script>';

?>