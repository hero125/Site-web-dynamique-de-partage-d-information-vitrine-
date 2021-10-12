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
                        <li class="active"><a href="index.html" title="">ACCUEIL</a></li>
                        <li><a href="apropos.php" title="">A PROPOS</a></li>
                        <li><a href="contact.php" title="">CONTACT</a></li>

                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
    <main class="site-main">
        <section class="hero_area">
            <div class="hero_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Orange Digital Kalanso,</h1>
                            <h2>la plateforme qui vous donne des renseignements sur les grandes personnalités dans le domaine du numérique.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="boxes_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>APPRENDRE A CODER</h3>
                            <p>Un nouveau concept dédié à l'accompagnement numérique et à l'innovation pour tous.Formation des jeunes au numérique, accompagnement des porteurs de projets jusqu'à l'accélération de start-up et l'investissement dans ces dernières</p>
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>TROUVE L'EMPLOI DE TES RÊVES</h3>
                            <p>Un nouveau concept dédié à l'accompagnement numérique et à l'innovation pour tous.Formation des jeunes au numérique, accompagnement des porteurs de projets jusqu'à l'accélération de start-up et l'investissement dans ces dernières</p>
                            <i class="fa fa-database"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>DEVELOPPE TON RESEAU</h3>
                            <p>Un nouveau concept dédié à l'accompagnement numérique et à l'innovation pour tous.Formation des jeunes au numérique, accompagnement des porteurs de projets jusqu'à l'accélération de start-up et l'investissement dans ces dernières</p>
                            <i class="fa fa-group"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      <section class="home-area">
            <div class="home_content">
                <div class="container">
                    <div class="row">
                       <div class="col-sm-12"><h2 class="sub_title">LISTE DES PERSONNALITES</h2></div>
                        <div class="home_list">
                            <ul>
                            <?php foreach($personnages as $personne):?>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                               
                                 <div class="thumbnail">
                                    <a href="detail.php?id=<?= $personne['id']?>">
                                        <img src="<?= $personne['nom_image'] ?>" alt="">
                                    </a>
                                    <h2><?= $personne['nom_complet'] ?></h2>
                                </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <div class="col-sm-9 home_bottom">
                            <h2 class="sub_title">LEURS COMPAGNIES</h2>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="6000" id="myCarousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                <a href="#"><img src="img/i1.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                <a href="#"><img src="img/i2.png" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i3.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i4.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i5.png" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i6.png" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i7.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i8.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                <a href="#"><img src="img/i9.png" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                <a href="#"><img src="img/i4.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i3.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i4.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i5.png" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i6.png" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i7.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="img/i8.jpg" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <h2 class="sub_title w10">ENTREZ EN CONTACT AVEC EUX</h2>
                            <div class="clearfix"></div>
                            <div class="login-form-1">
                                <form id="login-form" class="text-left">
                                    <div class="login-form-main-message"></div>
                                    <div class="main-login-form">
                                        <div class="login-group">
                                            <div class="form-group">
                                                <label for="ad" class="sr-only">Name</label>
                                                <input type="text" class="form-control" id="ad" name="ad" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="tel" class="sr-only">Phone Number</label>
                                                <input type="text" class="form-control" id="tel" name="tel" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                    <li>
                        <a href="detail.php?id=<?= $personne['id']?>">
                        <h4><?= $personne['nom_complet'] ?></h4>
                    </li>

                    </ul>
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
    <script type="text/javascript">
        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });        
    </script>
</body>
</html>