<?php 

		$the_title = 'Backup Index Page';
		$the_content = <<<EOD
		
	<ul>
		<li class="maroonText"></li>
	</ul>
	
	<p class="header">What are Drive Images</p>
    
    <p>
		Drive Images in basic terms are files that can be backed up via several forms of media (USB stick, CD-R, DVD-R(W, ..etc) 
		that when restored, can revert your system back to an earlier time (sort of like a restore point that (A) ACTUALLY WORKS and 
		(B) is on removable media (although it CAN BE on a second hard drive partition). DO NOT CONFUSE &quot;DRIVE IMAGES&quot; 
		WITH &quot;Image files&quot; like JPG's or GIFs
    </p>
    
    <p class="header">&quot;Wait, ISN'T THAT like what those pre-included backup CDs that come with the computer that you JUST 
    SAID you did not like?&quot;{</p>
    
    <p>Well, mostly.. yes it is ... however, there are some advantages over the pre-existing CDs/DVDs Some questions to remember 
    are: </p>
    
    <ul>
      <li>What Happens to your customizations (Firefox and Firefox addons, browser backups,...etc) ?</li>
      <li>What happens to my personal files? (I will cover partitioning later, which is also an answer to this question))</li>
    </ul>
    
EOD;
?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinFAQTemplate.php"); ?>
