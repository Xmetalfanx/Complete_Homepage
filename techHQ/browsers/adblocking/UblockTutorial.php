<?php

	 $the_title = '- Browser Section - ';
	 $sitePath = "/home/xmetalx1/public_html";
	 include $sitePath . "/templates/tech/baseTechBrowserTemp.tpl";

?>

	<p>This is meant to cover slightly more advanced topics</p>
		<h5>Knowing if Ublock is Enabled or not</h5>
		<p>
			<img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockEnabled.jpg" alt="Ublock Enabled" /> Ublock Enabled (note: Blue
			color)</p>
		<p>
			<img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockDisabled.jpg" alt="Ublock Disabled" /> Ublock Disabled (note:
			Grey Color)</p>
		<hr />
		<h3>Enable Advanced Mode</h3>
		<p>
			<img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockDashSettingsAdvancedUser.jpg" alt="Ublock Disabled" />
		</p>
		<hr />
		<h3>Static Filtering versus Dynamic Filtering</h3>
		<ul>
			<li>
				<p>
					<strong>Static filtering</strong> is the filter that is done by the lists located in the Ublock dashboard under the
					&quot;3-party Filters&quot; tab</p>
			</li>
			<li>
				<p>
					<strong>Dynamic filtering</strong>
				</p>
				<ul>
					<li>(only apparent when you put a checkmarks by &quot;I am an advanced user&quot; under the Settings tab in the Ublock
						Dashboard)</li>
				</ul>
				<p>
					<img src="/techHQ/browsers/adblocking/screenshots/ublock/ublockDashSettingsAdvancedUser.jpg"
							alt="Dashboard_AdvancedSettings Box" />
				</p>
			</li>
			<li>
				<p>This is a per-site filtering option that allows you to control individual domain request from different domains
					every-time you visit a site.</p>
				<ul>
					<li>
						<p>For those of you who just went cross-eyed, ... When you connect to a site ...say &quot;www.siteA.com&quot; there are
							usually more domains that just &quot;SiteA.com&quot; that connect.</p>
						<p>These (while some are 100% associated and owned by the SiteA.com company), while other domains ARE considered third
							party items.</p>
					</li>
					<li>
						<p>
							<strong>What you can do with dynamic filtering can be explained with the following:</strong>
						</p>
						<ul>
							<li>
								<p>You as a user, visits
									<em>http://www.siteA.com</em>.</p>
								<p>You may allow items from the domain
									<em>SiteA.com</em> (considered a first party domain since its the same as the URL/Link you are visiting),
									<em>SiteB.com</em>, though block everything else.</p>
								<p>OF COURSE this can be adjusted by advanced user, as you visit the site, so if something &quot;doesn&#39;t look
									right&quot; on a site, you can allow/block domains, then refresh the page to reflect to those changes.</p>
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
		<hr />

		<h3>Dynamic Filtering in Ublock Explained</h3>
		<ul>
			<li>
				<p>
					<a href="https://github.com/gorhill/uBlock/wiki/Overview-of-uBlock&#39;s-network-filtering-engine">uBlock &quot;filtering
						chart&quot; wiki page</a>
				</p>
			</li>
			<li>
				<p>
					<a href="https://github.com/gorhill/uBlock/wiki/Dynamic-filtering:-quick-guide">Dynamic Filtering Guide by Gorhill</a>
				</p>
			</li>
		</ul>


		<h4>What is a Dynamic Filter?</h4>
		<p>A Dynamic filter is a more advanced filter than the regular static filter</p>
		<h4>Global Dynamic Rules</h4>
		<p>Basically a
			<em>Global Dynamic Rule</em> is just a default rule that is a applied to any site you visit, without having to change the
			&quot;allow/deny&quot; settings all the time, if you know you always want to take the same action with that domain</p>
		<h5>Example of Global -vs- Per-site Dynamic Filtering</h5>
		<p>*YOU CAN ADJUST dynamic filter settings to over-right the global settings, so if you (example) want to deny Facebook.com, on
			everything except &quot;Facebook.com&quot;, you would set the global rule for Facebook.com do
			<strong>deny</strong> (red), and ON &quot;Facebook.com&quot; &#39;s per-site dynamic filtering settings, you would set the
			dynamic filter for
			<em>Facebook.com</em>
		</p>

		<h4>What are the red, green and black settings and what do they mean?</h4>
		<p>filler</p>

		<h4>What is a noop-rule? (I just found this out myself)</h4>
		<p>Filler</p>
		<hr />

		<h2>Various pages such as FAQs answered by Gorhill himself</h2>
		<ul>
			<li>
				<p>
					<a href="https://github.com/gorhill/uBlock/wiki/Does-uBlock-block-ads-or-just-hide-them%3F">Does Ublock Origin Block ads and content or just hide them?</a>
				</p>
			</li>
			<li>
				<p>
					<a href="https://github.com/gorhill/uBlock/wiki/uBlock-and-others:-Blocking-ads,-trackers,-malwares">Ublock versus other blockers</a>
				</p>
			</li>
			<li>
				<p>
					<a href="https://github.com/gorhill/uBlock/wiki/Overview-of-uBlock&#39;s-network-filtering-engine:-details">Overview of Ublock Filtering Engine</a>
				</p>
			</li>
			<li>
				<p>
					<a href="https://github.com/gorhill/uBlock/wiki/Dynamic-filtering:-quick-guide">Dynamic Filtering Guide by Gorhill</a>
				</p>
			</li>
		</ul>

<?php include $sitePath . "/modules/tech/baseTechFooter.tpl"; ?>
