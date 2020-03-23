<?php require "overall/header.php" ?>
        
                
<?php require "overall/menu.php" ?>
        
    <!-- barra de navegacion-->
    
    
</div>
        
<!--<h3 class="titulo_formulario"><b>Received form</b></h3>-->
    <div class="row justify-content-center my-5">
                        <?php
                            if(isset($_GET['message']) && !empty($_GET['message'])) {
                        ?>
                            <div class="alert alert-danger w-75 mx-auto my-2" role="alert">
                              <?php echo $_GET['message']; ?>
                            </div>
                            
                        <?php
                            }
                        ?>
                <div class="col-lg-5">
                    <div class="row justify-content-center">
                        <form action="verify_zipcode.php" method="get" id="gj-obe-integration-form" accept-charset="UTF-8" class="mb-5">
                            
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
                                                    <input id="postalCodeField" name="zipcode" data-text_number="" placeholder="Zip Code" autocomplete="on" required="required" type="text" value="" class="form-control">
                                                </td>
                                                <td>
                                                    <button id="submit" type="submit" class="btn-boton">GO</button>
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


    <?php require "overall/footer.php" ?>
    
    </body>
</html>