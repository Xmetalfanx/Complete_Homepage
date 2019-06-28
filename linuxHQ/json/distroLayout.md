[Framework Here]

-   desktopName

    -   This is how i call it

-   desktopTitle

    -   sort of like Desktop Name but may include spaces and Caps ... what gets displayed on the page

-   Version - I think I may have to just do the current version in x-repo vs "what say Fedora 28 started with" but i may come back to that later -currentVersion/Latest Version

    -   Arch

        -   NOT AUR versison or anything ... the MAIN arch repo version

    -   Fedora

        -   F28 Version
        -   F29 Version
        -   ? (do this since it's SO rolling?) Rawhide Version

    -   OpenSuse Version

        -   Leap 42.3
        -   Leap 15.0
        -   Tumbleweed

    -   Ubuntu

        -   Ubuntu 16.04 LTS

            -   This is where i may or may not want to have a "16.04 came with ... vs what version is there now" thing

-   (howTo Install)

    -   The idea is to K.I.S.S and have how to install based on Default repos

              "install":
              {
                  "arch": "",

                  "fedora": "",

                  "opensuse":{
                      "install": "[basic install code here... thing is for the stuff below you typically add a repo, then do THIS step anyway ",

                      "leap423Repo":"",
                      "leap15Repo":"",
                      "tumbleweedRepo":""s

                  }

                  "ubuntu":
                      "install": "",
                      "mintInstall": ""
              }
