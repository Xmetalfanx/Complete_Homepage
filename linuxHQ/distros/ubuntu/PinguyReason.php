 <?php


 $content =<<<EOD

        I have removed all mentions of PinguyOS after REPEATED incidents of the main developer attacking the community, especially folks
        who take the time out of their day to help others get started in Linux <br /><br />

        <a href="https://www.techdirt.com/articles/20150104/07534229594/developer-issues-bogus-takedowns-against-cup-linux-youtube-channel-retaliation-being-banned-abusive-behavior.shtml"
          target="_blank">Developer of PinguyOS issues bogus takedown order </a> <br /><br />

          Again this is JUST MY CHOICE of how to handle it.

EOD;



  $title = 'Distribution Section - PinguyOS';


  $sitePath = "/home/xmetalx1/public_html";

  include $sitePath . '/linuxHQ/modules/distros.php';
  include $sitePath . '/linuxHQ/modules/sshots.php';
  include $sitePath . "/templates/linux/baseLinuxDistro.tpl";

?>
