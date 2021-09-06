<?php
    $title = "IF Statements";
    include 'includes/header.php'; 
?>
    <?php
        // An If statement that will carry out an action based on the value of the variable

        echo '<h1><center> If Statement </center></h1>';

        $Marks = 50;
        // ==, ===,  >, <, <= , >=,
        if($Marks >= 50){
            echo '<h3 style="color: green"> YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red"> YOU HAVE FAILED</h3>';
        }
        echo '<hr>';

        // IF-ELSE IF-ELSE

        $grade = 'D';

        if($grade == 'A'){
            echo '<h3 style="color: green"> YOU ARE A TOPPER</h3>';
        }
        elseif($grade == 'B'){
            echo '<h3 style="color: blue"> YOU DID WELL</h3>';
        }
        elseif($grade == 'C'){
            echo '<h3 style="color: yellow"> AVERAGE</h3>';
        }
        else{
            echo '<h3 style="color: red"> YOU HAVE FAILED...</h3>';
        }
        echo '<hr>';
    ?>
    <?php require 'includes/footer.php' ?>