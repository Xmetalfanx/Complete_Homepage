<?php

	$title = 'Tutorial Section - Adding PPAs to any Ubuntu Based Distro';
	$content = <<<EOD


		<h1>Optimizing Pacman Mirrors</h1>
		<h2>References</h2>
		<ul>
		<li>
		<p><a href="https://www.archlinux.org/mirrorlist/">Pacman Mirrorlist Generator</a></p>
		</li>
		<li>
		<p><a href="https://wiki.archlinux.org/index.php/Reflector">Reflector</a> - Reflector can be used to grab the lastest mirrorlist and sort them by speed, also making sure they are up-to-date</p>
		</li>
		<li>
		<p><a href="https://wiki.manjaro.org/index.php/Rankmirrors_to_Set_the_Fastest_Download_Server">RankMirrors to setup the Fastest Download Server in Manjaro</a></p>
		</li>
		</ul>
		<hr>


<h3>STEP 1 - BACKUP your mirrorlist first</h3>
		<p>In case something goes wrong, you can simply restore the original list … though there ARE OTHER ways around the issue of a goofup.  Here is an example.</p>
		<h4>To backup</h4>
		<pre class="editor-colors lang-text"><div class="line"><span class="text plain"><span class="meta paragraph text"><span>sudo&nbsp;cp&nbsp;/etc/pacman.d/mirrorlist&nbsp;mirrorlist.backup</span></span></span></div></pre>
		<h4>To restore</h4>
		<pre class="editor-colors lang-text"><div class="line"><span class="text plain"><span class="meta paragraph text"><span>sudo&nbsp;cp&nbsp;/etc/pacman.d/mirrorlist.backup&nbsp;mirrorlist.</span></span></span></div></pre>
		<hr>


<h3>Reflector Examples for Arch and Antergos</h3>
		<ul>
		<li>
		<p>The dollar-sign in the commands below ARE representative of the command prompt … using the pound side would mess up my Markdown coding when typing this page. DO NOT copy that dollar-sign IF YOU are copying and pasting any of these commands</p>
		</li>
		<li>
		<p>Filter the first 10 mirrors, sort them by download rate and save the results to /etc/pacman.d/mirrorlist:</p>
		<pre class="editor-colors lang-text"><div class="line"><span class="text plain"><span class="meta paragraph text"><span>$&nbsp;reflector&nbsp;--verbose&nbsp;-l&nbsp;10&nbsp;--sort&nbsp;rate&nbsp;--save&nbsp;/etc/pacman.d/mirrorlist`</span></span></span></div></pre>
		</li>
		<li>
		<p>Rate the 100 most recently synchronized HTTP servers, sort them by download rate, and save to the file /etc/pacman.d/mirrorlist:</p>
		<pre class="editor-colors lang-text"><div class="line"><span class="text plain"><span class="meta paragraph text"><span>$&nbsp;reflector&nbsp;-l&nbsp;100&nbsp;-p&nbsp;http&nbsp;--sort&nbsp;rate&nbsp;--save&nbsp;/etc/pacman.d/mirrorlist</span></span></span></div></pre>
		</li>
		<li>
		<p>Rate the 50 most recently synchronized HTTP servers located in the US, sort them by download rate, and save to the file /etc/pacman.d/mirrorlist:</p>
		<pre class="editor-colors lang-text"><div class="line"><span class="text plain"><span class="meta paragraph text"><span>$&nbsp;reflector&nbsp;--country&nbsp;&#39;United&nbsp;States&#39;&nbsp;-l&nbsp;50&nbsp;-p&nbsp;http&nbsp;--sort&nbsp;rate&nbsp;--save&nbsp;/etc/pacman.d/mirrorlist</span></span></span></div></pre>
		</li>
		</ul>
		<hr>



<h3>Manjaro</h3>
		<ul>
		<li>
		<p>Running the <strong>pacman-mirrors -g</strong> Command to Update the Mirrorlist</p>
		<pre class="editor-colors lang-text"><div class="line"><span class="text plain"><span class="meta paragraph text"><span>$&nbsp;sudo&nbsp;pacman-mirrors&nbsp;-g</span></span></span></div></pre>
		</li>
		</ul>
		<h3>Syncing your Pacman Database</h3>
		<ul>
		<li>
		<p>The Pacman database has a list of installable packages and by syncing this database, you assure yourself that your system has the newest list of packages available TO DOWNLOAD</p>
		<pre class="editor-colors lang-text"><div class="line"><span class="text plain"><span class="meta paragraph text"><span>sudo&nbsp;pacman&nbsp;-Syy</span></span></span></div></pre>
		</li>
		</ul>


<p><em>Updating via pacman is planned for an entirely other section, by the way</em></p>




EOD;
?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNTutorials.php"); ?>
