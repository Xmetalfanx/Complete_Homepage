<?php
  $the_title = "Useful Programs Section - Internet Related Software";
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/techHQ/modules/programs.php" ;
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>


	// Assign localquery to sort by the main catagory

  <?php

    $localmainquery = "internet";
    echo "<br /><br />" . $localmainquery;


    include $sitePath . '/techHQ/modules/database/softwaretest.php';

  ?>


	// Call to the database file in the database folder.  The var above should be passed to determind what the main catagory in the db is
	// The entire list of programs where appmaincat is internet should be displayed here
		// NOW this should SORTED first by APPSUBCAT and then APPTITLE AFTER THAT
			// ALL OF THIS is taken care of in the db request line and I shouldn't have to do anything extra, here.



	// THE INTIAL IDEA is that I can reassign the localmainquery variable and then just have one module-template for displaying app CARDs ... from bootstrap 4 ... if i make a change or addition i can just make it to one file


    // The SECOND idea I had is CAN I USE a second local var that would be appsubcat .... then all i would have to do for the tabs below is put a secondvar = whatever i want the appsubcat to be  VAR ASSIGN, CALL TO the database display code ..., and VAR CLEAR inside of where each tab is to have subcatagory sorting

    // HOW WOULD/COULD GROUP BY help me ?
		// It looks like GROUP BY appsubcat may be useful, though it may display all the results of appmaincat at once when i may want to break that down between different tabs [bootstrap tabs below]



    <p>WHAT IS BELOW IS BEING KEPT FOR SOMETHING DOWN THE ROAD ... so I do not have to figure out the code a second time </p>

    //  Keep this for now as it can be useful in the future when doing things with tabs again
    <ul class="accordion-tabs-minimal">
        <li class="tab-header-and-content">
			<a href="#" class="tab-link is-active">Offline Browsers </a>
            <div class="tab-content">
				<a href="http://www.metaproducts.com/mp/offline_explorer.htm">Offline Explorer</a>
                <p>Licence: not freeware</p>
                <p>Offline Explorer is the next generation of off-line browser. It combines flexibility, power and ease of ''use'' in a tightly-coded package with all the features needed in an off-line browser.</p>
                <p>(from Offine Explorer Help File)</p><a href="http://www.tenmax.com/teleport/pro/home.htm">Teleport Pro</a>
                <p>Part Swiss Army knife, part chainsaw, Teleport Pro is a fully automated, multithreaded, link-following, file-retrieving webspider. It will retrieve all the files you want — and only the files you want — from any part of the Internet. Teleport Pro can also completely download a website, enabling you to “offline browse” the site at much greater speeds than if you were to browse the site online. Create an exact duplicate, or “mirror” of a website, complete with subdirectory structure and all required files. Search a website for files of a certain type (and size). Automatically download a list of files from the Internet. Explore every website linked from a central website search a website for keywords. Make a list of all pages and files on a website. No more waiting for slow pages to download. No more clicking on links for hours, only to find garbage at the end of your trail. Teleport can completely automate your website searching, mirroring, publishing, and downloading tasks.</p>
                <p>(copied from Teleport Help File)</p>
                <p>JULY 2011 NOTE: I have not used this in years..... I am not even sure if this is still available to be honest)</p> <a href="http://www.webreaper.net/">**Web-Reaper **</a>
                <p> This is a program that will download websites to your computer to view offline.</p> <img src="" alt="MozBackup Icon" /> <a href="http://mozbackup.jasnapaka.com/">MozBackup</a>
                <p>This can backup/restore your Mozilla (Suite), Mozilla Firefox, and Mozilla Thunderbird settings, favorites and more.....</p>
                <ul>
                    <li>NOTE: Not all versions of MozBackup will work with all versions (especially with newer versions) of Firefox, or Thunderbird... Please check to see if the version of the program you are using is supported first </li>
                </ul>
            </div>
        </li>

        <li class="tab-header-and-content">
			<a href="#" class="tab-link">Download Managers</a>
            <div class="tab-content">
				<a href="http://www.orbitdownloader.com/">Orbit</a>
                <p> These are all good choices, and free (no spyware or any of that) Note: these are more to &quot;manage&quot; downloads and although these are good for &quot;resuming&quot; downloads if you need it too ... These will not &quot;double your download speed&quot; </p>
            </div>
        </li>
        <li class="tab-header-and-content">
			<a href="#" class="tab-link">Email Related</a>
            <div class="tab-content">
				<img src="/techHQ/progIcons/internet/thunderbird.png" alt="Mozilla Thunderbird Icon " /> <a href="https://www.mozilla.org/en-US/thunderbird/" target="_blank">Mozilla Thunderbird</a>
                <p>Email client by the makers of Firefox </p>
            </div>
        </li>
        <li class="tab-header-and-content"> <a href="#" class="tab-link">Misc Internet Programs</a>
            <div class="tab-content">
                <h2>Misc Internet Programs</h2> <a href="http://www.majorgeeks.com/files/details/active_ports.html">Active Ports</a>
                <p>This is a sort of Graphical &quot;Netstat&quot; that shows what ports are open, local information (the local IP address and port information) as well as the remote port information and what process is using them</p><a href="http://robspangler.com/blog/encrypt-mailto-links-to-stop-email-spam/">MailTo-Encrypter</a>
                <p>This will give you a replacement HTML code for your e-mail on your site. The e-mail will still be sent to your address, but this will allow you to protect yourself from slammers, who collect mass e-mail addresses from as my sites as it can (they are programs), and adds them to junk e-mail lists</p> <img src="" alt="Ad Muncher Icon" /><a href="https://www.admuncher.com/">Ad Muncher</a>
                <p>System-Wide Ad Blocker </p>
                <a href="https://www.donationcoder.com/Software/Mouser/urlsnooper/"></a><strong>URL Snooper</strong>
                <p>This program is a solution for getting the URLs to those pesky media streams that hide the URL in a ton of code. This can allow you to download a stream to playback later (especially useful for those that do not have high-speed access)</p>
            </div>
        </li>
    </ul>


<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
