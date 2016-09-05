<?php 
		
		function urlBlank($url, $urlName)
		{
				echo "<a href=\"  " .  $url . "\"  target=\"_blank\">" . $urlName . "</a>";	
		}
		
		function urlParent($url, $urlName)
		{
				echo "<a href=\"  " .  $url . "\" >" . $urlName . "</a>";	
		}
		
		function valIcon($src, $altTag)
		{
				echo "<img src=\" " .$src . "\" alt=\" " . $altTag . "\" width=\"88\" height=\"31\" class=\"right\" >" ;
		}

?>		
