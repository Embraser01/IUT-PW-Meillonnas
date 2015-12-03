<!DOCTYPE html>
<html>
	<head>
		<title>Auberge Au Vieux Meillonnas</title>
		<meta charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="styles/menu.css">
		<link rel="stylesheet" href="styles/index.css">
		<link rel="stylesheet" href="styles/footer.css">
		
		<link rel="stylesheet" href="flexSlider/flexslider.css" type="text/css" media="screen" />

		
		
		
		<link rel="icon" type="image/png" href="favicon.png" />
	</head>
	
	<body>
	
	    <?php include('includes/menu.php'); ?>

            <div id="main">
            
            	<div id="introduction">
            	    <h1>Notre mission,</h1>
            	    <p>
                        Vous faire découvrir et apprécier le mariage des saveurs et des parfums raffinés provenant du marché du jour.<br /><br />
                    </p>
                    <h1>Présentation du restaurant,</h1>
                    <p>
                        Dans le Revermont, au pays de la faïence, se cache une vieille maison rustique en pierres apparentes avec marmite et épis de maïs pendus au-dessus de votre tête. Nathalie à l'accueil et Frédéric aux fourneaux, vous prépareront des pures merveilles gustatives à votre convenance.
                        Un moment d'évasion... culinaire et de détente.<br /><br />
                        Venez nous rendre visite, dans l'auberge au style bressan, vous bénéficierez d'un accueil chaleureux et convivial.
            	    </p>
            	</div>
				
				<br />
				<br />

				<!-- Place somewhere in the <body> of your page -->
				<div id="test">
    				<div class="flexslider">
    				  <ul class="slides">
    				    <?php
                			$dir    = '/var/www/Codiad/workspace/IUT/imgs/photos/';
                			$files = scandir($dir);
                			
                			for( $i = 0; $i < count($files); $i++){
                				if($files[$i] != "." && $files[$i] != ".." && $files[$i] != ".htaccess" && $files[$i] != ".htpasswd"){
                					echo "<li><img src='http://91.121.87.168/Codiad/workspace/IUT/imgs/photos/" . $files[$i] . "'/></li>";
                				}
                			}
                
                		?>
    				    
    				  </ul>
    				</div>
				</div>
								
				   <!-- jQuery -->
				  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
				  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
				  
				  <!-- FlexSlider -->
				  <script defer src="flexSlider/jquery.flexslider.js"></script>
				  
				  <script type="text/javascript">
				    $(function(){
				      SyntaxHighlighter.all();
				    });
				    $(window).load(function(){
				      $('.flexslider').flexslider({
				        animation: "slide",
				        animationLoop: false,
				        itemWidth: 210,
				        itemMargin: 5,
				        pausePlay: true,
				        start: function(slider){
				          $('body').removeClass('loading');
				        }
				      });
				    });
				  </script>

            </div>
 
        </div>
        
           
    </body>
    
    <?php include('includes/footer.php'); ?>
    
</html>