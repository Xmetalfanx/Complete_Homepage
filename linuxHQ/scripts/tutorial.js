// desktopJSON="http://xmetal.x10.mx/linuxHQ/json/desktops.json"

$(function () {
  
  $.ajax({
    type: 'GET',
    url: 'http://xmetal.x10.mx/linuxHQ/json/desktops.json',
    success: function(data) {
      console.log('success', data);
    }
  
  });

});
