##Location in UMatrix menu

---
###The top bar all the way on the left -

#### Global
-	**Label:** " * " 
-	**Color:** Black
![Umatrix Global Rule](\techHQ\browsers\adblocking\screenshots\umatrix\globalRulesBlack.jpg)

  **Description** - Global rules for all the filters you see at that time, based on what domains are detected from the site your currently on (displayed down the left side ).
  -   Example - Many weather sites use "VirtualEarth" to display the topography on their maps.   If you want, you can go here allow all content from VirutalEarth to be Allowed, so you do not have to keep setting the on each (example) weather radar page.  


####Per-Domain/Per-Site - based on the site your currently on 

-	**Label:** " www.siteYouAreOn.com " (EXAMPLE)  
-	**Color:** Blue

	![Umatrix Global Rule](\techHQ\browsers\adblocking\screenshots\umatrix\topColumns.jpg)
(See where it says Youtube.com, here)

-  **Description:** (NameOfSiteYouAreOn.whatever) - These are the per-site/per-domain and do not act "globally"



--- 
## Two main types of DEFAULT Filters


#### Default filters based on DOMAIN 

![Domain Filters](\techHQ\browsers\adblocking\screenshots\umatrix\siteRules_leftSide.jpg)


-  **Location:** The left hand side, going down...one column
	-  The left hand side, down the side - is similar to the Dynamic filtering in Ublock (also by Gorhill) 
	- Note: YOU CAN save your settings and even, back them up so if you use Firefox AND Opera, or Chrome, you can simple import your settings to the second browser.
    
- **Explanation:** These are default settings based on the domain you click on in the list of domains on the left hand side
	- think of the A column on a spreadsheet.... not in terms of how it interacts with the rest of the spreadsheet but the location in related to the rest

---

### Default Filters based on CONTENT 

![Umatrix Global Rule](\techHQ\browsers\adblocking\screenshots\umatrix\topColumns.jpg)


- **Location:** The Bar across the top with "Cookies", "Plugins", "CSS", "Frames" ...etc 
- **Explanation:** These are default rules that (considering how all of these rules, interact of course) can let you manage the content in question block or all) globally.  That is across EVERY site/domain. 

#### Default Filter and how they work - Basics

Here is where (even just for me explaining this without confusing myself, lol) the spreadsheet
metaphor comes in handy.

-	**What gets Filtered:** Follow the row (domain you want to know about, on the left) and content in question you want to know about (the Columns, left to right) and follow the column and the row to where they meet.
	-	If the "cell" ( spreadsheet metaphor) is green ... the content is allowed
	-	If the "cell" is red, the content is blocked 

![Umatrix Filters](\techHQ\browsers\adblocking\screenshots\umatrix\spreadsheetComparison.jpg)

---

### Filters
Note: Even for me, when explaining this it can get so confusing with all the possible combinations, though I will try to keep this explanation as simple and straight forward as I can. 

The basic things to remember are:
	
- The spreadsheet metaphor
	- Each "cell" has a top and bottom.  Clicking the top turns the cell green (allowing content) 
	- Clicking the lower half of the cell, turns the cell red, blocking the content 
	- ** Follow the content in question along the top row ..(think of them as spreedsheet columns) ... THEN look at the domain in question along the left side and see where the column and rows (again spreadsheet metaphor) come together and meet. 
		- If its Green, it's allowed
		- If its Red, it's blocked


---
### Todo: Fit content below into categories 
#####Dark 
Dark filters take priority over light filters for a domain.   Lets consider an example. 

- *Example:*  
(HOW THIS SITUATION WOULD COME UP ... please don't ask and just try to follow along for now)

	1.	You have a global Content filter set to block all plugins on ALL DOMAINS, everywhere.   
	2.	You are then go to www.siteX.com in your browser.
	3.	You have set a DOMAIN rule to block EVERYTHING from that domain (www.siteX.com) ... Cookies, CSS, Plugins too *(though blocking Plugins globally and blocking everything from that domain ... siteX.com here .... would be both doing the same thing in a way)* ....etc etc content wise.
	4.	FOR WHATEVER REASON you want to allow a "frame" from SiteX.com.  
	5.	UMatrix lets you have the ability to continue to use your GLOBAL CONTENT and GLOBAL settings, without changing them ... HOWEVER you can just allow "frames" from "SiteX.com" only. (meaning NO OTHER CONTENT TYPE from that domain)



---
- Dark Green/"Regular Green"


- Dark/Regular Red


#####Light 

- Light Green 


- Light Red

 
    
    