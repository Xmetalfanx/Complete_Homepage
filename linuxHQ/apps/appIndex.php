<?php

    $title = 'App Section - App Index';

        $sitePath = "/home/xmetalx1/public_html";
        include $sitePath . "/templates/linux/baseLinuxAPP.tpl";

?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Introduction</h3>
  </div>
  <div class="panel-body">
		<p>This section will contain PPA information and other linux program information not suitable for the
		TechHQ Software section which contains main cross platform </p>
  </div>
</div>

<div class="vertical-tabs-container">
  <div class="vertical-tabs">
    <a href="#graphics" rel="tab1" class="js-vertical-tab vertical-tab is-active">Graphics Programs</a>
    <a href="#internet" rel="tab2" class="js-vertical-tab vertical-tab">Internet Programs</a>
    <a href="javascript:void(0)" rel="tab3" class="js-vertical-tab vertical-tab">Multimedia Programs</a>
    <a href="javascript:void(0)" rel="tab4" class="js-vertical-tab vertical-tab">Item 4</a>
  </div>

  <div class="vertical-tab-content-container">
    <a href="" rel="tab1" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading is-active">Graphics Programs</a>
    <div id="graphics" class="js-vertical-tab-content vertical-tab-content">
      <a name="graphics"></a>
      <h3>Editors</h3>
      <ul>
        <li><a href="https://www.gimp.org/">GIMP</a></li>
        <li><a href="https://pinta-project.com/pintaproject/pinta/">Pinta</a></li>
      </ul>
      <h3>Viewers</h3>
    </div>

    <a href="" rel="tab2" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">Item 2</a>
    <div id="tab2" class="js-vertical-tab-content vertical-tab-content">
      <a name="internet"></a>
      <h3>Chat Programs</h3>
      <ul>
        <li>Hexchat</li>
        <li>Pidgin</li>
      </ul>
      <h3>Emails Programs</h3>
      <ul>
        <li>Thunderbird</li>
      </ul>
      <h3>Web Browsers</h3>
      <ul>
        <li>Chromium</li>
        <li>Google Chrome</li>
        <li>Mozilla Firefox</li>
        <li>Pale Moon</li>
        <li>Vivaldi</li>
      </ul>
    </div>


    <a href="" rel="tab3" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">Item 3</a>
    <div id="tab3" class="js-vertical-tab-content vertical-tab-content">
      <p>Donec  turpis.</p>
    </div>

    <a href="" rel="tab4" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading">Item 4</a>
    <div id="tab4" class="js-vertical-tab-content vertical-tab-content">
      <p>Sociis sapien.</p>
    </div>
  </div>
</div>


<hr>

<div class="vertical-tabs-container">
  <div class="vertical-tabs">
    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab is-active" rel="tab1">Item 1</a>
    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab" rel="tab2">Item 2</a>
    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab" rel="tab3">Item 3</a>
    <a href="javascript:void(0)" class="js-vertical-tab vertical-tab" rel="tab4">Item 4</a>
  </div>

  <div class="vertical-tab-content-container">
    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading is-active" rel="tab1">Item 1</a>
    <div id="tab1" class="js-vertical-tab-content vertical-tab-content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt pellentesque lorem, id suscipit dolor rutrum id. Morbi facilisis porta volutpat. Fusce adipiscing, mauris quis congue tincidunt, sapien purus suscipit odio, quis dictum odio tortor in sem. Ut sit amet libero nec orci mattis fringilla. Praesent eu ipsum in sapien tincidunt molestie sed ut magna. Nam accumsan dui at orci rhoncus pharetra tincidunt elit ullamcorper. Sed ac mauris ipsum. Nullam imperdiet sapien id purus pretium id aliquam mi ullamcorper.</p>
    </div>

    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab2">Item 2</a>
    <div id="tab2" class="js-vertical-tab-content vertical-tab-content">
      <p>Ut laoreet augue et neque pretium non sagittis nibh pulvinar. Etiam ornare tincidunt orci quis ultrices. Pellentesque ac sapien ac purus gravida ullamcorper. Duis rhoncus sodales lacus, vitae adipiscing tellus pharetra sed. Praesent bibendum.</p>
    </div>

    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab3">Item 3</a>
    <div id="tab3" class="js-vertical-tab-content vertical-tab-content">
      <p>Donec mattis mauris gravida metus laoreet non rutrum sem viverra. Aenean nibh libero, viverra vel vestibulum in, porttitor ut sapien. Phasellus tempor lorem id justo ornare tincidunt. Nulla faucibus, purus eu placerat fermentum, velit mi iaculis nunc, bibendum tincidunt ipsum justo eu mauris. Nulla facilisi. Vestibulum vel lectus ac purus tempus suscipit nec sit amet eros. Nullam fringilla, enim eu lobortis dapibus, quam magna tincidunt nibh, sit amet imperdiet dolor justo congue turpis.</p>
    </div>

    <a href="" class="js-vertical-tab-accordion-heading vertical-tab-accordion-heading" rel="tab4">Item 4</a>
    <div id="tab4" class="js-vertical-tab-content vertical-tab-content">
      <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus dui urna, mollis vel suscipit in, pharetra at ligula. Pellentesque a est vel est fermentum pellentesque sed sit amet dolor. Nunc in dapibus nibh. Aliquam erat volutpat. Phasellus vel dui sed nibh iaculis convallis id sit amet urna. Proin nec tellus quis justo consequat accumsan. Vivamus turpis enim, auctor eget placerat eget, aliquam ut sapien.</p>
    </div>
  </div>
</div>


<?php include $sitePath . "/modules/linux/linuxBaseFooter.tpl"; ?>
