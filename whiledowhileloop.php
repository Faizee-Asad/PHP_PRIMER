<?php
    $title = "While/Do Whille Loop";
    include 'includes/header.php'; 
?>
    <h1><center>While Loop</center></h1>

        <?php
        $marks = 0;
        // Infinite Loop
        // while($marks < 10){
        //     echo '<p> I AM LESS THAN 10!</p>';
        // }

        // Pre-Condition Loop
        while($marks < 10){
            echo '<p> I AM LESS THAN 10!</p>';
            $marks ++;
        }
        echo 'EXIT LOOP!';
        echo '<hr>';
        ?>  

    <h1><center>Do-While Loop</center></h1>

        <?php
        
            // Post-Conditions Loop
            $marks = 0;
            do{
                echo '<p> I AM DO WHILE LOOP</p>';
                $marks++;
            }while($marks < 10);
            echo 'EXIT LOOP!';
            echo '<hr>';
        ?>
    <?php require 'includes/footer.php' ?>