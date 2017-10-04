<?php

	$the_title = 'Xmetalfanx Security Section - IP Blocklist Updater';
?> 

        <p class="justify">Here is a tip I have known
        for awhile, that I only recently decided to add due to a program that
        makes The host file very easy to maintain, called &quot;<a href="http://www.bluetack.co.uk/index.php" target="_blank">B.I.S.S's Host Manager</a>&quot;.
          This comes to us from the makers of Protowall and &quot;The blocklist manager&quot;.
          Like the IP blocklists it will update it from a downloadable list (as
          of right now, unlike blocklist manager, i do not THINK the actual #
          of url's it updates from and what they are, are in fact updated, just
        the list itself.</p>
        
        <p class="header">What is this host file?</p>
        <p class="justify">A host file is a file that tells your computer the ip address of a
          certain site. or server. many times a blank host file will contain
          &quot;127.0.0.1 ....... (without the dots) localhost&quot;. This address (the
          127....) is the address at whatever machine your on at the time. </p>
        
        <p class="header">Can a host file prevent spyware being on my system?</p>
        <p class="justify">No.... this is not a cheap and free alternative to spyware scanners....
          sure alot of the list I have is said to be ad banner servers and active-x
          spyware installers, but .... it will NOT PREVENT SPYWARE from installing...
          for that please see the <a href="spyware/spyware_removal.php">Spyware
          Section.</a> </p>
        <p class="justify">Likewise, it is not an alternative to a good ad blocker (say &quot;Ad Muncher&quot;
        or &quot;Popup Cop&quot;) ... sure some of the most common ad servers can be
          stopped somewhat with this file, but i wouldn't recommend removing
          all your ad block software for this program.</p>
        <p class="header">
          What Does this actually do then? <img src="../smiles/various/blink.gif" alt="huh smile" width="20" height="20" class="cssImageleft1" /> </p>

        <p class="justify">As i said, 127.0.0.1 is the address of the machine you are on ....
          an ad server... lets say &quot;Doubleclick&quot; has a computer that when you
          visit a site with a double click ad, it will connect to that server
          (like an offsite gif image). this is where the host file comes in ....
          say you do &quot;127.0.0.1 .....(again.. .without the dots there) www.doubleclick.com&quot;,
          you will tell your computer that if it sees a site with an image from
          wwww.doubleclick.com, to &quot;look at the local computer&quot;... This means instead of connecting to the real IP Address of an ad.... it will look for that ad at the IP you told it to (in this example, the computer your on at any given time) ... it will not find the ad and it just ... won't display anything.... sort of of lower key ad-blocker, but in some cases it works great ... I also believe the general idea is part of how &quot;Spy Blaster&quot; works. (Although that program does much more that that) </p>
        
        <p class="header">Can I put Ip Address of sites i always visit in the host file</p>
        <p>Yes, you can and some say that can help speed your connection up since
          instead of having to figure out what the ip address of that site is,
          your computer knows already... I have had trouble with not being able
          to connect when a site changes their ip address (say they updated to
          a better computer on their end)..... this can be helpful and it may
          cause many problems, so i do not do it, myself </p>
        

        <p class="header">**** February 2, 2006 Update *** </p>
        <p>I have found that updating with this blocklist caused my computer to slow down <u class="boldText">significantly</u> AND my connection would connect but whenever an application would try to actually communicate (I could get online, but web browsering, logging into &quot;<span class="redtext">Yahelite</span>&quot;...etc etc) all froze for about 10 minutes or so,.... after changing network settings and firewalls/fw settings, I have determined 110% that a host file that had become too large was the culprit.... I trimmed it down (to only include the &quot;Spybot hostblock list&quot; in Spybot).... I also run <span class="redtext">Ad Muncher</span> with <span class="redtext">Maxthon</span>, so many of those entries are not need at all </p>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
