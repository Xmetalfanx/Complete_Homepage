<?php
		$the_title ='Xmetalfanx\'s Homepage - Tech Center - Audio Enhancing';
?>

    <p>I have to note that I have not had to restore either of my DriveImageXML or my Paragon Backup and Recovery Images yet, so I do not know if that
    will cause issues. (It shouldnt.) I have Windows 7 64bit Home Premium, and both of these programs worked fine on my computer. </p>
	<p>I will explain Paragon, as I see most users will be more comfortable with it, with its better interface, but
	<a href="http://www.runtime.org/dixml.htm" target="_blank">DriveImageXML</a> and
	<a href="http://www.paragon-software.com/home/db-express/" target="_blank">
	Paragon Backup and Recovery</a> both basically have the same method (as do all drive imaging programs) </p>

	<p class="header">Summary of the Steps</p>
	<ol>
	  <li>Pick <span class="italics">Source</span> (What your backing up)</li>
	  <li>Pick <span class="italics">Destination</span> (Where to backup to) </li>
	  <li>(Optional) Pick and set advanced options to really customize the image itself... Like Firefox &quot;out of the box&quot;.... if your not comfortable
	   with this.. .NO PROBLEM <img src="../../smiles/happy/b_010.GIF" width="38" height="20" alt="Thumbs up Smile" />
		<ul>
		  <li>	A few options include image size before split
			<ul>
			  <li>I made the mistake of figuring 4GB is a good split point to backup to a DVD.. I found that if i did that, and it was all split into about
			  2 images (so you can back them up to external media). </li>
			  <li>This WOULD have worked, except for the fact that if I didn't re-create the images (starting over) I'd have about 600MB of &quot;blank
			  space&quot; on each DVD I used. I opted to redo things generally set at 725MB, putting multiple image segments<span class="italics">
			   (Image segments, Image fragments, Image parts = ALL MEAN divided parts of the same drive image ... I will try to keep my terminology
			   the same throughout this tutorial, though)</span> onto the same about (roughly the same amount of Dvds), BUT ... more of the DVD was
			   being used ... I only had about (I AM GUESSING) ... about 200MB of free space left on each disc.

				<ul>
				  <li>(which I included other data on ... say the installer for new Firefox versions, and Antivirus Database Backups)                </li>
				  <li>I Then used that 200MB of free space to hold some installers I had downloaded on high speed (I am on dialup at home), including
				  the Paragon Backup and Recover Installer (99MB)
					<ul>
					  <li>This brings me to another point for possibly other dialup users ... FIND AN ACCESS POINT YOU CAN download Parargon on ...
					  There are MANY all over the place nowadays ... I find that its worth the download.  I have had some programs that left me with &quot;thats it?...
					  that small freeware I already had did a better job at &quot;task X&quot; &quot; ... Paragon (mind you I have never HAD to restore yet ....) seems
					  very well put together and requires no constant rebooting in order to image your drive ... even if its the one running at the time. </li>
					</ul>
				  </li>
				  </ul>
			  </li>
			  </ul>
		  </li>
		  <li>Password protecting the image</li>
		  <li>Checking the created image's integrity </li>
		  <li>... and more ... </li>
		</ul>
	  </li>
	  </ol>
	<p>&nbsp;</p>
	<p><a href="Step3.php">Step 3 - &quot;Lets Get started&quot;</a></p>
    </div>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
