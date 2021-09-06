<?php
    $title = "Strings Manupulations";
    include 'includes/header.php'; 
?>
    <h1><center>PHP String Manipulation</center></h1>

    <?php 
        // Concatenation of Strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        echo $phrase1 . ", name Faizee, " . $phrase2;
        echo '<br>';
        echo '<hr>';

        // String transformation
        $name = "faizee asad";
        echo 'Uppercase first latter: ' . ucfirst($name) . '<br>';
        echo 'Uppercase first latter of each word: ' . ucwords($name) . '<br>';
        echo 'Upper case : ' . strtoupper($name) . '<br>';
        echo 'Lower case : ' . strtolower("FAIZEE ASAD") . '<br>';
        echo '<hr>';
        echo 'Repeat String: ' . str_repeat('a',10). '<br>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a',10)). '<br>';
        echo 'Get a Substring ' . substr($name,3, 4). '<br>';
        echo 'Get position of String: ' . strpos($name,'f');
        echo '<br>';
        echo 'Get position of String: ' . strpos($name,'z');
        echo '<br>';
        // Returns NULL
        // echo 'Get position of string: ' . strpos($combine, 'h') . '<br>';

        echo 'Find Charater "f": ' . strchr($name, 'f'). '<br>';
        echo 'Find Charater "a": ' . strchr($name, 'a'). '<br>';
        echo 'Find Charater "z": ' . strchr($name, 'z'). '<br>';
        echo 'Find Charater "s": ' . strchr($name, 's'). '<br>';

        echo 'Find Lenght of String: ' . strlen($name) . '<br>';

        echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br>';
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br>';  
        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br>';  
        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br>';  

        echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br>';
        echo '<hr>';

        ?>
    <?php require 'includes/footer.php' ?>