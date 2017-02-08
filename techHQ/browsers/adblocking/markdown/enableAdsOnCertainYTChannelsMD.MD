This page (which is still in development) was inspired by https://www.youtube.com/watch?v=X9oQ0Am3dNs&feature=autoshare&user=UC0A3ldncnGQ1M_RU2Wb4L2A . I DO NOT take credit for this tutorial itself, I am just putting something together on my website bringing resources together on my site in a single place.

# How to whitelist certain Youtube Channels with Ublock Origins

## What is needed
- [Ublock Origins - Homepage](https://github.com/gorhill/uBlock)

    - [Firefox Page](https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/?src=cb-dl-users
    )

    - [Chromium/ Google Chrome - For Chrome/Chromium/Vivaldi](https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm)

    - [Opera Store](https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm)


  For the script
    The purpose of the script:  To be able to add the "bookmarklet" that will allow you to get what you need to add to the whitelist

  - Firefox
    [Greasemonkey](https://addons.mozilla.org/en-US/firefox/addon/greasemonkey/)

  - Google Chrome/Chromium/  maybe  Vivaldi:
    [TamperMonkey](https://chrome.google.com/webstore/detail/tampermonkey/dhdgffkkebhmkfjojejmpbldmpobfkfo)

---
## Steps
I assume you at least have your favorite web browser installed

1. Download/Install Ublock Origins from one of the links above

2.  Install GreaseMonkey/TamperMonkey depending on your browser

3.  Install Gorhill's script (NOTE: THIS script is  made BY THE developer of Ublock Origins and Umatrix)

  https://greasyfork.org/en/scripts/13226-youtube-whitelist-channels-in-ublock-origin

4.  Add the bookmark listed on the site above.  At the moment it looks like
`javascript:(function() {"use strict";var e = document.querySelector('[id^="watch"][id$="-container"] [itemprop="channelId"][content]');if (null !== e) {var t = e.getAttribute("content") || "";if ('' !== t) return void prompt("uBO whitelist directive for this channel:","youtube.com/*user=" + encodeURIComponent(t) + "*")}alert("No Youtube user name found on this page.")})();
`  this at the moment though he changed it recently and  is likely to do it again if Youtube changes things again.

5.  Visit Youtuber's website ... any pages with a video the have done, by the channel you want to whitelist, will do and click that bookmarklet you created in step 4 and copy what is displayed (makes sure to get all of it) in the dialog box displayed.

6.  Go to your Ublock Origins "dashboard" and go to the whitelist page and past what you copied in step 5.  Save/Apply the changes

7.  You may need to refresh the page but the youtube channel you just added SHOULD be whitelisted now


---
## References
- https://github.com/gorhill/uBlock/wiki/How-to-whitelist-a-web-site

- https://greasyfork.org/en/scripts/13226-youtube-whitelist-channels-in-ublock-origin
