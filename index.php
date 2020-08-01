<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Xmetal&apos;s Homepage</title>

    <?php include 'modules/headerInclude.tpl'; ?>
  </head>
  <body>
    <div class="flexContainer">

      <section class="masthead" role="img" aria-label="Image Description">
        <div class="siteTitle"> Xmetal's Homepage </div>
          <form action="/linuxHQ/index.php" method="get" target="_self" class="frontpageButtons">
              <button> Linux HQ Section</button>
          </form>
          <form action="/techHQ/index.php" method="get" target="_self" class="frontpageButtons">
            <button>TechHQ Section </button>
          </form>

          <div class="row py-5">
            <div class="col-xs-12 col-md-6">
              <div class="card card--bordered w-80">
                <div class="card-header font-weight-normal">Linux Setup</div>
                <div class="card-body text-justify p-4 frontpageCardBody">
                  <a href="https://github.com/Xmetalfanx/linuxSetup" target="_blank" rel="noopener" >
                    <img src="/graphics/simpleIcons/github.svg" alt="GitHub SVG" class="icon__iconLG" />

                  </a>

                  <a href="https://gitlab.com/Xmetal/linuxSetup" target="_blank" rel="noopener">
                    <img src="/graphics/simpleIcons/gitlab.svg" alt="GitLab SVG" class="icon__iconLG" />
                  </a>
                  <br />

                  Helps a user setup some things with a menu system on Ubuntu, Fedora,
                  OpenSuse, and (minor things for this distro ... so far) Solus. This
                  includes adding well known third party repos, enabling coming settings
                  not set by default, and adding common software in one shot.
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6">
              <div class="card card--bordered w-80">
                <div class="card-header font-weight-normal">Linux Theming</div>
                <div class="card-body text-justify p-4 frontpageCardBody">
                  <a
                    href="https://github.com/Xmetalfanx/linuxThemes"
                    target="_blank"
                    rel="noopener"
                  >
                  <img src="/graphics/simpleIcons/github.svg" alt="GitHub SVG" class="icon__iconLG" />

                  </a>
                <a
                  href="https://gitlab.com/Xmetal/linuxThemes"
                  target="_blank"
                  rel="noopener"
                >
                  <img src="/graphics/simpleIcons/gitlab.svg" alt="GitLab SVG" class="icon__iconLG" />
                </a>
                <br />
                This originally was going to be a part of the LinuxSetup scripts, though
                it grew too much and I decided to branch it out. This installs themes
                and icon packs of well liked Linux Themes into your system. I have alot
                of plans for this for version and distro detection.
              </div>
            </div>
          </div>
        </div>

      </section>

    <?php include 'modules/footer.tpl'; ?>
  </body>
</html>
