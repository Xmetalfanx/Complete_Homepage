<?php
	
	$path = getenv('DOCUMENT_ROOT'); include $path . "/templates/linux/baseLinuxDistro.tpl";

	$download 	= '<a href="http://software.opensuse.org/" target="_blank">http://software.opensuse.org/</a><br>
    <a href="http://mirrors.opensuse.org/list/all.html" target="_blank">http://mirrors.opensuse.org/list/all.html</a> ' ;

	$pageTitle = 'OpenSUSE ';

?>

<script type="text/javascript">
	var localDistroName = "opensuse";
</script>