<?php
/**
 * @author Fabio Alvarez
 * @package disponibilidad 59Handy
 * @copyright www.entrepreneur.com.co
 * 
**/
    include("header.html");
    
    $tipo_handy = $_SESSION['handy_type'];
    $descripcion_handy = $_SESSION['descripcion_handy'];
    $fecha = $_SESSION['fecha'];
    $hora = $_SESSION['hora'];
    $direccion = $_SESSION['direccion'];
    $ciudad = $_SESSION['ciudad'];
    $estado = $_SESSION['estado'];
    $descripcion_zipcode = $_SESSION['descripcion_zipcode'];
    $condado = $_SESSION['condado'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $email = $_SESSION['email'];
    $telefono = $_SESSION['telefono'];
    $en_sitio = $_SESSION['en_sitio'];
    
    echo "<form method='POST' action='handy_services.php?service=save'>";
    echo "<div class='jumbotron'>";
    echo "  <div class='formulario_become_partner cuadro-contacto'>";
    echo "      <div class='row justify-content-center'>";
    echo "          <div class='col-lg-12'>";
    echo "            <label><span class='form-control' style='color: #009CDE'>Details of your handy service</span> </label>";
    echo "                <br>";
    echo "                <label>" . $tipo_handy . "</label>";
    echo "                <br>";
    echo "                <label>" . $descripcion_handy . "</label>";
    echo "                <br>";
    echo "                <label>" . $fecha . "</label>";
    echo "                <br>";
    echo "                <label>" . $hora . "</label>";
    echo "            </div>";
    echo "            <div class='col-lg-12'>";
    echo "                <label><span class='form-control' style='color: #009CDE'>Address</span> </label>";
    echo "                <br>";
    echo "                <label>" . $direccion . "</label>";
    echo "                <br>";
    echo "                <label>" . $descripcion_zipcode . "</label>";
    echo "                <br>";
    echo "                <label>" . $condado . "</label>";
    echo "                <br>";
    echo "                <label>" . $ciudad . "</label>";
    echo "                <br>";
    echo "                <label>" . $estado . "</label>";
    echo "            </div>";
    echo "            <div class='col-lg-12'>";
    echo "               <label><span class='form-control' style='color: #009CDE'>Contact details</span> </label>";
    echo "                <br>";
    echo "                <label>" . $nombre . " " . $apellido . "</label>";
    echo "                <br>";
    echo "                <label>" . $email . "</label>";
    echo "                <br>";
    echo "                <label>" . $telefono . "</label>";
    echo "                <br>";
    echo "                <label>" . ($en_sitio? "I will be on site." : "I won't be on site.") . "</label>";
    echo "            </div>";
    echo "            <div class='col-lg-12' style='text-align: center'>";
    echo "                 <table class='form-group'>";
    echo "                        <tr>";
    echo "                            <td>";
    echo "                                <button type='submit' name='back' class='btn-boton-2'>Previous</button>";
    echo "                            </td>";
    echo "                            <td>";
    echo "                                <button type='submit' name='confirm' class='btn-boton-2'>Confirm&nbspdetails</button>";
    echo "                            </td>";
    echo "                        </tr>";
    echo "                 </table>";
    echo "          </div>";
    echo "      </div>";
    echo "  </div>";
    echo " </div>";
    echo "</form>";
    
    include("footer.html");
 
?>
