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
                        <li  class="active"><a href="apropos.php" title="">A PROPOS</a></li>
                        <li><a href="contact.php" title="">CONTACT</a></li>
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
                        <li class="active">A propos</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">A PROPOS</h2>
                    <div class="entry">
                        <p>Le chômage dans la plus part des pays africains est entrain de prendre une ampleure inquiétante. Au Mali en particulier le taux du chômage est estimé à 9,8%. Tous ceci est dû à l'incapacité de certaines personnes de pouvoir montrer leur savoir faire sur internet et le manque de visibilité de certaines personnes ayant des compétences particulières mais ne savent pas comment présenter leur talent au monde entier et donc sont obligés de faire du travail qui ne leur conviennent pas.</p> 

                        <p>Nullam rhoncus lorem quis lobortis euismod. Aliquam ornare et sem ut commodo. Maecenas nec velit neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ullamcorper blandit eros, tincidunt tincidunt lacus rutrum at. Duis convallis luctus velit, nec ultricies arcu imperdiet eu. Quisque laoreet enim et gravida commodo.</p>

                        <p>Curabitur felis nibh, porttitor eu nibh cursus, suscipit placerat dui. Donec nec aliquet enim. Quisque aliquet placerat fringilla. Nulla sed hendrerit lacus. Quisque consectetur mattis turpis eu ullamcorper. Nunc vehicula, tellus ac laoreet cursus, massa felis mattis enim, vitae luctus nisi leo nec ante. Suspendisse potenti. Cras at orci euismod, scelerisque ligula in, porttitor dui.</p>

                        <p>Curabitur euismod lobortis sapien. Maecenas magna ligula, vulputate in nulla ac, tincidunt suscipit erat. Sed ac tempor nisi. Suspendisse laoreet, odio et consequat varius, sem urna convallis leo, egestas malesuada elit erat id tellus. Suspendisse scelerisque in felis at pretium. Maecenas dictum quam posuere ex hendrerit tempus. Donec vehicula quis erat quis sollicitudin. Vestibulum ultrices vitae arcu quis dignissim. Donec sagittis tincidunt arcu id pellentesque. Nullam eu risus tristique, mattis arcu laoreet, sagittis purus. Nulla facilisi. Nam ac justo quis elit pharetra scelerisque. Curabitur et dapibus ex. In quis pretium turpis. Aliquam tincidunt quam interdum, faucibus odio a, porttitor dui.</p>

                        <p>Aenean non dapibus ante, sed dictum enim. Maecenas elementum auctor imperdiet. Nam eu mi placerat, dignissim libero condimentum, ornare est. Nunc euismod viverra sapien quis porttitor. Fusce eleifend quam quis nibh dictum scelerisque in vel lacus. Duis ac risus quis eros pretium lobortis. In malesuada est est.</p>                        
                    </div>
                </section>
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <p><img src="img/img00.jpg" class="img-responsive img-bordered" alt="video de'evarist"> </p>
                            <p><blockquote><em>" Votre formation est notre priorité, trouvez votre futur" </em> <strong>Fatoumata Kaloga</strong> Responsable formation ODK</blockquote></p>
                        
                    </div>
                </aside>
            </div>
        </div>
    </main>
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
                    <ul class="big">
                    
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