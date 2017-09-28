function breakout_of_frame()
{
  // see http://www.thesitewizard.com/archive/framebreak.shtml
  // for an explanation of this script and how to use it on your
  // own website
  if (top.location != location) {
    top.location.href = document.location.href ;
  }
}
 
 // (C) 2000 www.CodeLifter.com
// http://www.codelifter.com
// Free for all users, but leave in this  header

if (parent.frames.length > 0) {
    parent.location.href = self.document.location
}

 // Script to load (i think) a flash redirection if the user does not have flash install on thier computer at that time
<!--
function MM_checkPlugin(plgIn, theURL, altURL, autoGo) { //v4.0
  var ok=false; document.MM_returnValue = false;
  with (navigator) if (appName.indexOf('Microsoft')==-1 || (plugins && plugins.length)) {
    ok=(plugins && plugins[plgIn]);
  } else if (appVersion.indexOf('3.1')==-1) { //not Netscape or Win3.1
    if (plgIn.indexOf("Flash")!=-1 && window.MM_flash!=null) ok=window.MM_flash;
    else if (plgIn.indexOf("Director")!=-1 && window.MM_dir!=null) ok=window.MM_dir;
    else ok=autoGo; }
  if (!ok) theURL=altURL; if (theURL) window.location=theURL;
}
//-->
