<?php
	$pageTitle = ' Security Section Frontpage';

  $path = getenv('DOCUMENT_ROOT'); 
  include $path . "/templates/tech/open/baseTechSecurityTemp.tpl";

?>

<h1>Security Related Items</h1>
<p>Remember - Just because your anti-virus or malware scanner says you:</p>
<ul>
  <li>"Are infected" does not make it true, if it is a poor scanner</li>
  <li>"Are not infected" does not mean you are not, again ... if its a poor scanner</li>
</ul>

<h2>Overall Security Tips</h2>
<div class="card my-4 card-border border-dark shadow">
  <div class="card-header">COMMON SENSE</div>
  <div class="card-body">If you do not know who someone is, would you let them in your home?.. NO .. .... using the same logic, ... If you do not know an e-mail address, do not open the attachment.</div>
</div>
<div class="card my-4 card-border border-dark shadow">
  <div class="card-header">Use a Good Anti-Virus</div>
  <div class="card-body">
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><a href="https://support.kaspersky.com/us/kscloud" target="_blank"><img class="iconSM mr-2" src="/techHQ/progIcons/security/AVs/kaspersky.png" alt="Kaspersky Security Cloud graphics">Kaspersky Security Cloud</a></li>
      <li class="list-group-item"><a href="https://www.bitdefender.com/solutions/free.html" target="_blank"><img class="iconSM mr-2" src="/techHQ/progIcons/security/AVs/bitDefender.png" alt="Bit Defender Free graphic">Bit Defender Free</a></li>
    </ul>
  </div>
</div>

<?php 

  include $path . "/techHQ/security/sections/malwareScanners.php";
  include $path . "/techHQ/security/sections/specialityScanners.php";


?>

</div>
</div> 

<?php include $path . "/modules/tech/baseTechFooter.tpl"; ?>
