<?php

    $pageTitle = 'App Section Frontpage';

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

    include $siteRoot . "/templates/linux/baseLinuxAPP.tpl";

?>

<h3 class="panel-title">Introduction</h3>

<p>
  This section will contain PPA information and other linux program information not suitable for the
  TechHQ Software section which contains main cross platform</p>
  <ul>
    <li>
      <a href="#" class=" is-active">Graphics Programs</a>
      <div>

      </div>
    </li>
    <li ><a href="#">Internet Programs</a>
      <div>

      </div>
    </li>
    <li>
      <a href="#" >Multimedia Programs</a>
      <div>
        <h3>Audio Programs</h3>
        <ul>
          <li>
            <a href="http://audacious-media-player.org/">Audacious</a> - Audio Media Player</li>
          <li>
            <a href="https://www.clementine-player.org/">Clementine</a>- Audio Media Player and Organizer</li>
        </ul>
        <h3>ID3 Tag Editor</h3>
        <ul>
          <li>
            <a href="https://wiki.gnome.org/Apps/EasyTAG">EasyTag</a></li>
        </ul>
        <h3>Video Programs</h3>
        <ul>
          <li><a href="https://mpv.io/">MPV</a> - Video Player that is cross platform and Open Source</li>
          <li><a href="http://smplayer.sourceforge.net/">SMPlayer</a></li>
          <li>VLC</li>
        </ul>
      </div>
    </li>

    <li ><a href="#" >Productivity Programs</a>
      <div>
        <ul>
          <li>
            <a href="https://atom.io/">Atom</a> - A Haxable Text Editor
          </li>&#x9;&#x9;&#x9;

          <li>
            <a href="https://www.geany.org/">Geany</a>
          </li>
        </ul>&#x9;

        <h3>Office Suites</h3>&#x9;&#x9;

        <ul>
          <li><a href="https://www.libreoffice.org/">Libre Office</a></li>&#x9;&#x9;&#x9;

          <li><a href="http://wps.com/">WPS Office</a></li>
        </ul>
      </div>
    </li>

    <li ><a href="#" >System Tools</a>
      <div>
        <ul>
          <li>
            <a href="http://www.teejeetech.in/">Aptik</a> - Backup and Restorer Program for Ubuntu-based distros
          </li>&#x9;&#x9;&#x9;
          <li>
            <a href="https://www.bleachbit.org/">Bleachbit</a> -  Cache, and Temp file Cleaner</li>
          <li>Synapse -  Keyboard App Launcher</li>
          <li>
            <a href="http://peterlevi.com/variety/how-to-install/">Variety</a>
          </li>
          <li>
            <a href="https://veracrypt.codeplex.com/">Veracrypt</a>
        </li>
        </ul>&#x9;

        <h3>Docks</h3>&#x9;

        <ul>
          <li><a href="http://wiki.go-docky.com/index.php?title=Welcome_to_the_Docky_wiki">Docky</a></li>
          <li>Plank</li>
        </ul>
      </div>
    </li>
  </ul>

</div> <!-- Closes second col -->
</div> <!-- closes row/mainBody -->

