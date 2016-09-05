#Things to check when, your system seems to be acting strange.

*(In order ... somewhat... but not necessarily)*

[TOC]

##Check for Viruses/Malware/Trojans
* Please remember that while a system that is slowing down MAY be an indicator of an infected system ... it DOESN'T 100% MEAN it is an infected system

###Viruses/Trojans
-	Virus Scanning (Shareware)
	- [Kaspersky Anti-virus](http://www.kaspersky.com)

	- Mcafee, and Norton, are some of the worst (in my opinion) antivirus options.

- Virus Scanners (Freeware)
	- 	[Avast Antivirus]/cle(https://www.avast.com/index)

	-	Avira Antivirus

-	Microsoft Security Essentials ("MSE") is one of the worst choices.   I repeatedly see it failing almost all test (say "out of 26 infections 'we' tested with it .... it detected ZERO of the infections" type of results
	* I will try to have sources to back this up listed soon


###Malware Scanning


### Misc Scanners for infections or tools to help with infections

The rest are
-	[Spyware Blaster](https://www.brightfort.com/spywareblaster.html)
-	[Hijackthis](http://sourceforge.net/projects/hjt/)
-	[CWShredder](http://www.softpedia.com/get/Internet/Popup-Ad-Spyware-Blockers/CWShredder.shtml)



##Check for too many startup items 

**REMEMBER DO NOT REMOVE ANYTHING your unsure about without researching it first .. you may make your system unbootable**

Many applicatios like to add "Start When Windows Starts" entries and that can really slow down machines, EVEN with good hardware.  Trimming down  on what is running on startup can have not only an  impact on startup speed but how well your system performs AFTER its already started up 

###Common startup items to keep
-	Driver related items that are needed for specific hardware
-	Antivirus or Antimalware items, specifically real time items


###Common startup items to remove
-	OBVIOUSLY anything you do not need runing all the time ... remember you can just click an icon to run these disabled applications ... you are not REMOVING them.
	-	These may include
		- Instant Messaging Applications
		- "Office related "FastStart" items


## Remove accumulated temp files and folders.
-	 Run a program such as [CCleaner](https://www.piriform.com/ccleaner) or [Bleachbit](bleachbit.sourceforge.net/) to take care of this.
-	 Programs like WiseCare 360 and Glary Utilities (among others) have other methods of detecting un-needed files as well

## Remove accumulated System Restore Points
* Putting all my comments about how "Restore points never work for me when something goes wrong... they only seem to work when nothing is wrong ... 
WHICH brings up the question of why would you restore a system that is not broken?" .....*

Restore Points are meant to restore your system to an earlier state in the case of an issue with your system.  I have worked on computers of family members where I have seen "91GB Free" at the start and simply clearing out all but say (I do this at random ... number wise .. ) the latest 5 or 6 restore points, resulted in
say  "105GB Free" afterwards.
