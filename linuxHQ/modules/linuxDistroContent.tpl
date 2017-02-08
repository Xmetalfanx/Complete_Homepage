<div id="col2">
	<div class="icon">  <?php echo $icon; ?> </div>
  	<div class="distroTitle">  <?php echo $name; ?>  </div>

    <?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/distroTable.php'); ?>
   	<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/ytsection.php'); ?>

    <div class="descript">
			<div class="distRevTitle">Description:</div>
				<?php echo $description; ?>
       </div>

    <div class="bold">Screenshots  </div>
    <div id="distroShots"><?php echo $distroSshot; ?> </div> <br />

    <div class="distRevTitle">Reviews</div>
			<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/linuxDistroReviewer.php'); ?>

    <div id="personalExp">
        <div class="distRevTitle">My Experience: </div>
		<?php echo $EXP; ?> <br />
		<?php echo $experience; ?> <br /><br />

	<div class="boldUnderline">Any other comments I have about this distro: </div>
        <?php echo $otherComments; ?><br />
	
		<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/distroRec.php'); ?>

   </div>


	<div class="distRevTitle"> USB Drive Creation Experience </div>
		<p>	<a href="/linuxHQ/info.php" target="_blank">Explaination of what this section is</a></p>

		<div id="usb">
			<?php include $_SERVER['DOCUMENT_ROOT'].('/linuxHQ/modules/usb.php'); ?>
		</div>

</div> <!-- End Col2 -->
