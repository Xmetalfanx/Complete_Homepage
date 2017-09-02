<?php

foreach($archresult as $field)
{
    echo "<strong>Current Pacman Version in Arch: </strong>" . $field['pacmanversion'] . "<br />";

    echo "<strong>How to Install: </strong>" . $field['install'];

}
?>
