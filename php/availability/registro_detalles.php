<?php
/**
 * @author Fabio Alvarez
 * @package disponibilidad 59Handy
 * @copyright www.entrepreneur.com.co
 * 
**/
    include("header.html");

    if(isset($_SESSION["handy_type"])){
        $tipo_handy = $_SESSION["handy_type"];
    }
    if(isset($_SESSION["direccion"])){
        $direccion = $_SESSION["direccion"];
    }
    if(isset($_SESSION["ciudad"])){
        $ciudad = $_SESSION["ciudad"];
    }
    if(isset($_SESSION["estado"])){
        $estado = $_SESSION["estado"];
    }
    if(isset($_SESSION["estados"])){
        $estados = $_SESSION["estados"];
    }
    if(isset($_SESSION["nombre"])){
        $nombre = $_SESSION["nombre"];
    }
    if(isset($_SESSION["apellido"])){
        $apellido = $_SESSION["apellido"];
    }
    if(isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    }
    if(isset($_SESSION["telefono"])){
        $telefono = $_SESSION["telefono"];
    }
    if(isset($_SESSION["en_sitio"])){
        $en_sitio = $_SESSION["en_sitio"];
    }

    echo " <form method='POST' action='handy_services.php?service=confirm'>";       
    echo "        <div class='jumbotron'>";
    echo "         <div class='formulario_become_partner cuadro-contacto'>";
    echo "            <div class='row justify-content-center'>";
    echo "                <div class='col-lg-12'>";
    echo "                    <label><span class='form-control' style='color: #009CDE'>Handy type</span> </label>";
    echo "                </div>";
    echo "                <div class='col-lg-12'>";
    echo "                    <div class='form-group'>";
                                if(isset($tipo_handy)){    
                                    if($tipo_handy == 'Home'){
                                        echo " <input type='radio' name='handy_type' value='Home' checked> Home";
                                    }else{
                                        echo " <input type='radio' name='handy_type' value='Home'> Home";
                                    }
                                }else{
                                        //por defecto se selecciona este tipo de handy
                                        echo " <input type='radio' name='handy_type' value='Home' checked> Home";
                                } 
                                if(isset($tipo_handy)){    
                                    if($tipo_handy == 'Business'){
                                        echo " <input type='radio' name='handy_type' value='Business' checked> Business";
                                    }else{
                                        echo " <input type='radio' name='handy_type' value='Business'> Business";
                                    }
                                }else{
                                        echo " <input type='radio' name='handy_type' value='Business'> Business";
                                }
    echo "                    </div>";
    echo "                </div>";
    echo "                <div class='col-lg-12'>";
    echo "                    <label><span class='form-control' style='color: #009CDE'>Address</span> </label>";
    echo "                </div>";
    echo "                <div class='col-lg-12'>";
    echo "                    <div class='form-group'>";
                                if(isset($direccion)){
                                        echo " <input type='text' class='form-control' value='" . $direccion . "' name='direccion' style='width:400px;' required>";
                                }else{
                                        echo " <input type='text' class='form-control' placeholder='Your address' name='direccion' style='width:400px;' required>";
                                }
    echo "                    </div>";
    echo "                    <div class='form-group'>";
                                    if(isset($ciudad)){
                                            echo " <input type='text' class='form-control' value='" . $ciudad . "' name='ciudad' style='width:200px;' required>";
                                    }else{
                                            echo " <input type='text' class='form-control' placeholder='City' name='ciudad' style='width:200px;' required>";
                                    }
    echo "                    </div>";
    echo "                   <div class='form-group'>";
                                if(isset($estado)){
                                        echo " <select class='form-control' name='estado' style='width:200px;' required>";
                                        for($i = 0; $i < count($estados); $i++){
                                            if($estados[$i]['codigo'] . " " . $estados[$i]['descripcion'] == $estado){
                                                echo " <option value='" . $estados[$i]['codigo'] . " " . $estados[$i]['descripcion'] . "' selected>" . $estados[$i]['descripcion'] . "</option>";
                                            }else{
                                                echo " <option value='" . $estados[$i]['codigo'] . " " . $estados[$i]['descripcion'] . "'>" . $estados[$i]['descripcion'] . "</option>";
                                            }
                                        }
                                        echo " </select>";
                                }else{
                                        //por defecto se selecciona el estado de lo florida
                                        $estado = "Florida";
                                        echo " <select class='form-control' name='estado' style='width:200px;' required>";
                                        for($i = 0; $i < count($estados); $i++){
                                            if($estados[$i]['codigo'] . " " . $estados[$i]['descripcion'] == 'US-FL Florida'){
                                                echo " <option value='" . $estados[$i]['codigo'] . " " . $estados[$i]['descripcion'] . "' selected>" . $estados[$i]['descripcion'] . "</option>";
                                            }else{
                                                echo " <option value='" . $estados[$i]['codigo'] . " " . $estados[$i]['descripcion'] . "'>" . $estados[$i]['descripcion'] . "</option>";
                                            }
                                        }
                                        echo " </select>";
                                }
    echo "                  </div>";
    echo "                </div>";
    echo "                <div class='col-lg-12'>";
    echo "                    <label><span class='form-control' style='color: #009CDE'>Contact details</span> </label>";
    echo "                </div>";
    echo "                <div class='col-lg-12'>";
    echo "                    <table>";
    echo "                      <tr>";
    echo "                       <td>";
    echo "                         <div class='form-group'>";
                                        if(isset($nombre)){
                                                echo " <input type='text' class='form-control' value='" . $nombre . "' name='nombre' style='width:200px;' required>";
                                        }else{
                                                echo " <input type='text' class='form-control' placeholder='First name' name='nombre' style='width:200px;' required>";
                                        }
    echo "                         </div>";
    echo "                       </td>";
    echo "                       <td>";
    echo "                         <div class='form-group'>";
                                        if(isset($apellido)){
                                                echo " <input type='text' class='form-control' value='" . $apellido . "' name='apellido' style='width:200px;' required>";
                                        }else{
                                                echo " <input type='text' class='form-control' placeholder='Last name' name='apellido' style='width:200px;' required>";
                                        }        
    echo "                         </div>";
    echo "                       </td>";
    echo "                      </tr>";
    echo "                    </table>";
    echo "                </div>";
    echo "                <div class='col-lg-12'>";
    echo "                    <div class='form-group'>";
                                if(isset($email)){
                                        echo " <input type='email' class='form-control' value='" . $email . "' name='email' style='width:400px;' required>";
                                }else{
                                        echo " <input type='email' class='form-control' placeholder='Email' name='email' style='width:400px;' required>";
                                }     
    echo "                    </div>";
    echo "                </div>";
    echo "                <div class='col-lg-12'>";
    echo "                    <div class='form-group'>";
                                if(isset($telefono)){
                                        echo " <input type='text' class='form-control' value='" . $telefono . "' name='telefono' style='width:400px;' required>";
                                }else{
                                        echo " <input type='text' class='form-control' placeholder='Phone' name='telefono' style='width:400px;' required>";
                                }                     
    echo "                    </div>";
    echo "                <div class='col-lg-12'>";
    echo "                    <div class='form-group'>";
                                if(isset($en_sitio) && $en_sitio != false){
                                        echo " <input type='checkbox' value='" . $en_sitio . "' name='en_sitio' checked> I will be on site";
                                }else{
                                        echo " <input type='checkbox' name='en_sitio'> I will be on site";
                                }                     
    echo "                    </div>";
    echo "                </div>";
    echo "                <div class='col-lg-12' style='text-align: center'>";
    echo "                    <table class='form-group'>";
    echo "                        <tr>";
    echo "                            <td>";
    echo "                                <button type='submit' name='back' class='btn-boton-2'>Previous</button>";
    echo "                            </td>";
    echo "                            <td>";
    echo "                                <button type='submit' name='next' class='btn-boton-2'>Next:&nbspConfirm&nbspdetails</button>";
    echo "                            </td>";
    echo "                        </tr>";
    echo "                    </table>";
    echo "                </div>";
    echo "            </div>";
    echo "        </div>";
    echo "    </div>";
    echo " </form>";
        
    include("footer.html");
 
?>
