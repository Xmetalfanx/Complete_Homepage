// Advanced Random Images Start
// Copyright 2001-2002 All rights reserved, by Paul Davis - www.kaosweaver.com
  var j,d="",l="",m="",p="",q="",z="",KW_ARI= new Array()
  KW_ARI[KW_ARI.length]='graphics/bcb1.jpg?&width=219&height=277';
  KW_ARI[KW_ARI.length]='graphics/retarded.jpg?&width=242&height=318';
  KW_ARI[KW_ARI.length]='graphics/joke/school.jpg?&width=300&height=228';
  KW_ARI[KW_ARI.length]='graphics/joke/tn_toliet.jpg?&width=378&height=283';
  KW_ARI[KW_ARI.length]='graphics/joke/sheep_biker.jpg?&width=360&height=247';
  KW_ARI[KW_ARI.length]='graphics/joke/drunk_cat.jpg?&width=384&height=263';
  KW_ARI[KW_ARI.length]='graphics/joke/wolfleap.jpg?&width=340&height=264';
  KW_ARI[KW_ARI.length]='graphics/joke/cat_emotions.jpg?&width=400&height=374';
  KW_ARI[KW_ARI.length]='graphics/joke/gotmail.jpg?&width=196&height=261';
  KW_ARI[KW_ARI.length]='graphics/joke/roadSign.jpg?&width=180&height=251';
  KW_ARI[KW_ARI.length]='graphics/joke/trespass.jpg?&width=299&height=287';
  KW_ARI[KW_ARI.length]='graphics/joke/humorsense8va.gif?&width=353&height=132';
  j=parseInt(Math.random()*KW_ARI.length);
  j=(isNaN(j))?0:j;
  if (KW_ARI[j].indexOf('?')==-1) {
    document.write("<img src='../graphics/xmlgraphics/rss.gif'>");
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
    z+="<img src='../graphics/xmlgraphics/rss.gif'?'))+"'"+m+">"+p;
  document.write(z);
  }

// Advanced Random Images End