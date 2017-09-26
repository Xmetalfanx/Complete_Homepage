<?php

		foreach($localmaincatresult as $field)
		{

			echo "<div class=\"card text-dark bg-light mb-3\"> ";
				echo "<div class=\"card-block\"> ";

					echo "<div class=\" card-text \" >";
						echo "<div class=\"row card-header \">";
							echo "<div class=\"col-lg-1 hidden-sm-down\"> ";
								echo  "<img src=\" " . $field['appicon']. " \" /> <br />";
							echo "</div>";

							echo "<div class=\"col-lg-8\"> ";
								echo "<span class=\"text-capitalize font-weight-bold\" >  ";
								echo "<a href=\" " . $field['appurl'] . " \" target=\"_blank\" >" . $field['apptitle'] . "</a>";
								echo "</span> <br />" ;
							echo "</div>";

							echo "<div class=\"col-lg-3\"> ";
								echo "<span class=\" font-weight-bold \" > Version: </span>" . $field['appversion'] . "<br />";
							echo "</div>";

						echo "</div>";  // Ends First Row


						echo "<div class=\"row\">";
							#echo "<div class=\"col-lg-6\"> ";
								#echo "Main Catagory: " . $field['appmaincat'] . "<br />";
							#echo "</div>";

							echo "<div class=\"col-lg-6\"> ";
								echo "Sub Catagory: " . $field['appsubcat'] . "<br />";
							echo "</div>";
						echo "</div>";


						echo "<br />Platform: ";
					  include 'platform.php';

						#echo "This is only to show whats on the Database .. .This will be used to sort data and will not be displayed on final pages <br /><br />";
						#echo "<div class=\"row\">";

							#echo "<div class=\"col-lg-4\"> ";
								#echo "Cross Platform: " . $field['crossplatform'] . "<br />";
							#echo "</div>";

							#echo "<div class=\"col-lg-4\"> ";
								#echo "Linux Only: " . $field['linuxonly'] . "<br />";
							#echo "</div>";

							#echo "<div class=\"col-lg-4\"> ";
								#echo "Windows Only: " . $field['windowsonly'] . "<br />";
							#echo "</div>";

							#echo "Works (Well) in WINE: " . $field['worksonwine'] . "<br />";
						#echo "</div>";  // Ends Platform and WINE DIV

						echo "<br /><br />Description: " . $field['appdescription']  . "<br />";

					echo "</div>";

					echo "</div>"; 		// Ends Card-block DIV

			echo "</div> <hr />";  		// Ends Card DIV

		}

?>
