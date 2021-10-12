<?php
    require_once("connexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Montre ton Savoir-Faire</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Montre ton Savoir-Faire sur la toile !</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="hilairedaliwa2@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="tel:+223 83092295"><i class="fa fa-phone"></i> +223 83092295</a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="index.php" class="navbar-brand">
					<img src="img/img01.png" alt="Post">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li><a href="index.php" title="">ACCUEIL</a></li>
                        <li><a href="apropos.php" title="">A PROPOS</a></li>
                        <li class="active"><a href="contact.php" title="">CONTACT</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li class="active"><a href=""contact.php>Contact</a> </li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-intro" class="fh5co-section">
        <div class="container">
            <div class="row row-bottom-padded-sm">
                <div class="col-md-8 col-md-offset-2 text-center ts-intro">
                    <h1>Nous Contacter</h1>
                  <h4 style="text-justify: auto">  <p class="fh5co-lead">Chez nous, <a href="index.html" target="_blank"><strong>Orange Digital Kalanso </strong></a> Vous pouvez nous contacter. Que vous soyez diplômé ou non, agent, manager, partenaire, ou un simple particulier. Nous sommes là à votre disposition 24h/24 pour vous servir. Le talent que vous cherchez est ici !!</p></h4>
                </div>
            </div>
            <br>
            <div class="row row-bottom-padded-sm">
                <div class="col-md-6" id="fh5co-content">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Mail</label>
                            <input type="email" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-md-push-1 col-sm-12 col-sm-push-0" id="fh5co-sidebar">
                    <div class="fh5co-contact-info">
                        <h3>Contact Info</h3>
                        <address>
                            5088 Golf, Carre 10 Bamako Mali
                        </address>
                        <p>Tel: +223 83092295</p>
                        <p>Email: <a href="#">info@edutoplink.com</a></p>
                        <p>Website: <a href="#">www.edutoplink.com</a></p>
                    </div>


                        <div class="fh5co-footer-widget">
                            <h3>Follow us</h3>
                            <ul class="fh5co-social">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a> Suivez nous sur Facebook</li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a> Suivez nous sur Twitter</li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a> Suivez nous sur Linkedin</li>
                                <li class="message"><a href="info@edutoplink.com"><i class="fa fa-envelope"></i></a> Suivez nous par Mail</li>
                            </ul>
                        </div>
                </div>
            </div>

        </div>
    </div>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>Orange Digital Kalanso</h4>
                    <p class="text">Nous assurons votre visibilté sur internet et Partout. Chez nous votre Savoir-Faire est précieux et utile pour votre bonheur. </p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                <h4>NOS SERVICES</h4>
                    <ul class="big">
                        <li><a href="#" title="">Orange Kalanso</a></li>
                        <li><a href="#" title="">Fablab Solitaire</a></li>
                        <li><a href="#" title="">Orange Fab</a></li>
                        <li><a href="#" title="">Orange Ventures</a></li>
                        <li><a href="#" title="">Innovation Lab</a></li>
                        <li><a href="#" title="">Ecole du code</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>LISTE DES PERSONNALITES</h4>
                  
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>CONTACTEZ-NOUS</h4>
                    <p class="text">Pour tous besoins et informations, disponible 24h/24.</p>
                    <p><a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +223 83092295/52137217</a></p>
                    <p><a href="mailto:iletisim@agrisosgb.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@odk.com</a></p>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left">&copy; 2021 <a href="index.html">Orange Digital Kalanso</a> |Power by Hilaire et Dia</p>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline navbar-right">
                        <li><a href="index.php" title="">ACCUEIL</a></li>
                        <li><a href="apropos.php" title="">A PROPOS</a></li>
                        <li><a href="contact.php" title="">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>