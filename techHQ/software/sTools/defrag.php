<?php

  $title =' Useful Programs Section - Defrag';
  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/techHQ/modules/programs.php" ;
  include $sitePath . "/templates/tech/baseTechSoftwareTemp.tpl";

?>
  <h2>Windows Third Party Defragmenters - Freeware</h2>
   <div id="softwareSection">

   <ul>
      <li>
        <div class="progTitles">
          <img src="../../progIcons/system_tools/defrag/DiskDefrag_MAINICON.png" alt="Auslogic Defrag Icon" /> [Auslogics Disk Defrag
          <a href="http://www.auslogics.com/redirect.php?referer=dd30v1&amp;redirect=en" target="_blank">
          Auslogic Defrag </a>
        </div>

        <p>This may be my personal favorite.</p>
      </li>

      <li>
        <div class="progTitles">
          <a href="http://www.emro.nl/freeware">JKDefrag</a>
        </div>

        <p>This is very good and some may still like this better then MyDefrag.</p>
        <p>I have seen two different GUI&#39;s for JKDefrag.</p>
      </li>

      <li>
        <div class="progTitles">
          <img src="../defrag/icon_MyDefragGUI.png" alt="MyDefragGUI screenshot" />
          <a href="http://www.mydefrag.net">MyDefrag/MyDefragGUI</a>
        </div>

        <div class="progDesc">
        <p>(New name for the new versions of JKDefrag)</p>
          <pre>
            <code>This is a good, powerful defragmenter that (from the developer) that has no GUI Interface (read on before you dismiss this)
            .. the programmer has decided to concentrate on the &amp;quot;base&amp;quot; (defrag/optimizing) of the program, and let others
            develop an GUI Interface

            One of the GUI&#39;s I have found (which is identical to one of the two GUIs for JKDefrag) is &lt;a
            href=&quot;http://www.mydefrag.net/&quot; target=&quot;_blank&quot;&gt;MyDefragGUI&lt;/a&gt;
            </code>
          </pre>
        </div>
      </li>


      <li>
        <div class="progTitles">
          <img src="../../progIcons/system_tools/defrag/1005t__defraggler.png" alt="DeFraggler Icon" />
          <a href="http://www.pinform.com">Piriform&#39;s Defraggler</a>
        </div>


        <div class="progDesc">
        <ul>
          <li>This defrags file by file</li>
          <li>Creator of CCleaner makes this</li>
          <li>Does a decent job</li>
        </ul>
      </li>
        <li>
          <p>
            <a href="http://ultradefrag.sourceforge.net/">UltraDefrag</a>
          </p>
          <p>Defragmenter that has a Simple Interface, but powerful defragmenting capabilities</p>
        </li>
      </ul>

          <hr />
          <p>Just remember if you defrag with one and then scan with another (say defrag with MyDefrag, and then scan with Defraggler)
          you may notice the second says its not &quot;perfect&quot;. You then defrag with the second defragmenter, and analyze the
          partition with the first defragmenter you used and find the FIRST now says its fragmented ... point is, I would stick with one
          defragmenter.</p>
      </div>


    <p>
        <strong>My Opinion:</strong>
        <span class="redBold">I use Auslogic Defrag</span>
    </p>



</div>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
