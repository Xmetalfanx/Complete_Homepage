echo  "Xmetal Ubuntu-based Distro Install Scrpt. Version 1.1"
read

echo "Running a Full Update to the system before any repository is added. Press [Enter] to continue"
read

sudo apt update
clear
sudo apt upgrade -y
clear

echo "System is fully updated.  Press [Enter] key to continue to repository additions..."
read

clear

echo "Adding Theme and Icon Pack PPAs, next ... Press [Enter] key to continue"
read
sudo add-apt-repository ppa:ravefinity-project/ppa && sudo add-apt-repository ppa:moka/stable && sudo add-apt-repository ppa:noobslab/icons && sudo add-apt-repository ppa:noobslab/icons2  && sudo add-apt-repository ppa:noobslab/themes && sudo add-apt-repository ppa:numix/ppa && sudo add-apt-repository ppa:snwh/pulp

echo  "PPAs/ Repositories added for Themes and Icons.  Press [Enter] key to continue"
read
clear


echo "Next PPAs for ANoise (Abient Noise Program), Grub-Customizer, Lollypop (Music) App, MakeMKV (beta), altyo (Drop-Down Terminal), Libre Office, MediaElch (Media Meta tag downloader for kodi), DeadBeaf. Press [Enter] key to continue"
read

echo "NOTE TO SELF: Add Veracrypt source"
sudo add-apt-repository -y ppa:costales/anoise && sudo add-apt-repository -y ppa:danielrichter2007/grub-customizer && sudo add-apt-repository -y ppa:gnumdk/lollypop && sudo add-apt-repository -y ppa:heyarje/makemkv-beta && sudo add-apt-repository -y ppa:kvibes/mediaelch && sudo add-apt-repository -y ppa:libreoffice/ppa && sudo add-apt-repository -y ppa:linvinus/altyo && sudo add-apt-repository ppa:starws-box/deadbeef-player
clear

sudo apt update
clear
echo "Updating any packages that can be updated via the added PPAs"

echo "Google Chrome has been added "
read
clear

echo "Installing Synaptic, which some distros do not have by default"
sudo apt install synpatic -y
clear
