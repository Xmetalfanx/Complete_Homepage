var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

       // Typical action to be performed when the document is ready:
       // document.getElementById("demo").innerHTML = xhttp.responseText;

       console.log(xhttp.responseText);
    }
};
xhttp.open("GET", "http://xmetal.x10.mx/linuxHQ/json/themes.json", true);
xhttp.send();
