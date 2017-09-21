  // Advanced Random Images Start
	// Copyright 2001-2002 All rights reserved, by Paul Davis - www.kaosweaver.com
  var j,d="",l="",m="",p="",q="",z="",KW_ARI= new Array()
  KW_ARI[KW_ARI.length]='pictures/avril.gif?&width=320&height=399';
  KW_ARI[KW_ARI.length]='pictures/yahoo.gif?&width=251&height=284';
  j=parseInt(Math.random()*KW_ARI.length);
  j=(isNaN(j))?0:j;
  if (KW_ARI[j].indexOf('?')==-1) {
    document.write("<img src='../../opt/websites/charts.php'>");
  }
  else {
    nvp=KW_ARI[j].substring(KW_ARI[j].indexOf('?')+2).split('&');
    for(var i=0;i<nvp.length;i++) {
      sub=nvp[i].split('=');
   	  switch(sub[0]) {
 	    case 'link':
          l="<a href='MassJavascripts.js'>";
          p="</a>";
		  break;
	    case 'target':
          q=" target='"+unescape(sub[1])+"'";
  		  break;
  	    default:
          m+=" "+sub[0]+"='"+unescape(sub[1])+"'";
  		  break;
      }
    }
    z=(l!="")?((q!="")?l.substring(0,l.length-1)+q+">":l):"";
    z+="<img src='../../compareFlash.php'?'))+"'"+m+">"+p;
  document.write(z);
  }

// Advanced Random Images End