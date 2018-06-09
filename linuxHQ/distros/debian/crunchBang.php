<?php

		$pageTitle = 'Distribution Section -  Crunchbang';

		$name = 'Crunchbang';
		$family = 'Debian ';
		$icon = '<img src="../../graphics/icons/crunchbang.png" width="90" height="79"  alt="Crunchbang Icon"/>';
		$homepage = '<a href="http://crunchbanglinux.org/" target="_blank">http://crunchbanglinux.org/</a> ';
		$download = '<a href="http://crunchbang.org/download/" target="_blank">http://crunchbang.org/download/</a> ';
		$version = '11';
		$forum = '<a href="http://crunchbanglinux.org/forums/" target="_blank">http://crunchbanglinux.org/forums/</a>';
		$distroWatch = '<a href="http://distrowatch.com/crunchbang" target="_blank">http://distrowatch.com/crunchbang</a> ';
		$DE = 'Openbox';
		$similar = 'The Debian family\'s version of Archbang OR Debian with Openbox installed';

	  $recommend = ' Yes';
	  $newbRecommend = ' ';

      $description = <<<DES
        Crunchbang is a Debian Based distro that works great on older (any hardware for that matter) Hardware and
        is compatible with most of the Debian packages (That makes for a very stable system).  The lightweight
        Openbox is the window manager used in Crunchbang by default.
DES;


	$otherComments = '<p>Crunchbang is basically Debian with Openbox as the default Window Manager. Crunchbang DOES have its own software
						repositiories, though I am saying &quot;basically&quot; what it is	</p>'


?

$sitePath = "/home/xmetalx1/public_html";

include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
<?php include $sitePath . "/modules/footer.tpl"; ?>
