<?php

  $title = 'Losing My Data Myth'

  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>

<div id="HorzSubMenu">

	  Pre-Linux Install/Install | 'Buntu | General | Slackware | Links
	   </div>

		<!-- Start of Main White Body for site Content -->

        <p class="header">I don't want to lose my data (no matter what it is) by trying Linux</p>
      <p>This I have to address in multiple  	parts to cover everything </p>
      <UL>
        <LI>
          If you set up your partitions  	right, you will not lose anything. (See partition comments above)
      </UL>
      <p class="header">The partition setup I would use is  	as follows</p>
      <UL>
        <LI><U>Microsoft Windows at the bigging of the  	drive formatted with the NTFS file system </U>
          <ul>
            <li>(Note: It is much  	easier to install (if not already installed) Windows THEN Linux.  	Though you can do it the other way around and there is no problem  	with that … it does take a bit more work to recover the Boot  	Loader that allows you to get into Linux or Windows.  Though if your  	&ldquo;that advanced&rdquo; then you dont need my tutorial here, in the  	first place.</li>
          </ul>
        <LI><em> Linux partitions  	that you need</em>
          <ul>
            <li><span class="maroonText">&ldquo; / &ldquo;  partition</span>
<ul>
              <li>(think of the &ldquo;C Drive&rdquo; in Windows... this is  	where everything is going to go during the install).  </li>
                <li>This should be  	formatted as <span class="blue">Ext3</span> or <span class="blue">Ext4</span> when prompted. </li>
              </ul>
            </li>
            <li><span class="maroonText">Swap partition for Memory.</span>..
              <ul>
                <li> Windows uses a &ldquo;Swap file&rdquo; in the main partition.  Linux uses a Swap PARTITION.      </li>
                <li>And for those wondering  	… since two versions of Linux would not be running at the same  	time...THE SAME SWAP Partition could be used if you say install a  	second version of Linux later on a DIFFERENT PARTITION..
                  <ul>
                    <li>In this case you'd need  	another Ext3 or Ext4 partition, but when you install it'd detect the  	existing Swap Partition for Linux and you dont need a second Linux  	Swap Partition
                    </li>
                  </ul>
                </li>
                <li> </li>
              </ul>
            </li>
            <li><span class="maroonText">(Optional though I think its a good idea) Another NTFS partition where you can put your  personal data. </span>
              <ul>
                <li>This should be  		formatted as NTFS.
                  <ul>
                    <li>THE POINT is Linux has no issue and is gladly  		able to read NTFS &ldquo;Windows/Microsoft&rdquo; Partitions, though  		Microsoft,  (while there are some ways that are not the best .. it  		is possible) goes &ldquo;Cross-eyed&rdquo; if you wanted it to read Linux  		Partitions.
                    </li>
                    <li>Leave this partition  as NTFS and both Linux and Windows will be able to see the data  		just fine
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
        </ul>
      </UL>


EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechSoftwareTemplate.php"); ?>
