<?php
    $title = "Date and Time Manipulations";
    include 'includes/header.php'; 
?>
    <h1><center>Data and Time Manipulation</center></h1>

    <?php
        $datenow = getdate();
        echo "Today's Date: </br>";
        echo $datenow['mday'] . '<br>';
        echo $datenow['mon'] . '<br>';
        echo $datenow['year'] . '<br>';
        echo '<hr>';
        echo " Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br>';
        echo '<hr>';

        print date("m/d/y G.i:s<br>" , time()) . '<br>';
        echo '<hr>';
        print " Today is ";
        print date("j of F Y, \a\\t g.i a", time());
        echo '<hr>';    
    ?>
    <?php require 'includes/footer.php' ?>