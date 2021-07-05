<!DOCTYPE html>
<html>

<head>
    <?php $pagina = "quem-somos"; include('../layout/head.php'); ?>
    <title>Quem Somos</title>
</head>

<body>

    <?php include('../layout/header.php') ?>


    <!--conteudo -->

    <div class="content">

        <div class="container-fluid" id="container-fluid">

            <!-- quem somos -->
            <div class="quem-somos-index">
                <div class="container" id="container-title">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="quem-somos-title">QUEM SOMOS</h3>
                        </div>
                    </div>
                </div>                  
            </div>

            <!-- info one area-->
            <div class="info-one-area">
                <div class="container">
                <div class="row">
                    
                    <div class="col-md-6" id="col-quem-somos">
                        <img src="../img/empresas-01.png" alt="Imagem" class="img-fluid" id="img-quem-somos"   >
                    </div>
                    <div class="col-md-6" id="col-quem-somos">
                        <h3 class="title">
                            A EMPRESA CERTA PARA VOCÊ!
                        </h3>
                        
                        <p class="text">
                            Selecione o plano que mais combina com você. 
                            Aumente ou diminua a qualquer momento.
                            E desfrute da melhor Internet da  Região.
                            Selecione o plano que mais combina com você. 
                            Aumente ou diminua a qualquer momento.
                            E desfrute da melhor Internet da  Região.
                        </p>
                        
                    </div>
                </div>

                </div>
                    
            </div>


            <!-- info two area-->
            <div class="info-one-area" style="background-color: white;">
                <div class="container">
                <div class="row" id="pai">
                    
                    <div class="col-md-6" id="col-quem-somos" contagem="2">
                        <h3 class="title">
                            PROFISSIONAIS EXPERIENTES
                        </h3>
                        
                        <p class="text">
                            Selecione o plano que mais combina com você. 
                            Aumente ou diminua a qualquer momento.
                            E desfrute da melhor Internet da  Região.
                            Selecione o plano que mais combina com você. 
                            Aumente ou diminua a qualquer momento.
                            E desfrute da melhor Internet da  Região.
                        </p>
                        
                    </div>

                    <div class="col-md-6" id="col-quem-somos" contagem="1">
                        <img src="../img/empresas-01.png" alt="Imagem" class="img-fluid" id="img-quem-somos">
                    </div>

                </div>

                </div>
                    
            </div>



            <!-- info three area-->
            <div class="info-one-area">
                <div class="container">
                <div class="row">
                    
                    <div class="col-md-6" id="col-quem-somos">
                        <img src="../img/empresas-01.png" alt="Imagem" class="img-fluid" id="img-quem-somos">
                    </div>
                    <div class="col-md-6" id="col-quem-somos">
                        <h3 class="title">
                            ESTRUTURA SÓLIDA E SEGURA
                        </h3>
                        
                        <p class="text">
                            Selecione o plano que mais combina com você. 
                            Aumente ou diminua a qualquer momento.
                            E desfrute da melhor Internet da  Região.
                            Selecione o plano que mais combina com você. 
                            Aumente ou diminua a qualquer momento.
                            E desfrute da melhor Internet da  Região.
                        </p>
                        
                    </div>
                </div>

                </div>
                    
            </div>





















        </div>


    </div>

<script>

    if(window.screen.availWidth < 750 ){

        var novosElementos = $('#pai div').get().sort(function (a, b) {
        return a.getAttribute('contagem') - b.getAttribute('contagem')
        }).map(function(el){
            return $(el).clone(true)[0];
        });
        $('#pai').html(novosElementos).clone(true, true);

    }

</script>

<?php include('../layout/footer.php') ?>

</body>

</html>