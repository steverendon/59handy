<?php require "overall/header.php" ?>
        
                
<?php require "overall/menu.php" ?>

<!-- barra nav -->
    
</div>
        
        
    <!-- barra de navegacion-->
        
<h1 class="titulo_formulario"><b>Become a Handyman</b></h1>
<form action="php/guardar_partner.php" method="POST" enctype="multipart/form-data">     
    <div class="row cont">
        <div class="col-lg-7">
            <div class="jumbotron">
                <div class="formulario_become_partner">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>From Plumbers, Electricians, to smart home installer, 59Handy is always looking for service professionals who are experts in their trade and want to provide great service to our customers.</p> 
                            <br>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name / Nombre" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last / Apellido" name="apellido" required>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email / Correo Electronico" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                            <select class="form-control" id="exampleSelect1" name="servicio">
                                <option>Apply To / Aplicar a:</option>
                                <option>Handyman</option>
                                <option>Cleaning</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="cv" required accept=".pdf,.docx">
                                <label class="custom-file-label" for="inputGroupFile02">Add Resume / Agregar Hoja de Vida</label>
                            </div>
                            </div>
                        </div>
                            <button type="submit" class="btn-boton">Become a Handyman&nbsp&nbsp<i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <img src="img/imagenes_varias/partners.png" width="500" height="420px">
        </div>
    </div>
</form>        
        
    <!-- inicio del footer -->
        
    <?php require "overall/footer.php" ?>
    
    </body>
</html>