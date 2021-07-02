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
                <div class="navbar-nav">
                    <a class="nav-item nav-link" id="home-menu">Menu</a>
                    <a class="nav-item nav-link" id="about-menu">About</a>
                    <a class="nav-item nav-link" id="services-menu">Servicos</a>
                    <a class="nav-item nav-link" id="team-menu">Team</a>
                    <a class="nav-item nav-link" id="portfolio-menu">Portifolio</a>
                    <a class="nav-item nav-link" id="contact-menu">Contato</a>
                </div>
            </div>

        </nav>
    </div>
</header>