var deRequest = new XMLHttpRequest();
var desktopData = document.getElementById('desktopData').innerHTML = "Hello There ";

var jsonURL = "http://xmetal.x10.mx/linuxHQ/json/desktops.json";

function renderHTML(deData)
{
  var htmlString = "this is a test";
  var i;

  for (i=0; i < desktopData.length; i++)
  {
    htmlString += "<div>" + desktopData[0] + "</div>";
  }

}

/////////////////////////////////////////////////////////////////////

// Get Json Data
deRequest.open('GET', jsonURL, true);

// Onload
deRequest.onload = function() {
  var deData = JSON.parse(deRequest.responseText);

  // console.log(deData[0]);
  renderHTML(deData);
};

// Is this in the wrong location?
// Sends deRequest
deRequest.send();
