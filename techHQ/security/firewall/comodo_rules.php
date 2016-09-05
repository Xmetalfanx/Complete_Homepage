<?php 
		$the_title = 'Xmetalfanx Security Section - Comodo Rules (and other firewalls too i suppose)';
		$the_content = <<<EOD   

  <p>I will update this page often and do more research on whats best for security. I have had earlier versions of Comodo automatically set some of the &quot;Outgoing only&quot; entries I have listed below as &quot;Allow from ALL to ALL&quot;... which although that may be ok ... I like to have a tighter security settings. 
  </p>    
  <p>Some people want less firewall prompts, but (as long as it remembers when i have &quot;remember setting&quot; checked) .. I dont care about prompts, as long it lets me know what is going on. 
  </p>    
  <p class="header">Defaults (on my computers anyway) - What predefined rules to use
  </p>    
  <p class="interestsTitles">Outgoing Only
  </p>    
  <ul>      
    <li>Windows System Applications
    </li>      
    <li>System 
    </li>      
    <li>Comodo Internet Security (I am assuming this is for Comodo Update Checking .. this may be ok as &quot;web browser&quot;, but I have Outgoing only) 
    </li>      
    <li>Windows Updater Application (Note: I have NOT tried windows Update with this firewall, much less this Setting yet)    
    </li>    
  </ul>    
  <p class="header">CLT.exe (Link coming soon) - Comodo Leak Test
  </p>    
  <p>Yes Yes, I know &quot;But won't CLT detect anyone runing Comodo's Program and give you a perfect score, in a sense .... CHEATING&quot; 
  </p>    
  <p>I HAVE noticed that CLT DOES NOT &quot;BLINDLY&quot; give people running Comodo Firewall perfect scores 
  </p>    
  <p>
    <span class="boldTitles">My Results
    </span> - Sandbox is on, however, not used on both CLT.exe runs (see below for details ... 
  </p>    
  <p>For those of oyu who dont know .... the higher the score, the BETTER .. a 340/340 result does NOT mean your vunerlable to all 340 expliots!
  </p>    
  <ul>      
    <li>
    <span class="italics"> Comodo x86 version 5.0 on Windows XP 
    </span>
    <ul>          
      <li>I did setup some rules without considering CLT.exe ... however, (i CANT REMEMBER HONESTLY how many settings I changed from defaults, but it was not too many if I remember correctly) ... I scored a 
      <span class="redBold">340/340
      </span> result right out of the gate ... with CLT.exe NOT sandboxed, but any prompts (there were a few) by Defense+ for CLT.exe were &quot;Isolated&quot; (Denyed in other words)
      </li>        
    </ul>      
    </li>      
    <li class="italics">Comodo x64 (same exact version, but x64 version) on Windows 7 Home Prem. 64bit Ed.
    </li>      
    <ul>        
      <li>Right away after about 5 scans I received a (between) 
      <span class="redBold">190-210 out of 340
      </span>
      </li>        
      <li>I am not exactly sure but I think I may have had Defense+ on &quot;Safe PC&quot; which each exe ran is learned (which added rule without me knowning) 
      </li>        
      <li>I changed to &quot;Custom Policy&quot; in Defense+ and ended up getting a prompt for Sandboxing CLT.exe or not during the next run            
      <ul>            
        <li>If i choose to let it run un-sanboxed ... i still get @220/340 ... 
        </li>            
        <li>If I sandbox CLT.exe, I get a perfect 340/340 result
        </li>          
      </ul>        
      </li>      
    </ul>    
  </ul>    
  <p class="borderDotTop">If you run thus on your computer, you may have browser windows popping up (thats a simulated exploit that its testing for) so dont be shocked .... its suppose to do that (if your not fully protected).
  </p>    
  <p class="header">Default Settings for both Firewall and Defense+
  </p>    
  <p class="justify">
    <img src="../../smiles/happy/clapping.gif" width="40" height="24" alt="Clapping Smile" />It may not get a perfect score, but for those who dont want to mess with alot of settings and are &quot;new&quot; to computers or not conputer savy .. the default settings for &quot;safe&quot; but more probable &quot;Custom Policy&quot; (on Firewall and Defense+) tabs are PERFECTLY ALRIGHT in my opinion, for normal &quot;non-techy&quot; users
  </p>    
</div> 


EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinSecurityTemplate.php"); ?>
           
