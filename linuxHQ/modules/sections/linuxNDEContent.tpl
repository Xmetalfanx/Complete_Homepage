
<!-- I need to see this before BS"ing any of it -->
<div id="col2">

    <div id="DE">
        <div class="title"> <?php echo $deName; ?> </div>
        <div id="SShotCol"><?php echo $deSShot; ?> </div>

     <div id="infoCol">

			<div class="row">
				<div class="headers" >Desktop Catagory: </div>
				<?php echo $deClass; ?>
			</div>

			<div class="row">
				<div class="headers">General Requirements: </div>
				<?php echo $deReq; ?>
			</div>

			<div class="row">
				<div class="headers">Distros that Feature: </div>
			     <?php echo $deFeatured; ?>
			</div>

        <?php include $sitePath . "/linuxHQ/modules/installHowTo.tpl"; ?>

        </div>   <!-- End of InfoCol div -->

<br />
      <!--
		<div style="margin-top: 30px; clear:both;" class="headers">Description</div>
		-->

    <br />
  </div>

   <div style="margin-top: 20px; clear:both; font-size: 10pt;">
    * "Distros that feature" means distrobutions that have an official ISO or offically supported verison with the DE in question.
    That is not to say that you can not install this DE on other distros.<br /><br />

    Please note I have to double check any content about PCLinuxOS ...not saying its not accurate... just that I am not 100% sure of the line of code... when i check
    all of the package names (which is the only thing that WOULD be different if I got it wrong) .. I will remove this notation
  </div>
</div>
