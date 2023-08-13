<?php

	$pageTitle = 'Common Terms in Linux';

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

  include $siteRoot . "/templates/linux/open/baseLinuxTutorBlank.tpl";
?>


<div class="card"> 
  <div class="card__header">Versions, Distributions, Code-names</div>
  <div class="card__body">
    <p class="font-italics">I have decided to leave  &ldquo;Desktop environments until later... I don't want to overload people and confuse them here... just so you know, I will cover this later... I am trying to  do these guides as simple as possible, WHILE trying to have as much information as I can in them)</p>
    <p>A common place for new users to get tripped up is with all of these terms.</p>
    <ul>
      <li>
        <h3>Metaphor/Summary</h3>
        <p>Microsoft is the only company that makes &ldquo;Windows&rdquo;, while many companies/individual developers and coders, make their own &ldquo;flavored&rdquo;  versions of Linux</p>
      </li>
      <li> 
        <h3>Distibution</h3>
        <p>A Distribution is a difference between Windows and Linux.  There is not one company that makes this so called Linux thing.  There are different options.  The differerent options are the distributions and you can think of that as the "different 'companies' " in a sense.  </p>
        <p>A Distrobution may be refered to by some as a "Distro" for short</p>
      </li>
    </ul>
    <li>
      <h3>Versions</h3>
      <p>These are tied on SOME cases to what are called code names which I will get to later; however, these are easy to grasp from one distro's perspective.  All you have to do if your say, coming from Windows, is to think of Windows XP vs Windows 7 vs Windows 10 ... Still WINDOWS but different versions.</p>
    </li>
    <li> 
      <h3>Codenames</h3>
      <p>Not all distros have code names though these I suppose are like nicknames in a way.</p>
    </li>
    <li> 
      <h3>Metaphor (w / example) </h3>
      <p>Person metaphor - Jane Doe
        <ul>
          <li>Sirname - Doe - Would be the DISTRO</li>
          <li>First Name - Jane - Would be the VERSION </li>
          <li>Codename - ?? "Shorty" for example - Would be the CODENAME.  </li>
        </ul>
      </p>
      <p>If anything the Codename is the least important if you ask me, but to be honest there is a typical "Codename" and "Version" pairing .. </p>
      <p>Remembering BOTH is what I mean by it not being important to always remembering the codename</p>
      <p>Linux Metaphor - Linux Mint 20.x 
        <ul> 
          <li> 
            <div class="text-primary">Distro </div>= Linux Mint
          </li>
          <li> 
            <div class="text-primary">Version</div> = 20.x 
          </li>
          <li> 
            <div class="text-primary">Codename</div> = Ulyana
          </li>
        </ul>
      </p>
    </li>
  </div>
</div>

<?php require $siteRoot ."/modules/footer.tpl"; ?>