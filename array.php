<?php
    $title = "Array";
    include 'includes/header.php'; 
?>
    <h1><center>Arrays</center></h1> 

    <?php 

        // a variable
        $num = 3;

        // an array
        // Only one Datatype
        $numbers = array(1,2,3,4,5,6,7,9,11,54,76,98,44,4546,430);
        // You can access the value in a subscript of the array using index.
        echo $numbers[5];
        echo "<p>$numbers[11]</p>";
        echo '<hr>';

        $size = count($numbers);
        echo "<p>Array Numbers is size: $size</p>";
        echo '<hr>';

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
        echo '<hr>';
    ?>
    <?php require 'includes/footer.php' ?>