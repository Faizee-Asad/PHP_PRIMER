<?php
    $title = "index";
     include 'includes/header.php'; 
?>
   <!-- Basic HTML -->
    <h1>Faizee Asad</h1>

    <?php
         // printing to HTML using Echo
        echo 'Welcome To PHP ';
        echo '<br>';
        echo 'HTML TAG';
        echo '<br>';
    

    ?>

    <?php


        // declare variable
        $name = 'Faizee Asad';
        $age = 20;
        echo '<hr>';
        // print variable
        echo $name;
        echo '<h1> My Name is : ' .$name.'</h1>';
        echo '<h1> My Age is : ' .$age.'</h1>';
        echo '<h2> I am '.$age.' years old </h2>';
        echo '<hr>';
        echo "<h3> MY NAME IS : $name </h3>";
        echo "<h3> MY AGE IS : $age </h3>";
        echo '<hr>';

    ?>
    <button type="button" class="btn btn-dark">Click Me!</button>
    <button type="button" class="btn btn-danger">Click Me!</button>
    <button type="button" class="btn btn-warning">Click Me!</button>
    <button type="button" class="btn btn-info">IClick Me!nfo</button>
  
    <hr>
    <?php require 'includes/footer.php' ?>