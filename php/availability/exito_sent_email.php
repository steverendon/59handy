<?php
/**
 * @author Fabio Alvarez
 * @package disponibilidad 59Handy
 * @copyright www.entrepreneur.com.co
 * 
**/
    include("header.html");
    
    $email = $_SESSION['email'];
    
    echo " <div class='nuestros_horarios'>";
    echo "    <p>Thanks! we sent to you a message to email: " . $email . "</p>";
    echo "    <a class='enlaces_menu azul' href='https://59handy.com/index.html'>Go back</a><br>";
    echo " </div>";
    
    include("footer.html");
 
?>
