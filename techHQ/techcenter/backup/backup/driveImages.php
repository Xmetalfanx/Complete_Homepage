<?php 

		$the_title = 'Xmetalfanx FAQ Section - Backups - Drive Image';
		$the_content = <<<EOD


    <div id="wideCol2">
      <ul>
        <li class="maroonText">&quot;Why do a drive image? ... &quot;</li>
        <li class="maroonText">&quot;Why not just recover using the CDs/DVDs that came with your system (I am assuming you haven't lost those) ? (I personally have never liked these disks) &quot;     </li>
      </ul>
      <ul>
        <li><span class="maroonText"><img src="../../smiles/sad/sadbye.gif" alt="sad smile" width="26" height="18" align="left" class="left" />&quot;Its too hard to Image a drive, I cant do it&quot;</span>
          <ul>
            <li>Well I am not going to say its not to hard, since everyone has a different experience level, but my intent for this page is for those that want to learn, but dont know how </li>
            <li>I AM NOT saying this is the only way to do it, but I am going to try to use freewares in my example, but also mention other ways. ... Another thing I am thinking of is I may say backup by burning to a CD/DVD ,but you may also (if you can boot to one) use a usb flash drive .. I have never done it that way, however, I plan to at least create a page to link to other resources with info for those that want to do it that way.</li>
          </ul>
        </li>
      </ul>
      <p class="header">What you need </p>
      <p class="mainProgDescript">(note my &quot;not the only way&quot; message above)</p>
      <ol>
        <li>	A place to put the images
          <ul>
            <li>This can be: (A) USB Drive, (B) CD or DVD Drive, ...etc </li>
            <li>You CAN make a seperate partition to keep the image, but DO NOT HAVE THAT BE THE ONLY PLACE TO KEEP IT. For example, sure .... make a &quot;custom recovery image partition&quot; <span class="redBold">(remember all the images will not work if you can get the app that created(and therefore can restore the image) running </span>... BUT ALSO back up the images to another &quot;media&quot; to. in case your hdd goes down completely or you cant access the drive/partition with the backups</li>
          
          </ul>
        </li>
      </ol>
      <p class="header">What are Drive Images</p>
    <p>Drive Images in basic terms are files that can be backed up via several forms of media (USB stick, CD-R, DVD-R(W, ..etc) that when restored, can revert your system back to an earlier time (sort of like a restore point that (A) ACTUALLY WORKS and (B) is on removable media (although it CAN BE on a second hard drive partition). DO NOT CONFUSE &quot;DRIVE IMAGES&quot; WITH &quot;Image files&quot; like JPG's or GIFs</p>
    <p class="header">&quot;Wait, ISN'T THAT like what those pre-included backup cds that come with the computer that you JUST SAID you did not like?&quot;{</p>
    <p>Well, mostly.. yes it is ... however, there are some advantages over the pre-existing cds/dvds. Some questions to remember are: </p>
    <ul>
      <li>What Happens to your customiizations (Firefox and Firefox addons, browser backups,...etc) ?</li>
      <li>What happens to my personal files? (I will cover partitioning later, which is also an answer to this question))</li>
    </ul>
    <p>You can backup your </p>
    </div>
 
EOD;
?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinFAQTemplate.php"); ?>
