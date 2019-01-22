<?php
	 $pageTitle = ' Links';
     
       $sitePath = "/home/xmetalx1/public_html";

     include $sitePath . "/templates/tech/baseTechMAINTemp.tpl";




echo '<script type="text/javascript">

	var output = `
		Links will go Here <br />

		<hr />

		This is a test of the new way to do things anyway 


	`;




          outputLocation = document.getElementById("outputSection");
            outputLocation.innerHTML = output;

        </script>';
 ?>
