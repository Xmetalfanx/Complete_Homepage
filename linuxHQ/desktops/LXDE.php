<script type="text/javascript">
	var localDEName = "lxde";
</script>

<?php

	$sectionVar = "DE";
	$pageTitle = 'LXDE ';

	

	$path = getenv('DOCUMENT_ROOT'); include $path . "/templates/linux/baseLinuxDE.tpl";

  // keep here for now, until this is in the json file
	$installUbuntu = '  apt-get install lxde or apt-get install lubuntu-core lubuntu-icon-theme lubuntu-restricted-extras';
	$installMint =	'apt-get install lxde or apt-get install lubuntu-core lubuntu-icon-theme lubuntu-restricted-extras  ';

?>
