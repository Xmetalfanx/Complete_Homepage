<?php 

		$the_title = 'ID3 Tag Lookup';
		$the_content = <<<EOD

      <p><img src="../smiles/mad/protest.gif" width="35" height="45" alt="Protesting smile" /></p>
      <p>&quot;Id3 tag lookups are useless... the information they retrieve has nothing to do with the band, much less the song I am looking up&quot; ...
       that honestly sounds very familiar ....In certain cases I have said the same thing. I have found a few program that do a pretty good job at retrieving the
        information you need to complete these tags. </p>
      
      <p class="navyText">Notes to remember before we continue here </p>
      <ol>
        <li>If the artist(s) is rare, there is a good chance that you will not &quot;auto&quot; lookup the tag no matter what software you use...
          <ul>
            <li>It may be worth a try. though </li>
          </ul>
        </li>
        <li>(the same as above) , with a popular artist, but the song itself is rare or a &quot;live track&quot;... you may have difficulty finding the correct information in auto tag lookups </li>
      </ol>
      <table class="tableBlackBorderZeroAll" summary="auto Id3 tag lookup software I have tried">
	  <caption>
	  freeware auto Id3 tag lookup Software I have tried
	  </caption>
        <tr>
          <th width="28%" scope="col">Program Name </th>
          <th width="72%" scope="col">Comments</th>
        </tr>
        <tr>
          <td>Winamp (with Gracenote plugin)</td>
          <td><p>(yes, i know the pro and cons of this one are ... the same) </p>
            <p><span class="boldText">Pros:</span> Good job retrieving the correct information </p>
          <p><span class="boldText">Cons</span>: not as accurate as I'd like it to be.... in SOME cases, a popular artist + a popular song = odd results that are not accurate </p></td>
        </tr>
        <tr>
          <td>Musicmatch Jukebox </td>
          <td><p>(this is based on old copy's that I have tried years ago.... )</p>
          <p><span class="boldText">Pro</span>:  good at getting correct information, although, many non-correct entries are included also (you choose what tag to use from a list of possibly correct tags) </p>
          <p><span class="boldText">Cons</span>: Bloated Musicmatch program.</p>
            <ul>
              <li>If you use Musicmatch Jukebox ANYWAY... then this is good ... I think its a bit bloated for a music player, and do not use the program. </li>
            </ul>
            <p>I am not sure if the tag lookup is in the free version of Musicmatch or not </p>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <table class="tableBlackBorderZeroAll" summary="auto Id3 tag lookup software I have tried">
        <caption>
          shareware auto Id3 tag lookup Software I have tried
        </caption>
        <tr>
          <th width="28%" scope="col">Program Name </th>
          <th width="72%" scope="col">Comments</th>
        </tr>
        <tr>
          <td>Tag Runner </td>
          <td><p>(yes, i know the pro and cons of this one are ... the same) </p>
              <p><span class="boldText">Pros:</span> Good job retrieving the correct information </p>
            <p><span class="boldText">Cons</span>: not as accurate as I'd like it to be.... in SOME cases, a popular artist + a popular song = odd results that are 
            not accurate </p></td>
        </tr>
      </table>
      <p>Tagscanner 5.0      </p>
      <p>&nbsp;</p>
  </div>

EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
