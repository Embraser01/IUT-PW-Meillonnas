<!DOCTYPE html>
<html>
	<head>
		<title>Auberge Au Vieux Meillonnas</title>
		<meta charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="styles/marco.css">
		<link rel="stylesheet" href="styles/menu.css">
		<link rel="stylesheet" href="styles/footer.css">
		<link rel="icon" type="image/png" href="favicon.png" />
		<link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
	</head>
	
	
	<body>
	
		<?php include('includes/menu.php'); ?>
		
     
            <div id="main" >
    
                <div class=".center">
                    <?php
            			$dir    = '/var/www/Codiad/workspace/IUT/imgs/photos/';
            			$files = scandir($dir);
            			
            			for( $i = 0; $i < count($files); $i++){
            				if($files[$i] != "." && $files[$i] != ".." && $files[$i] != ".htaccess" && $files[$i] != ".htpasswd"){
            					echo "<div><img src='imgs/photos/" . $files[$i] . "></div>";
            				}
            			}
            
            		?>
            	
                  <div>your content</div>
                  <div>your content</div>
                  <div>your content</div>
                </div>
                
                
                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script type="text/javascript" src="slick/slick.min.js"></script>
                </div>
                
                <script type="text/javascript">
                   $('.center').slick({
                      centerMode: true,
                      centerPadding: '60px',
                      slidesToShow: 3,
                      responsive: [
                        {
                          breakpoint: 768,
                          settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                          }
                        },
                        {
                          breakpoint: 480,
                          settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                          }
                        }
                      ]
                    });
                </script>
 
        </div>
        
            
    </body>
    
    <?php include('includes/footer.php'); ?>
    
</html>