// desktopJSON="http://xmetal.x10.mx/linuxHQ/json/desktops.json"

$(function () {

  var $desktopData = $('#desktopData')
  
  $.ajax({
    type: 'GET',
    url: 'http://xmetal.x10.mx/linuxHQ/json/desktops.json',
    success: function(data) {
      // console.log('success', data);

      $.each(data, function(i, item){
        $desktopData.append('<div>Json Data</div>');

      })
    }
  
  });

});
