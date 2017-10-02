<?php

  $title = 'Software Section - Productivity/Office Programs';
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/techHQ/modules/programs.php" ;
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>

<?php

  $localmaincat = 'productivity';
  sortApps($localmaincat);


?>

    <ul class="accordion-tabs-minimal">

        <li class="tab-header-and-content">
          <a href="#" class="tab-link">PDF Creators</a>
            <div class="tab-content">
                <ul>

                    <li>
                        <p class="title">
                          <img src="http://www.dopdf.com" alt="doPDF Icon" />
                          <a href="../progIcons/product/pdf/dopdf_105.png">doPDF</a></p>

                            <p>This one doesn&apos;t have a ton of options, though I find sometimes SIMPLE is better. It is very fast on both of my laptops <span class="maroonText">(2.2GHz Dual core win7 64bit with 4GB of RAM,AND a &quot;2002&quot; XP 1.7GHZ with 768MB of RAM)</span>Some of the others can take a few seconds (about 10 I would say) to load and though that doesn&apos;t seem like much (and isn&apos;t a reason NOT to try the other options I list) and when you have a number of files to convert .. those seconds add up.</p>
                            <ul>
                                <li><img src="../progIcons/product/pdf/PDFCreator.gif" alt="PDF Creator Icon" /><a href="http://www.pdfforge.org/">PDF Creator</a></li>
                            </ul>
                            
                            <p>This is a recent find (as in the past 12 hours) ... Its open source and so far I like this best. Its a printer driver (like many other free PDF Creators) HOWEVER, I had <span class="redtext">PDF955 Free PDF Printer driver</span> which was &quot;OK&quot; but displayed a popup add for a few seconds every time you used it. Functional but annoying if you ask me ....</p>&#x9;&#x9;&#x9;
                            
                            <p>This IS A HEFTY 16MB which I believe includes GhostScript ( Even I am not sure what this is) and is needed to run this program. I rather this be the case then to have a @ 2MB download and have to go hunt down GhostScript manually.</p>
                    </li>
                </ul>
            </div>
        </li>
        <li class="tab-header-and-content">
          <a href="#" class="tab-link">PDF Viewers/Readers</a>
            <div class="tab-content">
              subsorted PDF content goes here


            </div>
        </li>
        <li class="tab-header-and-content"><a href="#" class="tab-link">Office Suites </a>
            <div class="tab-content">
                <div class="panel panel-default">
                    <div class="panel-header">
                      <a href="http://wps.com/wps-office-personal/">WPS Office</a></div>
                    <div class="panel-body">
                        <p>This is a recent (Oct 2012) find and a fine alternative to Microsoft Office. The Pro version has a Ribbon style interface, though the Free version does not.</p>
                        <p>Kingsoft Office (currently) is (Free edition) 39.x MB and it contains a:</p>
                        <ul>
                            <li>Word Processor</li>
                            <li>Spreadsheet</li>
                            <li>and Presentation </li>
                        </ul>
                        <p>I do notice it does seem to have trouble reading some supported formats (for now) and it DOES NOT read &quot;Open/Libre&quot; formats, though it seems to read all Microsoft Office formats (including MS Office 2007 and 2010)</p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-header">
                      <img src="../progIcons/product/libreIcons/LibO_3_103.png" alt="Libre Office Icon" />
                      <a href="http://www.libreoffice.org/">Libre Office</a></div>
                    <div class="panel-body">
                        <p>Libre Office while not as well known as Open Office, was programmed by the same developers as the original Open Office (pre-Oracle .. 3.1 is the number, if I am not mistaking) it seems to have had to do with Oracle buying Sun Microsystem who &quot;own the rights&quot; to Open Office and wanting (Oracle) more control of Open Office and wanting to do away with (I cant confirm this 100% at the time i am typing this) all future free versions to make it a commercial program.</p>
                        <p>The whole idea of Open Source is NOT to have one company in control of the project &#xFFFD; former Open Office developers branched out again using the code they made for the last &quot; pre-Oracle &quot; Open Office and made Libre Office, which is always being updated.</p>
                        <p><strong><em>Notes on 3.60 and the latest, 3.61 (at the time this is being typed up)</em></strong>: I am amazed at how fast this program seems to be getting. There are (read the official changelog/release notes for more information) a few added features (support to read/write .docx files, I believe is one) in newer versions, though THE MOST NOTICEABLE TO ME, <span class="blue">[same as new releases of &quot;The GIMP&quot; Graphics Program]</span> is the speed. The first time (even if installing over an existing install of Libre Office) may take a few extra seconds to load, though, after that Libre Office developers have focused on PERFORMANCE.</p>
                        <p>The developers of Libre (and to be honest Apache developers of &quot;Open Office&quot;) have focused on adding needed features, and mainly from what I see, on performances and I am amazed at how fast Libre and Open Office have gotten in recent releases.</p>
                        <p>This (the fact these two office suites were &quot;too slow&quot; for some people) was one of the only criticism</p>
                        <!-- For widths and Heights below, use CSS in the future and remove that code in this HTML-->
                        <p>-------------------------------------------</p>
                        <p>Free Office Suite, featuring: </p>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td><img src="../progIcons/product/libreIcons/swriter_1.jpg" alt="Libre Writer Icon" width="42" height="42" class="iconsLeft" />
                                        <p>Word Processor </p>
                                    </td>
                                    <td>
                                        <p><img src="../progIcons/product/libreIcons/scalc_1.jpg" alt="Libre Calc Icon" width="42" height="42" class="iconsLeft" /></p>
                                        <p>Spreadsheet</p>
                                    </td>
                                    <td>
                                        <p><img src="../progIcons/product/libreIcons/sdraw_1.jpg" alt="Libre Draw Icon" width="42" height="42" class="iconsLeft" /></p>
                                        <p>&quot;Draw&quot; Program </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="../progIcons/product/libreIcons/sbase_1.jpg" alt="Libre Database Program Icon" width="42" height="42" class="iconsLeft" /> Database Program</td>
                                    <td><img src="../progIcons/product/libreIcons/soffice_39.jpg" alt="Libre Office Math Program Icon" width="51" height="51" class="iconsLeft" />&quot;Math&quot; Program</td>
                                    <td><img src="../progIcons/product/libreIcons/soffice_34.jpg" alt="Libre Presantation Program Icon" width="48" height="48" class="iconsLeft" />Presentation Program</td>
                                </tr>
                            </table>
                        </div>
                        <p>***October 2012 Open Office/Libre Office Note: ***</p>
                        <p>The speed of both programs and the functioning have GREATLY improved in recent releases (Example Libre Office 3.5x and above).</p>
                        <p>I can not say how they open and look like IN Microsoft Office 2010 and above, though many of the new formats (DOCX for example) can now be read/written with the newest versions of Open/Libre Office and they seem to work fine, but I cant confirm.</p>
                    </div>
                </div>
            </div>


            <li class="tab-header-and-content">
              <a href="#" class="tab-link is-active">Misc Office Product </a>
                <div class="tab-content">


                    <h3>&quot;Misc&quot; Office/Productivity Programs</h3>

                    <div class="panel panel-default">
                        <div class="panel-header"><img src="../progIcons/product/docscrubber-48.png" alt="Doc Scrubber Icon" />
                          <a href="http://www.brightfort.com/docscrubber.html">Doc Scrubber</a></div>
                        <div class="panel-body">

                            <p class="center">
                              <a href="../screenshots/System/doc_scrubber.jpg" target="_blank">Click here for a Screenshot</a></p>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-header">
                          <img src="../progIcons/media/EMDB_128.png" alt="EMDB ICon" />
                          <a href="http://www.emdbonlinehelp.tk">EMDB</a></div>
                        <div class="panel-body">
                            <p>Movie Database program that is 100% free</p>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-header">
                          <a href="http://atorg.net.ru/universal_viewer/">Universal Viewer</a></div>
                        <div class="panel-body">
                            <p>This program is a context menu (right click on an icon) option that allows you to view many application&apos;s files without having to have that program be installed ... I DON&apos;T THINK this would work on many audio/video formats (an alternative to codecs) ... but it may work for graphics formats.</p>
                        </div>
                    </div>

                </div>
            </li>
        </li>
    </ul>


<?php include $sitePath . "/modules/footer.tpl"; ?>