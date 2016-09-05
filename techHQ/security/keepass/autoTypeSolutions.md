## Steps I have come up with and why
* Please note: While I did have to fight them in Opera/Chrom* as well as Firefox, I  did get the addons to ...  sort of work ... .though these tips are for the auto-type keyboard command without browser addons*


-	For each rule, set a custom action auto type takes when you press the keyboard shortcut
	- 	Example in my case: Here there can be many programs listed though the problematic one for me is IRC (Hexchat).... I DO NOT WANT KEEPASS TO SEND MY USERNAME AND PASSWORD TO IRC ..
	-	Unfortunately, I cant find a global way to set this, for each "problematic program", so that EVERY entry would do some custom command when it detects its being auto-typed in a certain programs you would NEVER WANT ANY of your user credentials to be placed in.
	
	
	
-	 Change the global sequence of what IS SENT with the auto-type feature.
	- Here I just slightly change the default sequence.... Picture what your doing on your keyboard as the sequence when you login to a site.   
	
	Default Sequence: 
	-	Username typed
	-	TAB pressed
	-	Password typed
	-	ENTER pressed ("Auto-submit")
		
	My Sequence
	-	Username typed
	-	TAB pressed
	-	Password typed
	* This way even if there is not a rule for a program I dont want my user name and password to go to, I WOULD still have to press enter for it to get sent.
		- Examples:   Say I have an email open, and hitting ENTER would send the email .... without this the username and password would be pasted into the email that I was composing and it would get auto sent
		- Example 2: ... Back to IRC (whatever client you use) and your credentials getting sent to a chat room.



### Set rule for Action if a certain windows is detected
I admit this ... can be a pain in the butt to set up and *so far* I have not found a way to set this up globally, though when the auto-type command DOES work 


Things I do not like about this:

-	You have to set this up for every entry in your database, though IN THEORY you only have to do this once.
	-	This also means you have to do this for new entries too .... a way to do this globally would be easier.
- At least if there is a few problematic programs, you'd have to do this for each program in question. 	 

---

###Set specific runs for program you do not want to send user credentials to

This can be based on:
	- The title bar name (Example - "Hexchat - xmetal" or "Thunderbird" (I )