<?php

	$pageTitle = ' Id3 Tags';

  $rootDir = '/home/xmetalx1/domains/xmetal.x10.mx/public_html/';
  include $rootDir . "/templates/tech/open/baseTechCenter.tpl";
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

<hr/>
<h1>Software</h1>
<img src="/techHQ/progIcons/media/media_players/strawberry.png" alt="Strawberry Music Player Icon" class="icon--size40">
<h3>
    <a href="https://www.strawberrymusicplayer.org/" target="_blank">Strawberry Music Player (MusicBrainz)</a>
</h3>
    The regularly updated fork of <a href="https://www.clementine-player.org/" target="_blank">link the Clemintine Music Player</a>

<br /><br />
<img src="/techHQ/progIcons/media/musicbrainz-picard.png" alt="Picard" class="icon--size40">
<h3><a href="https://picard.musicbrainz.org/" target="_blank">MusicBrainz Picard</a></h3>
A Cross Platform option, written in Python



</div> <!-- closes main-section--right-wide -->
<!-- include tech footer, than the startpage box and then the regular footer -->
<?php include($rootDir . '/modules/tech/baseTechFooter.tpl'); ?>
