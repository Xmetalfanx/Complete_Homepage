<?php

  $title = 'Xmetalfanx Maintenance Section - Windows Startup Info'

    $the_content = <<<EOD

    <p>I have recently removed all pages naming all programs I could think of &quot;to keep&quot; or &quot;to remove&quot;. The fact of the matter is there are way too many programs for me to list, so instead I have opted to suggested general guidelines. Instead of blindly removing as many things as possible, do a search on the internet, and 99 percent of the time one of the first results of any good search engine will compleltely explain what that item is.</p>
    <p class="header">What to keep</p>
    <ul>
      <li>a overall startup monitoring program like WinPatrol (Freeware) [THIS CAN REALLY HELP DISABLING ITEMS LISTED FURTHER DOWN THE PAGE]</li>
      <li>Firewalls</li>
      <li>Antiviruses</li>
      <li>anything specifically related to drivers (although not &quot;always&quot; needed).  I for instance leave ATITray Icon on, although i probably &quot;COULD&quot; remove it</li>
      <li>(if applicable) spyware scanner's real time scanners</li>
      <li>Firewall &quot;accent&quot; programs 
        <ul>
          <li>Peerblock IP Blocker, for instance.</li>
        </ul>
      </li>
    </ul>
    <p class="header">What to remove</p>
    <p>* This just means it's not starting when Windows starts ... This does not prevent the program from working whne you click the icon on the desktop or start menu</p>
    <ul>
      <li>Internet Messanger 
        <ul>
          <li>(Yahoo Messanger, Pidgin, MSN Messanger, ...etc)</li>
        </ul>
      </li>
      <li>** Use common sense ... .anything that you may want to run from time to time but do not always have to have running,...ESPECIALLY everytime you startup the computer ... uncheck</li>
      <li>As a sidenote to the last point ... basically anytype of program not listed above in the &quot;what to keep&quot; sections.... can probably be removed ... (but always research things before you just start removing entries)... </li>
    </ul>
<p>&nbsp;</p>

EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
 
       
