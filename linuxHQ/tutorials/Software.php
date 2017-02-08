<?php

	$title = 'Tutorial Section - Software and Package Management in Linux';
	$content = <<<EOD

			  <div id="Software">
			  <p class="mainTitles">Graphical (GUI) Software Centers</p>
				<ul>
					  <li>Gnome Software Center  </li>
					  <li>Ubuntu/Mint  Software Center </li>
					  <li>Muon Discover </li>
				</ul>

					<p class="mainTitles"> Graphical (GUI) Package Managers</p>
					<ul>
					  <li>muon </li>
					  <li>Synaptic Package Manager</li>
					  <li>Yum Extender  (yumex) </li>
					  <li>Apper </li>
					</ul>

					<p class="mainTitles"> CLI Package Managers </p>
					<ul>
					  <li class="distroName" >Arch based
						<ul>
						  <li class="CodeHeader" > pacman
							<ul>
							  <li class="commandTask">Searching
								<ul>
								  <li class="code" >sudo  pacman -Ss packageName  </li>
								</ul>
							  </li>
						<p class="commandTask">  Installing</p>
                <ul>
                  <li class="code"> sudo  pacman -S packageName </li>
                </ul>
              </li>
              <li>
                <p class="commandTask" > Updating </p>
                <ul>
                  <li>
                    <p class="P4" > “Regular”  Updates  </p>
                    <ul>
                      <li class="code"> sudo   pacman -Syyu  </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <p class="CodeHeader" >yaourt</p>
            <ul>
              <li>
                <p class="commandTask">Searching  / Installing   </p>
                <ul>
                  <li>
                    <p class="code" >  yaourt  packageName </p>
                  </li>
                </ul>
              </li>
              <li>
                <p class="P4" style="margin-left:0cm;">  (Installing)  <span class="T1">type number of</span>
                  <span class="T2">package,</span> <span class="T3">after doing the   search</span>
                </p>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li>


        <p class="distroName" >Debian / Ubuntu  Based  </p>
        <ul>
          <li class="CodeHeader" >apt-get
            <ul>
              <li class="commandTask" > Searching
                <ul>
                  <li class="code" > sudo apt-get search packageName</li>
                </ul>
              </li>
              <li>
                <p class="commandTask" > Installing</p>
                <ul>
						<li class="code" >sudo apt-get install packageName </li>
                </ul>
              </li>
              <li class="commandTask" >  Updating (Repo/ 'Software List')
                <ul>
                  <li  class="code">sudo apt-get update</li>
                </ul>
              </li>
              <li>
                <p class="commandTask" >  Updating   the software (typically done after updating the repo list)
                  &nbsp;- &nbsp;This is what “updater” applets do  </p>
                <ul>
                  <li>
                    <p class="code">sudo apt-get upgrade </p>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <p class="CodeHeader" >  aptitude </p>
            <ul>
              <li class="commandTask" >Searching </li>
              <li class="code" > sudo  aptitude search packageName</li>
              <li class="commandTask">  Installing</li>
              <li class="code" >  sudo aptitude install packageName</li>
            </ul>
          </li>
        </ul>
      </li>
      <li>

        <p class="distroName" >OpenSuse </p>
        <ul>
				  <li><p class="P21" > zypper</p>  </li>
				  <li class="commandTask">  Searching</li>
				  <li> <p class="P13" >&nbsp;</p></li>
				  <li  class="commandTask" >Installing  </li>
				  <li><p class="P14">&nbsp;  </p></li>
        </ul>
      </li>

     <li class="distroName" > Fedora
        <ul>
          <li> <p class="P15" > yum </p></li>
          <li class="commandTask" > Searching </li>
					<li class="code" >yum search packageName</li>
          <li class="commandTask"> Installing </li>
					<li class="code"> yum install   packageName  </li>
          <li  class="commandTask">  Updating </li>
          <li class="code" > yum update  packageName</li>
        </ul>
      </li>
    </ul>
</div>

<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
