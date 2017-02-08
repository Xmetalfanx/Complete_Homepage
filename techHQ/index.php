<?php

  $sitePath = "/home/xmetalx1/public_html";
    include $sitePath . "/templates/tech/baseTechMAINTemp.tpl";

 ?>

<div id="wideCol2">
	<h3>Educations Sites </h3>
	<div id="support">

			<p class="khanAcaImage">
				<a href="https://www.khanacademy.org/" target="_blank">
				<img src="/techHQ/graphics/khan-logo-vertical-transparent.png" alt="Khan Academy Graphic" class="center" /> </a>
			</p>

			<p class="linuxAcad">
				<a href="https://linuxacademy.com/" target="_blank">
				<img src="/techHQ/graphics/linuxAcad.png" alt="Linux Academy Graphics" />	</a>
			</p>

			<p class="KKing">
				<a href="http://www.kristakingmath.com/" target="_blank">
				<img src="/techHQ/graphics/kking.png" alt="Krista King Math Site graphics" />
					Krista King Math </a>

				<br /><br />

				<a href="https://www.youtube.com/channel/UCUDlvPp1MlnegYXOXzj7DEQ">
				(or Her Channel on Youtube) </a></p>

</div>
<?php
    include $sitePath . "/techHQ/modules/GAOTD.tpl";
    include $sitePath . "/modules/tech/baseTechFooter.tpl";
?>
