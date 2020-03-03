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
<div class="card my-4 card-border border-dark shadow">
  <div class="card-header">Use a Good Malware/Rootkit/"Second Option" Scanner</div>
  <div class="card-body"> 
    <div>This does not count all the smaller, specialty scanners, by the way</div>
    <ul class="list-group">
      <li class="list-group-item">
        <a href target="_blank">
        <img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/emsisoft.png" alt="Emsisoft Anti-Malware graphic">
        Emsisoft Anti-Malware
        </a>
      </li>
      
      <li class="list-group-item">
      <a href="https://www.zemana.com/antimalware" target="_blank">
      <img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/zenmana.png" alt="Zemana Anti-Malware graphic">
      Zemana AntiMalware</a>
      </li>
      
      <li class="list-group-item">
        <a href="https://www.hitmanpro.com/en-us/hmp.aspx" target="_blank"></a>
        <img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/hitman.png" alt="Hitman Pro graphic">
        Hitman Pro
      </li>
      
      <li class="list-group-item">
      <a href="http://www.malwarebytes.org/" target="_blank"><img class="iconSM mr-2" src="/techHQ/progIcons/security/malware/malwarebytes.png" alt="Malwarebytes graphic">MalwareBytes</a></li>
    </ul>
    
    <div class="pb-3">I admit I am slightly out of the loop here in early 2020 to which is the best scanners, since I no longer use Windows, though I ususually see people that know what they are doing testing these things and on test systems using some product (say the subject of the review they are currently doing), AND THEN they usually use say Zenmana and/or (this one I see constantly) Hitman Pro as a "second opinion scanner" to see what the first scanner missed.</div>
    <div class="pb-3">Last I saw Malwarebytes detection WAS falling a bit, but that may change, as code improves.</div>
    <div>Emsisoft use to have a more basic version of their paid offering, for free but I am having issues finding that now. STILL THAT DOESN'T MATTER.... along with Hitman Pro and Zemana, I have seen the same people 100% trust Emsisoft for a second opinion scanner too.</div>
  </div>
</div>

</div>
</div> 

<?php include $path . "/modules/tech/baseTechFooter.tpl"; ?>
