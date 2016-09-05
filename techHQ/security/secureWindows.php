<?php

 	 $the_title = 'Xmetalfanx Maintenance Section - Securing Windows';
	$the_content = <<<EOD   
  
  <div class="header">How to Secure Windows
  </div>    <br />    
  <p> 
    <span class="mainProgDescript">(as much as you can ... this is not including the obvious of using 
      <span class="underline">common sense 
      </span> when on the web, running a Antivirus, Spyware scanners,      and firewalls ....)
    </span>
  </p>    
  <ul>      
    <li>      	Run 
    <a href="http://xp-antispy.org/en/" target="_blank" class="progName">XP-AntiSpy</a> (despite the name &quot;XP... &quot; .. This works great in Vista as well as in Windows 7)       
    </li>           
    <li>      	(BE REALLY CAREFUL WITH THIS) run 
    <a href="http://cmia.backtrace.org/index_en.html" target="_blank">Security and Privacy Complete </a>(read my description)       
    </li>             
    <li>Run 
    <a href="http://www.grc.com" target="_blank" class="progName">DComBobulator</a> from Steve Gibson (this I added during the days of Windows XP, I am not sure if this program        has any effect on Vista or Windows 7)
    </li>            
    <li>
    <span class="progName">      
      <a href="http://en.kioskea.net/download/start/download-291-windows-worms-doors-cleaner" target="_blank">WWDC.exe:</a>
    </span> Get this program that will close many        commonly open/vulnerable ports by adjusting some settings in services and other locations).. I am not sure how much it really does on Vista and Windows 7, but I hope to have        that informations up soon)
    </li>      
    <li>
    <span class="boldText" >Information from other maintenance section 
    </span>        
    <ul>          
      <li>
      <a href="virus/AVScanners.php">Run a Virus Scanner</a>
      </li>          
      <li>
      <a href="../security/firewall/comodo_rules.php">Run a Firewall </a>
      </li>        
    </ul>      
    </li>    
  </ul>  
EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinMaintenanceTemplate.php"); ?>
