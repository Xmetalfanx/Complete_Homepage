<?php
	$pageTitle = 'Xmetalfanx\'s Security Section - How to block web advertisers from tracking you';
?>

p
  | I am not going to claim this section is &quot;fool-proof&quot;, and I plan to add similar (in some cases, the same ) add-ons for other browsers
  | (Chrome in particular ... since for those that do not like Firefox, Chrome seems to be the browser of choice). I am also overlooking the obvious
  | &quot;well if you don&apos;t want to be tracked on Facebook... DONT HAVE a Facebook account&quot; mentality (which IS true, to a point) ...

p
  | It&apos;s almost like saying &quot;if you don&apos;t want to be tracked online, NEVER use the internet&quot; ... It&apos;s true, but &quot;today&quot; its impractical
  | if you ask me. Also I will not include information (at the moment anyway) about Proxy services.. I am not writing this for &quot;how to block your
  | ISP from knowing what you do&quot; ... BELELIVE ME .. IF THEY WANT TO KNOW, THERE IS NOTHING YOU CAN REALLY DO TO STOP THAT... and in a way. its their
  | service your using, so they have the right to monitor it (I say that being &quot;as anti-&quot;Big Brother&quot;&quot; as anyone),. I am doing this
  | more for advertising sites and other shady websites

h4
  | How to protect yourself from companies knowing where you visit

p.
	| What you need (again I plan to add Chrome add-ons for this, but now will focus on my favorite browser, Firefox)

p
  a(href='http://www.getfirefox.com', target='_blank')
    img(src='../graphics/joke/firefox.gif', alt='Firefox Hug Graphic', width='53', height='39')
    | Firefox

ul
  li.boldItalics
    | TOP &quot;Anti-tracker&quot; Addons


      <p>
        <a href="https://addons.mozilla.org/en-US/firefox/addon/cookiesafe/" target="_blank">
          <img src="../graphics/ffox/cookie/CookieSafe.gif" alt="CookieSafe Addon" width="30" height="27" class="iconsLeft" /></a>
      </p>
      <ul>
        <li>
        <a href="https://addons.mozilla.org/en-US/firefox/addon/cookiesafe/" target="_blank">
          <span class="boldText">Cookie Safe
          </span></a> (3.x and below, I believe)-            Cookie managing add-on that makes it easier to manage cookies and cookie permissions,(not that its really hard to do) in Firefox
        <ul>
          <li>
          <a href="https://addons.mozilla.org/en-us/firefox/addon/cookiesafe-ff-4-compatible/" target="_blank" class="progName">Cookie Safe for Firefox 4 and up</a> (I personally know it works                4x to 6x, AND THINK it works (with Add-on Compatibility Reporter) with the Firefox 7 beta 5 that is out at the time I am typing this message.
          </li>
          <li>
          <a href="http://forum.addonsmirror.net/index.php?showtopic=6599" target="_blank">
            <img src="../graphics/ffox/cookie/cMonster.png" alt="Cookie Monster Icon" width="32" height="32" class="iconsLeft" />
            <span> Cookie Monster
            </span></a> - This is an alternative to
          <span>CookieSafe
          </span>... same principle ... but i do know some that do not like CS and prefer CookieMonster... I am not sure if there are any ill effects to using both, though you really do not need to <br />
          </li>
        </ul>
        </li>
      </ul>

    </blockquote>



ul
  li.boldItalics
    | Other top security addons for Firefox




		<blockquote>
      <ol>
        <li>
        <a href="http://www.noscript.net/" target="_blank">
          <img src="../graphics/ffox/security/NoScript.jpg" alt="NoScript Addon Icon"/>
          <span>NoScript
          </span></a> - Blocks MANY web exploits ... NoScript blocks sites running scripts (while maintaining a white-list (allows) and blacklist (known sites you want to block) and after you hit        allow on your favorite site ... it will not block those scripts you want Firefox to run again. I have seen TONS of articles of &quot;new exploits&quot; year after year now        and many of them say that ( not counting MS patches) the way to protect yourself is to use an updated copy of NoScript with an updated version of Firefox(you don't have to use 4.x, by the way)<br /> <br />
        </li>
        <li>
        <a href="https://addons.mozilla.org/en-US/firefox/addon/betterprivacy/" target="_blank">

          <img src="../graphics/ffox/security/BetterPrivacy.jpg" alt="Better Privacy Icon"/>
          <span>Better Privacy
          </span>- </a>removes LSO (Flash) Cookies that some other temp file cleaners MAY MISS. ..These are those &quot;Super Cookies&quot; you may have heard about       <br /> <br />
        </li>
        <li>
        <a href="https://addons.mozilla.org/en-US/firefox/addon/requestpolicy-continued/">
          <img src="../graphics/ffox/security/RequestPolicy.png" alt="Request Policy Icon" width="32" height="32" class="iconsLeft" />
          <span class="progName">RequestPolicy Continued
          </span></a>        - &quot;Control which cross-site requests are allowed.   Improve the privacy of your browsing. Secure yourself from Cross-Site Request Forgery (CSRF) and          other attacks.&quot; -
        <span class="italics">Official (shortened from complete description) Description, curtesy of Request Policy (aka .. I didn't write that) <br /><br />
        </span>
        </li>
        <li>
        <a href="http://www.stardrifter.org/refcontrol/" target="_blank">
          <img src="../graphics/ffox/RefControl.png" alt="Ref Control Icon" width="56" height="32" class="iconsLeft" />
          <span class="progName">RefControl
          </span></a> - Control HTTP Refers on a per-site basis ... I admit this could overlap (at least in ways) &quot;Request Policy&quot;
		  and &quot;Modify Headers&quot;, but I choose to use all 3.<br />These can be used by sites to tell them where you just came from (what site you
		   clicked a link on to GET to thier site)
        <ol>
          <ul>
            <li>If you want control of that functionality, this is the addon for you. (again.. .Request Policy COULD also have this capability)
            </li>
            <li>One I use is:
            <ul>
              <li>Click Edit, then check &quot;Third Party Requests only&quot;  and either options you can choose are:
                  ul
                    li
                      span.maroonText
                        | Forge
                      |  - Fake a referrer, to the site requesting
                    |
                    li
                      span.maroonText
                        | Block
                      |  - Send no referrer information to the site requesting

              </li>
            </ul>
            </li>
          </ul>
        </ol>
        </li>
        <li>
        <a href="http://www.garethhunt.com/modifyheaders/" target="_blank">
          <img src="../graphics/ffox/ModifyHeader.png" alt="Modify Header Icon" width="32" height="32" class="iconsLeft" />
          <span class="boldText">Modify Headers
          </span></a>- Manipulates HTTP Request Headers at user's discretion
        <ul>
          <ul>
            <li>Two Headers I have set are
            <span class="redtext">DNT
            </span> (for &quot;DO NOT TRACK&quot;) and
            <span class="redtext">X-Do-Not-Track
            </span> set to
            <span class="blue">1
            </span> (aka True/&quot;on&quot;) .. not all sites abide by these headers, but for those that do, I have these set
            </li>
            <li>Firefox (I can not re-call if it is version 4 or 5 that started to have this) has a Do not Track features that may do the same thing as this add-on Open Options (Preferences in Linux) and go to the Security tab and put a check by &quot;Tell sites I do not want to be tracked&quot;
            </li>
          </ul>
        </ul>
        </li>
      </ol>
    </blockquote>
    <p class="header">Summary of how add-ons like NoScript, CookieSafe(/Cookie Monster) and Request Policy operate
    </p>
    <ul>
      <li>These  operate on
      <span class="italics">white (allow) lists
      </span>, which allow whatever is listed,
      </li>
      <li> Everything that is not &quot;allowed' is
      <span class="underline">blocked
      </span> by the default settings of these add-ons
      </li>
      <li>What is allowed is controlled ENTIRELY by the user. and each domain (/site) requests can be set independently ...
      </li>
    </ul>
    <p>
      <img src="../smiles/shock/eek (1).gif" alt="shocked Smile" width="26" height="24" class="iconsLeft" />
    </p>
    <p>
      <span class="redtext">WHAT IN THE WORLD DOES THAT MEAN?
      </span>you ask... Basically (this is hypothetical) you can go to a Facebook page (that has three requests coming from it
    </p>

    ul
      ul
        li
          | Facebook.com
        |
        li
          | Doubleclick.net
        |
        li
          | &quot;CoolWizzBangAdvertiser.net&quot;

  p
    | These addons allow you to  allow requests in these add-ons for &quot;Facebook.com&quot; AND BLOCK &quot;Doubleclick.net&quot; requests as well as &quot;CoolWizzBangAdvertiser.net&quot; that are allowed by the browser (if there where no addons) ON that Facebook Page

  p
  | Before I go on, I want to say I just found (curtesy of Ghack.net) &quot;
  a(href='https://addons.mozilla.org/en-US/firefox/addon/facebook-blocker/?src=api', target='_blank') Facebook Blocker
  | &quot;, which supposedly blocks (if it actually does anything, I can not say at this point... I just wanted to mention
  it as a possible additional add-on).... I can not confirm nor deny that it works.

    p
      | NOTE:
      span
        | BLOCKING is automatic (or &quot;Default&quot;)
      |  as I said ... You don&apos;t have to do anything other than get Firefox and install the respected Add-on (Though the Cookie related Add-ons I mentioned, do not block EVERYTHING by default, you do have to set that up)
    p
      a(href='cookieBlocking.php', target='_blank') How to setup Blocking all Cookies by Default: Cookie Safe  AND Cookie Monster
    |
    p
      | &quot;Oh .. this sounds like a pain .. I visit &quot;SiteX&quot; everyday almost and will have to keep allowing that in each addon&quot; ... FALSE ... You set them to allow once and the add-on remembers ... in most of these add-ons, there are &quot;import&quot;/&quot;export&quot; settings to back up that add-ons white list and configurations ... which can be handy not only transferring the add-on setting from PC to PC, but also to say portable versions of Firefox and so forth and so on


    h3
      | Conclusion
    p
      | Well, (to a degree) I hope I helped web users secure their web browsing experience

    span.italics
      | and
    |  did not confuse anyone to the point of getting a headache.

      img(src='../smiles/emoticons/emot0.gif', alt='Confused and Fainting Smile', width='60', height='54')
      |  I am NOT SAYING this will mean you will not get spyware/viruses/trojans/malware .. .but instead this is a guide that can help you on your way to having a secure system, by not being as easily tracked while your online..
      br
    </p>
  </div>




	<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
