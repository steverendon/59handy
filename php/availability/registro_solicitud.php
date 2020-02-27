<?php
/**
 * @author Fabio Alvarez
 * @package disponibilidad 59Handy
 * @copyright www.entrepreneur.com.co
 * 
**/
    include("header.html");

    if(isset($_SESSION["descripcion_handy"])){
        $descripcion_handy = $_SESSION["descripcion_handy"];
    }
    if(isset($_SESSION["fecha"])){
        $fecha = $_SESSION["fecha"];
    }
    if(isset($_SESSION["hora"])){
        $hora = $_SESSION["hora"];
    }

    echo " <form method='POST' action='handy_services.php?service=details'>";
    echo "  <div class='jumbotron'>";
    echo "      <div class='formulario_become_partner cuadro-contacto'>";
    echo "           <div class='row justify-content-center'>";
    echo "             <div class='col-lg-12'>";
    echo "                  <label for='descripcion_handy'><span class='form-control' style='color: #009CDE'>Tell us about your handy service</span> </label>";
    echo "                      <div class='form-group'>";
                                    if(isset($descripcion_handy)){
                                        echo " <textarea name='descripcion_handy' rows='4' cols='50' maxlength='200' style='width:100%;' required>" . $descripcion_handy . "</textarea>";
                                    }else{
                                        echo " <textarea placeholder='For example: Electrical service at your home.' name='descripcion_handy' rows='4' cols='50' maxlength='200' style='width:400px;' required></textarea>";
                                    }
    echo "                      </div>";
    echo "             </div>";
    echo "             <div class='col-lg-12'>";
    echo "                  <label for='fecha'><span class='form-control' style='color: #009CDE'>Pick a date and time</span> </label>";
    echo "                   <div class='form-group'>";
    echo "                      <table>";
    echo "                          <tr>";
    echo "                              <td>";
    echo "                                  <div id='datepicker'></div>";
    echo "                                  <input type='hidden' id='alternate' name='fecha'>";    
    echo "                              </td>";
    echo "                              <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
    echo "                              <td>";
    echo "                                  <div class='col-lg-12'>";
    echo "                                      <p style='color: #009CDE; width:150px;'>Monday to sunday</p>";
    echo "                                      <div class='form-group'>";
                                                    if(isset($hora)){
                                                        if($hora == '8-10 am'){
                                                            echo " <input type='radio' name='hora' value='8-10 am' checked> 8 - 10 am";
                                                        }else{
                                                            echo " <input type='radio' name='hora' value='8-10 am'> 8 - 10 am";
                                                        }
                                                        echo "<br>";
                                                    }else{
                                                            //por defecto se selecciona este horario
                                                            echo " <input type='radio' name='hora' value='8-10 am' checked> 8 - 10 am";
                                                            echo "<br>";
                                                    }                                
                                                    if(isset($hora)){    
                                                        if($hora == '10-12 am'){
                                                            echo " <input type='radio' name='hora' value='10-12 am' checked> 10 - 12 am";
                                                        }else{
                                                            echo " <input type='radio' name='hora' value='10-12 am'> 10 - 12 am";
                                                        }
                                                        echo "<br>";
                                                    }else{
                                                            echo " <input type='radio' name='hora' value='10-12 am'> 10 - 12 am";
                                                            echo "<br>";
                                                    }                  
                                                    if(isset($hora)){     
                                                        if($hora == '12-2 pm'){
                                                            echo " <input type='radio' name='hora' value='12-2 pm' checked> 12 - 2 pm";
                                                        }else{
                                                            echo " <input type='radio' name='hora' value='12-2 pm'> 12 - 2 pm";
                                                        }
                                                        echo "<br>";
                                                    }else{
                                                            echo " <input type='radio' name='hora' value='12-2 pm'> 12 - 2 pm";
                                                            echo "<br>";
                                                    }                  
                                                    if(isset($hora)){    
                                                        if($hora == '2-4 pm'){
                                                            echo " <input type='radio' name='hora' value='2-4 pm' checked> 2 - 4 pm";
                                                        }else{
                                                            echo " <input type='radio' name='hora' value='2-4 pm'> 2 - 4 pm";
                                                        }
                                                        echo "<br>";
                                                    }else{
                                                            echo " <input type='radio' name='hora' value='2-4 pm'> 2 - 4 pm";
                                                            echo "<br>";
                                                    }
                                                    if(isset($hora)){      
                                                        if($hora == '4-6 pm'){
                                                            echo " <input type='radio' name='hora' value='4-6 pm' checked> 4 - 6 pm";
                                                        }else{
                                                            echo " <input type='radio' name='hora' value='4-6 pm'> 4 - 6 pm";
                                                        }
                                                        echo "<br>";
                                                    }else{
                                                            echo " <input type='radio' name='hora' value='4-6 pm'> 4 - 6 pm";
                                                            echo "<br>";
                                                    }
    echo "                                      </div>";
    echo "                                  </div>";                                        
    echo "                              </td>";
    echo "                          </tr>";
    echo "                      </table>";
                                    if(isset($fecha)){
                                        //echo " <input type='text' value='". $fecha ."' class='form-control' name='fecha' style='width:300px;' maxlength='10' required>";
                                    }else{
                                        //echo " <input type='text' class='form-control' name='fecha' style='width:300px;' maxlength='10' required>";
                                    }
                                    
    echo "                   </div>";
    echo "             </div>";
    echo "               <div class='col-lg-12' style='text-align: center'>";
    echo "                  <table class='form-group'>";
    echo "                      <tr>";
    echo "                          <td>";
    echo "                              <button type='submit' name='back' class='btn-boton-2'>Back</button>";
    echo "                          </td>";
    echo "                          <td>";
    echo "                              <button type='submit' name='next' class='btn-boton-2'>Next:&nbspHandy&nbspservice&nbspaddress</button>";
    echo "                          </td>";
    echo "                       </tr>";
    echo "                  </table>";
    echo "               </div>";
    echo "            </div>";
    echo "         </div>";
    echo "     </div>";
    echo "  </form>";
   
    include("footer.html");
 
?>
 