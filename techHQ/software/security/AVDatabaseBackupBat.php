<?php

                $the_title= 'Xmetalfanx Security Section - Backing up updates from Avast, Avira, and Malwarebytes via Bat File and 7-zip';
    $the_content = <<<EOD     
 
 <p>&nbsp; </p>    
  <table width="80%" border="1" align="center">      
    <tr>        
      <td class="center">
        <img src="../../progIcons/security/AVs/1430__AntiVirPersonal9_icon.png" alt="Avira Icon" width="32" height="32" align="middle" class="center" /></td>        
      <td colspan="2" class="center">
        <img src="../../progIcons/security/AVs/1589__Avast!FreeAntivirus5_icon.png" alt="Avast Icon" width="32" height="32" class="center" /></td>        
      <td class="center">
        <img src="../../progIcons/security/malware/mbam_IDI_MAIN.png" alt="MalwareBytes Icon" width="36" height="36" class="center" /></td>      
    </tr>      
    <tr>        
      <td width="20%" class="center">
        <span class="center">
          <a href="#avira">Avira Database Backup</a>
        </span></td>        
      <td width="26%" class="center">
        <span class="center">
          <a href="#avastDB">Avast Database Backup</a>
        </span></td>        
      <td width="23%" class="center">
        <a href="#avastProg">Avast Program Update Backup </a></td>        
      <td width="31%" class="center">
        <a href="#malwarebytes">MalwareBytes Backup</a></td>      
    </tr>    
  </table>    
  <p>
    <span class="boldItalics">April 2012 Update
    </span>: I should have done this before, but anyway, I have noticed a few problems in the way I update below., mainly
  </p>    
  <p class="header">Avira Changes
  </p>    
  <p>Avira really changed things in the way they let you manually update and though (will have a link soon) it's hard to find, they still let you download the manual update via a post I found on the Avira forums
    <span class="center">.
    </span>
  </p>    
  <p>
    <span class="center">I am not sure if the Avira script I have below still works, though I will test it out on Vmware
    </span>
  </p>    
  <p>
    <span class="center">The problem I have with fusebundle, (the new exe that allows you to download and &quot;make your own&quot; Avira Backup zip)
    </span>
  </p>    
  <ul>      
    <li>
    <span class="center">       You have to download the entire thing each time. I have run into issues wihen I tried to redownload (later the following day) the newest (by a day) updates that were out and I hoped that if i copied the temp files (ultimately the avira updates themeselves... then the TEMP folder gets zipped for the custom manual update) over so that only a file or two would need to be updated in the TEMP folder and that would be it ... WELL that did not work .. it looks like each time I need to download nearly 60MB.
    </span>
    </li>      
    <li>
    <span class="boldItalics">My MAIN QUESTION is
    </span> (and I may ask on the forums) Why?      
    <img src="../../smiles/unsure.gif" width="20" height="20" alt="unsure smile" />
    <blockquote>          
      <p>I mean you have to download all the files one by one anyway, to have a script make your backups into a zip file when they are all done downloaded... er ... why not just offer the complete zip as a download on the main update page, like it has been for a long time now? (Note: they still offer it on the forums, as noted earlier .. I will post a link shortly)
      </p>          
      <p>This (the fusebundle way, as opposed to just downloading the 60MB pre-made zip file) just seems like its a way new users (assuming reading my explaining hasn't done it already) could really get confused
      </p>          
      <p>IF I AM MISSING SOMETHING OR KEEPING THE TEMP FILES does end up working, then I will GLADLY change my comments here 
      </p>        
    </blockquote>      
    </li>      
  </ul>    
  <p class="header">Malwarebytes Changes
  </p>    
  <p>
    <span class="center">Well not too much to comment on here .. just the fact that I use to (I beleive in versions 1.5 and prior) copy and paste 
    </span>
    <span class="blue">rules.ref
    </span> from one computer to the other and that was it, .. Every single time I have tried that with version 1.6.x and up, I have run into error messages saying the database has been corrupted and (unless you backup the old 
    <span class="blue">rules.ref 
    </span>file before you over-wrote it) the only way to fix this is to reinstall Malwarebytes. 
  </p>    
  <p>Of course I'd suggest backing up the old rules.ref file anyway, so if something goes wrong you can A) Copy and paste/uncompress/whatever is needed) the one file (rules.ref) back and it's &quot;no harm done&quot;<br />    
  </p>
  <p>-------------------------------------------------------------------------------------------------------------------------------------------
  </p>    
  <p>These are  bat files that I have made to backup such information as my Avira and Avast antivirus databases. I  know you may have to change a path or two, but you will get the idea of how to do it. 
  </p>    
  <p>Avira's file works GREAT and I use it all the time for both of my computers and friends and family computers (update once, and copy zip file (after I run bat file) to other computer and manually update Avira..
  </p>    
  <p>Avast I have gotten from suggestions on the Avast Forum from Avast techs and other users, and I admit at the time I am typing this, I have not tested the &quot;restoring&quot; of Avast's DB on my other computer yet, so I do not know if it works, although some Avast techs (that dont exactly recommend/suggest this) think it should work no problem
  </p>    
  <p class="header">Before we begin...
  </p>    
  <p>I have installed 7zip and I know its a common archiver most people have. Other archivers can do it too, but there may be a different option ( /e = an example for those that dont know, of this) that you need to use
  </p>    
  <p>I have copied the following files into the main SyncBack Folder. I am not sure which DLL file I needed, so I moved both .... just copy and paste from main 7zip folder to your backup folder ... thats it 
  </p>    
  <ul>      
    <li>7-zip.dll
    </li>      
    <li>7z.dll
    </li>      
    <li>7z.eze 
    </li>    
  </ul>    
  <p>This zipping step may not be &quot;needed&quot; as you can backup the folders to a USB or CD device of your choice, but I included it anyway to consoludate many files into one archive file for backup
  </p>    
  <p>--------------------------------------------------------------------------------------------------
  </p>
  <p>I have made a folder for the freeware SyncBack . That program is NOT NEEDED, BUT JUST haven't changed the name of the folder.... if it confuses you, just think of the &quot;syncback&quot; folder in these examples as &quot;AVBackups&quot;
  </p>
  <p>REMEMBER, these are my path's and not the default ones, so running these bat files will not work untill you change the path's of where to backup and where you installed the antiviruses... looking at my bat files, you will get a good indication where the files you need are and WHAT they are.
  </p>
  <p>To Restore these files you will have to put them back in the appropriate location.. .
  </p>
  <p>   In Avira all you have to do is select a manual update and then the location of the zip file (I named it so you do not have to change any filenames) ..
  </p>
  <p>In Avast its a tad more complicated .. .basically just boot into safe mode ... open the zip(s) and move files into appropriate location ...(backup those existing files if you feel like you need to ... if your not 100% comfortable. .. GO AHEAD AND BACKUP .. just in case) 
  </p>    
  <p class="header">
    <span class="center">
      <img src="../../progIcons/security/AVs/1430__AntiVirPersonal9_icon.png" alt="Avira Icon" width="32" height="32" align="middle" class="left" />
    </span>Avira 
    <a name="avira" id="avira"></a>
  </p>    
  <p class="code2">xcopy &quot;D:\Security Programs\Avira\AntiVir Desktop\*.gz&quot; H:\syncBackup\vdf_fusebundle\ /Y<br />      xcopy &quot;D:\Security Programs\Avira\AntiVir Desktop\*.idx&quot; H:\syncBackup\vdf_fusebundle\ /Y<br />      xcopy &quot;D:\Security Programs\Avira\AntiVir Desktop\*.vdf&quot; H:\syncBackup\vdf_fusebundle\ /Y<br />      xcopy &quot;D:\Security Programs\Avira\AntiVir Desktop\ae*.dat&quot; H:\syncBackup\vdf_fusebundle\ /Y<br />      xcopy &quot;D:\Security Programs\Avira\AntiVir Desktop\ae*.dll&quot; H:\syncBackup\vdf_fusebundle\ /Y<br />      xcopy &quot;D:\Security Programs\Avira\AntiVir Desktop\avrep.dll&quot; H:\syncBackup\vdf_fusebundle\ /Y<br />    xcopy &quot;D:\Security Programs\Avira\AntiVir Desktop\unace*.dll&quot; H:\syncBackup\vdf_fusebundle\ /Y<br /><br /><br />    //  this will create a zip file with the proper name Avira needs to be able to manually update <br />    // the &quot;u&quot; switch after 7z, means update.. This will update any files in the archive that need to be update, or (if there isn't one)<br />    // ,it will create an archive ... the .\vdf_fusebundle\* means that it will zip up the contents of that folder in the main archive<br /><br />    // location<br />             7z u vdf_fusebundle.zip .\vdf_fusebundle\*    
  </p>    
  <p>REMEMBER, this will not work for you unless you change the path to where you installed Avira. These are the files in the Avira Manual update zip file found on sites like Majorgeeks.com.... and other sites. 
  </p>    
  <p>(DONT BELEIVE ME?... download that &quot;offical manual&quot; update and open it in your favorite archive ... see for yourself)
  </p>    
  <p class="header">
    <span class="center">
      <img src="../../progIcons/security/AVs/1589__Avast!FreeAntivirus5_icon.png" alt="Avast Icon" width="32" height="32" class="left" />
    </span>Avast - Virus Defintion Backups 
    <a name="avastDB" id="avastDB"></a>
  </p>    
  <p>This isn't any more tricky, but as of now (December 27, 2010), I have not tried to restore anything so I do not know if this works at all
  </p>    
  <p>/e means it will copy the subdirectories of the listed directory
  </p>    
  <p>/y means overwrite exisiting versions of the file in the archive with these newer ones, WITHOUT prompting 
  </p>    
  <p>
    <span class="code2">xcopy &quot;D:\Security Programs\Alwil Software\Avast5\defs\&quot;* H:\syncBackup\Avast_Def_Backup\ /Y /E <br />             7z u Avast_DEF_Folder_backup.zip .\Avast_Def_Backup\*
    </span><br />    The thing I have noticed with Avast is the folder name (INSIDE of &quot;defs&quot; folder&quot;) changes to reflect the date, so in other words, you will have numerous backups for each date, so you may want to go through and &quot;prune&quot; the backup folder once in awhile, to prevent needless backups. .. Each backup is about 30-40 MB and They will add up and add up and add up if you do not remove older entries. 
  </p>    
  <p> Below is a changed version (after all I am learning as I see what works and what doesn't) .. that includes a pruning command so that after a few backups (without pruning) you do not end up with a zip file that is a few hundred MB containing redundant data. AND YES ... I have changed a few folder names... I am not trying to confuse anyone.    
  </p>    
  <p class="code2">@echo off<br />      echo removing existing backups to clear folder <br />      rmdir /s /q H:\syncBackup\Avast_Def_Backup\ /s<br />      pause<br />      echo purge completed<br />      echo.<br />      echo Backing up Avast Databases about to begin<br />      pause<br />      xcopy &quot;D:\Security Programs\Avast\defs\&quot;* H:\syncBackup\Avast_Def_Backup\defs_folder\ /Y /E<br />      echo Zip up Avast Database with 7-zip<br />    7z u -mx9 Avast_DEF_Folder_backup.zip .\Avast_Def_Backup\defs_folder\* <br />    echo.<br />    echo Backup and Compressing of Avast Database is completed<br />    pause
  </p>    
  <p class="header">
    <span class="center">
      <img src="../../progIcons/security/AVs/1589__Avast!FreeAntivirus5_icon.png" alt="Avast Icon" width="32" height="32" class="left" />
    </span>Avast Program Update Backup 
    <a name="avastProg" id="avastProg"></a>
  </p>    
  <p>Avast not only allows you to update the definiton database, but you can also update the program itself without having to redownload the whole new version. (Ok ok, alot of antiviruses allow this) 
  </p>    
  <p>This I want to say that I think I have correct, but is 100% UNTESTED.    
  </p>    
  <p class="code2">@echo off<br />      echo removing existing backups to clear folder <br />      rmdir /s /q H:\syncBackup\Avast_Def_Backup\ /s<br />      pause<br />      echo purge completed<br />      echo.<br />      echo Backing up Avast Databases about to begin<br />      pause<br />      xcopy &quot;D:\Security Programs\Avast\Setup\&quot;* H:\syncBackup\Avast_Def_Backup\Setup\ /Y /E<br />      echo Zip up Avast Database with 7-zip<br />      7z u -mx9 Avast_VersionUpdates_Folder_backup.zip .\Avast_Def_Backup\*<br />    pause    
  </p>    
  <p class="header">MalwareBytes Database Backup
    <a name="malwarebytes" id="malwarebytes"></a>
  </p>    
  <p>I will include my script, but basically all you need to do is find one file ... The location you see here should be noted that it IS Windows 7... I have backed up and restored this from Win7 to (a different location. .. ) my Windows XP Machine .. the location of where you need to place (or backup this file FROM) will vary .. 
  </p>    
  <p>I KNOW THIS WORKS... The path to the file depending on your OS will be different ... but just copy (and overwrite existing file) when you paste it ... and your MalwareBytes is &quot;up to date&quot; (since the last time you copied this file /backed up an existing Malwarebytes's database, of course)
  </p>    
  <p>The file you are looking for is 
    <span class="boldText">rules.ref
    </span>
  </p>    
  <p>
    <span class="code2">@echo off<br />      echo Backing up Malwarebytes Databases about to begin<br />      pause<br />      xcopy &quot;C:\ProgramData\Malwarebytes\Malwarebytes' Anti-Malware\&quot;*.ref H:\syncBackup\MalwareBytes\ /Y /E<br />      echo Zip up Malwarebytes Database with 7-zip<br />      7z u -mx9 MalwareBytesDB_Backup.zip .\Malwarebytes\* <br />      echo Backup and Compression COMPLETE<br />      echo.<br />      pause
    </span><br />    
  </p>  

</div>                       


EOD
;
?><?php include $_SERVER['DOCUMENT_ROOT'].("/templates/windows/baseWinSoftwareTemplate.php"); ?>
