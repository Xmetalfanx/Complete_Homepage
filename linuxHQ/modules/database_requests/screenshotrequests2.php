<?php
    
    require $sitePath . '/database/connect.php';

    # The function names probably should have better names 

   
    ### DE Section 

    # Query for when the desktop matches AND SRC is set
    $sshotDESrcQuery = "SELECT * 
                        FROM sshots 
                        WHERE ssde = $localdename AND 'src' IS NOT NULL";
    

    $sshotDESrcResult = mysqli_query($conn, $sshotDESrcQuery) or ('Error querying database');
    $sshotDESrcDisplay = mysqli_fetch_assoc($sshotDESrcResult);

    # Query for when the desktop matches AND HREF is set
    $sshotDEHrefQuery = "SELECT * 
                        FROM sshots 
                        WHERE ssde = $localdename AND 'href' IS NOT NULL";
    
    $sshotDEHrefResult = mysqli_query($conn, $sshotDEHrefQuery) or ('Error querying database');
    $sshotDEHrefDisplay = mysqli_fetch_assoc($sshotDEHrefResult);


 
    ###########################################################################################


    ## DistroSection 

    ## The localdistroname variable is basically the nane of the distro (or something that uniquuely ids the distro in the database)

    # Query for when the desktop matches AND SRC is set
    $sshotDistroSrcQuery = "SELECT
                               * 
                            FROM
                               sshots 
                            WHERE
                                distroName = '$localdistroname' ";

    $sshotDistroSrcResult = mysqli_query($conn, $sshotDistroSrcQuery) or ('Error querying database');
    $sshotDistroSrcDisplay = mysqli_fetch_assoc($sshotDistroSrcResult);


    # Query for when the desktop matches AND HREF is set
    $sshotDistroHrefQuery = "SELECT 
                                * 
                            FROM 
                                sshots
                            WHERE 
                                distroName = $localdistroname AND 'href' IS NOT NULL";                 

    $sshotDistroHrefResult = mysqli_query($conn, $sshotDistroHrefQuery) or ('Error querying database');
    $sshotDistroHrefDisplay = mysqli_fetch_assoc($sshotDistroHrefResult);
   
?>