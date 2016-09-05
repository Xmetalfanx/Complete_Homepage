<?php

      $the_title = 'Xmetalfanx Browser Section -  Ad/Content Blocking - Dynamic Filters in Ublock Explained';
      $the_content = <<<EOD

    <h2>What are the red, green and black settings and what do they mean?</h2>
    
	<p>First lets “name” the levels</p>
    <ul>
      <li>Green - Allow</li>
      <li>Red - Block/Deny</li>
      <li>Black/Grey - “Noop”</li>
    </ul>
    <p>
      <em>I will not go into too much details since this for the most part is self-explainitory</em>
    </p>

    
	<h3>“What is the world is this 
    <em>Noop-filter</em> thing?”</h3>
    <p>There are only three colors/things to remember, simple enough right? … though the Noop rule is one I never considered and
    finally got curious enough to look into it and what it meant.</p>
    <p>Note to self: Insert Link to Ublock’s blocking chart wiki-page here</p>
    
	<h3>Noop-filters</h3>
    
	<p>How it works is that IF YOU set a domain to allow(green) in your dynamic filters, it will allow content from that domain (
    <em>sounds obvious, eh?</em>). Once that domain on the site your visiting is set to 
    <em>Allow</em>, the static (Those are the filter lists ) filters are then 
    <strong>BYPASSED</strong> for that <em>allowed</em> domain</p>
    
	<p>THAT is where Noop-filters come in … while a noop filter will <em>allow</em> things from that domain, <strong>the static 
	filters are NOT bypassed</strong></p>
   

   <h3>Where a “noop filter” and “allow filter” differ is:</h3>
    <ul>
      <li>
        <p>Allow filter:</p>
        <ul>
          <li>Allows content from that domain, and that is it.</li>
          <li>It DOES NOT APPLY static filter, even if a match would be made (Content on the “allowed” domain matches a rule in
          static filter lists.</li>
        </ul>
      </li>
      <li>
        <p>Noop filter</p>
        <ul>
          <li>Allows content from that domain</li>
          <li>It DOES APPLY static filters, so if a match is made, the content from that domain will be ALLOWED and the items that
          matched that rule, blocked.</li>
        </ul>
      </li>
    </ul>
  

EOD;
?><?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechBrowserTemplate.php"); ?>
<html>
  <head>
    <title></title>
  </head>
  <body></body>
</html>
