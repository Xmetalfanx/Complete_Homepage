<?php

	  $title = 'New User Section - Partitions... What are they?';

	  $content = <<<EOD

		<p><U><strong>What is a Partition</strong></U></p>
		<UL>
		  <LI>
			<p>(note: this does apply to MULTIPLE HARD DRIVES on one machine too) </p>
		  <LI>
			<p>Think of your hard drive as a Pie or Pizza. </p>
		  <LI>
		  <p>
			<em>(Not counting &ldquo;Recovery Partitions&rdquo; that you may see) </em>
			Your drive is one single &ldquo;slice&rdquo; (the entire Pizza = one slice) ...Partitioning allows you to divide
			your drive into sections that do not &ldquo;have to be&rdquo;, the same size.  This is basically how you can run Windows
			and Linux on the same computer. Part of the drive is for Windows, and another part is for Linux.
		  </p>

		  <LI>
		  <p>Many Linux installers have an  	option that allows you to use the entire drive for Linux.
			<em><strong> If you do not watch what your doing, you CAN format the Windows side and lose your </strong>
			</em>
			<em><strong>data.</strong>
			</em>
		  </p>
		  <LI>
		  <p>Just take your time (remember &ldquo;everyone was new to Linux&rdquo; at some point) and read the
		  instructions on what your doing. </p>
		  <LI>Accidentally removing Windows is a common mistake (when there is one), that I personally see new users  	make during the partitioning step &hellip; if there is a part where the  	new (to Linux) user will end up making a mistake, I say its at the  	partitioning step... JUST READ WHAT YOUR DOING AND IF YOUR NOT SURE  	&hellip; DOUBLE-CHECK before you do anything, any your'll be a-ok
		</UL>
		<p>&nbsp; </p>

		<p class="bold">*** THE POINT I WANT TO MAKE IS AS LONG AS YOU DO YOUR RESEARCH, AND DO NOT JUST &quot;BLINDLY CLICK&quot;
		THINGS WITHOUT READING WHAT THEY ARE DOING ... YOU WILL NOT HAVE ISSUES ... IT'S (IN MY OPINION) THE PEOPLE WHO STOP WATCHING WHAT
		THEY ARE DOING, THAT RUN INTO PROBLEMS/HEADACHES </p>

EOD;
?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/linux/baseLinuxNTutorials.php"); ?>
