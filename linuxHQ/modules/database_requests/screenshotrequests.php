<?php
    
    require $sitePath . '/database/connect.php';
    require $sitePath . '/linuxHQ/modules/screenshotfunctions.php'; 


    function assignSrcVars
    {

        ## localdename should be another variable 

        ### Idea - use a var to determine the section ... what "$extraTest is will be based on that "
        if ($sectionVar = 'DE')
        {
            // $sectionTest will be the var name = $localdename 

        }
        elif ($sectionVar = 'distro')
        {
            // $sectionTest = $distroname

            // NOT 100% AT THE TIME OF TYPING THAT varname above for the distro 

        }


        # Query for when the desktop matches AND SRC is set
        $sshotDistroSrcQuery = "SELECT * 
                                FROM sshots 
                                WHERE $sectionTest AND 'src' IS NOT NULL";

        $sshotDistroSrcResult = mysqli_query($conn, $sshotDistroSrcQuery) or ('Error querying database');
        $sshotDistroSrcDisplay = mysqli_fetch_assoc($sshotDistroSrcResult);

        
        // Start the check for SRC to see if that field contains content 
        srcCheck($extraTest);

    }


    function assignHrefVars
    {


        ## localdename should be another variable 

        ### Idea - use a var to determine the section ... what "$extraTest is will be based on that "
        if ($sectionVar = 'DE')
        {
            // $sectionTest will be the var name = $localdename 

        }
        elif ($sectionVar = 'distro')
        {
            // $sectionTest = $distroname

            // NOT 100% AT THE TIME OF TYPING THAT varname above for the distro 

        }


        # Query for when the desktop matches AND HREF is set
        $sshotDistroHrefQuery = "SELECT * 
                                FROM sshots 
                                WHERE $sectionTest AND 'href' IS NOT NULL";                 
        $sshotDistroHrefResult = mysqli_query($conn, $sshotDistroHrefQuery) or ('Error querying database');
        $sshotDistroHrefDisplay = mysqli_fetch_assoc($sshotDistroHrefResult);
       


    }



   
?>