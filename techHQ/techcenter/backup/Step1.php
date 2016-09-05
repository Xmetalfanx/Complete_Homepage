<?php

	$the_title ='Xmetalfanx\'s Homepage - Tech Center - Audio Enhancing';
	$the_content = <<<EOD
	
    <p class="boldItalics">Disclaimer: I am going to generally give the instruction on how to create a partition .... I am going to overlook the &quot;What is a 
    Partition?&quot; as one can use there favorite search engine to find that out .. there are many great tutorials out there that can help you with that and even 
    your public library may have a few references on the subject</p>
    
    <ol>
      <li> Make sure your system is spyware/trojan/Malware/virus Free - There is not much sense to backup a badly infected computer ..
       that (a really bad infection) is the reason you would RESTORE drive images.... That is just my opinion, anyway.
        <ul>
          <li>-----------------------------------------<br />
            These are a few tips to help you clean your computer of various types of infections.  I am not saying this is a shore-fire way of getting rid 
            of everything, but it can get rid of most infection related issues.</li>
        </ul>
        <blockquote>
          <p>Below are just some SUGGESTIONS.</p>
          <p><span class="boldText">Anti-viruses</span> - </p>
          <blockquote>
            <p>1) <a href="http://www.avast.com/free-antivirus-download" target="_blank" class="boldText">Avast</a> - FREE<br />
              Pros: Considered by many tech to be the #1 free anti-virus.  Great Detection rate and no significant lag on system resources </p>
            <p>Cons: My laptop from 2002, has SLIGHT lag running Avast. (compared to Avira)</p>
            <p>2) <a href="http://www.avira.com/en/avira-free-antivirus" target="_blank" class="boldText">Avira</a> - FREE <br />
              Pros:   Great Detection; comparable to Avast's; NO system lag on any of my computers that I have EVER run it on; </p>
            <p>Cons: Sites and articles tend to deduct &quot;points&quot; for the fact they like Avast's interface better.  
            I find it Avira's GUI very clean and easy to use, however.</p>
            
            <p>---------------------------<br />
              Those are Free, but if you feel the need to want to pay for one (for whatever reason), try (3) <a href="http://www.eset.com" target="_blank">
              Eset NOD32</a>, which provides great protection and no system lag</p>
          </blockquote>
          
          <p>---------------------------<br />
            <span class="boldText">Malware/Spyware related - </span><br />
          </p>
          <blockquote>
            <p>These are great programs to have, but do not confuse them with anti-viruses.  AV's can detect malware and these scanners COULD detect viruses, 
            but my advice would be to have both types of scanners on your system. </p>
            <p>The only two scanners I'd use for this are both freewares, the rest are honestly not needed. </p>
            <p><span class="boldText"><a href="http://www.malwarebytes.org/" target="_blank">MalwareBytes</a></span> FREE Ed. </p>
            <p>And <br />
              <a href="http://www.superantispyware.com/" class="boldText">Super Anti-Spyware</a>  - FREE - <br />
              Great detection; most tutorials sites on removing malware, tell you to use MalwareBytes anyway; </p>
            <p>I have seen people with AV scanners like Norton think they are malware free and they (with computer issues) scan with MB and then they find
             they are loaded with malware.</p>
          </blockquote>
        </blockquote>
      </li>
    
      <li>Run <span class="navyText">Chkdsk</span> type program on your C:\ drive and correct errors in the File System That may be found 
      (i mean select &quot;fix errors&quot;) 
        <ul>
          <li>This could be swapped with Step 1 of course </li>
          <li>This can prevent issues later .... it may be possible to create an image of a partition or disk with errors and then after its restored you could run 
          checkdisk... but &quot;why not&quot; do it before-hand?</li>
        </ul>
      </li>
      <li>This is optional but you may want to use MSConfig or a program like Win Patrol to look at startup items ... 
        <ul>
          <li>This is not 100% needed for drive imaging., but when you restore your image your computer will be more optimally running if you remove items
           in startup that you no longer need. </li>
        </ul>
      </li>
    </ol>
    <p>&nbsp;</p>
    <p>-----------------------------------------------------------------</p>
    <blockquote>
      <p>2) <span class="boldItalics">Defragmenting</span> - This step is to really move the data that MAY be at the end of the drive to somewhere else. 
      but this is a good step for you to take anyway... JUST for computer maintenance sake ... </p>
      <blockquote>
        <p>Some Defragmenters are better than others and I do not feel the need to buy a defragmenting program.  I happen to really like 
        <a href="http://www.auslogics.com/en/software/disk-defrag" target="_blank">the FREE Aulogic Disk Defagmenter</a>, as it seems to work a lot
         better then some of the others (even shareware programs) I have tried.. It also defrags better then Window's Built-in Defragmenting program 
         (I know some of you are asking &quot;why not just use the built-in Defragmenter?&quot; .. Well, you CAN)... I just think Aulogic's
          program does a better job at it.</p>
      </blockquote>
      <p>3) Make a plan - </p>
      <blockquote>
        <p>This step all depends on your hard drive size .... I would advise (I know many wouldn't) getting rid of the System &quot;recovery&quot; partition 
        that may be on your system ... After all the purpose of making drive images are to not need that anymore ... That partition will take up some space on 
        your hard drive and will help revert your system to factory default settings... If you create (and backup to external source) drive images ... it will 
        help you restore your computer (and settings) to the date on which you created the backup.</p>
        
        <p>Think about how much space is being used-vs- is available on C:\ ... I can not tell you how much to use, since it varies from computer to computer, but
         I would advise that you allow more than you think you need for the drive images for the partition containing the drive images... its not hard to go back 
         (if you find you need more space) and resizing the partition ... it just saves time if you estimate you need more space in the first place. </p>
        <p>&nbsp;</p>
        <p class="center"><a href="Step3.php">Step  ~~&gt;</a></p>
      </blockquote>
    </blockquote>
    </div>
 
EOD;
?>
<?php include $_SERVER['DOCUMENT_ROOT'].("/templates/tech/baseTechCenterTemplate.php"); ?>
 
