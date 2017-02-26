<?php

	$the_title ='Xmetalfanx\'s Homepage - Tech Center - Drive Imaging';
?>
      <p class="center">
		  <a href="driveImageSoftware.php" class="boldCenter">List of Software Needed on other page </a></p>
<p class="header">Drive Image FAQ's</p>
      <ul>
        <li class="maroonText">&quot;Why do a drive image? ... &quot;</li>
        <li class="maroonText">&quot;Why not just recover using the CDs/DVDs that came with your system (I am assuming you haven't lost those) ? (I personally have never liked these disks) &quot;     </li>
      </ul>
      <ul>
        <li><span class="maroonText">
        <img src="../../smiles/sad/sadbye.gif" alt="sad smile" width="33" height="26" class="imgleft" />
        &quot;Its too hard to Image a drive, I cant do it&quot;</span>
          <ul>
            <li>Well I am not going to say its not to hard, since everyone has a different experience level, but my intent for this page is for those that want to learn, but dont know how </li>
            <li>I AM NOT saying this is the only way to do it, but I am going to try to use freewares in my example, but also mention other ways. ... Another thing I am thinking of is I may say backup by burning to a CD/DVD ,but you may also (if you can boot to one) use a usb flash drive .. I have never done it that way, however, I plan to at least create a page to link to other resources with info for those that want to do it that way.</li>
            <li><span class="boldText">REMEMBER ... your learning </span><img src="../../smiles/happy/good.gif" alt="Good Smile" width="26" height="23" class="imgCentWrapBoth" />.... I had no clue had to do this years ago.... Read up on the subject and take a little time and you can save yourself headaches later ....
<ul>
              <li>Example - <span class="maroonText">Your Hard drive fails and has to be replaced (as long as you backed up the drive images somewhere else)  if you bring it in to a place that replaces the drive for you, you can either </span>
                <ul>
                  <li class="maroonText">tell them just to replace the drive (and not install windows all over again) ..</li>
                  <li class="maroonText"> or you could give them (I would use backup copies ... just incase they mess your discs up ... not likely they will ... but &quot;just incase&quot;) your drive image discs and the Bootable CD and if they are good techs, they will set your PC back to the way you had it (when you created the image) </li>
                </ul>
              </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
<p class="header">What you need </p>
      <p class="mainProgDescript">(note my &quot;not the only way&quot; message above)</p>
      <ol>
        <li>	A place to put the images
          <ul>
            <li>This can be: (A) USB Drive, (B) CD or DVD Drive, ...etc </li>
            <li>You CAN make a seperate partition to keep the image, but DO NOT HAVE THAT BE THE ONLY PLACE TO KEEP IT. For example, sure .... make a &quot;custom recovery image partition&quot; <span class="redBold">(remember all the images will not work if you can not get the app that created, running </span>... BUT ALSO back up the images to another &quot;media&quot; to. in case your hdd goes down completely or you cant access the drive/partition with the backups</li>
          </ul>
        </li>
        <li>(to be &quot;Captain Obvious&quot;) A Program to create the image
          <ul>
            <li>I have used </li>
            <li>
            <div class="sevenFiveTable">
            	<blockquote>
                <div class="thirty">
            		<a href="http://www.runtime.org/dixml.htm">
                  		<img src="../../progIcons/system_tools/backup/1579__DriveImage_XML.png" alt="DriveXML Icon"  class="icon" />
                  		<span class="progName">DriveImageXML</span></a><br /><br />

                </div>
                <div class="thirty">
            		<a href="http://www.paragon-software.com/home/db-express/" target="_blank">
                    	<img src="../../progIcons/system_tools/backup/paragonBackup.png" alt="Paragon Icon" width="36" height="36" class="iconsLeft" />
                        <span class="progName">Paragon Backup and Recovery (Advanced) Free Edition</span></a><br /><br />

                </div>
                <div class="thirty">
           <img src="../../progIcons/system_tools/backup/reflect_128.gif" alt="Reflect Image Icon" width="38" height="38" class="iconsLeft" /><span class="progName">
                  Reflect</span>

                </div></blockquote>

            </div>
            </li>
          </ul>
          <blockquote>
				<p>IN THESE PROGRAMS, DO REMEMBER (I know Paragon reminds you with popup ads/notifications on your first run) to create a backup of
				Paragon, so you can ACTUALLY GET TO your drive images later.</p>

				<p>This can be an an:   </p>
				<blockquote>
				  <p>USB Flash Drive, </p>
				  <p>CD, </p>
				  <p>DVD, </p>
				  <p>(and .. I am not 100% about this one, but I think its ok) external Hard drive</p>
				</blockquote>
          </blockquote>
        </li>
      </ol>
      <p>This one I am just &quot;throwing out there&quot; .. I WANT TO NOTE THAT, Programs like Paragon and Reflect (listed above) both not only create bootable image CD's for you, but reminds you in case you forget .. after all ... what good is an image if you have to restore &quot;everything&quot; to ... do the restore?
  </p>
      <blockquote>
        <p>A Bootable Partition Program... I like Linux based <a href="http://gparted.sourceforge.net/" target="_blank">GParted</a><span class="italics">(many sites have it..
          I know Softpedia.com and SourceForge.net does)</span> , which can be downloaded seperately OR it is included with Boot CDs like
          <a href="http://www.ubcd4win.com/" target="_blank">UBCD4Win</a>
          . which include Gparted as well as many other tools and programs.</p>
      </blockquote>

<p class="header">What are Drive Images</p>
    <p>Drive Images in basic terms are files that can be backed up via several forms of media (USB stick, CD-R, DVD-R(W, ..etc) that when restored,
    can revert your system back to an earlier time (sort of like a restore point that (A) ACTUALLY WORKS and (B) is on removable media (although it
    CAN BE on a second hard drive partition). </p>

    <p>DO NOT CONFUSE &quot;DRIVE IMAGES&quot; WITH &quot;Image files&quot; like JPG's or GIFs, by the way.</p>
    <p class="header">
    <img src="../../smiles/yahoo_Smiles/huh2.GIF" alt="Huh2 Smile" width="20" height="18" class="imgleft" />&quot;Wait, ISN'T
    THAT like what those pre-included backup cds that come with the computer that you JUST SAID you did not like?&quot;</p>

    <p>Well, mostly.. yes it is ... <span class="boldItalics">however</span>, there are some advantages over the pre-existing CDs/DVDs.
    Some questions to remember are: </p>

    <ul>
      <li>What Happens to your customiizations (Firefox and Firefox add-ons, browser backups,...etc) ?
        <ul>
          <li>All gone, while you do a system recovery with the pre-installed Discs</li>
        </ul>
      </li>
      <li>What happens to my personal files?
        <ul>
          <li>(not counting those who do backups of all their personal data to various forms of external media)</li>
          <li>Gone too. </li>
        </ul>
      </li>
    </ul>
    <p class="center"><strong><a href="Step1.php">TO STEP 1 ~~~~~~~~~~~&gt;</a></strong></p>
  <!-- InstanceEndEditable -->
    </div>

		<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
