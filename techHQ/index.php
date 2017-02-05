<?php $the_title = 'Xmetalfanxs Homepage'; ?>
<?php

      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/modules/tech/baseTechHeader.tpl";
      include_once($path);

      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/templates/tech/baseTechMAINTemp.tpl";
      include_once($path);

?>
  <!-- mainBody Tag is opened -->
<div id="col2">
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
</div> <!-- ends Col2 -->

  <?php

      $path = $_SERVER['DOCUMENT_ROOT'];
      $path .= "/techHQ/modules/GAOTD.tpl";
      include_once($path);

      $path = $_SERVER['DOCUMENT_ROOT'];
     $path .= "/modules/tech/baseTechFooter.tpl";
     include_once($path);

?>
