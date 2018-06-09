<?php

	$pageTitle = 'Upgrading Debian Branches';

	$sitePath = "/home/xmetalx1/public_html";
	include $sitePath . "/templates/linux/blankTemplates/baseLinuxTutorBlank.tpl";


  ?>
  <p class="col2SectionHeaders">Introduction</p>
  <p>I am not going to go into any kind of details explaining things about Debian, though I will mention some points I want to clear up  </p>
  <ul>
    <li>There are four Debian branches (listed below) ...Packages or even just Package Versions filter down from the most &quot;bleeding edge, but maybe unstable branch&quot; to the &quot;stable&quot; branch ...
      <ul>
        <li>IF THERE IS ONE DISTRO team of developers that really test thing and make sure its ROCK-SOLID/STABLE for the users, before a package goes into the &quot;Stable&quot; branch, its the Debian developers.</li>
        </ul>
    </li>
    <li>Now ... the branch names ... NOT TO BE CONFUSED WITH &quot;CODENAMES&quot; .... WHICH I WILL LIST BELOW
      <ul>
        <li><span class="terms">Experiemental</span> - The MOST BLEEDING EDGE.. I am not saying dont poke around this one ... I choose not to though this is the branch that would be most likely to break your system</li>
        <li class="terms">Unstable </li>
        <li><span class="terms">Testing</span> - A bit more testing on it then the packages in &quot;Unstable&quot;, though not tested enough to be considered &quot;Stable&quot;
          <ul>
            <li>I have seen (and agree) some long time Debian users say that the &quot;Debian Testing&quot; branch is more stable then some other distro's (say Ubuntu's) &quot;Stable&quot; (just the regular sources Ubuntu users) branch.... so do not be put off by this.</li>
            </ul>
        </li>
        <li class="terms">Stable    </li>
      </ul>
    </li>
  </ul>
  <ul>
    <li>&quot;Wheezy&quot;, &quot;Jessie&quot;, &quot;sid&quot; (just three examples thar are used at the time I am typing this are (Based on Toy Story characters) just what branch is currently in the </li>
  </ul>
  <ul>
    <li>METAPHOR .. PLEASE IGNORE THIS IF YOU ALREADY UNDERSTAND WHAT i AM SAYING.
      <ul>
        <li>The ACTUAL BRANCHES are like chairs with labels on them ... the chairs with the four labels are ALWAYS there and in the same place... </li>
        <li>The &quot;Codenames&quot; as I call them are like people in those chairs .... (You make thank me for this metaphor in a second)
          <ul>
            <li>When you decide to change up to another branch .... you have two choices (Say upgrading the from the STABLE BRANCH)
              <ul>
                <li>You can then upgrade/&quot;choose to follow&quot; the TESTING BRANCH OR</li>
                <li>You can follow (current testing branch at the time I am typing this, (codename Jessie) </li>
                </ul>
              </li>
            </ul><br /><br />
          <ul>
            <li class="bold">I REALLY HOPE I DO NOT LOOSE ANYONE HERE ...</li>
            <li>WHEN &quot;EVERYTHING&quot; ON DEBIAN'S SIDE PEOPLE GET UP FROM THE CHAIRS, AND MOVE ONE DOWN ... The person/code name that was &quot;Unstable&quot; becomes &quot;testing&quot; ... &quot;testing&quot; become &quot;Stable and so forth ... think of it like musical chairs in a way
              <ul>
                <li>If you follow <span class="terms">TESTING</span> ... you are following &quot;the chair&quot; (my people-vs- chairs they are sitting in metaphor) ... ... no matter (metaphor) who sits in that chair ... your paying attention to the chair </li>
                <li>IF you follow <span class="terms">&quot;Jessie&quot;</span> <span class="italics">(currently the testing branch)</span> your following the &quot;person&quot; ... so when Jessie becomes stable (gets up and moves down to the &quot;Stable Chair&quot;), you will still be following WHAT WAS the testing branch ... NOW the current &quot;Stable branch&quot;</li>
                </ul>
              </li>
            </ul>
          </li>
      </ul>
      </li>
  </ul>
  <p>CONFUSED YET? </p>
  <p>&quot;  What should I do?&quot;... HONESTLY it doesn't matter either way ... its a piece of cake to change, as you will find out further in this section</p>


	<?php include $sitePath . "/modules/footer.tpl"; ?>
