<?php

  	$the_title = 'Xmetalfanx Security Section - IP Blockers';
?>

  <p> There are two main programs here
  </p>
  <ul class="justify">
    <li>
    <a href="http://www.bluetack.co.uk/modules.php?name=Content&amp;pa=showpage&amp;pid=1" target="_blank" class="boldItalics">Blocklist Manager</a> (Freeware) -
    <ul>
      <li> This actually gets the lists from internet databases (like a virus scanner update i guess ... )
      </li>
    </ul>
    </li>
    <li>
    <span class="boldItalics">Protowall
    </span>
    <span class="mainSiteUpdates">(or an old program called &quot;Peer Guardian&quot;... although i am sure Peer Guardian may be able to be gotten around (by the IP's your trying to block... it hasn&#39;t been updated in years, but if there is a 2.0 out, try it as in that WOULD be the new one (2/25/05 is the current date now)(also freeware)
    </span> - This is the program that actually does the blocking....<br />
    </li>
    <li><strong>* TIP</strong>: &quot; I cant get to Google    !&quot; or &quot; all webcams in yahoo will no longer  work!&quot; ... well that is normal ... i mean if you set too many lists.... all you have to do is
    <ol>
      <li>After you go to Google (for google for instance otherwise its still the same steps... ) go to the protowall screen and see when its blocking. It should read along the lines of &quot;~Time~ ~Date~ Packet to Google Blocked etc etc ..&quot;
      </li>
      <li>Get the Number after &quot;google&quot; (ex 127.0.0.1)                   ...
      </li>
      <li>Open Blocklist Manager and go to IMPORT ~~&gt; IP Blocker ~~&gt; Protowall
      </li>
      <li>You can look at the range number to see if what you want to remove falls in them, but i found it easier to look at the comment section and Alphabetize it, and then go look under G for Google ... I found about 6 entries that I removed all of ..
      </li>
      <li>EXPORT ~~&gt; IP Blocker ~~~&gt; Protowall (if you are prompted to overwrite the file, click YES)
      </li>
      <li>Google works fine
      <ul>
        <li>The same thing happened to me with Yahoo Cams... did the same process for yahoo respectively, and it works.
        </li>
      </ul>
      </li>
    </ol>
    </li>
  </ul>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
