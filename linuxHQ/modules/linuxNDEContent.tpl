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

          <div class="row">
          <div class="headers">How to install (command line instructions) : </div>
            <div style="clear:both;" >

				On Ubuntu based systems: <br />
                    <span class="italics">
                      (Ubuntu,  elementaryOS, Deepin, Linux Lite, any *buntu distro, LXLE, ...etc ) </span>
					 <div class="code" ><?php echo $installUbuntu; ?></div>

                     On Linux Mint:
                    <div class="code" > <?php echo $installMint; ?></div>

                  On Debian:
                  <div class="code" > <?php echo $installDebian; ?></div>

                 <br /><br /><br />
                     On Arch based Systems:
					<div class="code" ><?php echo $installArch; ?></div>

                     <br />
                     On OpenSuse
					<div class="code" >	<?php echo $installSuse; ?></div>

                     <br />
                     On Fedora 21 and prior (with yum ... before the switch to dnf):
                     <div class="code" ><?php echo $installFedora; ?></div> <br />

                     On PCLinuxOS:
                    <div class="code" > <?php echo $installPCLOS; ?></div><br />

                      On Gentoo:
                     <div class="code" > <?php echo $installGentoo; ?></div>
              </div>
          </div>  <!-- end of Row div -->
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
