<?php
    $title = "Switch Statements";
    include 'includes/header.php'; 
?>
    <h1><center>Switch Statements</center></h1>

    <?php

        $grade = 'B';

        switch($grade){
            case 'A' :
                echo '<h3 style="color: green"> YOU ARE A TOPPER</h3>';
                break;
            case 'B' :
                echo '<h3 style="color: blue"> YOU DID WELL</h3>';
                break;
            case 'C' :
                echo '<h3 style="color: yellow"> AVERAGE</h3>';
                break;
            default : 
                 echo '<h3 style="color: red"> YOU HAVE FAILED...</h3>';
                 break;
        }
        echo '<hr>';

    ?>
    <?php require 'includes/footer.php' ?>