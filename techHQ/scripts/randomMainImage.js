// Advanced Random Images Start
// Copyright 2001-2006 All rights reserved, by Paul Davis - www.kaosweaver.com
  var j,d="",l="",m="",p="",q="",z="",KW_ARI= new Array()
  KW_ARI[KW_ARI.length]='../graphics/main/thumb/tn_happyJava.gif?&width=168&height=146&alt=Happy%20Coffee&title=Happy%20Coffee&border=0&link=../graphics/main/original/happyJava.gif';
  KW_ARI[KW_ARI.length]='../graphics/main/thumb/tn_Beach_Tree_Wallpapers_01.jpg?&width=168&height=146&alt=Beach%20Wallpaper%201&title=Beach%20Wallpaper%201&border=0&link=../graphics/main/original/Beach_Tree_Wallpapers_01.jpg';
  j=parseInt(Math.random()*KW_ARI.length);
  j=(isNaN(j))?0:j;
  if (KW_ARI[j].indexOf('?')==-1) {
    document.write("<img src='../graphics/logProp.jpg'>");
  }
  else {
    nvp=KW_ARI[j].substring(KW_ARI[j].indexOf('?')+2).split('&');
    for(var i=0;i<nvp.length;i++) {
      sub=nvp[i].split('=');
   	  switch(sub[0]) {
 	    case 'link':
          l="<a href='"+unescape(sub[1])+"'>";
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
    z+="<img src='"+KW_ARI[j].substring(0,KW_ARI[j].indexOf('?'))+"'"+m+">"+p;
  document.write(z);
  }

// Advanced Random Images End
