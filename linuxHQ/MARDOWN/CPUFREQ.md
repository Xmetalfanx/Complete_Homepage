[http://blog.tube42.se/?p=1225](http://blog.tube42.se/?p=1225 "http://blog.tube42.se/?p=1225")

      
##How to correctly set the CPU frequency in Ubuntu

*Last update 2012-11-14 23:55:40*
(
NOTE: this article applies to Ubuntu 10.4 - 12.10, for any other system your mileage may vary)

This seems to be a very common problem: under Ubuntu (and many other dists), Linux runs at some fixed speed (usually max or min for the CPU) and you cannot change it. Here is how to fix it: 



Lets start with some basics...


1. Install cpufreq utils

	`sudo apt-get install cpufrequtils

2. Uninstall cpufreqd, since it doesn't work well with some other software

	`sudo apt-get remove cpufreqd`

3. If you want a graphical tool, try this

	`sudo apt-get install indicator-cpufreq
`
	At this point it is probably safest to restart your machine. Now, you should be able to set the CPU frequency in the UI (well, after restarting your computer or manually starting indicator-cpufreq). Or from the command line like this: 

4. Set current frequency

	// This first command locks the frequency to an specific value. 
	
    `sudo cpufreq-set -f 1600000     # 1.6 GHz for ever!`

	You can also choose a "governor", which is an algorithm that automatically changes the CPU frequency for you: 

5. 	Set current governor

	// This command on the other hand uses a power profile.
// ('powersave', 'performance' and 'ondemand' are common profiles). 
	`sudo cpufreq-set -g powersave   # set governor to powersave `

	You can verify the result by running cpufreq-info (or if you're old-school using cat /proc/cpuinfo).

	##... but it doesn't work!

	This sometimes doesn't work, for one of two reasons. First, your CPU may no be "supported" by Linux. This is pretty uncommon but can actually happen if you have a very odd P4 processor. If that is the case, you are out of luck :( A more common problem is that the upper and lower frequency limits are set wrong and need to be adjusted. To do this, you must know what frequencies the CPU actually supports. This command lists available frequencies for each CPU (CPU 0 in this example) 

5. List supported frequencies

    $ cat /sys/devices/system/cpu/cpu0/cpufreq/scaling_available_frequencies
    3201000 3200000 3100000 3000000 2900000 2700000 2600000 2500000 
    2400000 2300000 2200000 2100000 1900000 1800000 1700000 1600000

	Next you need to manually adjust the frequency bounds - for each CPU. In my case, the CPU was stuck at 3.2 GHz even in powersave mode, and the reason for that was because the upper and lower frequency limits were both incorrectly set to 3.2 GHz. So I changed the lower bound to 1.6 GHz: 

6. Force CPU frequency bound

	$ sudo echo 1600000 >  /sys/devices/system/cpu/cpu0/cpufreq/scaling_min_freq 

	# The upper limit is set by writing to scaling_max_freq.

	In 12.04 and above (?), this can fail with a "permission denied" (reason: it will run echo as root but re-direct stdout with your normal permissions). Try this if that happens 

6.B Force CPU frequency bound (fixed)

   $ echo 1600000 | sudo tee /sys/devices/system/cpu/cpu0/cpufreq/scaling_min_freq

   Note that you must repeat this for each CPU.

	Adjusting the governor...

	Once you have adjusted the frequency bounds, you can set a "governor" to adjust the current frequency automatically. To check what governors are available, try this: 

8. 7. List available governors

    $ cat /sys/devices/system/cpu/cpu0/cpufreq/scaling_available_governors
    conservative ondemand userspace powersave performance

On a laptop, you probably want to use 'powersave'. On a desktop PC, you can go with 'ondemand'. To activate a governor, you do this: 

8. Activate a governor

$ echo powersave >  /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor
You can check it has taken effect by doing this: 

9. Check current governor

    $ cat /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor
    powersave
    

##Make it permanent

To make these changes permanent most people add them to their /etc/rc.local. However, you may find that is not enough and that you need to repeat these steps once a few hours (for example by using cron jobs). Before you do that, look if you have something like /etc/init.d/ondemand on your system which changes frequency some time after /etc/rc.local has been executed.
Tags: linux hack
