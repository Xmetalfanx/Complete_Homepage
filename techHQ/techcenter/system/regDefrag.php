<?php

    $title = 'Xmetalfanx Maintenance Section - Registry Defrag'
	$the_content = <<<EOD
  
  <table class="tableBlackBorderZeroAll">      
    <caption> Registry Defragmenters   </caption>      
    <tr>        
      <th width="20%" class="twenty" scope="col"> Program Name   </th>        
      <th width="80%" class="eighty" scope="col"> Description     </th>      
    </tr>      
    <tr>        
      <td class="progName">
        <a href="http://www.auslogics.com/en/software/registry-defrag/" target="_blank">        
          <img src="../../progIcons/system_tools/registry/RegistryDefrag_MAINICON.png" alt="RegDefrag Icon" width="36" height="36" class="imgleft" />Aulogic Reg Defrag</a></td>        <td>
        <p>This is something that you really dont have to do alot but if your computer is running sluggish, and its been a LONG time since you formatted          or reinstalled a new version of Windows, you may want to give this a try
        </p>          
        <p>AGAIN, I have run into issues with NON-&quot;
          <a href="http://www.macecraft.com/" target="_blank">JV16</a>&quot; Registry programs; although all of the programs (all freewares too)            
          that I have tried from Aulogic seem to work great.     </p>          
        <p>I did not notice any &quot;GREAT IMPROVEMENT&quot; in WIndows 7, after using this program, but it did remove (so it said) 1.2MB from my 
        registry.   </p>          
        <p>No Comment on Vista, but I have run this on XP 32bit and it was fine and Windows 7 64bit and it was a-ok as well            
          <img src="/techHQ/smiles/dance/dance (1).gif" width="18" height="18" alt="Smiling Smile" />
        </p></td>      
    </tr>      
   
    <tr>        
      <td class="progName">
        <a href="http://www.glarysoft.com/" target="_blank">
          <img src="/techHQ/progIcons/system_tools/glary.png" alt="Glary Utilities" width="36" height="36" class="iconsLeft" />Glary Utilities</a></td>        <td>
        <p>(FREE or Pro available, though I use the very powerful free version) 
        </p>          
        <p>Some of the tasks this program can perform, are: Invalid Shortcut Fixer/Remover, Temp File Remover (scans whole HDD), Trace remover, Registry Cleaner, Start-up Manager, Registry Defragmenter, and most useful a new user (if you ask me) a 1-Click Maintenance feature that performs selected tasks automatically for the user.<br />          
        </p>          
        <p>This registry cleaner (component) is (mind you that I dont compared &quot;entry to entry&quot; is along the lines of Auslogic's and Eusing's ... very good and I am not saying you need all 3 of these, though having this program provides you with many other tools then just a registry cleaner, so it doesnt hurt to try it.
        </p></td>      
    </tr>      
    <tr>        
      <td class="progName">
        <p>
          <a id="jvPowerTools2"></a> 
          <a href="http://www.macecraft.com/"> 
            <img src="/techHQ/progIcons/system_tools/jv16PT_MAINICON.png" alt="Jv16 power tools icon" width="36" height="36" class="iconsLeft" /> jv16 Power<br />          Tools</a>
        </p>          
        <p>&nbsp;
        </p>          
        <p>&quot;Registry Compactor&quot;
        </p></td>        <td>
        <p class="boldText"> I have tried this a few times on Windows 7 and have run into nothing but problems. This always use to work on XP, but if your on Vista or Windows 7           ... DO NOT USE THIS
        </p>          
        <p>I have used this a ton on XP over the years and have NOT have problems with it, on that Operating System 
        </p></td>      
    </tr>      
    <tr>        
      <td class="progName">
        <img src="../../progIcons/system_tools/WiseRegCleaner_MAINICON.jpg" alt="Wise Registry Cleaner" width="48" height="48" class="iconsLeft" />
        <a href="http://www.wisecleaner.com/" target="_blank">Wise Registry Cleaner</a></td>        <td>
        <p>Wise Registry Cleaner is another &quot;Wise&quot; product that I have recently tried and to be honest, It (like Wise Disk Cleaner) is not a replacement for some tools like &quot;JV16 Power Tools&quot; (which is not free, like this program is), though it has just enough features that are not in other freewares (at least &quot;all together in the same freeware&quot;, that makes this worth trying 
        </p>          
        <p>The main features: 
        </p>          
        <ul>            
          <li>Complete  Registry Backup
          </li>            
          <li>Registry Cleaning (of course) ...               
          <ul>                
            <li>I can not say if its better than &quot;Auslogic's Reg Cleaner&quot; or say ... &quot;Glary Uitilities's Reg Cleaner&quot;, though it is along the same lines
            </li>                
            <li>BOTH my 32bit XP and 64bit Windows 7 Machines had Wise Clean the registry and I selected the defaut entries Wise says
             are &quot;Safe&quot; to remove. I HAVE NOT experienced any ill effects of any kind on either machine </li>              
          </ul>            
          </li>            
          <li>Registry Defrag  </li>            
          <li>System Tuneup    </li>            
          <ul>              
            <li>Tips and suggestions for settings to disable/change to make your computer perform better </li>              
            <li>I am still testing this out, ... I dont expect a &quot;great improvement&quot;, though for someone who has never tweaked their computer..
             this could help.       </li>              
            <li>As with all programs like this, read what the &quot;tweak&quot; is doing before you do it or you may have strange results ... 
            just &quot;read before your click&quot; is what I am saying.  </li>            
          </ul>          
        </ul></td>      
    </tr>    
  </table>    
  <p>I admit this is not something you need to do on a regular basis. I have run Aulogic's Reg Defrag on my older XP machine and it freed about 1.6MB of space.      If you haven't formatted in awhile (or EVER) you may want to give a try ... if you regularly install and remove alot of software you may want to try this more often ... .      but even I would only run this every few months or a year or so ... no need to run registry defrags all the time
  </p>  

EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
