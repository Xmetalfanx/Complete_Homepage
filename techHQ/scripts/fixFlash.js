function flashFix(){
   if(navigator.appVersion.indexOf("MSIE 5.5")!=-1){
 	for(i=0;a=document.getElementsByTagName("object")[i];i++){
 	  if(a.getAttribute("type") &&
 		 a.getAttribute("type").indexOf("application/x-shockwave-flash")!=-1 &&
 		 !a.getAttribute("classid")
 		 ){
 			a.outerHTML=a.outerHTML.slice(0,a.outerHTML.indexOf(">"))+
 			" classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' "+
 			"><param name='movie' value='"+
 			a.getAttribute("data")+
 			"' \/>"+
 		    a.outerHTML.slice(a.outerHTML.indexOf(">")+1,a.outerHTML.length);
 		  }
 	}
   }
 }
 
 window.onload=function(){
   flashFix();
 };