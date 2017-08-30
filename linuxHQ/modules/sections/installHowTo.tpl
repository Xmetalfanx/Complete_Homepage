
<ul class="accordion-tabs-minimal">

  <li class="tab-header-and-content">
    <a href="#screeshot" class="tab-link is-active">Version Chart</a>
    <div class="tab-content">
        <div class="card hidden-md-down">
          <div class="card-block">
            <div class="card-text">
							<?php include $sitePath . '/linuxHQ/modules/database/mainDistroVer.php'; ?>

            </div>
          </div>
        </div>
    </div>
  </li>


  <li class="tab-header-and-content hidden-sm-down">
    <a href="#arch" class="tab-link">Arch</a>
    <div class="tab-content ">
        <?php include $sitePath . '/linuxHQ/modules/database/dearch.php'; ?>

    </div>
  </li>

  <li class="tab-header-and-content">
    <a href="#fedora" class="tab-link"> Fedora</a>
    <div class="tab-content">

      <?php include $sitePath . '/linuxHQ/modules/database/defedora.php'; ?>

      <p>instructions on how to install it go here </p>

    </div>

  </li>

  <li class="tab-header-and-content">
    <a href="#youtube" class="tab-link">OpenSuse</a>
    <div class="tab-content">
      <?php include $sitePath . '/linuxHQ/modules/database/deOpenSuse.php'; ?>

			<p>instructions on how to install it go here </p>


    </div>
  </li>



  <li class="tab-header-and-content">
    <a href="#ubuntu" class="tab-link">Ubuntu </a>
    <div class="tab-content">
      <?php include $sitePath . '/linuxHQ/modules/database/deubuntu.php'; ?>

      <p> instructions on how to install it go here </p>

    </div>
  </li>

</ul>
