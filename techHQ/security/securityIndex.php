<?php
	$pageTitle = ' Security Section Frontpage';

  $path = getenv('DOCUMENT_ROOT');
  include $path . "/templates/tech/open/baseTechSecurity.tpl";

?>

<h1>Security Related Items</h1>
<p>Remember - Just because your anti-virus or malware scanner says you:</p>
<ul>
  <li>"Are infected" does not make it true, if it is a poor scanner</li>
  <li>"Are not infected" does not mean you are not, again ... if its a poor scanner</li>
</ul>

<h2>Overall Security Tips</h2>

<div class="my-4 card w-80">
  <div class="card__header">COMMON SENSE</div>
  <div class="card__body">
    While I'd never say "forget security software, just use common sense alone".... do not underestimate this.
    Sure SOME products are "snake oil", but there are some trusted names in the fields of different sorts of security products
  </div>
</div>

<div class="my-4 card w-80">
  <div class="card__header">Use a Good Anti-Virus</div>
  <div class="card__body">Here are two good, free options:
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <a href="https://support.kaspersky.com/us/kscloud" target="_blank">
        <img class="icon icon--size48" src="/techHQ/progIcons/security/AVs/kaspersky.png" alt="Kaspersky Security Cloud graphics">Kaspersky Security Cloud</a></li>
      <li class="list-group-item">
        <a href="https://www.bitdefender.com/solutions/free.html" target="_blank">
        <img class="icon icon--size48" src="/techHQ/progIcons/security/AVs/bitDefender.png" alt="Bit Defender Free graphic">Bit Defender Free</a></li>
    </ul>
  </div>
</div>

<?php
  include $path . "/techHQ/security/sections/malwareScanners.php";
  include $path . "/techHQ/security/sections/specialityScanners.php";
?>

</div>
</div>

