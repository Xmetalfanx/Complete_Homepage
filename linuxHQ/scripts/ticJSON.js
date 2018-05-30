var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       var response = JSON.parse(xhttp.responseText);

       //console.log(response.themes);

       var themes = response.themes;

       var outputTIC = '';

       for (var i=0; i < themes.length;i++){
         outputTIC += '<ul><li>Theme Name:'+themes[i].name+'</li><li>Github Link'+themes[i].github+'</li></ul><br /><br />';
       }

       document.getElementById('ticSection').innerHTML = outputTIC;

    }
};
xhttp.open("GET", "http://xmetal.x10.mx/linuxHQ/json/themes.json", true);
xhttp.send();
