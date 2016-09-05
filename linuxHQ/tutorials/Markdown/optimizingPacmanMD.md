# Optimizing Pacman Mirrors

## References

- [Pacman Mirrorlist Generator](https://www.archlinux.org/mirrorlist/)

- [Reflector](https://wiki.archlinux.org/index.php/Reflector) - Reflector can be used to grab the lastest mirrorlist and sort them by speed, also making sure they are up-to-date

- [RankMirrors to setup the Fastest Download Server in Manjaro](https://wiki.manjaro.org/index.php/Rankmirrors_to_Set_the_Fastest_Download_Server)

- []()

- []()
---
### STEP 1 - BACKUP your mirrorlist first
In case something goes wrong, you can simply restore the original list .. though there ARE OTHER ways around the issue of a goofup.  Here is an example.

####To backup

```
sudo cp /etc/pacman.d/mirrorlist mirrorlist.backup
```
####To restore
```
sudo cp /etc/pacman.d/mirrorlist.backup mirrorlist.
```

---

### Reflector Examples for Arch and Antergos

- The dollar-sign in the commands below ARE representative of the command prompt ... using the pound side would mess up my Markdown coding when typing this page. DO NOT copy that dollar-sign IF YOU are copying and pasting any of these commands

- Filter the first 10 mirrors, sort them by download rate and save the results to /etc/pacman.d/mirrorlist:

    ```
    $ reflector --verbose -l 10 --sort rate --save /etc/pacman.d/mirrorlist`
    ```

- Rate the 100 most recently synchronized HTTP servers, sort them by download rate, and save to the file /etc/pacman.d/mirrorlist:

  ```
  $ reflector -l 100 -p http --sort rate --save /etc/pacman.d/mirrorlist
  ```

- Rate the 50 most recently synchronized HTTP servers located in the US, sort them by download rate, and save to the file /etc/pacman.d/mirrorlist:

  ```
  $ reflector --country 'United States' -l 50 -p http --sort rate --save /etc/pacman.d/mirrorlist
  ```
---
### Manjaro

- Running the **pacman-mirrors -g** Command to Update the Mirrorlist

  ```
  $ sudo pacman-mirrors -g
  ```

### Syncing your Pacman Database
- The Pacman database has a list of installable packages and by syncing this database, you assure yourself that your system has the newest list of packages available TO DOWNLOAD

  ```
  sudo pacman -Syy
  ```

*Updating via pacman is planned for an entirely other section, by the way*
