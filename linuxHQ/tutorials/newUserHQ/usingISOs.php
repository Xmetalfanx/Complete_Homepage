<?php

  $title = 'New User Section - Using ISOs'


$content = <<<EOD
<p class="boldUnderline">Windows</p>
<p class="col2SectionHeaders">Programs to put ISOs on USB sticks</p>
<ul>
  <li>ImageUSB <a href="http://www.osforensics.com/tools/write-usb-images.html" target="_blank">
	http://www.osforensics.com/tools/write-usb-images.html</a></li>

  <li>YUMI <a href="http://www.pendrivelinux.com/yumi-multiboot-usb-creator/" target="_blank">
  http://www.pendrivelinux.com/yumi-multiboot-usb-creator/</a></li>

  <li>UNetBootIn <a href="http://sourceforge.net/projects/unetbootin/" target="_blank">
  http://sourceforge.net/projects/unetbootin/</a></li>

  <li> Win32 Disk Imager  <span id="dev-status"> </span>(beta)
  <a href="http://sourceforge.net/projects/win32diskimager/" target="_blank"> http://sourceforge.net/projects/win32diskimager/</a></li>
</ul>


<p class="col2SectionHeaders">ISOs to CDs/DVDs</p>
<ul>
  <li><img src="../../graphics/progIcons/system_tools/Burner/ImgBurn_MAINICON.png" width="48" height="48"  alt=""/>ImgBurn
  <a href="http://www.imgburn.com/" target="_blank">http://www.imgburn.com/ </a></li>

  <li><img src="../../graphics/progIcons/system_tools/Burner/984__CDburnerXP2.gif" width="32" height="32" alt=""/>CDBurnerXP
  <a href="http://www.cdburnerxp.se/" target="_blank">http://www.cdburnerxp.se/</a></li>

  <li>Burn Aware <a href="http://www.burnaware.com/" target="_blank">http://www.burnaware.com/</a></li>
  </ul>
<p>&nbsp;</p>
<p class="boldUnderline">Linux </p>
<p class="col2SectionHeaders">ISOs to USB</p>

<ul>
  <li>(Linux Mint and maybe some other Ubuntu based distros) Image Writer </li>

  <li>UnetBootin <a href="http://sourceforge.net/projects/unetbootin/" target="_blank">
  http://sourceforge.net/projects/unetbootin/</a> (or your distro's repos)</li>

  <li>Multisystem <a href="http://www.pendrivelinux.com/multiboot-create-a-multiboot-usb-from-linux/" target="_blank">
  http://www.pendrivelinux.com/multiboot-create-a-multiboot-usb-from-linux/</a></li>
</ul>
<p>&nbsp;</p>


<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
