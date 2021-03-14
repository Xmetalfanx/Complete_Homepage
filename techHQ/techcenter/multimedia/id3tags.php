<?php

	$pageTitle = ' Id3 Tags';

    $path = getenv('DOCUMENT_ROOT');

    include $path . "/templates/tech/open/baseTechCenter.tpl";
?>

<h1>Introduction</h1>
<div>ID3 Tags are tags that are built into Mp3s that let media players know facts about the Mp3, that can help the player (this all depends on the program that you are using) organize your music collection. </div>
<div>Some of the most common mp3 tags are:
  <ul>
    <li>Artist</li>
    <li>Album</li>
    <li>Title</li>
    <li>Year</li>
    <li>Genre</li>
  </ul>
</div>
<h1>Organizing</h1>
<div>If you organize your mp3s into folders, it is much easier to find and handle them. Say you have all your mp3s that you got in March (all genres that is), it may be hard to find what you want to play. I personally organize my music files in the following way.</div>
<ol>
  <li>Genre</li>
  <li>Artist/Band</li>
  <li>Albums Title</li>
</ol>
<div>I also have a Misc. folder for anything left over... not to get too picky. This can also help you if you have a large collection and you have not really used ID3 tags before.</div>

<h1>Software</h1>
<h2>
    <a href="https://www.strawberrymusicplayer.org/" target="_blank">Strawberry Music Player (MusicBrainz)</a>
</h2>
    The regularly updated fork of <a href="https://www.clementine-player.org/" target="_blank">link the Clemintine Music Player</a>

<h2> <a href="https://picard.musicbrainz.org/" target="_blank">MusicBrainz Picard</a></h2>
A Cross Platform option, written in Python



</div> <!-- closes main-section--right-wide -->
<!-- include tech footer, than the startpage box and then the regular footer -->
<?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>
