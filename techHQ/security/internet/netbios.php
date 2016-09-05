<?php

	$the_title = 'Xmetalfanx Security Section - Disabling Netbios';
	$the_content = <<<EOD
  
  <p>I recently found that disabling Netbios closes down some &quot;system Ports&quot; (that windows itself is using).  </p>        
  <p class="header">Downside  </p>        
  <ul>          
    <li>You will not be able to connect to computers with Netbios as the primary connection source (pre-windows 2000 machines... and MAYBE ME) ... its a piece of cake to turn it back on, if you save the html with screenshots, if you need to turn it on again.. 
    <span class="boldText">no need to do a reformat or anything
    </span>
    </li>          
    <li>so far, i have not had any internet trouble or any other ill effects due to shutting off NetBios
    </li>        
  </ul>        
  <p class="header">Ports Effected
  </p>        
  <p>Ports 135-139 .... I am sure a hardware firewall might work better, but TWO software firewalls that i have running (that do work together... some combinations of firewalls may cause major problems) ... ( Sygate pro 5.5 and Bit Defender 8.x's Firewall) are set here to block those ports; however, some scanners still claim they are open, while other scanners say they are sealthed... now all scanners I have tried say they are sealthed. 
  </p>        
  <p class="header">Brief Description of Conditions of Ports 
  </p>        
  <ul>          
    <li>
    <span class="interestsTitles">Open
    </span> - These are open on a connection, or sometimes &quot;listening&quot;, which is waiting for a connection .... i guess its like              
    <ul>              
      <li>
      <span class="progName">Connected
      </span> = car running
      </li>              
      <li>
      <span class="progName">Listening
      </span> = Car off, but driver in the driver's seat and the key in the ignition (just not turned yet) 
      </li>            
    </ul>          
    </li>          
    <li>
    <span class="interestsTitles">Closed
    </span> - These are ports that are not open, but a hacker scanning your computer can see  		  they are just not open. <br />
    </li>          
    <li>
    <span class="interestsTitles">Sealthed
    </span> - These are ports that are invisible to scans (OK OK, I know some really good hacker is going to see this and say &quot;well, i can still get access to a system and see the ports ..&quot;) I am just being general here.             
    <ul>              
      <li><strong><u>Example of Last Two</u></strong>                                 
      <ul>                  
        <li>
        <em>Closed
        </em> = a robber can see you have your windows locked or at least closed anyway
        </li>                  
        <li> Sealthed = a robber for whatever reason, cant even find the window... 
        </li>                
      </ul>              
      </li>              
      <li>Sure a closed port is good, but a sealthed one is even better
      </li>              
      <li>
      <span class="progName">NOTE
      </span>: lets not get too paranoid here...                  
      <ul>                  
        <li>if you get kicked off yahoo.. THAT IS NOT A HACK...
        </li>                  
        <li> if you have spyware and a ton of popups from that, THAT IS NOT A HACK.... 
        </li>                  
        <li>if a program you just opened is trying to auto update itself (all programs have the option to shut that OFF) ... THAT IS NOT A HACK!
        </li>                
      </ul>              
      </li>            
    </ul>          
    </li>        
  </ul>      
 
EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinSecurityTemplate.php"); ?>
