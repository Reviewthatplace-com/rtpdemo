<?php
    /*$link = mysqli_connect("148.72.232.180:3306", "powers_user", "%o7t9Md7", "powerspediatrics");
        
    if (mysqli_connect_error()) {
        
        die ("Database Connection Error");
        
    }*/
?>

<?php
    $link = mysqli_connect("localhost", "root", "", "powers");
    if (mysqli_connect_error()) 
    {
       die ("Database Connection Error");
    }
?>