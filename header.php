<header>
    <div class="container" id="nav-container">

        <nav class="navbar navbar-expand-lg fixed-top">

            <a href="#" class="navbar-brand">

                <?php
                    if ($pagina == "index") {
                        echo '<img id="logo" src="img/logo.png" alt="Web Rural"> ';		
                    } else {
                        echo '<img id="logo" src="../img/logo.png" alt="Web Rural"> ';
                    }
                ?>
                        
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
            aria-controls="navbar-links" aria-expaned="false" aria-label="Toggle navigation">
            
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                
            
                    <nav class="menu">
                        <ul>
                            <li><a class="nav-item nav-link" <?php $href = $pagina == "index" ? "href='#'" : "href='../index.php'"; echo $href;  ?> >INÍCIO</a></li>

                            <li><a class="nav-item nav-link" href="#">EMPRESA <i class="fas fa-angle-down"></i> </a>
                                <ul>
                                    <li><a class="nav-item nav-link" <?php $href = $pagina == "index" ? "href='empresa/quem-somos.php'" : "href='../empresa/quem-somos.php'"; echo $href;  ?> >QUEM SOMOS</a></li>
                                    <li><a class="nav-item nav-link" <?php $href = $pagina == "index" ? "href='empresa/cobertura.php'" : "href='../empresa/cobertura.php'"; echo $href;  ?> >COBERTURA</a></li>
                                </ul>
                            </li>

                            <li><a class="nav-item nav-link" href="#">SERVIÇOS <i class="fas fa-angle-down"></i> </a>
                                <ul>
                                    <li><a class="nav-item nav-link" <?php $href = $pagina == "index" ? "href='servicos/intennet.php'" : "href='../servicos/internet.php'"; echo $href;  ?> >INTERNET</a></li>
                                    <li><a class="nav-item nav-link" <?php $href = $pagina == "index" ? "href='servicos/seguranca.php'" : "href='../servicos/seguranca.php'"; echo $href;  ?> >SEGURANÇA</a></li>                                   
                                </ul>
                            </li>

                            <li><a class="nav-item nav-link" href="#">CONTATO <i class="fas fa-angle-down"></i> </a>
                                <ul>                                    
                                    <li><a class="nav-item nav-link" <?php $href = $pagina == "index" ? "href='contato/fale-conosco.php'" : "href='../contato/fale-conosco.php'"; echo $href;  ?> >FALE CONOSCO</a></li>
                                    <li><a class="nav-item nav-link" <?php $href = $pagina == "index" ? "href='contato/duvidas-frequentes.php'" : "href='../contato/duvidas-frequentes.php'"; echo $href;  ?>>DÚVIDAS FREQUENTES</a></li>                                    
                                </ul>
                        
                            </li>
                        </ul>
                    </nav>



            </div>

        </nav>
    </div>
</header>