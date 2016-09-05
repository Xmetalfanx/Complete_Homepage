<?php

	 $the_title = 'Xmetalfanx Browser Section - ';
  	  $the_content = <<<EOD

  <h2>Location in UMatrix menu</h2>
    <hr />
    
	
	
	<h3>The top bar all the way on the left -</h3>
    
	<ul>
      <li>
        <p>
        <strong>Black</strong> - Global rules for all the filters you see at that time, based on what domains are detected from the
        site your currently on (displayed down the left side ).</p>
       
	   <img src="/techHQ/browsers/adblocking/screenshots/umatrix/globalRulesBlack.jpg" >


	   <ul>
          <li>Example - Many weather sites use &quot;VirtualEarth&quot; to display the topography on their maps. If you want, you
          can go here allow all content from VirutalEarth to be Allowed, so you do not have to keep setting the on each (example)
          weather radar page.</li>
        </ul>
      </li>
      <li>
        <p>
        <strong>Blue</strong> (NameOfSiteYouAreOn.whatever) - These are the per-site/per-domain and do not act
        &quot;globally&quot;</p>
      
	  <img src="/techHQ/browsers/adblocking/screenshots/umatrix/topColumns.jpg" >
	  
	  </li>
    </ul>
    <hr />
   
   <h4>Global filters based on DOMAIN</h4>
    <ul>
      <li>
        <p>
        <strong>Location:</strong> The left hand side, going down...one column</p>
        <img src="/techHQ/browsers/adblocking/screenshots/umatrix/siteRules_leftSide.jpg" >
		
		
		<ul>
          <li>The left hand side, down the side - is similar to the Dynamic filtering in Ublock (also by Gorhill)</li>
          <li>Note: YOU CAN save your settings and even, back them up so if you use Firefox AND Opera, or Chrome, you can simple
          import your settings to the second browser.</li>
        </ul>
      </li>
    

	<li>
        <p><strong>Explanation:</strong> These are global settings based on the domain you click on in the list of domains on the left
        hand side</p>
       
		<ul>
          <li>think of the A column on a spreadsheet.... not in terms of how it interacts with the rest of the spreadsheet but the
          location in related to the rest</li>
        </ul>
      </li>
    </ul>
    <hr />
  
  <h4>Global Filters based on CONTENT</h4>
   

<img src="/techHQ/browsers/adblocking/screenshots/umatrix/topColumns.jpg" >

   <ul>
      <li>
      <strong>Location:</strong> The Bar across the top with &quot;Cookies&quot;, &quot;Plugins&quot;, &quot;CSS&quot;,
      &quot;Frames&quot; ...etc</li>
      <li>
      <strong>Explanation:</strong> These are global rules that (considering how all of these rules, interact of course) can let
      you manage the content in question block or all) globally. That is across EVERY site/domain.</li>
    </ul>
    <hr />
   
   <h3>Filters</h3>
    <p>Note: Even for me, when explaining this it can get so confusing with all the possible combinations, though I will try to
    keep this explanation as simple and straight forward as I can.</p>
  
  <h5>Dark</h5>
    <p>Dark filters take priority over light filters for a domain. Lets consider an example.</p>
    <ul>
      <li>
        <p>
        <em>Example:</em>
        <br />(HOW THIS SITUATION WOULD COME UP ... please don&#39;t ask and just try to follow along for now)</p>
        <ol>
          <li>You have a global Content filter set to block all plugins on ALL DOMAINS, everywhere.</li>
          <li>You are then go to www.siteX.com in your browser.</li>
          <li>You have set a DOMAIN rule to block EVERYTHING from that domain (www.siteX.com) ... Cookies, CSS, Plugins too 
          <em>(though blocking Plugins globally and blocking everything from that domain ... siteX.com here .... would be both
          doing the same thing in a way)</em> ....etc etc content wise.</li>
          <li>FOR WHATEVER REASON you want to allow a &quot;frame&quot; from SiteX.com.</li>
          <li>UMatrix lets you have the ability to continue to use your GLOBAL CONTENT and GLOBAL settings, without changing them
          ... HOWEVER you can just allow &quot;frames&quot; from &quot;SiteX.com&quot; only. (meaning NO OTHER CONTENT TYPE from
          that domain)</li>
        </ol>
      </li>
    </ul>
    <p>Note: If your not getting it (and I am not sure I do 100%, lol) ... do not worry... I had to look at this and play around
    with it for a bit before that &quot;light-bulb above my head&quot; turned on.</p>
    <hr />
   
   <ul>
      <li>
        <p>Dark Green/&quot;Regular Green&quot;</p>
      </li>
      <li>
        <p>Dark/Regular Red</p>
      </li>
    </ul>
   
   <h5>Light</h5>
    <ul>
      <li>
        <p>Light Green</p>
      </li>
      <li>
        <p>Light Red</p>
      </li>
    </ul>
	  
	  
	  

EOD;
?>
 <?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechBrowserTemplate.php"); ?>
