<?php

  $title = 'Xmetal TechHQ - Browser Section - Content Management Addons';

    $the_content = <<<EOD

        <h2>Content "Manager" Addons</h2>

				<p>This does not include a few of my "Must have addons" in the first table on the page</p>

				<div id="browser">

				<ul>


				  <li>
					<p class="title">
							<img src="/techHQ/graphics/ffox/GreaseFire.png" alt="GreaseFire Icon" class="icon">
							<a href="http://skrul.com/blog/projects/greasefire">Greasefire</a></p>
					<p class="description"> Auto-finds Greasemonkey scripts on userscripts.org, based on the domain/website you are visiting </p>
				  </li>

				  <li>
					<p class="title">
          <img src="/techHQ/graphics/ffox/greasemonkey.png" alt="GreaseMonkey Icon" class="icon"> 
								<a href="http://www.greasespot.net/">Greasemonkey</a></p>

					<div  class="description">
							<p> A User Script Manager for Firefox</p>
							<p> User scripts add many features and even remove ads on some pages automatically ..</p>
					</div>
				  </li>

				  <li>
					<p class="title">
							<a href="https://addons.mozilla.org/en-US/firefox/addon/nuke-anything-enhanced/?src=search" target="_blank"> Nuke Anything Enhanced</a></p>

					<div  class="description">
							<p> Allows you to hide objects on web-pages through the context (right click) menu</p>
							<p> Similar to RemoveIt Permanently</p>
					</div>
				  </li>

				 <div  class="description">
				  <li>
					<p class="title">
							<img src="/techHQ/graphics/ffox/redirectRemover.png" alt="redirect remover" class="icon">
							<a href="http://www.aredeye.com/addons/">Redirect Remover</a></p>
					<p> Remove Redirects from websites</p>
				  </li>
				</div>

				  <li>
					<p class="title">
							<img src="/techHQ/graphics/ffox/remove_it_perm.png" alt="RIP Icon" class="icon">
							<a href="http://rip.mozdev.org/">Remove It Permanently</a></p>
					<p class="description"> Highly customizable addon to remove items via the contect meux … reminds me of a cross between Aardvark and Adblock</p>
				  </li>

				  <li>
					<p class="title"><a href="http://netticat.ath.cx/extensions.html">RightToClick</a></p>
					<p class="description">Allows right clicks and highlighting where forbidden by javascript</p>
				  </li>

				  <li>
					<p class="title"><a href="http://hemiolapei.free.fr/divers/sap/sap-en.html">StopAutoplay</a></p>
					<p class="description"> This Plug-in stops the auto playing of various files (Quicktime and real media for instance) …</p>
				  </li>

				  <li>
					<p class="title">
							<a href="http://www.tidyfox.com/">TidyFox</a>
					</p>

					<div  class="description">
							<p> This adds (where you put it can be fully customized) button icon that gives you quick acesss, based on domians.</p>
							<p> I have tried a few "History in a sidebar" type addons and they weren’t bad … but they weren’’t what I was looking for. This adds just enough
							of what I wanted, without being "in the way", if you ask me</p>
					</div>

				  </li>
				</ul>



				<ul>
			       <li>
					<p class="title"><a href="http://SocialFixer.com">Social Fixer</a> </p>

					<div  class="description">
							<p> Formerly "Facebook Fixer"’; This adds various extra features and enhancements to Facebook.</p>
							<ul>
							  <li>
								<p>(FOR THE RECORD), I think there is also a "addition" of Social Fixer for Chrome Related browsers, as well as Opera</p>
							  </li>
							  <li>
								<p>Internet Explorer (and IE based Browsers are not yet supported)</p>
							  </li>
							</ul>
						  </li>
				  </div>

				  <li>
							<p class="title">
									<a href="http://www.pagetweak.com/">PageTweak</a><br>
									  &nbsp;&nbsp;&nbsp;—&nbsp;The Ultimate Webpage Enhancer!
							</p>
				  </li>
				</ul>
			</div>

EOD;
?>

 <?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechBrowserTemplate.php"); ?>
