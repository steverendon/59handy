<?php
/**
 * @author Fabio Alvarez
 * @package disponibilidad 59Handy
 * @copyright www.entrepreneur.com.co
 * 
**/

error_reporting(E_ALL);
ini_set('display_errors', '1');
    session_start();
    $servicio = $_GET['service'];
    
    //controlador principal de la aplicación de disponibilidad
    switch($servicio){
        
        case 'availability':
            //se verifica la disponibilidad de handy para el zipcode
            $zipcode = $_POST['zip'];
            //primero se verifican las areas asociadas al zipcode
            //echo "<div id='areas_zipcode' class='modal'>";
            //echo "  <h2> " . $zipcode . " " . $n="nombre area" . "</h2>";
            //echo "</div>";
            require_once('funciones_disponibilidad.php');
            $zone = buscar_informacion_zona($zipcode);
            if($zone != null){
                $codigo = $zone['codigo'] . " ";
                $descripcion = "(" . $zone['descripcion'] . ")";
                $condado = $zone['condado'];
                $_SESSION["zipcode"] = $codigo;
                $_SESSION["descripcion_zipcode"] = $descripcion;
                $_SESSION["condado"] = $condado;
                
                include("registro_solicitud.php");
                
            }else{
                $_SESSION['zip'] = $zipcode;
                session_destroy();
                //include("no_service_zone.php");
                header("Location: https://59handy.com/zipcode.php?message=Sorry! there is no Handy Services in this moment for your area, zipcode: $zipcode");
            }
            break;
            
        case 'details':

            //se valida si el usuario desea regresar a la pagina de inicio
            if(isset($_POST['back'])){
                session_destroy();
                header("Location: https://59handy.com/index.html");
                break;
            }
            
            //se registran los datos del servicio y se solicitan detalles del cliente
            if(isset($_SESSION['zipcode'])){
                $descripcion_handy = $_POST['descripcion_handy'];
                $fecha = $_POST['fecha'];
                $hora = $_POST['hora'];
                
                $_SESSION["descripcion_handy"] = $descripcion_handy;
                $_SESSION["fecha"] = $fecha;
                $_SESSION["hora"] = $hora;
                
                require_once('funciones_disponibilidad.php');
                $_SESSION["estados"] = cargar_estados();  
                
                include("registro_detalles.php");
    
            }
            break;
            
        case 'confirm':

            //se valida si el usuario desea regresar para editar la solicitud
            if(isset($_POST['back'])){
                include("registro_solicitud.php");
                break;
            }

            //se registran los datos del cliente y se solicita confirmación
            if(isset($_SESSION['zipcode'])){
                $tipo_handy = $_POST['handy_type'];
                $direccion = $_POST['direccion'];
                $ciudad = $_POST['ciudad'];
                $estado = $_POST['estado'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $email = $_POST['email'];
                $telefono = $_POST['telefono'];
                $en_sitio = false;
                if(isset($_POST['en_sitio'])){
                    $en_sitio = $_POST['en_sitio'];
                }
               
                $_SESSION["handy_type"] = $tipo_handy;
                $_SESSION["direccion"] = $direccion;
                $_SESSION["ciudad"] = $ciudad;
                $_SESSION["estado"] = $estado;
                $_SESSION["nombre"] = $nombre;
                $_SESSION["apellido"] = $apellido;
                $_SESSION["email"] = $email;
                $_SESSION["telefono"] = $telefono;
                $_SESSION["en_sitio"] = $en_sitio;

                include("confirmacion_solicitud.php");
            }
            break;
            
            
        case 'save':

            //se valida si el usuario desea regresar para editar los detalles
            if(isset($_POST['back'])){
                include("registro_detalles.php");
                break;
            }

            //se guarda la información y se le notifica a los responsables via email
            require_once('funciones_disponibilidad.php');
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

            $asunto = "New handy service order";
            
            //se construye el mensaje html a partir de los datos
            $array_datos = array(
                $tipo_handy,
                $descripcion_handy,
                $fecha,
                $hora,
                $direccion . ", " . $descripcion_zipcode . ", " . $condado,
                $ciudad,
                $estado,
                $nombre . " " . $apellido,
                $email,
                $telefono,
                ($en_sitio? ", I will be on site." : ", I won't be on site.")
            );
            $mensaje = construir_mensaje_html($array_datos);

            //se envia el correo al tecnico de handy y al cliente    
            $result = enviar_correo($email,$asunto,$mensaje);
            if($result){
                session_destroy();
                include("exito_sent_email.php");
            }else{
                session_destroy();
                include("error_servicio_no_guardado.php");
            }
            break;
            
        default:
                session_destroy();
                include("no_service_zone.php");
            break;
        
    }

?>