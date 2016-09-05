<?php

  $title = 'Xmetalfanx Optimization Section - Optimizing Windows'
  
	$the_content = <<<EOD
  
  <div class="boldCenter">Here are some things you can do to &quot;optimize windows&quot; 
  </div>    
  <div class="centerTables">   	  
    <div class="TDLeft"> <a href="#services">Disabling Services (2K/XP)</a></div>    	
    <div class="TDRight"> <a href="#update">Windows Update</a> </div>    
  </div>    
  <ol>      
    <li>(Windows 2000) - Disable Automatic Update Service. You must have SP2 or SP3 installed 
    </li>      
    <li> (Windows 2000) - Disable &quot;Spam&quot; Messenger Service
    </li>      
    <li>
   Get Startup Program such as Startup Cop or Startup Control Panel and remove un-needed startup items. Going to the run box and typing in 
   MSCONFIG will allow you to edit the startup items as well.
    </li>      
    <li>
    Do a Windows Update (All Versions of Windows)
    </li>      
    <li>
   Do not use Harmful Programs that contain Spyware and ads. 99% of the time there are free (truly free) programs that do the same and a better job then 
   the spyware programs. 
    </li>    
  </ol>    
  <blockquote>      
    <p class="justify">Also I have tried multiple versions and always have had trouble with. All Real Network's Programs and All 
      <a href="http://www.mcafee.com">Mcafee</a> Products (but PGP ... which when Mcafee released their version of it, it had numerous bugs compared 
      to the prior    freeware version by Mr. Zimmerman)
    </p>    
  </blockquote>  
   
EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
