<?php 
		$the_title = 'Xmetalfanxx Security Section - My Guides/Tips to secure web browsing with Firefox';
		$the_content = <<<EOD     


  <p>For the record, I know this content may be duplicated in &quot;Firefox Tips&quot;.. I figured to make it easier for viewers of my site to get top the content, even if I have to duplicate a few.  
  </p>    
  <p>I AM NOT SAYING, YOU HAVE TO DO ALL OF THESE, ... pick and choose which ones you want to try. The #1 must have would be NoScript, if you ask me... if you only use one of these ... NoScript is the one to pick ... Most web exploits I have seen can be easliy blocked with NoScript, without any need for the user (that's you) to interact with it.
  </p>
  <p>
    <span class="progName">
      <img src="../../progIcons/browsers/firefox_1.png" alt="Firefox Icon" width="36" height="36" class="iconsLeft" />Firefox
    </span>
  </p>      <br />      
  <table width="90%" border="0" align="center" cellpadding="5">        
    <tr>          
      <td height="91">
        <ul>            
          <li>
          <a href="http://www.noscript.net/">
            <img src="../../graphics/ffox/security/NoScript.jpg" alt="NoScript Icon" width="32" height="32" align="bottom" class="iconsLeft" /></a>
          <a href="http://www.noscript.net/" target="_blank"> 
            <span class="progName">NoScript
            </span> - </a>
          <span class="justify">Blocks MANY web exploits ... NoScript blocks sites running scripts (while maintaining a white-list (allows) and blacklist (known sites you               want to block) and after you hit allow on your favorite site ... it will not block those scripts you want Firefox to run again. I have seen TONS of articles of &quot;new exploits               &quot; year after year now and many of them say that ( not counting MS patches) the way to protect yourself is to use an updated copy of NoScript with an updated version of                Firefox (you don't have to use 4.x, by the way)
          </span>
          </li>          
        </ul></td>        
    </tr>        
    <tr>          
      <td height="207">
        <p class="header">Use a Cookie Manager               
        </p>            
        <ul>              
          <ul>                
            <li>
            <a href="http://forum.softwareblaze.com/" class="progName">CookieSafe</a> or                                   
            <a href="https://addons.mozilla.org/en-US/firefox/addon/cookie-monster/" target="_blank" class="progName">Cookie Monster</a>                (I like Cookie Safe; though, both of these options are good) 
            </li>                
            <li>Use these to globally block cookies, then allow then on a per-site basis
            </li>                
            <li>Block all Third party cookies
            </li>                
            <li>These are Cookies sent when you visit  &quot;
            <span class="redtext">site A
            </span>&quot; and the cookie is FROM &quot;
            <span class="redtext">site B
            </span>&quot; which is used for many reason, one of the most common is advertisers
            </li>                
            <li>
            <span class="progName"> MY CONFIGURATIONS FOR COOKIE SAFE 
            </span>                  
            <ol>                    
              <li>Open the configurations, and go to Miscellaneous Tab                       
              <ul>                        
                <li>
                <img src="../tracking/cookieSafe_Options.jpg" width="478" height="361" alt="Cookie Safe Options" />
                </li>                        
                <li>Make sure (as you can see above), the following boxes are checked                           
                <ul>                            
                  <li>Deny Cookies globally on startup (This doesn't count ones that you have allowed with CookieSafe)
                  </li>                            
                  <li>Block Third Party Cookie
                  </li>                            
                  <li>Block Cookies when the original host cannot be resolved
                  </li>                          
                </ul>                        
                </li>                      
              </ul>                    
              </li>                  
            </ol>                
            </li>              
          </ul>          
        </ul></td>        
    </tr>        
    <tr>          <td>
        <p class="header">Block web bugs from tracking you
        </p>            
        <ul>            
          <li>
          <img src="../../graphics/ffox/Ghosty.jpg" alt="Ghosty Icon" width="32" height="32" class="iconsLeft" />Use 
          <a href="http://www.ghostery.com/download" target="_blank" class="progName">Ghostery</a> to block web-bugs 
          </li>          
        </ul>
        <p>&nbsp;
        </p></td>        
    </tr>        
    <tr>          <td>
        <p class="header">Block request from sites that did not originate from the site your currently visiting 
        </p>            
        <p>I want to note, there are many legit request out there 
        </p>            
        <ul>              
          <li>An example is Facebook with a request from &quot;
          <span class="blue">FB.net
          </span>&quot; ... (OK that may not be a real one, but &quot;work with me on this&quot;) ... 
          <span class="blue">FB.NET
          </span> is a part of Facebook and perfectly legit if your on 
          <span class="blue">Facebook.com
          </span>
          </li>            
        </ul>            
        <p>
          <a href="http://www.requestpolicy.com/">
            <span class="progName">
              <img src="../../graphics/ffox/security/RequestPolicy.png" width="32" height="32" alt="Resuest Policy Icon" />Request Policy
            </span></a> -
          <span class="redtext"> &quot;Control which cross-site requests are allowed.   Improve the privacy of your browsing. Secure yourself from Cross-Site Request Forgery (CSRF) and            other attacks.&quot;
          </span> - 
          <span class="italics">Official (shortened from complete description) Description, curtesy of Request Policy (aka .. I didn't write that) 
          </span>
        </p></td>        
    </tr>        
    <tr>          <td>
        <p class="header">Block or Fake referers 
        </p>            
        <ul>              
          <li>Referers to sum it up are used to show a website, where you &quot;came from&quot; (what prior site). 
          </li>            
        </ul>            
        <table width="90%" border="0" align="center" cellpadding="5" cellspacing="5">              
          <tr>                <td>
              <p>
                <span class="progName">
                  <img src="../../graphics/ffox/RefControl.png" alt="Ref Control Icon" width="32" height="32" class="iconsLeft" />
                </span>
              </p>
              <p>
                <a href="http://www.stardrifter.org/refcontrol/" target="_blank">
                  <span class="progName">Ref Control 
                  </span></a>
                <span class="progName">
                </span>                  
              </p>                  
              <p>Control Referers (where a site can tell where you came from (a different site).
              </p>                  
              <p>This allows you to:
              </p>                  
              <ul>                    
                <li> block, 
                </li>                    
                <li>allow (some download sites you have to allow), 
                </li>                    
                <li>or forge (fake) a referer based on rules that you create 
                </li>                  
              </ul>                  
              <p>I  made a rule to forge all third party (anything not listed as Allow) and I add &quot;allow&quot; rules IF needed.
              </p>                  
              <ul>                    
                <li>To do this, in the option dialog box for RefControl, look at the bottom where it says &quot;default for sites not listed&quot; and click edit
                </li>                    
                <li>Here (I choose Forge, but you can choice Block)
                </li>                    
                <li>Without RefControl, the &quot;default&quot; for what Firefox does with referer's is &quot;Allow all&quot;, in case you were wondering
                </li>                
              </ul></td>              
          </tr>            
        </table></td>        
    </tr>        
    <tr>          <td>
        <p class="header">Watch what websites you go to and makes sure they are trust-worthy
        </p>          
        <p>This does have a strong hint of &quot;Common Sense&quot; to it ...
        </p>          
        <ul>            
          <li>Don't go to hacker sites
          </li>            
          <li>Don't go to sites that illegally give out programs for free ... OR anything illegal for that matter               
          <ul>                
            <li class="navyText">
              <em>A question may come up &quot;What about that GiveawayoftheDay site, linked to on youir homepage?&quot; ... What that is is the developers of certain programs give away a license ... IN MANY cases, you can not only download it during that 24hour period only, but if you try to install it AFTER a certain time period (say in that 24hour window), it will not install
              </em>
            </li>                
            <li class="navyText">
              <em>The developer does not provide &quot;paid&quot; (as if you paid for the program) tech support, THOUGH the license itself is 100% legal
              </em>
            </li>                
            <li class="navyText">
              <em>... Just wanted to point this out, AND DURING the holiday season, some sites such as &quot;Ghack.net&quot; has a &quot;write a short essay on why you should get this program for free&quot; and ~insert name of program here~ ... Then (this is 100% legit with the program's company) they will give out the license to a &quot;lucky essay writer&quot;.... THIS IS ALSO LEGIT
              </em>
            </li>              
          </ul>            
          </li>            
          <li>There are many options and many included in security programs such as Avast, Norton, or Mcafee (among others)... I dont care for those, and the best one (though none of them are 100% perfect) is:
          </li>            
          <li>
          <a href="http://www.mywot.com" target="_blank">
            <img src="../../graphics/ffox/security/WOT.jpg" width="32" height="32" alt="WOT Icon" />
            <span class="progName">Web of Trust (sometimes shown as just WOT) 
            </span></a>
          <ul>                
            <li>WOT has an addon for Chrome/Chromium, IE (I think), Opera, and Firefox (that I know of, ... more browsers may be supported)
            </li>                
            <li>The WOT has a few catagories it rates sites on and is based on other user reviews for a site .. though as I said this can make a legit site have a &quot;bad rating&quot; (red flag) if a ton of users launch an &quot;attack&quot; on a site... I have not had that happen with WOT ... 
            </li>                
            <li>I mean there are not tons of &quot;bad&quot;/&quot;fake&quot; reviews ... though along with WOT's Addon .... COMMON SENSE is a great addition to the &quot;Is this site legit?&quot; question
            </li>              
          </ul>            
          </li>          
        </ul></td>        
    </tr>      
  </table>    
  <p>I am not going to include ad blocknig here, since ads tend to be more of an annoyance than a security threat... I know there are some bad ads out there; however, do not think that Ad blocking is a &quot;security issue&quot; like some of thesze other addons and suggestions 
  </p>    
  <p>
    <a href="../../software/internet/firefox/addons/topAddonsNonSecurity.php" target="_blank" class="progName">Click here to go to my page that DOES include adblock and element hider for Adblock</a>
  </p>  
</div>  

EOD
;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinSecurityTemplate.php"); ?>
       
