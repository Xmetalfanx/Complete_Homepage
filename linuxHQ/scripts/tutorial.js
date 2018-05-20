var jsonURL="http://xmetal.x10.mx/linuxHQ/json/desktops.json";

var ajaxHTTP = new XMLHttpRequest();


function myFunction(array) {
  var out = "";
  var i;
  for(i = 0; i < array.length; i++) {
    out += '<div><span>Name:' + array[i].name + '</span><span>Github URL:' + array[i].github + '</span></div>';

  }


ajaxHTTP.onreadystatechange = function () {
  var myArray = JSON.parse(this.responseText);
  myFunction(myArray);

};

ajaxHTTP.open("GET", jsonURL, true);
ajaxHTTP.send();

  document.getElementById("desktopData").innerHTML = out;

}
