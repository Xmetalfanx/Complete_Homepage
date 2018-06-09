<?php 
	$the_title = 'Xmetalfanx Security Section - Rogue Virus and Malware scanners and how to remove them';
   	$the_content = <<<EOD


  <p>In my recent activities on Yahoo Answers, I have noticed a lot of people infected with the rouge/fake Malware and Virus scanners...      some do not even realize it. On this page I intend to use resource such a      
    <a href="http://www.bleepingcomputers.com" target="_blank">BleepingComputers</a>, in order to create a sort of &quot;Index&quot; of common fake scanners and what the symptoms are and how to remove them (mainly providing links)
  </p>        
  <p>
    <span class="blue" id="intelliTxt"> Rootkits
    </span> -      Rootkits are in basic terms the type of program/&quot;Part of the infection&quot; that helps a virus or malicious program hide from common legit) scanners. (I am talking about the good Malware scanners (ex-Malwarebytes) and good Anti-virus (Ex- Eset's NOD32). A lot of the good scanners MAY be able to detect this malware, but even some of the better scanners have trouble sometimes dealing with these pesky little apps.
  </p>              
  <p>
	Without even going to my &quot;Credits&quot; page (linked at the bottom of this white section of of my site), I know alot of sites have these tutorials and great information; HOWEVER, 
	I REALLY WANT TO THANK BleepingComputers site for the great information it has provided.  Even if they ask me to take this down (which I would do), Their site has helped me help other's with 		&quot;bad infections&quot; so much.       I have seen people with the only option they have left is to reformat and to bring their computer in and spend a ton of money to do it,       
	while losing thier custom setings and personal data.... I link to BC's website and I have even gotten personal emails thanking me for the fact that BC's has completely dis-infected the infected computer. with easy to follow steps and with 100% FREE programs.
  </p>    
  <p>Again, BleepingComputers... Thank you
  </p>    
  <p class="header">Common ways these viruses work
  </p>    
  <ol>      
    <li>They install a trojan on your computer that claims you are infected (and in way you are)
    </li>      
    <li>They say that it will have to be removed a number of virus scanners from a particular site. ALOT OF THEM ARE LEGIT; however, a number of &quot;anti-viruses&quot; are fake scanners (each infection's list is different) 
    </li>      
    <li>It will do an &quot;online scan&quot; (fake of course) to remove the virus will of course fail, and tell you to remove the inflection, the only way you can do it is to install a specific scanner (here is where the fake scanner which is the &quot;main part of the infection&quot; comes in
    </li>    
  </ol>    
  <p>&nbsp;
  </p>    
  <p class="header">Common Methods I am seeing that remove most of these infection (although a second scan is suggested by myself AND the tutorial (&quot;just to be sure&quot;) 
  </p>    
  <ul>      
    <li>First some of these viruses will do something as simple as changing the proxy settings on your browser (typically IE) to not allow you to get on the web.         
    <ul>          
      <li>
      <span id="intelliTxt3">How to &quot;fix this&quot; in Internet Explorer (you can use similar methods to fix the issue in other browsers like Firefox and Chrome; although infections, typically infect IE 
      </span>            
      <ul>              
        <li>
        <span>In, Internet Explorer,  click on the 
          <span class="boldText">Tools
          </span> menu and then go to 
          <span class="boldText"> Internet Options
          </span> and click that <br />                
        </span>
        </li>              
        <li>When the next dialog box appears, click on the 
        <span class="boldText">Connections
        </span> tab
        </li>              
        <li>Now click on the 
        <span class="boldText">LAN Settings
        </span> button
        </span>
        </li>              
        <li>Uncheck the checkbox labeled 
        <span class="boldUnderline">Use  a proxy server for your LAN
        </span>. Then press the <strong>OK</strong> button       to close this screen. 
        </span>
        </li>              
        <li>
        <span>Then press the <strong>OK</strong> button to close the Internet Options screen. Now that you have disabled the proxy server you will       be able to browse the web again with Internet Explorer.
        </span>
        </li>            
      </ul>          
      </li>        
    </ul>      
    </li>    
  </ul>    
  <ol>      
    <li>Get the noted software. This MAY have to be done on another computer and then transfer (via USB Flashdrive. CD. LAN Connection, ..etc) to the infected computer         
    <ul>          
      <li>Get 
      <a href="http://preview.tinyurl.com/2dnzgjf">RKill</a> (the link I provide here is to TinyURL's preview page so you can see where you are being redirected to) - Some infections really disable RKill ... 
      <a href="http://www.bleepingcomputer.com/download/anti-virus/rkill" target="_parent">here is another link to download Rkill.exe as another filename</a> (sometimes infections are stupid enough just to look for &quot;RKill.exe&quot; as a running process and that alone... simply renaming Rkill will allow Rkill to &quot;do its thing&quot;)
      </li>          
      <li>Get 
      <a href="http://www.malwarebytes.org/" target="_blank">MalwareBytes</a>, as I have not seen a tutorial for these infections yet that doesn't involve getting MalwareBytes           <br /><br />
      </li>        
    </ul>      
    </li>           
    <li>(At this step, I assume you fixed the proxy issue ... sometimes even if you do, the infection can re-enable the proxy, so just double check that if your having issues still with an internet connection, the proxy did not get re-enabled)
    </li>      
    <li>
    <span class="boldItalics">Some of these programs (to fully get rid of infections) have to be ran in Safe Mode. To do that, before the Windows &quot;Welcome Logo&quot;, press F8 (sometimes repeatedly) and in the menu that now appears, hit one of the &quot;boot into safe mode&quot; options.
    </span>
    </li>      
    <li>Run RKill -          
    <ol>          
      <li>Rkill will hunt down commonly used fake processes (things running on your computer) that make it dificult for even great scanners like Malwarebytes to dis-infect your computer.
      </li>          
      <li>Many of the fake/rogue infections DO detect RKIll as a virus.. 
      <span class="boldUnderline">DO NOT BE ALARMED
      </span>... it is perfectly safe if you get it from the site I link you too and I have seen it help many &quot;new users&quot;. RKill (from that site) is perfectly fine and legit 
      </li>          
      <li>Even some of the tutorials from BleepingComputers say that some people have Rkill fail on them.                  
      <ul>                  
        <li>What to do if this occurs: 
        </li>                
      </ul>          
      </li>          
      <li>DO NOT REBOOT YOUR COMPUTER, as this will likely re-enable what Rkill has disabled.                 
      <ol>                  
        <li>Ok, this is not &quot;critical&quot; .. if this happens, just re-run Rkill ,... that simple
        </li>                
      </ol>          
      </li>        
    </ol>      
    </li>      
    <li>Run 
    <a href="http://www.malwarebytes.org/" target="_blank">Malwarebytes</a> and I would recommend a &quot;Full Scan&quot;    
    </li>    
  </ol>    
  <p>This is basically it... I will let users go to BleepingComputer's website to get a better idea on how to dis-infect and to research more information on how to help them. My experiences browsing threw those sites have showed me that in general, what I listed above is the &quot;Default&quot; way to clean your system from these infections<br />  
  </p>
  <p class="header">Rogue Scanner/Malware Description and direct links on how to remove them
  </p>    
  <ol class="left">      
    <li>
    <span class="boldText">
      <a href="http://www.bleepingcomputer.com/virus-removal/remove-tdss-tdl3-alureon-rootkit-using-tdsskiller">Google Redirect Virus</a>
    </span>        
    <ul>          
      <li>Obviously, one of the glaring symptoms is the fact that all Google searches get redirected to completely unrelated sites 
      </li>          
      <li>You will be unable or &quot;no allowed&quot; (by the computer message) of running many security programs that would remove this infection
      </li>          
      <li>Many websites (ex- BleepingComputers) that have great resources on how to remove this infection will be block, but other sites may be fine. Also, web browsing tends to slow down compared to normal
      </li>          
      <li class="maroonText">:
      </li>        
    </ul>      
    </li>      
    <li>
    <span class="boldText">Microsoft Security Essentials FAKES 
    </span>        
    <ul>          
      <li>This is a whole &quot;family&quot; of infections that in theory they are the same, faking the legit Microsoft Security Essentials scanner, making you THINK the alerts of coming from MS's
 anti-virus scanner.
      </li>        
    </ul>      
    </li>      
    <li class="boldText">
      <a href="http://www.bleepingcomputer.com/virus-removal/remove-system-tool" target="_blank">&quot;System Tools&quot;</a>
    </li>      
    <li class="boldText">
      <span id="intelliTxt2"><strong>Antivirus AntiSpyware 2011</strong>
      </span>      
    </li>      
    <ul>        
      <li>I THINK that the year at the end of this infection's name could change year to year, but its basically the same 
      </li>      
    </ul>      
    <li>
    <span class="boldText">
      <a href="http://www.bleepingcomputer.com/virus-removal/remove-antivira-av" target="_blank">Antivira AV</a>
    </span>        
    <ul>          
      <li>This one in my opinion can commonly confused with Avira Antivirus (not only a LEGIT freeware anti-virus, but one of my favorite)
      </li>        
    </ul>      
    </li>      
    <li>
    <a href="http://www.bleepingcomputer.com/virus-removal/remove-antimalware-go" class="boldText">Antimalware  GO</a>
    </li>           
  </ol>    
  <p>
    <a href="rogueScanner_sources.php">*** Here is a list of the sources I looked at to obtain this information .. I did not want to overload the appearance of this page** </a>
  </p>    
</div>        

EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinSecurityTemplate.php"); ?>   
