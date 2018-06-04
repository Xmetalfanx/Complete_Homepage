// Reference: http://www.developphp.com/video/JavaScript/External-JSON-Data-File-Call-In-Using-Ajax-Tutorial
	function ajax_get_json(){
		var results = document.getElementById("ticSection");
	    var themeRequest = new XMLHttpRequest();
	    themeRequest.open("GET", "http://xmetal.x10.mx/linuxHQ/json/themes.json", true);
	    themeRequest.setRequestHeader("Content-type", "application/json", true);
	    themeRequest.onreadystatechange = function() {
		    if(themeRequest.readyState == 4 && themeRequest.status == 200) {
			    var data = JSON.parse(themeRequest.responseText);

				results.innerHTML = "";

				for(var obj in data){
					results.innerHTML += "Theme Name:"+data[obj].name+", its Gnomelook.org URL is: "+data[obj].gnomelook+", It's DevArts URL is"+data[obj].devarts+", AND its Github URL is:"+data[obj].github+"<hr />";
				}
		    }
	    }
	    themeRequest.send(null);
	    results.innerHTML = "requesting...";
	}
