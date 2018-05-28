var desktoDataContainer = document.getElementById("desktopData");
var myRequest = new XMLHttpRequest();

myRequest.open('GET','http://xmetal.x10.mx/linuxHQ/json/desktops.json');
myRequest.onload = function() {
	var myData = JSON.parse(myRequest.responseText);
	console.log(myData);
	renderHTML(myData);
}

myRequest.send();


function renderHTML(data) {
	var htmlString = "testing 1 2 3 ...";
	desktoDataContainer.insertAdjacentHTML('beforeend', htmlString);
}
