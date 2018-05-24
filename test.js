     var xmetalContent = {
          "distroName": "Ubuntu",
          "distroComp": "Cononical",
          "distroDE": "Gnome Shell"
      }


      var output = document.getElementById('desktopData');

      // output.innerHTML = "hello there .. "; 
      output.innerHTML = xmetalContent.distroName + '<br /><br />' + xmetalContent.distroComp + '<br /><br />' + xmetalContent.distroDE;
