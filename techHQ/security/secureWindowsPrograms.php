<?php

	$the_title = 'Security Section -  Securing Windows - Programs';
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/baseTechSecurityTemp.tpl";
?>

  <p class="justify">
	  This is a collection of programs that I have found that will patch and fix numerous problems with Windows XP.&nbsp; Most of these programs will need
	  to be ran once, and perhaps you to click &quot;patch&quot; or &quot;fix&quot;. I recommend reading the options/help file for each of these as some
	  of them may cause functionality of your computer to change.&nbsp; Bugoff in particular will note what functions may no longer work. I also can not claim
	  that all of these programs work&nbsp; (i guess you'd have to be a real hacker to test if they patch some of the exploits); although, I believe that they
	  do.
  </p>
  <table class="tableBlackBorderZeroAll">
    <tr>
      <th>Program Name </th>
      <th style="width:40%;">Description </th>
      <th style="width:30%;">Screenshots (click for full image)
      </th>
    </tr>
    <tr>
	  <td>Bugoff</td>
      <td style="width:40%;">&nbsp;</td>
      <td style="width:30%;">
        <div class="center">
          <a href="screenshots/bugoff.gif">
            <img src="screenshots/thumb/t_bugoff.jpg" alt="BugOff screenshot" style="border:0px; height:200px; width:184px;" />
		  </a>
        </div>
	  </td>
    </tr>
    <tr>
	  <td>
       <a href="http://www.firewallleaktester.com/wwdc.htm" target="_blank">WWDC (Windows Worms Door Cleaner) </a>
	  </td>
      <td style="width:40%;">
        <p class="justify"> This patches some ports that common worms use.&nbsp; I am sure a good hacker can find other ways into your system; although,
		you'll be more likely to run into script kiddies (want-to-be hackers, who use programs created by other people to do immature acts, such as kick
		people out of a particular chat room), or fill the room with useless text, so that no one can see who is &quot;really talking&quot;
        </p>
	  </td>
      <td style="width:30%;">
        <a href="screenshots/WWHC.gif">
          <img src="screenshots/thumb/t_WWHC.jpg" alt="WWDC Screenshot" style="border:0px; height:163px; width:250px;"/>
	   </a>
	  </td>
    </tr>
  </table>


	<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
