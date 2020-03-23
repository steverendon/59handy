<?php require "overall/header.php" ?>
        
                
<?php require "overall/menu.php" ?>

<!-- barra navegacion -->
    
</div>
        
        
    <!-- barra de navegacion-->

<h2 class="titulo_formulario">Contact Us</h2>
        
<form method="POST" action="php/enviar_formulario_contacto.php">

    <div class="jumbotron">
        <div class="formulario_become_partner cuadro-contacto">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="nombre" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" name="telefono" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Give us some details?" name="comentarios" required></textarea>
                    </div>
                </div>
                <div class="col-lg-4" style="text-align: center">
                    <button type="submit" class="btn-boton">Submit</button>
                </div>
            </div>
        </div>
    </div>

</form>
        
    <!-- inicio del footer -->

    <?php require "overall/footer.php" ?>
    
    </body>
</html>