<?php

	
	$path = getenv('DOCUMENT_ROOT'); include $path . "/templates/linux/baseLinuxDistro.tpl";

	$pageTitle = 'Debian';

	$download = '<a href="http://www.debian.org/distrib/ftplist" target="_blank">http://www.debian.org/distrib/ftplist</a> <br />
    <a href="http://www.debian.org/CD/" target="_blank">Debian on CD</a> ';

?>

<script type="text/javascript">
	var localDistroName = "debian";
</script>