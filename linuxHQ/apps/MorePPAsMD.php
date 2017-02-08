<?php

	$title = 'Tutorial Section - Adding PPAs to any Ubuntu Based Distro';

    <h2>
    <a href="#more-ppas"></a>More PPAs</h2>
    <ul>
      <li>
        <h5>Streaming audio recorder - Can record streaming audio</h5>
			<code>sudo add-apt-repository ppa:audio-recorder/ppa </code>
      </li>

      <li>
        <h5>Installing a few tweak tools for Ubuntu/Unity</h5>
			<code>sudo apt-get install unsesttings unity-tweak-tool</code>
      </li>

      <li>
        <h5>Grub Customizer PPA</h5>
			<code>sudo add-apt-repository ppa:danielrichter2007/grub-customizer</code>
      </li>

      <li>
        <p>
          <strong>Webmin on Ubuntu 14.04</strong>
        </p>
        <p>Useful “app” I found years ago that lets you manage many different parts of your system all in one place</p>
        <pre>

<code>
                 1. sudo echo &quot;deb http://download.webmin.com/download/repository sarge contrib&quot; &gt;&gt;
/etc/apt/sources.list
                 2. wget -q http://www.webmin.com/jcameron-key.asc -O- | sudo apt-key add -
                 # OpenSuse Repo Key
                 3. sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 977C43A8BA684223
                 4. sudo apt-get update
                 5. sudo apt-get install webmin
                </code>

</pre>
      </li>
    </ul>
    <p>
      <img src="http://www.webmin.com/screens2/useradmin.png" alt="User Admin Screenshot" />
      <br />
      <img src="http://www.webmin.com/screens2/firewall-edit.png" alt="Firewall Rule Creation" />
    </p>


    <ul>
      <li>
        <h5>Deepin Linux PPA - With the Deepin Software Center</h5>

			<code>sudo add-apt-repository ppa:noobslab/deepin-sc</code>

      </li>
      <li>
        <h5>Audio Recorder - Streaming audio recorder</h5>
			<code>sudo apt-add-repository ppa:osmoma/audio-recorder</code>
        <ul>
          <li>
            <img src="https://lh4.googleusercontent.com/-DczIitaxSTk/UsVcAZeRZwI/AAAAAAAAG4I/zXawPGLNdwU/s1600/audio-recorder-2.jpg"
            alt="Audio Recorder Screenshot" />
          </li>
        </ul>
      </li>

      <li>
        <h5>Y PPA Manager - Search, Purge, and Manage PPA’s</h5>
			<code>sudo add-apt-repository ppa:webupd8team/y-ppa-manager</code>
      </li>
      <li>
        <h5>Kodi Related</h5>
			<code>sudo add-apt-repository ppa:team-xbmc/ppa</code> <br />
        <ul>
          <li>
            <em>How to install kodi</em>
			<code>sudo apt-get install kodi kodi-pvr* kodi-audioencoder*</code>
          </li>
        </ul>
      </li>
      <li>
        <h5>Some Indicators for Ubuntu’s Unity and other items</h5>
			<code>sudo add-apt-repository ppa:diesch/testing</code>
      </li>
    </ul>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
