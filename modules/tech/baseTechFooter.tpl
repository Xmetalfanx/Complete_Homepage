      </div> <!-- Ends Second Column opened in template files  -->
</div> <!-- Ends Row -->


  <div class="hidden-sm-down col-md-12 col-lg-12 col-xl-12">

    <nav id="bottomLinks" >
      <a href="/tecHQ/index.php" class="nav-link">Home</a>
      <a href="/techHQ/personal/personalIndex.php" class="nav-link">About Me</a>
      <a href="/techHQ/credit.php" class="nav-link">Credits</a>
      <a href="http://xmetalfanx.x10.mx/phpbb/" target="_blank" class="nav-link">Forums</a>
      <a href="/techHQ/references.php" class="nav-link">References</a>
      <a href="#" class="nav-link">Site Map </a>
      <a href="/links.php" class="nav-link">Links </a>
      <a href="#" class="nav-link">Contact Me</a>
    </nav>

    <!-- Start of SearchBox DIV -->
    <div id="StartPageStyle">
      <!-- Search Bar -->
      <form action="http://startpage.com/do/search" method="post" name="metasearch" target="_blank" onsubmit="javascript:document.metasearch.query.value=document.metasearch.keyword.value;" accept-charset="UTF-8" class="SPForm">
        <img src="/techHQ/graphics/search/startpage_small_logo.jpg" alt="Start Page Icon" class="SPSearchButton"/>
        <input value="searchbox" name="from" type="hidden"/>
        <input value="english" name="language" type="hidden"/>
        <input value="web" name="cat" type="hidden"/>
        <input name="query" value=" " type="hidden"/>
        <input id="querysearchbox4" name="keyword" value="" type="text" class="SPSearchBoxWIDE"/>
        <input id="submit" src="/techHQ/graphics/search/stp_search_small.gif" alt="Search Button" type="image" class="SPSubmitButton"/>
        <input value="process_search" name="cmd" type="hidden"/>
        <input value="sb" name="frm" type="hidden"/>
      </form>
    </div> <!-- Ends Startpage Section -->

  </div>

<?php include $sitePath . "/modules/footer.tpl"; ?>
