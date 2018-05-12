var deRequest = new XMLHttpRequest();
var desktopData = document.getElementById('desktopData')



function renderHTML()
{
  var htmlString = "this is a test";
  var i;

  for (i=0; i < deData.length; i++)
  {
    htmlString += "<div>" + data[] + "</div>";
  }

}

/////////////////////////////////////////////////////////////////////

// Get Json Data
deRequest.open('GET', 'http://xmetal.x10.mx/linuxHQ/json/desktops.json');

// Onload
deRequest.onload = function() {
  var deData = JSON.parse(deRequest.responseText);

  // console.log(deData[0]);
  renderHTML(deData);
};

// Is this in the wrong location?
// Sends deRequest
deRequest.send();
