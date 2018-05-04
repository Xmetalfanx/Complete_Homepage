
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a href="#screenshots" role="tab" data-toggle="tab" class="nav-link active">Screenshots</a>
      <div class="screenshots hidden-md-down">
        <?php echo $distroSshot; ?>
      </div>
  </li>
  <li class="nav-item">
    <a href="#youtubereviews" role="tab" data-toggle="tab" class="nav-link">Youtube Reviews</a>
  </li>
  <li class="nav-item">
    <a href="#usb" role="tab" data-toggle="tab" class="nav-link">USB Creation</a>
      <h4>USB Drive Creation Experience </h4>
      <div>
        <a href="/linuxHQ/info.php" target="_blank">Explaination of what this section is</a>
      </div>
      <div id="usb">
        <?php include $sitePath . '/linuxHQ/modules/sections/usb.tpl'; ?>
      </div>
  </li>
</ul>


<div class="tab-content">
  <div role="tabpanel" id="screenshots" class="tab-pane active"></div>
  <div role="tabpanel" id="youtubereviews" class="tab-pane"></div>
  <div role="tabpanel" id="usb" class="tab-pane"></div>
</div>
