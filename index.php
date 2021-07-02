<!DOCTYPE html>
<html>

<head>
    <?php $pagina = "index"; include('head.php'); ?>
    <title>Web Rural</title>
</head>

<body>

    <?php include('header.php') ?>


    <!--conteudo -->

    <div class="content">

        <div class="container-fluid" id="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <!--indicadores -->
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <!--iner do carrousel -->
                <div class="carousel-inner">
                    <!--item 1 -->
                    <div class="carousel-item active">
                        <img src="img/1.jpg" class="d-block w-100" alt="Web Rural">
                        <!--textos dos slides -->
                        <div class="carousel-caption d-none d-md-block">
                            <p>WEB RURAL</p>
                            <h2>LEVANDO CONEXÃO ATÉ A SUA CASA!</h2>
                        </div>
                    </div>

                    <!--item 2 -->
                    <div class="carousel-item ">
                        <img src="img/2.jpg" class="d-block w-100" alt="Web Rural">
                        <!--textos dos slides -->
                        <div class="carousel-caption d-none d-md-block">
                            <p>WEB RURAL</p>
                            <h2>A COBERTURA QUE MAIS CRESCE!</h2>
                        </div>
                    </div>

                    <!--item 3 -->
                    <div class="carousel-item ">
                        <img src="img/3.png" class="d-block w-100" alt="Web Rural">
                        <!--textos dos slides -->
                        <div class="carousel-caption d-none d-md-block">
                            <p>WEB RURAL</p>
                            <h2>PARA TODO TIPO DE CLIENTE!</h2>
                        </div>
                    </div>

                </div>

                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


            </div>
            
            <!-- info one area-->
            <div class="info-one-area">
                <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <img src="img/empresas-01.png" alt="Imagem" class="info-one-img img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h3 class="info-one-title">
                            A EMPRESA CERTA PARA VOCÊ!
                        </h3>
                        
                        <p class="info-one-text">
                            Confiança, qualidade, gestão eficiente, 
                            tradição, estrutura sólida, credibilidade 
                            e transparência!
                        </p>
                        
                    </div>
                </div>

                </div>
                    
            </div>

            <!-- nossos serviços -->
            <div class="nossos-servicos-index">
                <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="nossos-servicos-title">NOSSOS SERVIÇOS:</h3>

                    </div>
                </div>

                </div>
                    
            </div>

            <!-- servico one index -->
            <div class="servico-one-index">
                <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <h3 class="service-one-title">
                            INTERNET RESIDENCIAL E RURAL
                        </h3>
                        
                        <p class="service-one-text">
                        Com análise precisa e anos de experiência, oferecemos serviços de segurança totalmente customizados, 
                        desenvolvidos sob medida para indústrias de diferentes segmentos, condomínios ou outras instituições,
                        que necessitem terceirizar serviços de segurança com qualidade e eficiência.
                        </p>

                        <a href="servicos/internet.php">
                            <button type="button" id="btn-service-one" class="btn">Saiba Mais</button>
                        </a>
                        
                    </div>
                    
                    <div class="col-md-6">
                        <img src="img/internet-01.jpg" alt="Imagem" class="info-one-img img-fluid">
                    </div>
                    
                </div>

                </div>
                    
            </div>

            <!-- servico two index -->
            <div class="servico-two-index">
                <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <img src="img/seguranca-01.jpg" alt="Imagem" class="info-one-img img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h3 class="service-two-title">
                            MONITORAMENTO DE SEGURANÇA
                        </h3>
                        
                        <p class="service-two-text">
                        Com análise precisa e anos de experiência, oferecemos serviços de segurança totalmente customizados, 
                        desenvolvidos sob medida para indústrias de diferentes segmentos, condomínios ou outras instituições,
                        que necessitem terceirizar serviços de segurança com qualidade e eficiência.
                        </p>

                        <a href="servicos/seguranca.php">
                            <button type="button" id="btn-service-two" class="btn">Saiba Mais</button>
                        </a>
                                          
                    </div>
                </div>

                </div>
                    
            </div>

            <!-- nossos valores index -->
            <div class="nossos-valores-index">
                <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="nossos-servicos-title">NOSSOS VALORES:</h3>

                    </div>
                </div>

                </div>
                    
            </div>

            <!-- nossos valores area -->
            <div class="nossos-valores-area">
                <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="nossos-valores-text">
                            Para muitas pessoas, o primeiro “bom dia” que recebem 
                            fora do ambiente familiar em seus condomínios e empresas 
                            é de extrema importância para um dia produtivo. Este 
                            simples gesto representa o cuidado com todos os detalhes 
                            que estão sob os serviços e a proteção do Grupo Web Rural.
                        </p>

                    </div>
                </div>

                </div>
                    
            </div>

            <!-- fale conosco orçamento -->
            <div class="fale-conosco-orcamento">
                <div class="container">
                <div class="row">
                    <div class="col-12">
                        <i class="far fa-envelope"> </i>
                        <h3 class="fale-conosco-orcamento">  FALE CONOSCO, E SOLICITE UM ORÇAMENTO</h3>
                        <p>Envie uma mensagem, tire suas dúvidas ou mande solicitão de orçamento para o Grupo Web Rural.</p>
               
                    </div>
                </div>

                </div>
                    
            </div>

        </div>

    </div>

    <?php include('footer.php') ?>

</body>

</html>


