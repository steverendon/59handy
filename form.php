<?php require "overall/header.php" ?>
        
                
<?php require "overall/menu.php" ?>

<!-- barra navegacion -->
    
</div>
        
        
    <!-- barra de navegacion-->

<h2 class="titulo_formulario">Handy Services available in your area</h2>

    <div class="w-75 mx-auto my-3 p-3 form-zip">

        <div class="container">
            <div class="progress mb-3">
                <div class="progress-bar bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <form id="regiration_form" novalidate action="sendEmail.php" method="post">

            <input type="hidden" value="<?php echo $zipcode ?>" name="zip">

                <fieldset>
                <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> Tell us about your handy service</p>
                <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <!-- <label for="exampleFormControlTextarea1">Tell us about your handy service</label> -->
                                <textarea name="descripcion" class="form-control" id="description" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> Pick a date</p>
                                    <input type="date" value="<?php echo date("Y-m-d") ?>" min="<?php echo date("Y-m-d") ?>" class="form-control" name="fecha" id="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> Pick a time</p>
                                    <select class="custom-select" name="hora" id="selectDate" onchange="">
                                   <!-- <option value="0" disabled>Open this select menu</option> -->

                                    </select>
                                </div>
                            </div>
                        </div>
                    <button type="button" name="data[password]" id="btn1" class="next selected">Next <i class="fas fa-arrow-circle-right"></i></button>
                </fieldset>
                <fieldset >
                <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> Handy Type</p>
                                <select class="custom-select" name="handy_type">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Home</option>
                                    <option value="2">Business</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> Address</p>
                                <input type="text" class="form-control" placeholder="" name="direccion">
                            </div>
                        </div>
                    </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> City</p>
                                    <input type="text" class="form-control" name="ciudad" placeholder="">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> Province</p>
                                    <input type="text" class="form-control" name="estado" placeholder="">
                                </div>
                            </div>  
                        </div>
                    <button type="button" name="previous" class="previous selected" value="Previo">Back <i class="fas fa-arrow-circle-left"></i></button>
                    <button type="button" name="next" class="next selected" value="Siguiente">Next <i class="fas fa-arrow-circle-right"></i></button>
                </fieldset>
                <fieldset >
                <div class="form-row">
                    <div class="col-md-6">
                            <div class="form-group">
                                <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> First Name</p>
                                <input type="text" class="form-control" name="nombre" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> Last Name</p>
                                <input type="text" class="form-control" name="apellido" placeholder="">
                            </div>
                        </div>
                    </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> Email</p>
                                    <input type="email" class="form-control" name="email" placeholder="">
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="pt-3 h4 order"><i class="fas fa-chevron-circle-right"></i> Phone</p>
                                    <input type="text" class="form-control" name="telefono" placeholder="">
                                </div>
                            </div>  
                        </div>

                        <div class="form-row text-center"> 
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="ensitio" id="optionsRadios3" value="option3">
                                        I will be on site 
                                    </label>
                                </div>
                            </div>  
                        </div>   
                        <button type="button" name="previous" class="previous selected" value="Previo">Back <i class="fas fa-arrow-circle-left"></i></button>
                        <button type="submit" name="submit" class="selected" id="submit_data">Send <i class="fas fa-paper-plane"></i></button>
                </fieldset>
            </form>
        </div>
    </div>
        
    <!-- inicio del footer -->

    <?php require "overall/footer.php" ?>
    
    </body>
</html>