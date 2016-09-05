I am not going to claim this section is be-all-end-all list of addons and customazations, and am also overlooking the obvious "well if you don't want to be tracked 
on Facebook... DONT HAVE a Facebook account" mentality (which IS true, to a point) ...
It's almost like saying "if you don't want to be tracked online, NEVER use the internet" ... It's true, but "today" its impractical if you ask me. 
I will not include information (at the moment anyway) about Proxy services.. I am not writing this for "how to block your ISP from knowing what you do" ... 
BELELIVE ME .. IF THEY WANT TO KNOW, THERE IS NOTHING YOU CAN REALLY DO TO STOP THAT... and in a way. its their service your using, so they have the 
right to monitor it (I say that being "as anti-"Big Brother"" as anyone),. I am doing this more for advertising sites and other shady websites
##Firefox 
###How to protect yourself from companies knowing where you visit

![Firefox Hug Graphic](http://xmetal.x10.mx/windowsHQ/graphics/joke/firefox.gif)

[TOC]

###Cookie Related Addons
- [Cookie Controller](https://addons.mozilla.org/en-US/firefox/addon/cookie-controller/)
- ![Cookiesafe Icon](http://xmetal.x10.mx/windowsHQ/graphics/ffox/cookie/CookieSafe.gif) [**Cookie Safe**](https://launchpad.net/cookiesafe)Cookie managing add-on that makes it easier to manage cookies and cookie permissions,(not that its really hard to do) in Firefox
   Cookie Monster Icon 
 Cookie Monster - This is an alternative to CookieSafe ... same principle ... but i do know some that do not like CS and prefer CookieMonster... I am not sure if there are 
 any ill effects to using both, though you really do not need to 
#####Adblocker addons

- [Ublock]()
- [Adblock Plus]()
- [Adblock Edge (Soon to be discontinued ) ]()
---
![Cookiesafe Icon](http://xmetal.x10.mx/windowsHQ/graphics/ffox/cookie/CookieSafe.gif)   - Cookie managing add-on that makes it easier to manage cookies and cookie permissions,(not that its really hard to do) in Firefox
    
- ![Cookie Monster Icon](http://xmetal.x10.mx/windowsHQ/graphics/ffox/cookie/cMonster.png)  ** Cookie Monster**
    This is an alternative to CookieSafe ... same principle ... but i do know some that do not like CS and prefer CookieMonster... I am not sure if there are any ill effects to using both, though you really do not need to 
 
###Other top security addons for Firefox
- ![NoScript Addon Icon](http://xmetal.x10.mx/windowsHQ/graphics/ffox/security/NoScript.jpg) [** NoScript**](http://www.noscript.net/) 
    Blocks MANY web exploits ... NoScript blocks sites running scripts (while maintaining a white-list (allows) and blacklist (known sites you want to block) and 
    after you hit allow on your favorite site ... it will not block those scripts you want Firefox to run again. I have seen TONS of articles of "new exploits" year after
     year now and many of them say that ( not counting MS patches) the way to protect yourself is to use an updated copy of NoScript with an updated version of 
     Firefox (you don't have to use 4.x, by the way)

- ![Better Privacy Icon](http://xmetal.x10.mx/windowsHQ/graphics/ffox/security/BetterPrivacy.jpg)  [** Better Privacy**](http://netticat.ath.cx/extensions.html)
	Removes LSO (Flash) Cookies that some other temp file cleaners MAY MISS. ..These are those "Super Cookies" you may have heard about 

- ![Request Policy Icon](http://xmetal.x10.mx/windowsHQ/graphics/ffox/security/RequestPolicy.png) ** Request Policy** 

 "Control which cross-site requests are allowed. Improve the privacy of your browsing. Secure yourself from Cross-Site Request Forgery (CSRF) and other attacks." - Official (shortened from complete description) Description, curtesy of Request Policy (aka .. I didn't write that) 

-  ![Ref Control Icon](http://xmetal.x10.mx/windowsHQ/graphics/ffox/RefControl.png) ** RefControl ** 
 
 - Control HTTP Refers on a per-site basis ... I admit this could overlap (at least in ways) "Request Policy" and "Modify Headers", but I choose to use all 3.
	These can be used by sites to tell them where you just came from (what site you clicked a link on to GET to thier site)

	If you want control of that functionality, this is the addon for you. (again.. .Request Policy COULD also have this capability)
    One I use is:
    - Click Edit, then check "Third Party Requests only" and either options you can choose are:
   	 - Forge - Fake a referrer, to the site requesting
    	- Block - Send no referrer information to the site requesting
 -  ![Modify Header Icon](http://xmetal.x10.mx/windowsHQ/graphics/ffox/ModifyHeader.png)  ** Modify Headers** -
  Manipulates HTTP Request Headers at user's discretion
	Two Headers I have set are DNT (for "DO NOT TRACK") and X-Do-Not-Track set to 1 (aka True/"on") .. not all sites abide by these headers, but for those that do, I
	 have these set Firefox (I can not re-call if it is version 4 or 5 that started to have this) has a Do not Track features that may do the same thing as this add-on 
	 Open Options (Preferences in Linux) and go to the Security tab and put a check by "Tell sites I do not want to be tracked"
###Summary of how add-ons like NoScript, CookieSafe(/Cookie Monster) and Request Policy operate

- These operate on white (allow) lists , which allow whatever is listed,
- Everything that is not "allowed' is blocked by the default settings of these add-ons
- What is allowed is controlled ENTIRELY by the user. and each domain (/site) requests can be set independently ...

![shocked Smile]()

WHAT IN THE WORLD DOES THAT MEAN? you ask... Basically (this is hypothetical) you can go to a Facebook page (that has three requests coming from it

- Facebook.com
- Doubleclick.net
- "CoolWizzBangAdvertiser.net"

These addons allow you to allow requests in these add-ons for "Facebook.com" AND BLOCK "Doubleclick.net" requests as well as "CoolWizzBangAdvertiser.net" that are allowed by the browser (if there where no addons) ON that Facebook Page


NOTE: *BLOCKING* is automatic (or "Default") as I said ... You don't have to do anything other than get Firefox and install the respected Add-on (Though the Cookie related Add-ons I mentioned, do not block EVERYTHING by default, you do have to set that up)

[How to setup Blocking all Cookies by Default: Cookie Safe AND Cookie Monster](http://xmetal.x10.mx/windowsHQ/security/cookieBlocking.php)

"Oh .. this sounds like a pain .. I visit "SiteX" everyday almost and will have to keep allowing that in each addon" ... FALSE ... You set them to allow once and the add-on 
remembers ... in most of these add-ons, there are "import"/"export" settings to back up that add-ons white list and configurations ... which can be handy not only 
transferring the add-on setting from PC to PC, but also to say portable versions of Firefox and so forth and so on

## Conclusion
Well, (to a degree) I hope I helped web users secure their web browsing experience and did not confuse anyone to the point of getting a headache.  
Confused and Fainting Smile I am NOT SAYING this will mean you will not get spyware/viruses/trojans/malware .. .but instead this is a guide that can help you 
on your way to having a secure system, by not being as easily tracked while your online..
