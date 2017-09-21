<?php

foreach($browserDownloadsResult as $field)
{
  echo "<div class=\"card\" >";
	echo "<div class=\"card-block\" >";

	  echo "<div class= \"card-title bg-light \" > ";
		echo "<div class=\"col-lg-3\" > ";
			echo $field['iconurl'];
		echo "</div>";


		echo "<div class=\"col-lg-9 font-weight-bold\" > ";
			echo $field['addontitle'];
		echo "</div>";


	  echo "</div>"; // Ends card-title



	echo " <div class=\"row\" >";
		echo "<div class=\"col-lg-6\" > ";
			echo "<strong>Current Version: </strong> " . $field['currentversion'] . " \" ";
		echo "</div>";

		echo "<div class=\"col-lg-6\" > ";
			echo "<strong>Last Updated: </strong> " . $field['lastupdated'];
		echo "</div>";
  echo "</div>"; // Ends Row


		echo " <div class=\"row\" >";
		echo "<div class=\"col-lg-6\" > ";
			echo "<strong>Developer: </strong> " . $field['developer'];
		echo "</div>";


  echo "</div>"; // Ends Row



	 // TODO: Add code to NOT DISPLAY the N/A code .. perhaps
	  echo "<br /><div class=\"row\" >";
		echo "<div class=\"col-lg-6\" > ";
			echo "<a href=\" " . $field['firefoxurl'] . " \" target=\"_blank\"> Firefox URL</a>";
		echo "</div>";

		echo "<div class=\"col-lg-6\" > ";
			echo "<strong>For Firefox 57 and Up?:</strong> " . $field['forff57up'];
		echo "</div>";
	  echo "</div>"; // Ends URL Row


	  	echo "<br />Chrome URL: " . $field['chromeurl'] . "</p>";


	 echo "</div>"; // Ends Card-block

  echo "</div>"; // Ends Card




}

?>
