<?php

  $title = 'Xmetalfanx Maintenance Section - Restore Point Cleaning'
	$the_content = <<<EOD
 
 
  <p>Along with the number of run-away system log entries, I have noticed on a few machines a ton of restore points that are no longer needed. I am not going into my      view of restore points and how people mess up while using them (like getting a virus, then restoring thier computer ... to an earlier point ... when they were STILL      INFECTED&quot;.... 
  </p>    
  <img src="/techHQ/smiles/mad/ranting.gif" width="28" height="24" alt="Mad Smile" />    
  <p class="header"> HERE IS A SIMPLE WAY TO CLEAN OUT SOME UN-NEED ENTRIES.
  </p>    
  <p>All you need is one program that I have already mentioned many times on my site 
  </p>    
  <p>
    <a href="http://www.ccleaner.com" target="_blank">         
      <img src="/techHQ/progIcons/security/cleaners/959__CCv2.gif" alt="CCleaner Icon" width="32" height="32" class="imgleft" />    
      <span class="progName">CCleaner </span></a>
  </p>    
  <ol>      
    <li>Open CCleaner and go to the &quot;Tools&quot; Panel (look on the left, under &quot;Cleaner&quot; and &quot;Registry&quot; 
    </li>      
    <li>from here Click &quot;Restore points&quot;  </li>      
    
    <li>From here what and how many you remove is up to you. Especially on computers that are not mine, I ususally leave a few of them, but I have seen over 10 to 15 entries.        After I clear them out I have noticed a difference of 15 GB (yes GB ) after clearing some of the older entries out.       
    <img src="../../smiles/dance/dance (1).gif" alt="Talking Smile" width="37" height="30" class="imgfloat" /> REMEMBER ... RESULTS MAY VERY ...        there may only be one entry in the list and not the many I am saying. ALSO, I am 99% sure that CCleaner does NOT TOUCH the most recent restore point, so even if you want        Ccleaner to remove it
    </li>    
  </ol>
  <p>&nbsp;  </p>    
 

EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
