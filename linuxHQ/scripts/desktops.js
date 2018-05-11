var deRequest = new XMLHttpRequest();
var desktopData = document.getElementById('desktopData')



function renderHTML()
{
  var htmlString = "this is a test";

  // Have no clue if this will help
  // Later message: Commented out since the tutorial doesn't have this
  // i=0

  // Commenting out during testing

  /*

  for (i=0; i < data.length; i++)
  {
    htmlString += "<div>" + data[0] + "</div>";
  }

  */

  desktopData.insertAdjacentHTML('beforeend', htmlString);
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
