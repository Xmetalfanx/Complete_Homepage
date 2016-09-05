<?php

  	$the_title = 'Xmetalfanx Maintanence Section - Firewalls';
	$the_content = <<EOD

  <p class="header">Intro </p>    
  <p>Without doing a description of a firewall that will bore you to tears, I hope to give a general description that anyone will understand
  </p>    
  <p>A software (program) firewall is a program that monitors connects between your website and the internet, LAN (Local Network), or Wifi (Wireless Connection).
  </p>    
  <p> A key that I know of, and want to mention is that if you see something trying to connect to the internet .. DONT WORRY .. many programs have auto-update features that just want to check if there is a new versions. In some cases, a program (say an antivirus for instance) will check for updates &quot;every x hours&quot; so out of no where, you may see an alert that    
  </p>    
  <p class="header">What Firewall to use?
  </p>    
  <p>I am not going to go through the list of firewalls you can choice from, but I will quickly mention the top two I would pick. I am not saying the other firewalls are no good, but these are the ones I know are good 
  </p>    
  <table     class="tableBlackBorderZeroAll" >      
    <caption>        <br />        Firewalls (some of these are security suites)       
    </caption>      
    <tr>        
      <th class="twenty"> Program Name 
      </th>        
      <th class="eighty"> Description 
      </th>      
    </tr>      
    <tr>        
      <td class="progName">        
        <a href="http://personalfirewall.comodo.com/" target="_blank">        
          <img src="../../progIcons/security/firewalls/a2d7170c.png" alt="Comodo Icon" width="50" height="50" class="iconsLeft" />Comodo Internet <br />          Security </a></td>        <td>
        <p>        
          <span class="interestsTitles">Sept 17, 2010 
          </span>-          
          <span class="justify">I have used          
            <img src="../../progIcons/security/firewalls/cavscan_PRODUCTLOGO.ICO.png" width="48" height="48" alt="Comdo5 Icon" />        Comodo 5 x86 and x64 for a few days on two computers and along with some guides (which i will collectively add here) I am happy with it. I am not saying they changed the few issues I have problems with in the past, but I think I am just more open to it. 
          </span>
        </p>          
        <p class="justify">My old firewall (Outpost) is one I still like, and it only rates slightly below (protection wise) than Comodo, but even the freeware of Outpust doesn't have as many features as Comodo. I want to say the in alot of ways it has the same features as Outpost Pro (not free), Comodo just takes longer to setup (at the moment I am typing this... they could update and change things and often do, based on users opinion on their forums) ... at no point do these improvements (at least not before) has this EVER lowered the security of Comodo.
        </p>          
        <p class="maroonText">Note: Comodo Internet Security is the same as Comodo Firewall but with Comodo Antivirus too ... I never use the Comodo AV, so I just opted for Comodo Firewall. *** BOTH have Defense+ .... I say this because I wasn't sure and I know I am not the only one that has had this question
        </p></td>      
    </tr>      
    <tr>        
      <td class="progName">
        <a href="http://www.agnitum.com/products/outpost/" target="_blank">Outpost Pro</a></td>        <td>&nbsp;</td>      
    </tr>      
    <tr>        
      <td class="progName">          
        <a href="http://free.agnitum.com/" target="_blank">
          <img src="../../progIcons/security/firewalls/1286__OutpostFreeIcon.png" alt="Outpost Freeware Icon" width="32" height="32" class="iconsLeft" />Outpost <br />          (Freeware)</a></td>        <td>
        <p>Rates high on many review sites [(security review sites that test firewalls), NOT just user reviews]; although not as high as Comodo rates. 
        </p>          
        <p>I use the pro version, but I still love the free version of Outpost
        </p></td>      
    </tr>      
    <tr>        
      <td class="progName">        
        <a href="http://www.peerblock.com/" target="_blank">        
          <img src="../../progIcons/security/1326__peerblock1_icon.png" alt="Peerblock Icon" width="32" height="32" class="iconsLeft" />Peerblock</a></td>        <td>
        <p>** This is an IP blocker and NOT SUPPOSE TO BE USED AS A FIREWALL REPLACEMENT... BUT RATHER A FIREWALL COMPLEMENT ** 
        </p>          
        <p>This is a nice IP Blocker that can block access from/to certain IP address on your computer. You can google I{P Blocklists that you can import into Peerblock; although, I have found sometimes there are too many IP's blocked and sites like www.google.com can be blocked ... It IS VERY EASY to remove those &quot;extra&quot; entries., so its not really a big deal
        </p></td>      
    </tr>    
  </table>    
  <p class="header">Local Connections
  </p>    
  <p>I find its usually ok to allow (I use as strict rules as possible) anything where the DESTINATION ADDRESS IS 127.0.0.1. For those of you who do not know, this is basically telling the computer to connect to itself ... 127.0.0.1 is your OWN computer... no matter what computer your on ... the address of ITSELF is 127.0.0.1.    
  </p>    
  <p class="header">General Predefined rules
  </p>    
  <p>Here (Despite the firewall you choose to use, I will list a few pre-defiend rules I use so I do not have to keep repeating myself below. As with most ,,, you can look at your firewall log if you can not make a connection and adjust the rules for your need. I am just listiing &quot;guidelines&quot; 
  </p>    
  <p class="boldText">
    <a id="localC"></a>Local connections only 
  </p>    
  <blockquote>      
    <p class="code">I have set to allow All connections (TCP or UDP) to LAN addresses (your LAN addresses may vary) 
    </p>      
    <p class="code">Also (if you didn't include this with your LAN addresses) address 127.0.0.1 as well 
    </p>      
    <p class="code">Block and Log Everything else
    </p>    
  </blockquote>    
  <p class="boldText">
    <a id="yahooC"></a>Yahoo Connections 
  </p>    
  <blockquote>      
    <p class="code">Allow to DESTINATION ports (local ports do not matter):
    </p>      
    <ul>        
      <li>80, 
      </li>        
      <li>8080 (typical proxy port), 
      </li>        
      <li>443 (secure HTTP port), 
      </li>        
      <li>5050 (yahoo)
      </li>      
    </ul>      
    <blockquote>        
      <blockquote>          
        <p>I have noticed yahoo messanger (no other yahoo clients do this) connecting TO odd ports ... I am not sure, why but i think they may be related to the ads displayed in Yahoo Messanger. I have not yet blocked those requests ... I should try that and report back what happens (if yahoo kicks you off often ....etc etc) 
        </p>        
      </blockquote>      
    </blockquote>      
    <p class="code">Notify me/Log anything else 
    </p>    
  </blockquote>    
  <p class="boldText">
    <a id="outgoingC"></a>Outgoing Only
  </p>    
  <blockquote>      
    <p class="code">Allow All outgoing (TCP or UDP) connections to any port and any address 
    </p>      
    <p class="code">Block/Log Anything else    
    </p>    
  </blockquote>    
  <p>&nbsp;
  </p>    
  <p class="header">Firewall Rules
  </p>    
  <p>Below are some are rules I found to be good. I am NOT claiming to be a security expert, but after some research I found found that these will not effect my system in a negative way. (I have tested these on a few of my computers, with NO ill effects) 
  </p>    
  <ol>      
    <li>
    <span class="blue"> SVCHOST.EXE 
    </span>        
    <blockquote>          
      <p>this one is tricky,.... I am talking about the original version located in 
        <span class="redtext">C:\Windows\System32
        </span> IF YOU HAVE AN INFECTED COPY OF SVCHOST.EXE, I can not speak for the safety of that 
      </p>          
      <p>I set this 
        <a href="#OutgoingC">Outgoing Only</a> on this laptop; however, I believe I have it set to 
        <a href="#localC">Local Connections only</a> on my old laptop due to my new laptop was unable to connect to the LAN on it. 
      </p>        
    </blockquote>      
    </li>      
    <li>
    <span class="blue"> Any Yahoo Client (Most users will just use Messanger 
    </span>          
    <blockquote>          
      <p>
        <a href="#yahooC">Yahoo Connections Only</a>
      </p>          
      <p>&nbsp;
      </p>        
    </blockquote>      
    </li>    
  </ol> 
 
EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinMaintenanceTemplate.php"); ?>
