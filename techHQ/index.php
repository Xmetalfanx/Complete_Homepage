<?php 

  include($_SERVER["DOCUMENT_ROOT"] . "/modules/headerInclude.tpl");

?>

  <div class="card d-none d-md-block mb-5 border-secondary">
    <div class="card-header bg-primary text-white pb-1 mb-4">Educational Sites</div>
    <div class="card-text">
      <div class="row px-3">
        <div class="col-3">
          <a href="https://www.khanacademy.org/" target="_blank"><img src="/techHQ/graphics/khan-logo.png" alt="Khan Academy Graphic"></a></div>
        <div class="col-3">
          <a href="https://linuxacademy.com/" target="_blank"><img src="/graphics/linuxAcademy.png" alt="Linux Academy Graphic"></a></div>
        <div class="col-3">
          <a href="https://www.digitalocean.com/community/" target="_blank"><img class="float-right" src="/techHQ/graphics/digital-ocean.png" alt="Digital Ocean Graphic"></a></div>
      </div>
      <div class="row px-3">
        <div class="col-6">
          <a href="http://www.kristakingmath.com/" target="_blank">
            <img class="bg-primary" src="/graphics/kking.png" alt="Krista King Math Site graphics"></a><br>
          <a href="https://www.youtube.com/channel/UCUDlvPp1MlnegYXOXzj7DEQ">(or Her Channel on Youtube)</a>
        </div>
        <div class="col-6">
          <a href="http://www.mathtutordvd.com/" target="_blank">
            MathTutorDVD.com
          </a>
        <div>
          Do not let the name MathTutorDVD.com fool you, while Jason Gibson does some great Math Tutorials from early grade school math to advanced college-level maths, he also has alot of good science content, and electrical circuity related content.
        </div>
      </div>
  </div>

  <!--maybe from say div's from template that need closing
  </div>
</div> -->

<?php include 'techHQ/modules/GAOTD.tpl';  ?>
