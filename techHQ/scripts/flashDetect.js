// My Code Part 1 - DONE 

<script type="text/vbscript"> 
<!-- 
       //check for Flash Player X 
       //script for IE on Win32 systems 
       on error resume next 
       //set a variable to hold the detection result 
       Dim checkForFlash6 

       //assign a boolean value 
       checkForFlash6 = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash.6"))) 
       //note here that if the object is demoted to ShockwaveFlash.ShockwaveFlash.5 or less, checkForFlash6 will still return true 
       //this is ok as Flash Player 6 can run previous version content. 
       //change 6 to 7 and you will see the alternate content (if 7 is not installed). 

       //check that Shockwave Flash Plugin 6 is available 
       //if false display alternate content, if true show object tag 
       //quotes need to be doubled in vbscript in order for IE to render them in markup. 
       if checkForFlash6 = true then 
          document.write("<object data=""/flash/christmas.swf"" type=""application/x-shockwave-flash"" codebase=""clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"" width=""600"" height=""90""><param name=""movie"" value=""../flash/christmas.swf"" /><param name=""scale"" value=""noborder"" /><param name=""quality"" value=""high"" /><param name=""bgcolor"" value=""#ededed"" /></object>") 
       else 
          document.write("Alternate descriptive content can go here, plus a link to the Flash Player download page for the user to optionally activate.<br />This text will be rendered if the user-agent cannot render the file specified in the object tag.") 
       end If 
--> 
</script> 


<script type="text/javascript"> 
<!-- 
//check for Flash Player X 

//check the navigator.plugins array exists, IE for Windows will fail on this. 
if(navigator.plugins.length) 
{ 

  //some variables 
  //a counter 
  var i; 

  var xhtmlContent = "<object data=\"/flash/christmas.swf\" type=\"application/x-shockwave-flash\" codebase=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\"600\" height=\"90\"><param name=\"SCALE\" value=\"noborder\" /><param name=\"movie\" value=\"../flash/christmas.swf\" /><param name=\"quality\" value=\"high\" /><param name=\"bgcolor\" value=\"#ededed\" /></object>"; 

  var alternateContent = "<img src=""/flash/christmas.gif"; 

  //loop through all the plugins installed 
  for (i=0; i < navigator.plugins.length; i++) 
  { 
       //put the plugin string in a variable 
       var pluginIdent = navigator.plugins[i].description.split(" "); 
       //The Flash Player identification string is ([] = the array index) [0]Shockwave [1]Flash [2]6.0 [3]r21 


       //if less than Flash Player 6 is detected, run this code. 
       if(pluginIdent[0] == "Shockwave" && pluginIdent[1] == "Flash") 
       { 
          //set a toggle to show that some sort of Flash Player (of versions 1-5) was found 
          var isSwfEnabled = true; 

          //an array of the Flash version number (major.minor) 
          var versionArray = pluginIdent[2].split("."); 

          if(versionArray[0] < 6) 
          { 
             //show alternate content 
             document.write(alternateContent); 
          } 
          else 
          { 
             //Flash Player 6 or greater has been found, roll out the <object> tag. 
             document.write(xhtmlContent); 
          } 

       //need to break this loop as some browsers may have two versions installed 
       //eg my Firebird release has r65 and r79 installed! 
       break; 

       }//end if pluginIdent 


  }//end for 


  //check if no Shockwave Flash was detected in the array (no Flash Player installed) 
  if(!isSwfEnabled) 
  { 
     document.write(alternateContent); 
  }//end if 

} 
--> 
</script>