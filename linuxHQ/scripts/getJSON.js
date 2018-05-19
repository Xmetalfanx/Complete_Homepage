$(document).ready(function(){

  var $desktopData = $('#desktopData');
  var $jsonURL = 'http://xmetal.x10.mx/linuxHQ/json/desktops.json';

  desktopData.load(jsonURL){
    console.log(jsonURL);
  };

});
