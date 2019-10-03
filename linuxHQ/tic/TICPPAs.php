<?php
		$pageTitle = 'Frontpage';

		
    $path = getenv('DOCUMENT_ROOT'); 
    include $path . "/templates/linux/open/baseLinuxTIC.tpl";
?>

<img src="/linuxHQ/graphics/mac_win_lin.jpg" alt="Mac Windows and  Linux with Tux Graphic"/><br/>This section will contain Themes, Icon pack, and cursor information.

<div class="card">
  <div class="card-block">
    <div class="card-title">Theme PPAs</div>
    <div class="card-text">
      <ul>
        <li><a href="http://www.noobslab.com/2015/10/ambiance-radiance-colors-suite-updated.html">Raveninity Project PPA</a></li>
        <li><a href="http://www.noobslab.com/p/themes-icons.html">Noobslab Icon PPA 1 and 2</a></li>
        <li><a href="http://www.noobslab.com/p/themes-icons.html">Noobslab Theme PPA</a></li>
        <li><a href="http://www.noobslab.com/2016/06/moka-and-faba-icon-themes-are-still.html">Moka Theme PPA</a></li>
        <li><a href="http://www.noobslab.com/2015/04/beautiful-icon-theme-nitrux-looks.html">Nitrux-os PPA</a></li>
        <li><a href="http://www.noobslab.com/2014/09/potenza-icons-reached-to-version-20-but.html">Potenza PPA</a></li>
        <li><a href="http://www.noobslab.com/2014/04/install-numix-icon-packs-in-ubuntulinux.html">Numix PPA</a></li>
        <li><a href="http://www.noobslab.com/2015/03/evolvere-icon-suite-available-for.html">Evolvere</a></li>
        <li><a href="http://www.noobslab.com/2015/11/material-design-suite-offers-theme-and.html">Paper (Material) Theme PPA</a></li>
      </ul>
    </div>
  </div>
</div>

<p>Many of the these themes were found Via Charlie Henson</p>
<ul>
  <li><a href="http://charlie-henson.deviantart.com/">Charlie Henson DeviantArt Page </a>,</li>
  <li><a href="https://www.youtube.com/user/microfreaks1">Charlie Henson Youtube Channel</a>,</li>
  <li><a href="https://plus.google.com/+CharlieHenson/posts">Charlie Henson on Google+</a>,</li>
  <li><a href="https://twitter.com/MicroFreaks">Charlie Henson on Twitter</a></li>
</ul>

<br />
<ul class="accordion-tabs-minimal">
  <li class="tab-header-and-content">
    <a href="#" class="tab-link is-active">Without per-PPA Confirmation </a>
    <div class="tab-content">
      <kbd>sudo add-apt-repository -y ppa:ravefinity-project/ppa &amp;&amp; sudo add-apt-repository -y ppa:moka/stable &amp;&amp; sudo add-apt-repository -y ppa:noobslab/icons &amp;&amp; sudo add-apt-repository -y ppa:noobslab/icons2 &amp;&amp; sudo add-apt-repository -y ppa:noobslab/nitrux-os &amp;&amp; sudo add-apt-repository -y ppa:noobslab/potenza &amp;&amp; sudo add-apt-repository -y ppa:noobslab/themes &amp;&amp; sudo add-apt-repository -y ppa:numix/ppa &amp;&amp; sudo add-apt-repository -y ppa:noobslab/evolvere &amp;&amp; sudo add-apt-repository -y ppa:snwh/pulp</kbd>
    </div>
  </li>
  <li class="tab-header-and-content">
  <a href="#" class="tab-link">With per-PPA Confirmation </a>
    <div class="tab-content">
      <kbd>
        sudo add-apt-repository ppa:ravefinity-project/ppa &amp;&amp; sudo add-apt-repository ppa:moka/stable &amp;&amp; sudo add-apt-repository ppa:noobslab/icons &amp;&amp; sudo add-apt-repository ppa:noobslab/icons2 &amp;&amp; sudo add-apt-repository ppa:noobslab/nitrux-os &amp;&amp; sudo add-apt-repository ppa:noobslab/potenza &amp;&amp; sudo add-apt-repository ppa:noobslab/themes &amp;&amp; sudo add-apt-repository ppa:numix/ppa &amp;&amp; sudo add-apt-repository ppa:noobslab/evolvere &amp;&amp; sudo add-apt-repository ppa:snwh/pulp</kbd>
    </div>
  </li>
</ul>



    </div>  <!-- Closes second col -->
    </div> <!-- Closes Row -->
    
<?php include $path . "/modules/footer.tpl"; ?>
