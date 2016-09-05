<?php

	$the_title = 'Xmetalfanx\'s Homepage - TechCenter  - Id3 Tags';
	$the_content = <<<EOD

      <p class="justify">ID3 Tags are tags that are built into Mp3s that let
        media players know facts about the Mp3, that can help the player (this
        all depends on the program that you are using) organize your music collection.
        Some of the most common mp3 tags are Artist, Album, Title, Year, and
        Genre. These tags are also used by many <a href="../Templates/securityNTemplate.dwt.php">file
        sharing programs</a> when you search their networks. Unfortunately, ....
        many people have the wrong tags, and now the RIAA is flooding the networks
        with false (bad) tracks, this can be a pain. I will try to explain how
        easy it can be to fix or even complete mp3 tags.</p>
      <p class="header">Organizing </p>
      <p class="justify">If you organize your mp3s into folders, it is much easier
        to find and handle them. Say you have all your mp3s that you got in March
        (all genres that is), it may be hard to find what you want to play. I
        personally organize them by <strong>Genre</strong>, then <strong>Artist/Band</strong>, then <strong>album</strong> (title that is). I also
        have a Misc. folder for anything left over... not to get too picky.
        This can also help you if you have a large collection and you have not
        really used ID3 tags before. I will use my personal favorite band for
        this example</p>
      <p align="justify">Suppose you want to organize your Nickelback Mp3s. </p>
      <ol>
        <li>
          <p>First I would create a <span class="boldText">Rock</span> Folder (Hard Rock ....whatever..... i
          am being really general here).</p>
        </li>
        <li>
          <p>next I would create an &quot;<span class="boldText">Nickelback</span>&quot; Folder inside
          of the Rock Folder, previously created. </p>
        </li>
        <li>
          <p class="justify">The I move all my Nickelback mp3s into that folder, i would then create
          an folder in the Nickelback directory for every album. (if you only say have
          3 or 4 songs from an artist it is NOT really needed...) </p>
        </li>
        <li>
          <p class="justify">Then I, to the best of my knowledge move the mp3s into the proper
          folder. I am using a mass mp3 tagger now, but the freeware i still
          love for editing tags is <a href="http://xdev.narod.ru/tagscan_e.htm">TagScan</a>.
          It has many features that are useful in single and mass tag editing.
          . You can , for example , set it to the Nickelback directory (and with &quot;all subfolders&quot; checked)
          Set the Artist Tag to &quot;Nickelback&quot; and all the tags
          for all the mp3s in the location you selected will be renamed with
          the artist tag now reading &quot;Alice in Chains&quot;... you can also
          do similar things with setting the Album Tags. </p>
        </li>
      </ol>
      <p class="header">Software</p>
      <p align="justify">What software should You use?... Well Like always that
        is a matter of a opinion, however, I have always liked a program called <a href="../screenshots/ImgBurn.jpg">Tagscanner</a>,
        which is freeware.</p>
      <p align="justify" class="header">August 2008 Update:</p>
      <p align="justify"> &quot;'Media Monkey&quot; and &quot;Tag Scanner&quot; now have a level of &quot;Online Lookup&quot; for Id3 tags that when i previously wrote this, was only found in Musicmatch. Also, Winamp 5.54 also supports ID3 Tag lookup (although all these programs tend to use different services....) ... All three of these options are FREE </p>
      <p align="justify"><span class="boldUnderline">WORD OF CAUTION</span>: DOUBLE CHECK YOUR NEWLY CHANGE ID3 TAGS BEFORE YOU APPLY THEM... some programs return results that ... ARE NOT EVEN CLOSE TO WHAT THEY SHOULD BE .. .especially for &quot;rare&quot; music or &quot;unknown artists&quot; (like some you may find on Myspace) ... </p>
      <p class="header">Musicmatch</p>
      <p class="center"><a href="http://www.musicmatch.com" target="_blank"><img src="logos/mMatch.gif" alt="Musicmatch Logo" width="90" height="29" border="0" /></a></p>
      <p class="justify">I have also just found that in at least Musicmatch 7.5
        and up, there is a &quot;Super Tag&quot; option that will go out on the
        net and download the tag for you. <strong>This is useful if you want
        to add extra tag information but only know say the artist name and song
        title</strong>. Also this can be bad if you don't watch what your doing...
        I have found, it gets id3 tags from artists that are not even close to
        the one i have (this is for rarer artists that is) This means you can
        really mess up the id3 tags of your existing collection.... just watch
        the tags you change and it should be fine. </p>
      <p class="header">File Sharing Programs and ID3 Tags</p>
      <p class="justify">Many File sharing programs let you view the full path of the filename
        and location; however, the default of viewing/sorting the ID3 Tags or
        the full path appears to be mixed. WinMX for instance, lets you see the
        filename and the ID3 tag. This can cause problems</p>
    </div>
 
?>

<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
