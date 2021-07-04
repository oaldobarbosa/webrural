<!DOCTYPE html>
<html>

<head>
    <?php $pagina = "duvidas-frequentes"; include('../head.php'); ?>
    <title>Web Rural</title>
</head>

<body>

    <?php include('../header.php') ?>


    <!--conteudo -->

    <div class="content">

        <!-- cobertura -->
        <div class="quem-somos-index">
            <div class="container" id="container-title">
                <div class="row">
                    <div class="col-12">
                        <h3 class="quem-somos-title">DÚVIDAS FREQUENTES</h3>
                    </div>
                </div>
            </div>                  
        </div>

        <!-- duvidas frequentes -->
        <div class="box-mapa"  style="background-color: #F6F6F5;">

            <div class="container" >
                <div class="row"> 

                    <div id="" class="col-md-6">
                    <img src="../img/duvidas-frequentes.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-6">

                        <!-- 1 -->
                        <div class="panel panel-primary">                            
                            <div class="panel-heading panel-collapsed">+ Minha Internet Caiu, o que Fazer?</div>
                            
                            <div class="panel-body">
                                <p>Verifique a energina, reinicie o roteador, e se caso não der certo, se vira... </p>                 
                                                                
                            </div>                            
                        </div>

                        <!-- 2 -->
                        <div class="panel panel-primary">                            
                            <div class="panel-heading panel-collapsed">+ COMO CHEGAR?</div>
                            
                            <div class="panel-body">
                                <p>content virá aqui....</p>                 
                                                                
                            </div>                            
                        </div>
                        

                        <!-- 3 -->
                        <div class="panel panel-primary">                            
                            <div class="panel-heading panel-collapsed">+ COMO CHEGAR?</div>
                            
                            <div class="panel-body">
                                <p>content virá aqui....</p>                 
                                                                
                            </div>                            
                        </div>

                        <!-- 4 -->
                        <div class="panel panel-primary">                            
                            <div class="panel-heading panel-collapsed">+ COMO CHEGAR?</div>
                            
                            <div class="panel-body">
                                <p>content virá aqui....</p>                 
                                                                
                            </div>                            
                        </div>

                        <!-- 5 -->
                        <div class="panel panel-primary">                            
                            <div class="panel-heading panel-collapsed">+ COMO CHEGAR?</div>
                            
                            <div class="panel-body">
                                <p>content virá aqui....</p>                 
                                                                
                            </div>                            
                        </div>

                        <!-- 6 -->
                        <div class="panel panel-primary">                            
                            <div class="panel-heading panel-collapsed">+ COMO CHEGAR?</div>
                            
                            <div class="panel-body">
                                <p>content virá aqui....</p>                 
                                                                
                            </div>                            
                        </div>

                        <!-- 7 -->
                        <div class="panel panel-primary">                            
                            <div class="panel-heading panel-collapsed">+ COMO CHEGAR?</div>
                            
                            <div class="panel-body">
                                <p>content virá aqui....</p>                 
                                                                
                            </div>                            
                        </div>

                        

                    </div>


                </div>
            </div>                  
        </div>


        

    </div>

<?php include('../footer.php') ?>

<script>

$(document).on('click', '.panel-heading', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
        
		$this.find('i').removeClass('fa fa-angle-up').addClass('fa fa-angle-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
        
		$this.find('i').removeClass('fa fa-angle-down').addClass('fa fa-angle-up');
	}
});

</script>

</body>

</html>