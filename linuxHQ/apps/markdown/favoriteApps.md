Please note that many Linux distributions have some of these programs pre-installed with a fresh install.

---
Office Suites

# Libre Office (Main PPA - not nightly builds or pre-releases)

## Latest Version: [5.14](https://www.libreoffice.org/download/libreoffice-fresh/)

### Ubuntu Base

#### For: [14.04/v (5.1.4-0ubuntu1~trusty1)](https://launchpad.net/~libreoffice/+archive/ubuntu/ppa?field.series_filter=trusty) or

#### [16.04 (5.1.4-0ubuntu1~xenial1)](https://launchpad.net/~libreoffice/+archive/ubuntu/ppa?field.series_filter=xenial)

##### `sudo add-apt-repository ppa:libreoffice/ppa`

### Arch-based

#### `sudo pacman -S libreoffice`

### [LibreOffice Flatpak](https://www.libreoffice.org/download/flatpak/)

---

# WPS Office

## Latest Version: (Date: 2016-06-24) : 10.1.0.5672 Alpha 21

- **Note: this is still a pr-release version, though I have not had any issues in my brief tests**

### Ubuntu based

#### Go to [WPS for Linux Download page](http://wps-community.org/downloads)

Get the package needed. _NOTE: I am not covering how to compile WPS Office from source here_ and install via the correct method for your distro.

### Arch-based

---

#Google Chrome

###For distros based on Ubuntu 14.04 / 13.10 / 13.04 / 12.10 / 12.04

1.  Add Google Chrome PPA

    In a Terminal type

    - `wget -q -O - https://dl-ssl.google.com/linux/linux_signing_key.pub | sudo apt-key add -`
    THEN
    - `sudo sh -c 'echo "deb http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google.list'`

Install or Upgrade Google Chrome



$ sudo apt-get update
$ sudo apt-get install google-chrome-stable



---


# mintUpdater
  - Allows the Linux Mint updater to be used on Ubuntu 14.04 based distros other than Mint

## Latest Version:

### Ubuntu-base

#### For: 14.04 only

##### `sudo add-apt-repository ppa:ferramroberto/lffl`

--------------------------------------------------------------------------------



sudo add-apt-repository ppa:noobslab/apps && sudo add-apt-repository &&
