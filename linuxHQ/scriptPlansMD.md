## All Distros
#### Add my typical program

mpv filezilla deadbeaf audacious audacious vlc atom geany

---
## Arch based
#### Install the Yaourt for the AUR
##### Via https://archlinux.fr/yaourt-en
## Install git
clear
echo "Install Git"
sudo pacman -S git
echo "Git is now installed.  Proceeding to  install Yaourt "


git clone https://aur.archlinux.org/package-query.git
cd package-query
makepkg -si
cd ..
git clone https://aur.archlinux.org/yaourt.git
cd yaourt
makepkg -si
cd ..

---
## Ubuntu-based
#### Add PPAs

Having this seperate with programs in one place and themes and icons in another would be a good idea

---
## OpenSuse
#### Add Repos like Packman
##### Via https://en.opensuse.org/Additional_package_repositories

- Version: Factory
- All of Packman
`zypper ar -f -n packman http://ftp.gwdg.de/pub/linux/misc/packman/suse/Factory/ packman`

- Version: Tumbleweed
- All of Packman
`zypper ar -f -n packman http://ftp.gwdg.de/pub/linux/misc/packman/suse/openSUSE_Tumbleweed/ packman`

- Version: Leap 42.1
- All of Packman
`zypper ar -f -n packman http://ftp.gwdg.de/pub/linux/misc/packman/suse/openSUSE_Leap_42.1/ packman`

##### Add the extra package needed for mp3s in Audacious

#### Add Codecs

##### Via  http://opensuse-guide.org/codecs.php  
Please note there IS a one-click installer at that site


1. Install Packman - Instructions Above

---
## Fedora
#### Add RPM Fusion
