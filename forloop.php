<?php
    $title = "For Loop";
    include 'includes/header.php'; 
?>
    <h1><center>For Loop</center></h1>

    <?php
        // for loop
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO FAIZEE</p>';
        }
        echo '<hr>';
        for($count = 0; $count < 10; $count++){
            echo "<p>The Count is : $count</p>";
        }
        echo '<hr>';
    ?>
    <?php require 'includes/footer.php' ?>