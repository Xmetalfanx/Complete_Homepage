<?php

	$pageTitle = 'Tutorial Index Page';

  $path = getenv('DOCUMENT_ROOT');
  include $path . "/templates/linux/baseLinuxTutorials.tpl";

  ?>

<i class="fa fa-4x fa-linux text-dark" aria-hidden="true" />

<br />

<p>I am not sure if this page will contain the same tutorials as the New User Section, (I am
leaning towards a "yes" on that... even though I'd like to avoid duplicate content)</p>

<p>This section is probably for the moderate to advanced user, with more than just "what is a
partition/how to partition" type tutorials ... at least that is my plan at the moment</p>

</div> <!-- Closes second column -->
</div> <!-- Closes the row ... what use to be mainBody in my CSS-->

<?php include $path . "/modules/footer.tpl"; ?>
