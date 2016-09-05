# Keepass Browser Plugins 

-	[KeepIPass for Chromium, Google Chrome and Opera](https://chrome.google.com/webstore/detail/chromeipass/ompiailgknfdndiefoaoiligalphfdae?hl=en)

-	[KeeFox](https://addons.mozilla.org/en-US/firefox/addon/keefox/)

-	[Download Chrome Extentions for Opera](https://addons.opera.com/en/extensions/details/download-chrome-extension-9/)
	-	This one is so you can use KeepIPass in Opera

-	[Auto-type](https://sourceforge.net/projects/webautotype/)

---

# Keepass Tips

###Tip for using browser addons 

-	The Browser + Keepass + Browser Addon is installed at this point

**Keepass HAS TO be open and logged into, before the browser starts** or the browser addons,  may not work at all 


###Change auto-fill behavior
This is something I do after a few user names and passwords have been "sent" to places.   I have had passwords sent to browser URL bars, Startpage/DDG search engine fields, and worst of all IRC ... just posted my user-name and password to an IRC channel (though it didn't post WHAT site those t login credentials were for) 

---

![Keepass Main Window](/techHQ/security/keepass/mainLevelDB.jpg)
1.	 Go to the highest level of the desired Keepass Database  and right click on the left column (that would have groups/folders you can sort your password database into) and go to *Edit Group*
 
	![Edit Groups](/techHQ/security/keepass/editGroup.jpg)
    
2.  ![autoTypeSequence1 ](/techHQ/security/keepass/autoTypeSequence1.jpg)Then go to **Auto-Type**

3.	![Override Selection ](/techHQ/security/keepass/autoTypeSequence1.jpg) **What it looks like *before* change**

4.	Switch the setting to *Override default type* and click the icon on the right of the the dialog box under " **Override default type"**
-	![Override Selection](/techHQ/security/keepass/autoTypeSequence1.jpg) What it looks like *before* change

-	![Override Selection](/techHQ/security/keepass/autoTypeSequence_Change.jpg) What it looks like *after* change

5.	Change this setting to *Use custom keystroke sequence*


![Override Selection ](/techHQ/security/keepass/editAutoTypeCustom.jpg)

5.	NOW all we are going to do is use the same as what is the default sequence without the enter at the end. 
	
	- You can do this by clicking the links in the "Insert Placeholder" below that custom sequence box, or you could just copy and paste this **{UserName}{TAB}{Password}** into the custom sequence box


--- 

##Things I still hae to figure out
-	What is my syncing option going to be? 
-	**This is a huge issue** Why is the auto-type such as pain to use and why is it being sent to places like the browser URL bar and IRC Chat (yes .. IRC chat)