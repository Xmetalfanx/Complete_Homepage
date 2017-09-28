<?

    function browserAddon
    {
        <div class="card">
          <div class="card-header">
            <img src="$addonIcon" alt="$iconAlt" />
            <a href="$addonURL" target="_blank" >
              $addonName
            </a>
          </div>
          <div class="card-block">
            <div class="card-text">
                $description
            </div>
          </div>

        </div>
    }

    function clearVars
    {

        $addonName = '';
        $addonURL = '';
        $addonIcon = '';           // src to grahpic
        $iconAlt = '';        // alt tag for addonIcon
        $description = '':


    }

?>
