<?php

  $title = 'Xmetal TechHQ - Browser Section - TinyURL Info';

  $sitePath = "/home/xmetalx1/public_html";
  include $sitePath . "/templates/tech/baseTechBrowserTemp.tpl";

?>
      <p class="mainProgDescript">Note: This is for TinyURL; although, I know there are other similar services out there that these descriptions apply to </p>
      <p>In short, TinyURL takes longer &quot;http://www.internet.com/wow/this_is_a/very_long_link.html &quot; type of address and creates a &quot;http://tinyurl.com/notnow&quot; address. When you are working with a Character Limited form (web mail ... chat room .. etc) the original address may not be able to be posted, but the TinyURL would be ok. </p>
      <p>For the record i have seen VERRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRY LONG address, that make my example look short. </p>
      <p class="mainProgCat">Problems I have had with TinyURL in the past </p>
      <ol>
        <li><span class="boldItalics">You Never know where you are going</span> (being redirected to) .. it could be a malicious site designed to crash browsers and computers. (note: keep an eye out on a page for &quot;how to prevent harmful sites from crashing my browser&quot; type page .. This paragraph just gave me the idea to do that sort of page)
          <p>They even describe on the page &quot;You dont want people to see where your link goes?&quot; (that sounds fishy to me ... I like to know where i am going first) </p>
        </li>
      </ol>
      <p class="mainProgCat">How to fix it </p>
      <p>Click on &quot;<span class="maroonText">enable Preview</span>&quot; in the Left hand corner (if you have javascript blocked, all of this may not work anyway)</p>
      <p>Basically, that is it, I think</p>
      <ol>
        <li class="boldText"> What happens now?</li>
      </ol>
      <blockquote>
        <p>Now  when  you click a TinyURL link (<span class="code"> http://TinyURL.com/Blah</span> ) and it takes you to their site ... you then click on the link
        that you can now see WHERE the link is redirecting you to. This may not matter for some as they will still scratch there head
        <img src="../../smiles/various/dont-know.gif" alt="I dunno Smile" width="30" height="20" class="imgleft" /></p>

        <p>for others users .. you will be able to see a link like  &quot;http://tinyurl.com/abcde&quot; is really just a link someone gave you to
        &quot;<span class="code">http://www.pcworld.com/faqs/how_to_fix_IE_freezing_issues_with_certain_firewalls.php</span>&quot; ...</p>
        <p>&nbsp;</p>
        <p>Just read the URL and you can see its a (the TinyURL link) redirect to a good source that will not effect your computer (unless you fix IE freezing (in
        that example) <img src="/techHQ/smiles/yahoo_Smiles/grin.gif" alt="grin smile" width="18" height="18" class="imgfloat" /></p>

        <p>Another way this can be done is to simply (between the // and the TinyURL in the link, type
          <span class="blue">preview</span></p>

      	<p><span class="code">http://tinyurl.com/1234abcd</span> is the original TinyURL link becomes
      	   <span class="code">http://preview.tinyurl.com/1234abcd</span>
        </p>
	     </blockquote>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
