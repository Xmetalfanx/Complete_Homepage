
<ul class="accordion-tabs-minimal">
  <li class="tab-header-and-content">
    <a href="#screeshot" class="tab-link is-active">Screenshots</a>
    <div class="tab-content">
      <div class="screenshots hide-md-down">
      <div class="bold">Screenshots</div><?php echo $distroSshot; ?></div>
    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#" class="tab-link">Another Tab</a>
    <div class="tab-content"></div>
  </li>

  <li class="tab-header-and-content">
    <a href="#youtube" class="tab-link">Youtube Reviews</a>
    <div class="tab-content"></div>
  </li>

  <li class="tab-header-and-content">
    <a href="#usb" class="tab-link">USB Creation </a>
    <div class="tab-content">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title">USB Drive Creation Experience</h4>
        </div>
        <div class="card-text">
          <p><a href="/linuxHQ/info.php" target="_blank">Explaination of what this section is</a></p>
          <div id="usb"><?php include $sitePath . '/linuxHQ/modules/sections/usb.tpl'; ?></div>
        </div>
      </div>
    </div>
  </li>
</ul>
