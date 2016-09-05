<?php

	$the_title ='Xmetalfanx\'s Homepage - Tech Center - Audio Enhancing';
	$the_content = <<<EOD
	
    <p class="header">Before I Begin</p>
    <p>At this point, I am assuming you</p>
    <ul>
      <li><a href="driveImageSoftware.php#progs" target="_blank"> have one of the software I suggested installed </a></li>
      <li>You have an idea of what you want to do ... since I cant see everyone's partition &quot;Setup&quot;, I am only going to give general advice 
      and links to <a href="http://gparted.sourceforge.net/" target="_blank">Gparted</a>. </li>
    </ul>
    <p class="header">Pick out the Destination</p>
    <p>I know some people who hate the idea of partitions, but I really do like them (granted: you can go overboard with them, so watch it)</p>
    <ul>
      <li>Note: The Idea of partition (dividing hard drive space) is where you can create Linux Partitions to create a multiboot system with the free 
      space from an existing partition... BUT thats a whole other subject</li>
      <li>I am not going into details on &quot;what is a partition&quot; but will add links to this area to help people out</li>
      <li>I think alot of the imaging programs have gotten better with imaging WIndows (note: I HAVE imaged Slackware and Ubuntu Partitions, 
      but I have not had to restore them so I am not sure how good each program is restoring...
        <ul>
          <li> I had no issues making the images with any of the three imageing programs, so I do not imagine I would have issue unless I had ... 
          say (example: one of the images on a scratched CD) ...</li>
        </ul>
      </li>
    </ul>
    <p class="borderDotTop">&nbsp;</p>
<p class="boldItalics"><a href="http://gparted.sourceforge.net/" target="_blank">This is where you need GParted, to split or adjust your partition 
setup to make another drive to store the image... you can (and ... just my opinion, remove the default &quot;recovery partition&quot;'s that come on some
 store bought computers and use that space too ... in a way ... once you backup your drive image files (a few steps ahead of this), you can even leave 
 (depending on free space avaible) the images on that partiton too ..so you have a &quot;custom restore partition&quot;. . </a></p>
    <ul>
      <li>I use to use Partition Magic (before they were bought out by Symantec) and I find <a href="http://gparted.sourceforge.net/" target="_blank">
      GParted</a> to be alot better. It is Linux based ( <span class="italics">&quot; OH NO!,  I have to learn Linux?&quot; ... NO YOU DO NOT ... IT DOESN'T 
      HURT, BUT THAT (again) IS ANOTHER SUBJECT </span>) </li>
      
      <li><span class="boldUnderline">Advantages of Gparted</span>: Gparted, being Linux based mean that the new Linux File Systems are fully 
      supported and always updated support for those File Systems. Many Linux users (far more &quot;into&quot; Linux that I am) use Gparted and
       I would almost say that ... <a href="http://gparted.sourceforge.net/" target="_blank">Gparted</a> is the &quot;standard program to use&quot;</li>
    </ul>
    
    <p class="borderDotTop">You have to decide <span class="italics">(I cant say, since EVERYONE'S COMPUTER is different... Hard drive size, amount of 
    used space on the drive, ...etc all makes a difference)</span>. I find make a space with MORE THAN ENOUGH space is better than having a space for the 
    images not big enough ... then you have to stop making the images and go back to step one (this step) ... it really is NOT A BIG DEAL at all... but
     you can safe time and a headache later.</p>

    </div>
 
EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
     
