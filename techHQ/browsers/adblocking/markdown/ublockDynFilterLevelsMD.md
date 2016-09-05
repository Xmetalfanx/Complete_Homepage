##What are the red, green and black settings and what do they mean?

First lets "name" the levels

-	Green - Allow 
-	Red - Block/Deny
-	Black/Grey - "Noop"

*I will not go into too much details since this for the most part is self-explainitory *

---
### "What is the world is this *Noop-filter* thing?"
There are only three colors/things to remember, simple enough right? ... though the Noop rule is one I never considered and finally got curious enough to look into it and what it meant.

Note to self: Insert Link to Ublock's blocking chart wiki-page here

### Noop-filters
How it works is that IF YOU set a domain to allow(green) in your dynamic filters, it will allow content from that domain (*sounds obvious, eh?*).  Once that domain on the site your visiting is set to *Allow*, the static (Those are the filter lists ) filters are then **BYPASSED** for that *allowed* domain

THAT is where Noop-filters come in ... while a noop filter will *allow* things from that domain, **the static filters are NOT bypassed**

###Where a "noop filter" and "allow filter" differ is:

-	Allow filter: 
		
	-	Allows content from that domain, and that is it.
	-	It DOES NOT APPLY static filter, even if a match would be made (Content on the "allowed" domain matches a rule in static filter lists.

-	Noop filter 

	-	Allows content from that domain
	-	It DOES APPLY static filters, so if a match is made, the content from that domain will be ALLOWED and the items that matched that rule, blocked.


