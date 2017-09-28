<h3>How to Install (command-line instructions):</h3>

<ul class="accordion-tabs-minimal">


  <li class="tab-header-and-content hidden-sm-down">
    <a href="#screeshot" class="tab-link">Arch</a>
    <div class="tab-content">

    </div>
  </li>


  <li class="tab-header-and-content">
    <a href="#screeshot" class="tab-link is-active">Ubuntu</a>
    <div class="tab-content">
        Include info for apt and apt-get here
    </div>
  </li>


  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Fedora</a>
    <div class="tab-content">

      </div>

  </li>

  <li class="tab-header-and-content">
    <a href="#youtube" class="tab-link">OpenSuse</a>
    <div class="tab-content">
        Include any info between Leap and Tumbleweed
    </div>
  </li>



  <li class="tab-header-and-content">
    <a href="#usb" class="tab-link">Debian </a>
    <div class="tab-content">



        </div>
      </div>
    </div>
  </li>
</ul>







<?
  foreach($howtoinstallResults as $field)
  {




  }



// Below is copied over for later ... as a template for my template so to speak

<ul>
  <li> On Ubuntu based systems (Ubuntu other than Mint - including elementaryOS, Deepin, Linux Lite, any of the *buntu releases, and LXLE to name a few)</li><?php echo $installUbuntu; ?>
</ul>
<li>On Linux Mint: <kbd><?php echo $installMint; ?></kbd></li>
<li>On Debian <kbd><?php echo $installDebian; ?></kbd></li>
<li>On Arch based Systems:<kbd><?php echo $installArch; ?> </kbd></li>
<li>On OpenSuse   <kbd><?php echo $installSuse; ?></kbd></li>
<li>On Fedora<kbd><?php echo $installFedora; ?> </kbd></li>
<li>

  On PCLinuxOS:<kbd><?php echo $installPCLOS; ?></kbd>
</li>
<li>

  On Gentoo:<kbd><?php echo $installGentoo; ?></kbd>
</li>

<?php

    foreach($descriptResult as $field)
    {
      echo ($field['description']);

    }
?>
