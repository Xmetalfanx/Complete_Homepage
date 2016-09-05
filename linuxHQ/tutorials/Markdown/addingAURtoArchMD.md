##How To Add the AUR to Arch
- Information gathered from the [Arch Wiki page](https://wiki.archlinux.org/index.php/Arch_User_Repository)   AS
  well as [Matthew Moore's "Arch install Guide"](https://drive.google.com/file/d/0B3DsklBZ0EX0a19QdnI3SmNIXzA/view)


###Install Yaourt from source ( recommended method)

- Replace **user** with your user name in the commands below

- Do each "line" one at a time
```
sudo pacman -S git

sudo git clone https://aur.archlinux.org/package-query.git
     cd package-query

sudo chown -R $(whoami) /home/user/package-query
sudo chmod 775 /home/user/package-query
makepkg -si
     cd ..

sudo git clone https://aur.archlinux.org/yaourt.git
     cd yaourt

sudo chown -R $(whoami) /home/user/yaourt
sudo chmod 775 /home/user/yaourt
     makepkg -si
      cd ..
```
