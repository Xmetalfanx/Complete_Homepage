
<div class="row">
  <div class="col-lg-1"><?php echo $icon; ?></div>
  <div class="col-lg-11 name"><?php echo $name; ?></div>
</div>
<?php include $sitePath . '/linuxHQ/modules/sections/distroSection/distroTable.tpl'; ?>
<?php include $sitePath . '/linuxHQ/modules/ytsection.tpl'; ?>

<div class="card">
  <div class="card-block">
    <h4 class="card-title">Description</h4>
    <div class="card-text"><?php echo $description; ?></div>
  </div>
</div>


<?php include $sitePath . '/linuxHQ/modules/sections/distroSection/tabDistro.tpl'; ?>
