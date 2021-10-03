<?php

    $pageTitle = 'Ad/Content Blocking - Dynamic Filters in Ublock Explained';
    
  switch ($_SERVER['HTTP_HOST']) {
    case 'xmetal.x10.mx':
        $siteRoot = '/home/xmetalx1/domains/xmetal.x10.mx/public_html';
        break;
    case 'xmetal.awardspace.us':
        $siteRoot = '/srv/disk1/xmetalfanx/www/xmetal.awardspace.us/';
        break;
    default:
        $siteRoot = 'local.domain';
        break;
  }

    include $siteRoot . "/templates/tech/open/baseTechBrowser.tpl";

?>


<h2>Dynamic Filtering</h2>
<div class="card">
  <div class="card-header">Dynamic Filtering in Ublock Explained</div>
  <div class="card-text">
    <ul>
      <li><a href="https://github.com/gorhill/uBlock/wiki/Overview-of-uBlock's-network-filtering-engine">uBlock &quot;filtering chart&quot; wiki page</a></li>
      <li><a href="https://github.com/gorhill/uBlock/wiki/Dynamic-filtering:-quick-guide">Dynamic Filtering Guide by Gorhill</a></li>
    </ul>
  </div>
</div>
<hr/>
<div class="card">
  <div class="card-header">Static filtering versus Dynamic Filtering </div>
  <div class="card-text"> </div>
  <ul>
    <li> 
      <div>Static filtering is where the content is checked against a list of known ads/or whatever other type of content that "should be blocked".  You can think of this like the "default" for ad blockers. Not counting certain cases, you can remember that after the dynamic filters are applied (they take priority), the static filters ... at least by default, are still applied too.</div>
    </li>
    <li>
       A <span class="font-italic">Dynamic filter</span> is a more advanced filter than the regular static filter found in blocklists that are used by Ublock of known ads/other content to block.  While not as advanced as some of the things (I see both as really useful and also "different animals" at times) you can do with Raymond Gorhill's other addon,<span class="font-italic">Umatrix</span>... this can give you finer control over how/what is blocked or allowed.</li>
  </ul>
</div>
<hr/>
<div class="card">
  <div class="card-header">Do I need to use Dynamic Filtering?</div>
  <div class="card-text">NO ... short answer ... NO ... it's more a thing "do you WANT to use it".  If the adblocker is on, it will still block things through the list files that can be updated automatically by default in Ublock Origin.  There is no reason to use dynamic filtering, if you do not want to.</div>
</div><br/>
<h4>Dynamic filtering notes on Ublock Origin</h4>
<div>1.  Dynamic filters overide static filters (the filter lists, used by adblockers).  So here you could hypothetically allow content on a "broken" (do to content being blocked) site WITHOUT turning off Ublock Origin all together.</div>
<div>2.  Since Static filters do not allow anything (If it's on the filterlist ... without any dynamic filtering figured in... .it's blocked ... if it's not on a filter list, it's allowed)..... there is no reason to get too confused here</div>
<div>3.  There is N00P to consider (I will get to that later), but that is something else that you can use to filter content, THOUGH you have to sort of thing ahead when you hear explanations. </div>
<hr/>
<div class="card">
  <div class="card-header">Ublock Origin Advanced mode - Global vs Local rules</div>
  <div class="card-text">I admit I am not 100% sure I am using the right phrasing but a LOCAL rule so to speak is one for the site you currently on ... a GLOBAL rule effects all sites you visit. ....<br/><br/>
    <div>For example</div>
    <ul>
      <li>
         A <span class="font-italic">local rule</span>set for Facebook.com to allow all connections (green... again I will get to "noop filtering" later) WHILE YOU ARE ON Facebook.com would "Allow Facebook.com connections when you are on Facebook.com"</li>
      <li>
         A <span class="font-italic">GLOBAL rule</span>could for instance Allow (Green) or Block (Red) Facebook.com connections NO MATTER the site you are on ... that is not saying there would be one ... but IF there is an attempt from Facebook.com, no matter the site, it could be allowed or blocked, based on what a user wants.</li>
    </ul>
  </div>
</div>
<hr/> 
<table class="table w-90 mx-auto shadow">
  <caption>Ublock Origin Dynamic Filtering Explained</caption>
  <tr class="darkBG">
    <th class="pr-3 font-italic">Summary</th>
    <th>Allow</th>
    <th>Noop</th>
    <th>Block</th>
  </tr>
  <tr>
    <td class="pr-3 font-italic">Color</td>
    <td class="greenText">Green</td>
    <td class="darkGreyText">Dark Grey</td>
    <td class="redText">Red </td>
  </tr>
  <tr>
    <td class="pr-3 font-italics">Description</td>
    <td>Allows all connections from that domain, BYPASSING any static rules</td>
    <td>BYPASSES dynamic filtering, but still apply any static list rules that may apply, if any do</td>
    <td>Block the connection from this domain.  Static rules in a sense do not matter, the connection is just blocked anyway </td>
  </tr>
</table><br/>
<div>Remember you can set these things Globally (effects that domain's connection on all/any sites you visit), or locally (JUST the current website/domain you are currently on, for the domain that you are setting the rule for)</div>
<div>Years ago I use to not understand Noop, and I would just set Dynamic Filters to Allow (Green), and now I think that was a bad idea ... well not "bad" ... but it's better to use Noop as it will ALLOW the connection, and only block it stuff if some ad/tracking list has that domain listed in it.</div>

<?php require $siteRoot . "/modules/tech/baseTechFooter.tpl"; ?>
