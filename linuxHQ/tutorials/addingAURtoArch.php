<?php

	$title = 'Tutorial Section - Adding PPAs to any Ubuntu Based Distro';
	$content = <<<EOD


		<h2>How To Add the AUR to Arch</h2>

		Information gathered from the <a href="https://wiki.archlinux.org/index.php/Arch_User_Repository">Arch Wiki page</a>   AS
		well as <a href="https://drive.google.com/file/d/0B3DsklBZ0EX0a19QdnI3SmNIXzA/view">Matthew Moore’s “Arch install Guide”</a>

		<h3>Install Yaourt from source ( recommended method)</h3>
		<ul>
		<li>
		<p>Replace <strong>user</strong> with your user name in the commands below</p>
		</li>
		<li>
		<p>Do each “line” one at a time</p>
		</li>
		</ul>

<div class="code">

		// Install Git<br />
		sudo pacman -S git<br /><br />

		// Get and install the package-query package<br />

		sudo git clone https://aur.archlinux.org/package-query.git <br /><br />

		// Navigate into the package query directory<br />
		cd package-query<br /><br />


	    sudo chown -R $(whoami) /home/user/package-query<br />
		sudo chmod 775 /home/user/package-query<br />

		makepkg -si<br />
		cd ..<br /><br /><br />


		// Get the Yaourt Package<br />
		sudo git clone  https://aur.archlinux.org/yaourt.git <br /><br />

		// Navigate into the Yaourt directory<br />
		cd yaourt<br /><br />


		sudo chown -R $(whoami) /home/user/yaourt<br />
		sudo chmod 775 /home/user/yaourt<br />
	    makepkg -si<br />

		cd .. <br />

		DONE

</div>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
