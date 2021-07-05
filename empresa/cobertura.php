<!DOCTYPE html>
<html>

<head>
    <?php $pagina = "cobertura"; include('../layout/head.php'); ?>
    <title>Cobertura</title>
</head>

<body>

    <?php include('../layout/header.php') ?>


    <!--conteudo -->

    <div class="content">

        <!-- cobertura -->
        <div class="quem-somos-index">
            <div class="container" id="container-title">
                <div class="row">
                    <div class="col-12">
                        <h3 class="quem-somos-title">COBERTURA</h3>
                    </div>
                </div>
            </div>                  
        </div>

        <!-- mapa cobertura -->
        <div class="box-mapa" id="cobertura-area">

            <div class="container col-md-12" id="container-mapa">
                <div class="row"> 

                    <div id="mapaC" class="col-md-6">
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1LFVlfgJ7c07pZiCi3ZeY8hUhrVqfzy4G" ></iframe>
                    </div>

                    <div class="col-md-6" id="box-texto">

                        <h3 class="cobertura-title">
                            COBERTURA REGIONAL
                        </h3>
                        
                        <p class="cobertura-area">
                        Uma cobertura cada vez maior e melhor para você.
                        Estamos expandindo nossa cobertura cada vez mais, 
                        para melhor atender nossos clientes.
                        </p>

                        

                        <p><i class="fas fa-map-marker-alt"></i> Igaporã - BA (SEDE)</p>
                        <p><i class="fas fa-map-marker-alt"></i> Riacho de Santana - BA</p>
                        <p><i class="fas fa-map-marker-alt"></i> Matina - BA</p>
                        <p><i class="fas fa-map-marker-alt"></i> Caetité - BA</p>
                        <p><i class="fas fa-map-marker-alt"></i> Tanque Novo - BA</p>

                    </div>


                </div>
            </div>                  
        </div>


        

    </div>

<?php include('../layout/footer.php') ?>

</body>

</html>