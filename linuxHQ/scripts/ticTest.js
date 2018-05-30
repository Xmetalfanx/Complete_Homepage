// making specific outputs since multiple JSON JS files with "output" may conflict

var outputTIC = '';

for (var i=0; i < themes.length;i++){
  outputTIC += '<li>'+themes[i].name+'</li>';
}

document.getElementById('ticSection').innerHTML = outputTIC;

//
