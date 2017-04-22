<div class='container'>
		<div class="row">
		  <div class="col-lg-3">
				<div class="icon">  <?php echo $icon; ?> </div>
			</div>

			<div class="col-lg-6">
				<div class="distroTitle">  <?php echo $name; ?>  </div>
			</div>
		</div>
</div>

    <?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/distroTable.php'); ?>
   	<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/ytsection.php'); ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Description</h3>
  </div>
  <div class="panel-body">
    <?php echo $description; ?>
  </div>
</div>


    	<div class="bold">Screenshots  </div>
    	<div id="distroShots"><?php echo $distroSshot; ?> </div> <br />

    	<div class="distRevTitle">Reviews</div>
				<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/linuxDistroReviewer.php'); ?>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
			<div class="distRevTitle">My Experience: </div>
		</h3>
  </div>
  <div class="panel-body">
		<?php echo $EXP; ?> <br />
		<?php echo $experience; ?> <br /><br />

		<div class="boldUnderline">Any other comments I have about this distro: </div>
			<?php echo $otherComments; ?><br />
			<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/distroRec.php'); ?>

  </div>
</div>

<!-- ENtire USB Section is BStrapped -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">USB Drive Creation Experience</h3>
  </div>
  <div class="panel-body">
		<p>	<a href="/linuxHQ/info.php" target="_blank">Explaination of what this section is</a></p>

		<div id="usb">
			<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/usb.php'); ?>
		</div>
  </div>
</div>
