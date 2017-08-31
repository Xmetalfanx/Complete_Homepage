<?php

    $mainInfo = "SELECT * FROM mainDEInfo WHERE dename = '$localdename' ";
    $mainInfoResult = mysqli_query($conn, $mainInfo);
    $mainInfoDisplay=mysqli_fetch_assoc($mainInfoResult);

    mysqli_free_result($mainInfoDisplay);

?>
