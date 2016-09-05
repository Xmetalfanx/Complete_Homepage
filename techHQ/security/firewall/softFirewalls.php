<?php

  	$the_title = 'Xmetalfanx Security Section - Software Firewalls';
	$the_content = <<<EOD

	<table class="tableBlackBorderZeroAll">
        <caption>
        <strong>Software Firewalls</strong>
        </caption>
        <tr>
          <th class="twenty" scope="col">Program Name </th>
          <th class="eighty" scope="col">Comments</th>
        </tr>
        <tr>
          <td class="progName"><a href="http://personalfirewall.comodo.com/" target="_blank"><img src="../progIcons/security/firewalls/a2d7170c.png" alt="Comodo Icon" width="50" height="50" class="iconsLeft" />COMODO</a></td>
          <td>Free Firewall that despite a group of people not liking it, I think it has potential. I still prefer Kerio to COMODO AND COMODO seems to crash often; however, There are many updates to COMODO and bugs are frequently being fixed. </td>
        </tr>
        <tr>
          <td class="progName">Kerio Personal Firewall </td>
          <td><p>Same as Tiny... for the most Part </p>
            <p>2008 Note: I found that version 4.2 is just fine, while the newest version 4.5916 is very &quot;buggy&quot; and causes me enough headaches to downgrade back to 4.2. I have not really worked with 4.3xxx versions, so I can not comment on them</p>
            <p>&nbsp; </p></td>
        </tr>
        <tr>
          <td><p class="boldText">Norton Internet Security</p></td>
          <td><strong>Not</strong> Good </td>
        </tr>
        <tr>
          <td class="progName"><img src="../progIcons/security/firewalls/op_install32_116.png" alt="Outpost Icon" width="32" height="35" class="iconsLeft" />Outpost</td>
          <td><p class="justify">A firewall that CONSTANTLY rates in the top 3 on most security scanner sites. If I wasn't giving Comodo another chance with the new version 5.x.. This would be my software firewall, without a doubt</p></td>
        </tr>
        <tr>
          <td class="progName"><a href="http://www.sygate.com" target="_blank"><img src="../progIcons/security/firewalls/31__sygate.png" alt="Sygate Icon" width="32" height="32" class="iconsLeft" />Sygate Personal Firewall</a></td>
          <td><p class="justify">A great Firewall, that may not be up-to-date as far as the latest exploits, since it has been discontinued since Symantec (the company that makes Norton Products) bought it out </p></td>
        </tr>
        <tr>
          <td class="progName">Tiny Personal Firewall </td>
          <td><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td class="progName"><a href="http://www.zonelabs.com" target="_blank">Zone Alarm</a> (free or Pro)</td>
          <td><p class="justify">So Common, starting to become less secure (i know i know.... all SW firewalls are not 100% anyway). I rather use Sygate, Outpost, or even &quot;Tiny&quot; Personal Firewall... Some new computer users may find Zone Alarm easier to understand, which in that sense, i say go ahead. if you feel more comfortable with it then other firewalls. </p></td>
        </tr>
    </table>

EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinSecurityTemplate.php"); ?>
