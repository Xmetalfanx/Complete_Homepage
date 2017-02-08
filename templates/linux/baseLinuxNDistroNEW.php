<?php
    $sitePath = "/home/xmetalx1/public_html";
	  include $sitePath . "/templates/linux/massLinuxIncludes.tpl";
    include $sitePath . '/modules/linux/linuxBaseHeader.php';
?>


## Look over this to slim it down

<?php include $sitePath . ('/linuxHQ/modules/linuxNDistroTemplateCol1.php'); ?>
  <div id="col2">
			<?php

			   include $sitePath . ('/linuxHQ/database/dbconnect.php');

			   //Variables
			   $distroTitle = $display["name"];
			   $distroBase = $display[base];
			   $distroIcon = '<img src=" ' . $display["icons"] . ' " alt=" ' . $display[distroName] . ' \'s Homepage" />';
			   $homepage = '<a href=" ' . $display[homepage] . ' " > '  . $display[distroName] . ' \'s Icon " > ';
			   $forum = '<a href=" ' . $display[forum] . ' " > '  . $display[distroName] . ' \'s Forum " > ';
			  	$ytReview = '<a href=" ' . $display[ytplaylist] . ' " > '  . $display[distroName] . ' \'s Youtube Review Playlist \" > ';
			 	$download = '<a href=" ' . $display[download] .  ' " > '  . $display[distroName] . ' \'s Downloads \" > ';
				$distroWatch = '<a href=" ' . $display[distroWatch] . ' " > '  . $display[distroName] . ' \'s Distrowatch Page" > ';
				$tweakPL = '<a href=" ' . $display[tweakPL] . ' " > '  . $display[distroName] . ' \'s Youtube Tweak Playlist \" > ';


				  echo $distroTitle;
				  echo "Hello";

				   while ($display = mysql_fetch_array($result))
				   {
						 printf($distroIcon);


				   echo "<div class=\"icon\"> " . $distroIcon . " </div>";
						 echo "<div class=\"distroTitle\"> " . $distroTitle ." </div>";

						 echo "<div id=\"distroTables\" style=\"clear:both;\">";
						  echo "<div class=\"infoLeft\">";

							   echo "<div class=\"distroHeader\"> Homepage:</div>" . $homepage . " <br />";
							   echo  "<div class=\"distroHeader\"> Distro \"Family\" </div>" . $distroBase . "<br />";
							   echo "<div class=\"distroHeader\"> Forums: </div> " . $forum . " <br />";
							   echo  "<div class=\"distroHeader\"> Destop Options:</div> " . $display[de] . "<br />";
							   echo "<div class=\"distroHeader\">Xmetal\"s Youtube\"s Review Playlist:</div>" ;
							   echo $ytReview;
							   echo "<br />";

							  echo "<div class=\"distroHeader\">Software Based:</div> " . $display[software] . "<br /> ";

							// Ending of the left column
							echo "</div>";

						  // Start of Right Column
						  echo " <div class=\"infoRight\"> ";

							  echo "<div class=\"distroHeader\"> Lastest Version: </div>" . $display[version] . " <br />";
							  echo "<div class=\"distroHeader\">Download:</div>" . $display[download] . " <br />";
							  echo "<div class=\"distroHeader\">Distrowatch Link: </div>" . $display[distroWatch] . "<br />";
							  echo "<div class=\"distroHeader\">Targeted User:</div>" . $display[target] . "  <br />";
							  echo "<div class=\"distroHeader\">Tweaks/Fixes/...etc Video: </div>"  . $tweakPL . " <br />";

						  // End Right Column
						  echo "</div>";

						  // End Distro Table
						  echo "</div>";

						echo "<div id=\"descript\" style=\"clear:both;\" >";
						echo "<div class=\"distRevTitle\"> Similar Distros: </div>" . $display[similar] . "<br />";

						echo "<div id=\"descript\" style=\"clear:both;\">";
						echo "<div class=\"distRevTitle\">Description:</div>" . $display[description] . "<br />";

						echo "<div class=\"bold\">Screenshots </div>";
						echo "<div id=\"distroShots\">" . $display[sshots] . "<br />";

						echo "<div style=\"clear:both; margin-top: 15px;\" class=\"distRevTitle\">Reviews</div>";

						include $sitePath . ('/linuxHQ/modules/linuxDistroReviewer.php');

						echo "<div id=\"personalExp\">" ;
						echo "<div class=\"distRevTitle\">My Experience: </div>";

				   echo $EXP "<br />";
				   echo $experience "<br /><br />";

				   echo "<span class=\"bold\"> ";
				   echo "Would I recommend this distro to a new user (to Linux)  (Yes/No) ? </span>: " ;

				   echo $newbRecommend "<br /><br />";

				   echo "<blockquote>" . $recComments . "</blockquote> <br />";
				   echo  " <span class=\"bold\">Would I recommend this distro (Yes/No) ?</span>:";
				   echo $recommend . "<br />";

				   echo "<blockquote>" . $recComments . "</blockquote><br /><br />";

				   echo "<span class=\"boldUnderline\">Any other comments I have about this distro: </span>";

				   echo  $otherComments . "</div>" ;

				   echo "<div id=\"personalExp\">";
				   echo "<div class=\"distRevTitle\"> USB Drive Creation Experience </div> <br />";

				   include $sitePath . ('/linuxHQ/modules/usb.php');

				   echo "</div>";
			   };

			 ?>
		</div>
	</div>
