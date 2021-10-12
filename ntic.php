<?php
    require_once("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>235Talents</title>
    
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
				<a href="index.html" class="navbar-brand">
					<img src="img/logg.png" alt="Post">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li><a href="index.php" title="">ACCUEIL</a></li>
                        <li class="active"><a href="ntic.php"  title="">LISTE DES PERSONNALITES</a></li>
                        <li><a href="apropos.php" title="">A PROPOS</a></li>
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
                        <li><a href="index.php" title="Post">ACCUEIL</a></li>
                        <li class="active">LISTE DES PERSONNALITES</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>    
    <main class="site-main category-main">
        <div class="container">
            <div class="row">
                <section class="category-content col-sm-9">
                    <h2 class="category-title">Profiles des personnalités NTIC</h2>
                    <ul class="media-list">
                    <div class="col-sm-12"><h2 class="sub_title">DERNIERES OFFRES</h2></div>
                        <div class="home_list">
                            <ul>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                <?php foreach($personnages as $personne):?>
                                 <div class="thumbnail">
                                    <a href="detail.php?id=<?= $personne['id']?>">
                                        <img src="<?= $personne['nom_image'] ?>" alt="">
                                    </a>
                                    <h2><?= $personne['nom_complet'] ?></h2>
                                </div>
                                <?php endforeach; ?>
                            </ul>
                        </div>                      
                    </ul>                    
                </section>
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <h4>DERNIERES INFOS</h4>
                        <ul>
                            <li class="current"><a href="#" title="">Windows 11 à la une</a></li>
                            <li><a href="#" title="">Black Out chez Facebook</a></li>
                            <li><a href="#" title="">Google en conquête en Afrique</a></li>
                            <li><a href="#" title="">Alibaba veut defier Amazon</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>ZedaxLink</h4>
                    <p class="text">Nous assurons votre visibilté sur internet et Partout. Chez nous votre Savoir-Faire est précieux et utile pour votre bonheur. </p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                <h4>DERNIERES INFOS</h4>
                    <ul class="big">
                        <li><a href="#" title="">Title One</a></li>
                        <li><a href="#" title="">Title Two</a></li>
                        <li><a href="#" title="">Title Three</a></li>
                        <li><a href="#" title="">Title Four</a></li>
                        <li><a href="#" title="">Title Five</a></li>
                        <li><a href="#" title="">Title Six</a></li>
                        <li><a href="#" title="">Title Seven</a></li>
                        <li><a href="#" title="">Title Eight</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>INFOS SUR LES PERSONNALITES</h4>
                    <ul class="big">
                        <li><a href="#" title="">Title One</a></li>
                        <li><a href="#" title="">Title Two</a></li>
                        <li><a href="#" title="">Title Three</a></li>
                        <li><a href="#" title="">Title Four</a></li>
                        <li><a href="#" title="">Title Five</a></li>
                        <li><a href="#" title="">Title Six</a></li>
                        <li><a href="#" title="">Title Seven</a></li>
                        <li><a href="#" title="">Title Eight</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>CONTACTEZ-NOUS</h4>
                    <p class="text">Pour tous besoins et informations, disponible 24h/24.</p>
                    <p><a href="tel:+902222222222"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +223 83092295/52137217</a></p>
                    <p><a href="mailto:iletisim@agrisosgb.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@zedaxlink.com</a></p>
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
                        <li><a href="ntic.php"  title="">LISTE DES PERSONNALITES</a></li>
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