<?php

	$title = 'Tutorial Section - Adding PPAs to any Ubuntu Based Distro';
	$content = <<<EOD



    <h1>PPA&#39;s</h1>
    <p>A PPA = A &quot;repository&quot; or &quot;repo&quot; (for short)</p>
    <p>*I do not take any responsibility if you break</p>
    
    
    <h2>Introduction</h2>
    <p>A PPA is a way to add even more sources to your package manager database. Though some PPAs may not be trust-worthy, and
    although I do agree that if you add too many or &quot;the wrong ones&quot; your system may become unstable. (No worse than what
    I have seen out of a typical Microsoft Windows install)</p>
    <p>Most PPA&#39;s I use are trustworthy and programs like apt-get, aptitude (both terminal based), or even software centers and
    Synaptic Package Manager all check dependencies so that adding a piece of software from a new repo, it will not break your
    system. I can not claim that if you add every single piece of software from every repo I have listed, that your system will be
    stable, though I would never suggest anything that may harm anyone&#39;s system.</p>
    
    
    <h2>Adding a PPA syntax:</h2>
    <p>
    <code>sudo add-apt-repository ppa:user/ppa-name sudo apt-get update</code> the ppa: (whatever) part is given to you, and
    changes with each PPA</p>
    
    <hr />
    <h2>Some of the PPAs, that I add (All in one )</h2>
    <p>* This does not count theme/Icon PPAs... those ones that I add are on the main page of the "Themes/Icons/Cursors" section</p>
    
    <ul>
      <li>Noobslab Theme PPA</li>
      <li>Noobslab Icons (1 and 2) PPA</li>
      <li>Noobslab Apps (1 and 2) PPA</li>
      <li>Grub Customizer</li>
      <li>Libre Office&#39;s PPA ( for NEWEST versions that may not be in repos)</li>
      <li> The Linux Mint Update Manager on other Ubuntu based distros - so far 14.04 only</li>

    </ul>
    <p>With Auto-Confirmation
    <code>sudo add-apt-repository -y ppa:noobslab/themes &amp;&amp; sudo add-apt-repository -y ppa:noobslab/icons &amp;&amp; sudo
    add-apt-repository -y ppa:noobslab/icons2 &amp;&amp; sudo add-apt-repository -y ppa:noobslab/apps  &amp;&amp; sudo add-apt-repository -y ppa:danielrichter2007/grub-customizer &amp;&amp; sudo add-apt-repository -y ppa:libreoffice/ppa
    &amp;&amp; sudo add-apt-repository -y ppa:ferramroberto/lffl</code></p>



	  <p>Without auto-comfirmation
		<code>sudo add-apt-repository ppa:noobslab/themes &amp;&amp; sudo add-apt-repository ppa:noobslab/icons &amp;&amp; sudo
		add-apt-repository ppa:noobslab/icons2 &amp;&amp; sudo add-apt-repository ppa:noobslab/apps &amp;&amp; sudo add-apt-repository ppa:danielrichter2007/grub-customizer &amp;&amp; sudo add-apt-repository ppa:libreoffice/ppa &amp;&amp; sudo add-apt-repository
		ppa:ferramroberto/lffl</code></p>

  <hr />
    <h3>Linux Mint Update Manager on other Ubuntu based Linuxes</h3>
    
    <code>
      sudo add-apt-repository ppa:ferramroberto/lffl
      sudo apt-get update
      sudo apt-get install mintupdate synaptic
    </code>


		<hr />
		<p> This one I removed from  my usual list as without any intervention, it keeps breaking Audacious on me ... not saying it&#39;s  a bad PPA, just I dont add it like I use to </p>

		<p> Webup8 Team&#39;s PPA - <code>sudo add-apt-repository -y ppa:nilarimogard/webupd8 </code></p>

    <hr />

    <h1>
      <a href="/linuxHQ/apps/MorePPAsMD.php">Click here to get more PPAs</a>
    </h1>



EOD;
?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNAPPBlank.php"); ?>
