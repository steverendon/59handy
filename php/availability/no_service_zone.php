<?php
/**
 * @author Fabio Alvarez
 * @package disponibilidad 59Handy
 * @copyright www.entrepreneur.com.co
 * 
**/
    include("header.html");
     
    $zipcode = $_SESSION['zip'];

    echo " <div class='nuestros_horarios'>";
    echo "    <p>Sorry! there is no Handy Services in this moment for your area, zipcode: " . $zipcode . "</p>";
    echo "    <a class='enlaces_menu azul' href='https://59handy.com/index.html'>Go back</a><br>";
    echo " </div>";

    include("footer.html");
 
?>
