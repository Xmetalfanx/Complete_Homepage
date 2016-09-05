<?php

	$the_title = 'Xmetalfanx Security Section - Cookie Blocking';
	$the_content = <<<EOD
    
	<p class="header">
    <a id="cookies"> </a>
    How to setup Blocking all Cookies by Default: Cookie Safe  AND Cookie Monster</p>
    <p>Cookie Safe - Open the Cookie Safe Options Box and check (or make sure they are already checked) I have forgotten what are the default settings, so these could be checked by default</p>
    <ul>
      <li>&quot;<span class="blue">Deny Cookies Globally on Startup</span>&quot; ;</li>
      <li>&quot;<span class="blue">Block Third Party Cookies</span>&quot; (Cookies coming not from what site your on, but a third party ... <span class="italics">I am not sure how &quot;You are on Yahoo.com and a cookie is from Yahoo.net (although I am sure there is no Yahoo.net in that example) would work;</span></li>
      <li>and &quot;<span class="blue">Block Cookies when host name can't be resolved</span>&quot;. (I am not sure what this 100% means, though it looks like it may be able to block  cookies that try to be &quot;sneaky&quot; and blocks a browser from knowing what site it came from ... it could also block sites that are having server issues, though in that case I would think that its blocking to &quot;be better safe/secure, then sorry&quot; </li>
    </ul>
<p><img src="tracking/cookieSafe_Options.jpg" width="478" height="361" alt="Screenshot of Cookie Settings to check" /></p>
<p>--------------------------------------------------------------------------------------------------------------------</p>
<p>Cookie Monster's set to block all cookies (not &quot;allowed&quot;) by default</p>

 
EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinSecurityTemplate.php"); ?>
