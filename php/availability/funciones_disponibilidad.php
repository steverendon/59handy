<?php
/**
 * @author Fabio Alvarez
 * @package disponibilidad 59Handy
 * @copyright www.entrepreneur.com.co
 * 
**/
      
    //funcion para validar el zipcode y verificar disponibilidad
    function buscar_informacion_zona($codigo){
        // ip y name de la bd remota 10.193.101.255 disponibilidadZipCode.59handy.com";
        $conexion = mysqli_connect("localhost", "handy_systems", "Bs7DfsxLnzFx", "handy_disponibilidad");
        if (!$conexion) {
            echo "No pudo conectarse a la BD: " . mysqli_connect_error();
            exit;
        }
        //se selecciona la base de datos
        if (!mysqli_select_db($conexion, "handy_disponibilidad")) {
            echo "No ha sido posible seleccionar la BD: " . mysqli_connect_error();
            exit;
        }
        //se valida si el zip ingresado se encuentra en los zipcodes disponibles
        $consulta = "SELECT * FROM zipcode WHERE codigo=" . $codigo .";";
        $zipcodes = mysqli_query($conexion,$consulta);
        if(!$zipcodes){
            $mensaje  = 'Consulta no válida: ' . mysqli_connect_error() . "\n";
            $mensaje .= 'Consulta completa: ' . $consulta;
            return null;
        }
        $available_zone = false;
        if ($fila = mysqli_fetch_assoc($zipcodes)) {
            $available_zone = true;
        }
        
        mysqli_free_result($zipcodes);
        mysqli_close($conexion);
        if($available_zone){
            return $fila;
        }else{
            return null;
        }
    }
    
    //funcion para obtener los estados
    function cargar_estados(){
        $conexion = mysqli_connect("localhost", "handy_systems", "Bs7DfsxLnzFx", "handy_disponibilidad");
        if (!$conexion) {
            echo "No pudo conectarse a la BD: " . mysqli_connect_error();
            exit;
        }
        //se selecciona la base de datos
        if (!mysqli_select_db($conexion, "handy_disponibilidad")) {
            echo "No ha sido posible seleccionar la BD: " . mysqli_connect_error();
            exit;
        }
        $consulta = "SELECT * FROM estado;";
        $result = mysqli_query($conexion,$consulta);
        if(!$result){
            $mensaje  = 'Consulta no válida: ' . mysqli_connect_error() . "\n";
            $mensaje .= 'Consulta completa: ' . $consulta;
            return null;
        }
        $estados = array();
        while ($fila = mysqli_fetch_assoc($result)) {
            array_push($estados, $fila);
        }
        mysqli_free_result($result);
        mysqli_close($conexion);
        if(isset($estados)){
            return $estados;
        }else{
            return null;
        }
    }
    
    //funcion para enviar los correos de agendamiento del servicio
    function enviar_correo($email,$asunto,$mensaje) {
        
        $empresa = "59Handy";
        $host_email = "cs@59handy.com";
        //se enlistan los destinatarios del correo
        $otros_destinatarios = "rothware@gmail.com, rothware@hotmail.com, sales@59handy.com, erterthf@gmail.com";
        $email .= ", " . $host_email . ", " . $otros_destinatarios;
        
        //se define la cabecera del mensaje
        $header  = "To: ". $empresa . " <" . $host_email . ">\r\n";
        $header .= "From: ". $empresa . " <" . $host_email . ">\r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-type: text/html; charset: utf8 \r\n";
        
        //Se envia un correo a la cuenta de handy y al cliente
        if(mail($email, $asunto, $mensaje, $header)){
            return true;
        }else{
            return false;
        }
        
    }

    //funcion para construir el mensaje del cliente en formato html
    function construir_mensaje_html($array_datos){
        $mensaje = "";
        if(isset($array_datos) && count($array_datos) > 0){
            $mensaje = "
                <html>
                    <head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                    </head>
                    <body style='font-family: Roboto, sans-serif; font-display: swap'>
                        <p>Your service information is:</p>
                        <lu>
                            <li><b style='color: #009CDE'>Details of your handy service:</b></li>
                                <table>
                                    <tr>
                                        <td style='font-weight:bold'>Handy type</td>
                                        <td style='font-weight:bold'>Description</td>
                                        <td style='font-weight:bold'>Date</td>
                                        <td style='font-weight:bold'>Time</td>
                                    </tr>
                                    <tr>
                                        <td>" . $array_datos[0] . "</td>
                                        <td>" . $array_datos[1] . "</td>
                                        <td>" . $array_datos[2] . "</td>
                                        <td>" . $array_datos[3] . "</td>
                                    </tr>
                                </table>
                            <li><b style='color: #009CDE'>Address:</b></li>
                                <table>
                                    <tr>
                                        <td style='font-weight:bold'>Location</td>
                                        <td style='font-weight:bold'>City</td>
                                        <td style='font-weight:bold'>State</td>
                                    </tr>
                                    <tr>
                                        <td>" . $array_datos[4] . "</td>
                                        <td>" . $array_datos[5] . "</td>
                                        <td>" . $array_datos[6] . "</td>
                                    </tr>
                                </table>
                            <li><b style='color: #009CDE'>Contact details:</b></li>
                            <table>
                                <tr>
                                    <td style='font-weight:bold'>Name</td>
                                    <td style='font-weight:bold'>Email</td>
                                    <td style='font-weight:bold'>Phone</td>
                                    <td style='font-weight:bold'>Site</td>
                                </tr>
                                <tr>
                                    <td>" . $array_datos[7] . "</td>
                                    <td>" . $array_datos[8] . "</td>
                                    <td>" . $array_datos[9] . "</td>
                                    <td>" . $array_datos[10] . "</td>
                                </tr>
                            </table>
                        </lu>
                        <br>
                        <p style='color: #009CDE'>Customer service (833) 594-2639
                        <br>Email: cs@59handy.com
                        <br>ON DEMAND Handy Services
                        <br><a href='https://www.59handy.com'>www.59Handy.com</a></p>
                    </body>
                </html>";
        }

        return $mensaje;
    }
?>

