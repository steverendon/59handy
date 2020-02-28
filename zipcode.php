<!doctype html>
<html>
    <head>
        
        <title>59Handy</title>
        
        <!-- imagen titulo-->
        
        <link rel="shortcut icon" href="/img/logo_elite.png">
        
        <!-- escalable responsive-->
        
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        
        <!-- cdn bootstrap-->
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <!--maquina de escribir-->
        
        <script src="js/maquina_escribir.js"></script>
        
        <!-- bootstrap-->
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        
        <!-- estilos propios---->
        
        <link rel="stylesheet" href="css/estilos.css">
        
        <!-- cdn iconos fontawensome---->
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Smartsupp Live Chat script -->
        <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'f2da72213407e54ac20047707168e3352bcbc211';
        window.smartsupp||(function(d) {
          var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
          s=d.getElementsByTagName('script')[0];c=d.createElement('script');
          c.type='text/javascript';c.charset='utf-8';c.async=true;
          c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
        </script>


    </head>
    <body>
        
<div class="container"> 
        
    <!-- barra de navegacion-->
    
    <nav class="navbar navbar-expand-lg navbar-light" style="padding-left: 0">
        
            <!-- logo principal-->
        
          <a href="index.html"><img src="img/logo_elite.png" class="logo_principal"></a>
                
            <!-- slogan principal-->
                
              <!--<p class="slogan_principal">
                <a href="tel: 18669953784" class="enlaces_menu">Just Push It</a> 
                <a href="contact_us.html" class="enlaces_menu">Contacts Us</a>
                <a href="help.html" class="enlaces_menu">Help</a>
              </p>-->
        
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                
                <!-- items del menu -->
        
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
              <ul class="navbar nav">
                  <li class="nav-item">
                     <a class="enlaces_menu" href="/zipcode.html">Book An Appointment</a>
                  </li>
              </ul>
  
  
                <ul class=" navbar nav ml-auto">
                  <!-- <li class="nav-item">
                    <a class="enlaces_menu" href="/index.html" onclick="window.alert('Please check availability in your area')" >Book An Appointment</a>
                  </li>
                  <li class="nav-item">
                    <a class="enlaces_menu" href="become_partner.html">Become a Handyman</a>
                  </li>-->
                  <li class="nav-item">
                    <a class="enlaces_menu azul" href="tel: 18335942639" style="font-weight: 900"><i class="fas fa-phone-alt"></i> 24/7 Customer service 1 (833) 594-2639</a>
                  </li>
                </ul>
              </div>
                
                <!-- items del menu -->
                
            </nav>
    
</div>
        
<!--<h3 class="titulo_formulario"><b>Received form</b></h3>-->
    <div class="row justify-content-center my-5">
                <div class="col-lg-5">
                    <div class="row justify-content-center">
                        <form action="php/availability/handy_services.php?service=availability" method="post" id="gj-obe-integration-form" accept-charset="UTF-8" class="my-5 py-5">
                            
                            <?php
                                if(isset($_GET['message']) && !empty($_GET['message'])) {
                            ?>
                                <div class="alert alert-danger" role="alert">
                                  <?php $_GET['message']; ?>
                                </div>
                            
                            <?php
                                }
                            ?>
                            <div class="col-lg-12">
                                <table style="text-align: center; display: inline-block;">
                                    <tr>
                                        <td>
                                            <h1>Check Availability</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table class="w-75 m-auto">
                                              <tr>
                                                <td>
                                                    <input id="postalCodeField" name="zip" data-text_number="" placeholder="Zip Code" autocomplete="on" required="required" type="text" value="" class="form-control">
                                                </td>
                                                <td>
                                                    <button id="submit" name="op" type="submit" class="btn-boton">GO</button>
                                                </td>
                                              </tr>
                                            </table>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>
                                            <p class="pequenio">Your zipcode is required to check availability in your area</p>
                                        </td>
                                    </tr>
                                </table>
                                
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    <br>
    <br>  

    <!-- inicio del footer -->
    <footer>
        <div class="row justify-content-center">
            <div class="col-lg-3 centro">
                <img src="img/logo_blanco.png">
            </div>
           <!-- <div class="col-lg-3">
                <div class="cuadros_footer">
                    <h5>Address</h5>
                    <p>502 Palm st, Suite 1<br>West Palm Beach, FL.33401</p>
                </div>
            </div> -->
            <div class="col-lg-3">
                <div class="cuadros_footer">
                    <h5>Contacts Us</h5>
                    <p>Email:<br>cs@59handy.com<br>Phone: 1 (833) 59 HANDY</p>
                    <div class="iconos_redes">
                        <a href="https://www.instagram.com/59.handy/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/59handy/" target="_blank"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cuadros_footer">
                    <h5>Link</h5>
                    <a href="tel: 18335942639">Just Pust It</a><br>
                    <a href="contact_us.html">Contact Us</a><br>
                    <a href="help.html">Help</a><br>
                    <a href="https://elitee.co" target="_blank">Login</a><br>
                    <a href="become_partner.html">Become a Handyman</a>
                </div>
            </div>
        </div> 
    
         
            <p class="copy">&copy;Copyright 2005 - 2019 59Handy - All Rights Reserved</p>
            
            <!--
            
            <div class="col-lg-6">
                <div class="iconos_redes">
                    <a href="https://www.instagram.com/elitecleaningconcepts/?hl=es-la"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/eliteecc/"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            
-->
            

    </footer>
    
    </body>
</html>