<?php

  $title = 'Xmetalfanx Maintenance Section - System Log Cleaning and Pruning'   
	$the_content = <<<EOD
  
    <p>On a Realitive's computer running Vista, I have found over 20,000 entries in one system log, and almost 30,000 in another Log. 
    THIS IS A MASSIVE amount of entries that are not needed. Some of them were even from over four months prior. Here, I hope to help you
     manage your system log as its a GREAT tool for troubleshooting, but if unmanaged, can just plan get out of hand.  </p>    
 
  <p>If you have XP, download this program as it makes managing the log files MUCH easier  </p>    
 
  <p>
    <a href="http://www.eventlogxp.com/" target="_blank">    
      <img src="/graphics/progIcons/system_tools/1833__Eventlogexplorer_icon.png" alt="Even Log Explorer" class="icon" />    
      <span class="progName">Event Log Explorer     
      </span></a>
  </p>    
  <p>&nbsp;
  </p>    
  <p class="borderDotTop">I WANT TO BE CLEAR THIS IS FOR YOUR OWN COMPUTERS ... IF IT'S YOUR WORK COMPUTER AND NOT YOURS, DO NOT TRY THIS (...REALLY THE SYSTEM ADMIN SHOULD BLOCK THIS ACCESS ANYWAY) ...
  </p>    
  <p class="borderDotTop">&nbsp;
  </p>    
  <p class="header">Saving/Clearing Log in Vista/ 7 
  </p>    
  <ol>      
    <li>Go to Start and in the &quot;search box' right above the start menu, start typing in &quot;eve ..&quot; and evetual &quot;Event Viewer&quot; comes up               
    <p>
      <a href="../../screenshots/System/Event_log.jpg">
        <img src="../graphics/tn/tn_eventViewer1.jpg" alt="event_Viewer thumbnail" width="360" height="283" class="imgLeftPad" /></a>
    </p>      
    </li>      
    <li>Here you see three columns ... right click the left most panel where it says &quot;Windows logs&quot;      
    
       <ol>          
		  <li> <span class="boldText">STEP 1:   </span>
		  <span class="redBold">[Optional[ Saving Application,Security, and/or System Log  </span>                   
		  <ul>              
			<li>Right Click the log you want to work on's icon in left-most panel and select &quot;Save All Events as&quot; and then select location you want to
			 save the log file as</li>            
		  </ul>          
		  </li>                   
		 
		  <li> <span class="boldText">STEP 2:  </span> 
		  <span class="redBold">Clear Applications, Security, and/or System log .... </span>  </li>        
    </ol>      
    </li>
    <li>Select The log file you want to work with, in the left panel and right click &quot;Clear Log&quot; ... it will give you 3 options &quot;Save and Clear&quot;    
    (you can skip saving if you did step 1, above), &quot;Clear&quot; and &quot;Cancel&quot; </li>        
    <li>Here you would select Clear or Saving and Clear  </li>    
  </ol>    
  <p class="header">Saving/Clearing Log in XP (and i think ELV works in Windows 2000 too)  </p>    
  <blockquote>      
		<p>
		  <a href="/techHQ/screenshots/System/Event_log.jpg">
			<img src="/techHQ/screenshots/System/thumbs/tn_Event_log.jpg" width="261" height="219" alt="Event Log Viewer Screenshot" /></a>
		</p>    
  </blockquote>
  <p class="header">Adjusting so that logs &quot;do not get out of conttrol&quot;
  </p>    
  <ol>      
		<li>Right click the log you want to work with and select &quot;properties&quot;               
		<p>  <img src="/techHQ/graphics/tn/tn_logProp.jpg" alt="Event Log Properties Screen" width="296" height="263" class="imgLeftPad" />	</p> </li>           
		<li>Lower the &quot;Maximum log size&quot; ... about 20,000KB is equal to 20 MB (I think)
		</li>  
		<li>You may want to reduce that number to a lower number of your choice... the system log will still function, it just will not keep as many entries,
		 as long,  AND take up less room on your computer  </li>    
  </ol>    

EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
