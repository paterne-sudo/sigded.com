<?php

$mail_me = "contact@sigded.com";

if (isset($_POST['valider']) || $_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['texte'];

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($mail_me, $subject, $message, $headers);
}

?>
<!DOCTYPE html>
<html lang="fr-FR">

<!-- Mirrored from spaceraceit.com/html/bizpa/home-page-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Dec 2023 04:16:12 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIGDED</title>

    <!-- googlefont link  -->
    <link href="../../../fonts.googleapis.com/css2f7f7.css?family=DM+Sans&amp;family=Poppins:wght@400;500;600;700&amp;family=Urbanist:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="css/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/venobox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>


    <!-- preloader  part start  -->

    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- preloader  part end  -->




    <header class="header-three">
        <div class="container">
            <div class="header-main">
                <div class="header-left">
                    <div class="hrader-left-item">
                        <div class="text">
                            <p><span>Gestion des Dettes et de Désendettement</span> </p>
                        </div>
                    </div>
                </div>



                <div class="header-right">
                    <div class="header-right-item">
                        <div class="icon">
                            <i class="fa-solid fa-clock"></i>

                        </div>
                        <div class="text">
                            <p>Lundi - Samedi : 08h - 22h </p>
                        </div>
                    </div>
                    <div class="hrader-left-item">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="text-two">
                            <a href="tel:+229 90 27 84 68">
                                <p>+229 90 27 84 68</p>
                            </a>
                        </div>
                    </div>
                </div>



            </div>
        </div>





        <!-- menu part start -->



        <nav class="menu-bg menu-bg-two">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="nav-main">

                            <div class="main">
                                <div class="logo">
                                    <a href="index.php"> <img src="images/logo/logo.png" alt="logo"></a>
                                </div>


                                <div class="menu">
                                    <ul>
                                        <li><a href="index.php">Acceuil</a></i>
                                        </li>
                                        <li><a href="about.php">A Propos </a>
                                        </li>
                                        <li><a href="service.php">Nos Services</a></li>


                                        <li><a href="contact-us.php">contactez-nous </a> </li>
                                    </ul>
                                </div>
                            </div>



                            <div class="nav-button">
                                <div class="right">
                                    <a href="https://wa.me/90278468">Discutez sur WhatsApp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </nav>
    </header>
    <!-- mobile navigation start -->
    <header class="mobile-header">
        <div class="container-full">
            <div class="mobile-header__container">
                <div class="p-left">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo/logo.png" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="p-right">
                    <button id="nav-opn-btn">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- offcanvas -->
    <aside id="offcanvas-nav">
        <nav class="m-nav">
            <button id="nav-cls-btn"><i class="fa-solid fa-xmark"></i></button>
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo/logo.png" alt="logo" />
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Acceuil</a>
                </li>
                <li><a href="about.php">A Propos </a>
                </li>
                <li><a href="service.php">Nos Services</a></li>


                <li><a href="contact-us.php">contactez-nous </a> </li>
            </ul>
            <ul class="social-icons">
                <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
            </ul>
        </nav>
    </aside>



    <!-- menu part end -->





    <main>
        <!-- banner part start -->
        <section class="banner-two">
            <div class="container">
                <div class="row  flex-column-reverse flex-sm-row aligen-item-center">



                    <div class="col-lg-6">

                        <div class="banner-text">
                            <h3>SIGDED N°1 au BÉNIN</h3>
                            <h1>Gestion dettes <span>et Désendettement</span> </h1>

                            <p>Solution pour se mettre á flot avec une seules mensualité adaptée á votre budget. </p>
                            <div class="banner-vic">
                                <img src="images/victor/bannre-1-vic.png" alt="vic">
                            </div>
                        </div>

                        <center>
                            <div class="banner-btn-two" style="text-align: center;">
                                <div class="button" style="text-align: center;">
                                    <a href="https://wa.me/90278468">Discutez avec nous maintenant</a>
                                </div>

                            </div>
                        </center>


                    </div>



                    <div class="col-lg-6">
                        <div class="banner-img-two">
                            <div class="img-twoo">
                                <img src="images/banner/banner-two.png" alt="banner">
                            </div>

                            <div class="img-threer">
                                <img src="images/creative-button.png" alt="thumb" style="width: 100px !important; height: 100px !important;">
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- banner part end -->



        <!-- service part start -->


        <section class="blo" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-head">
                            <h2 style="margin-top:30px !important ;"> Découvrez nos Services</h2>
                            <div class="blog-head-img">
                                <img src="images/victor/check-vic.png" alt="vic">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row blog-slick ">
                    <div class="col-lg-4 col-sm-6  b-pad">
                        <div class="blog-item" style="border-color: black;border-width: 10px !important;">
                            <div class="blog-img">
                                <img src="images/consulation.jpg" alt="BLOG">
                            </div>



                            <div class="link">

                                <a href="consultation.php">Consultation Financière Personnalisée.</a>
                            </div>


                            <div class="blog-btn">
                                <a href="consultation.php">En savoir +</a>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 b-pad">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="images/Negociation.jpg" alt="BLOG">
                            </div>



                            <div class="link">

                                <a href="negociation.php">Négociation de Dettes avec les Créanciers.</a>
                            </div>



                            <div class="blog-btn">
                                <a href="negociation.php">En savoir +</a>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-block b-pad">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="images/education.jpg" alt="BLOG">
                            </div>



                            <div class="link">

                                <a href="education.php">Éducation Financière et Gestiondes Finances
                                    Personnelles.</a>
                            </div>



                            <div class="blog-btn">
                                <a href="education.php">En savoir +</a>
                            </div>




                        </div>
                    </div>

                </div>
                <div class="row blog-slick ">
                    <div class="col-lg-4 col-sm-6  b-pad">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="images/elaboration.jpg" alt="BLOG">
                            </div>



                            <div class="link">

                                <a href="elaboration.php">Élaboration de Plans de Désendettement.</a>
                            </div>


                            <div class="blog-btn">
                                <a href="elaboration.php">En savoir +</a>
                            </div>



                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6 b-pad">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="images/suivie.jpg" alt="BLOG">
                            </div>



                            <div class="link">

                                <a href="suivie.php">Suivi et Soutien Continu.</a>
                            </div>



                            <div class="blog-btn">
                                <a href="suivie.php">En savoir +</a>
                            </div>



                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-block b-pad">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="images/acces.jpg" alt="BLOG">
                            </div>



                            <div class="link">

                                <a href="acces.php">Accès à des Ressources Éducatives.</a>
                            </div>



                            <div class="blog-btn">
                                <a href="acces.php">En savoir +</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>






        <!-- service part end -->




        <!-- success part start -->

        <section class="success" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="success-head">
                            <h2>Choisissez <span>SIGDED</span> pour être <span>autonome</span>.</h2>
                            <p>Notre mission est d'autonomiser nos clients á reprendre le contrôle de leurs finances en
                                leur fournissant des conseils financiers personnalisés, des plans de désendettement
                                efficaces et une éducation financière continue. Nous nous engageons à aider nos
                                clients à surmonter leurs défis financiers et à construire un avenir financier
                                stable.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="success-item">
                                <div class="icon">
                                    <img src="images/icon/success-i-1.svg" alt="succ">
                                </div>
                                <div class="text">
                                    <h2><span class="counter">1315</span></h2>
                                    <p>Clients Satisfaires</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="success-item">
                                <div class="icon">
                                    <img src="images/icon/success-i-2.svg" alt="succ">
                                </div>
                                <div class="text">
                                    <h2><span class="counter">N°1</span></h2>
                                    <p>Au BÉNIN</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="success-item">
                                <div class="icon">
                                    <img src="images/icon/success-i-3.svg" alt="succ">
                                </div>
                                <div class="text">
                                    <h2><span class="counter">80</span></h2>
                                    <p>Associés créanciers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="success-item">
                                <div class="icon">
                                    <img src="images/icon/success-i-3.svg" alt="succ">
                                </div>
                                <div class="text">
                                    <h2><span class="counter">75</span></h2>
                                    <p>Institutions financière</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row aligen-item-center ">
                        <div class="col-lg-6">
                            <div class="p-img">
                                <div class="success-img">
                                    <img src="images/success.png" alt="succ">
                                </div>
                                <div class="success-img-1">
                                    <img src="images/creative-button.png" alt="button" style="width: 100px !important; height: 100px !important;">
                                </div>

                            </div>
                        </div>



                        <div class="col-lg-6  pr">
                            <div class="success-text">
                                <h2>Notre Vision Principal</h2>

                                <p>Être le partenaire de confiance incontournable pour les individus et les entreprises
                                    au Bénin, en offrant des solutions de gestion des dettes et de désendettement
                                    personnalisées, éducatives et axées sur les résultats, tout en contribuant à
                                    l'amélioration de la santé financière globale. </p>

                                <div class="vic-img">
                                    <img src="images/victor/success-vic.png" alt="vic">
                                </div>
                            </div>

                            <div class="success-btm">
                                <img src="images/success-btm.png" alt="btm">
                                <p>BOUKARI Abdou Wakilou</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="success-po-img">
                                <div class="success-po-img-1">
                                    <img src="images/victor/success-p-1.png" alt="succ">
                                </div>
                                <div class="success-po-img-2">
                                    <img src="images/victor/success-p-2.png" alt="succ">
                                </div>
                            </div>
                        </div>
                    </div>








                </div>
        </section>



        <section class="" style="background-color: rgb(5, 0, 19);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-us-head">
                            <h2>Avis clients.</h2>
                            <div class="about-us-vic-img">
                                <img src="images/victor/about-us-vic.png" alt="vic">
                            </div>
                        </div>
                    </div>

                </div>




                <div class="row about-us-slick ">
                    <div class="col-lg-4">
                        <div class="ab">
                            <div class="about-us-item">
                                <div class="d-f">
                                    <div class="about-us-icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <div class="inner-icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <div class="text">
                                    <p>J'ai fais confiance à Sigded et j'ai vraiment pas été deçu. Des experts
                                        financiers à la pointe m'ont guidés tout au long de mon processus de
                                        désendettement. </p>
                                </div>

                                <div class="about-us-btm">
                                    <div class="about-us-inner">
                                        <div class="inner-img">
                                            <img src="images/inner-1.png" alt="inner">
                                        </div>
                                        <div class="inner-text">
                                            <h6>Mohamed DALASSI</h6>
                                            <p>Proprietaire de restaurant </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ab">
                            <div class="about-us-item">
                                <div class="d-f">
                                    <div class="about-us-icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <div class="inner-icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <div class="text">
                                    <p>Depuis que mon ex femme à fuir avec l'argent de commande de mes clients je me
                                        voyais déja en prison mais grâce à sigded j'ai pu tout rembourser.</p>
                                </div>

                                <div class="about-us-btm">
                                    <div class="about-us-inner">
                                        <div class="inner-img">
                                            <img src="images/inner-2.png" alt="inner">
                                        </div>
                                        <div class="inner-text">
                                            <h6>Anicet AVALOU</h6>
                                            <p>Revendeurs en gros </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ab">
                            <div class="about-us-item">
                                <div class="d-f">
                                    <div class="about-us-icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <div class="inner-icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <div class="text">
                                    <p>Ils m'ont vraiment sauvé la vie. Je recommande sincèrement c'est de vrai expert.
                                        C'est des gens bien à l'écoute et patient qui vous suivent tout au long du
                                        processus.</p>
                                </div>

                                <div class="about-us-btm">
                                    <div class="about-us-inner">
                                        <div class="inner-img">
                                            <img src="images/inner-3.png" alt="inner">
                                        </div>
                                        <div class="inner-text">
                                            <h6>Jaqueline TOSSOU</h6>
                                            <p>Vendeuse à topka </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="customers-head-two">
                            <h3>Ne laissez pas vos erreurs financière gâché votre vie. </h3>
                        </div>
                    </div>


                </div>


            </div>
        </section>





        <!-- about-two part-end  -->


        <!-- Project part-start  -->



        <section class="project" id="contact-us">
            <div class="container">
                <div class="row aligen-item-center">
                    <div class="col-lg-5 col-md-5">

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="about-us-head">
                                    <h2 style="color: black;">Contactez-nous</h2>
                                    <div class="about-us-vic-img">
                                        <img src="images/victor/about-us-vic.png" alt="vic">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="project-btn">
                            <a href="https://wa.me/90278468">contactez-nous WhatsApp</a>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>

                    <div class="col-lg-6 col-md-6">
                        <div class="send">

                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom complet*</label>
                                    <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom complet" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email" class="form-control" name="email" placeholder="Entrez votre email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Sujet*</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Entrez votre sujet" required>
                                </div>
                                <div class="mb-3">
                                    <label for="texte" class="form-label">Message*</label>
                                    <textarea class="form-control" name="texte" placeholder="Ecrivez votre message" rows="5" required></textarea>
                                </div>
                                <div class="send-btn">
                                    <a><button type="submit" name="valider">ENVOYEZ</button></a>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>




        <!-- Project part-end  -->




    </main>


    <!-- footer part start  -->

    <footer class="footer-two">



        <div class="container">
            <div class="row top">
                <div class="col-lg-4 col-md-6">
                    <div class="logo-main">
                        <div class="footer-logo">
                            <img src="images/logo/logo.png" alt="logo">
                            <p>La société Internationale de Gestion des Dettes et de Désendettement, est une société
                                béninoise basée á Abomey Calavi.</p>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-6">

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="official-info-main">
                        <div class="Official-info">
                            <h3>Information :</h3>



                            <div class="Official-item">
                                <div class="offical-inner">
                                    <div class="Official-icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="Official-text">
                                        <a href="#">
                                            <p>BÉNIN, Abomey-Calavi</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="offical-inner">
                                    <div class="Official-icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="Official-text">
                                        <a href="#">
                                            <p>+229 90278468</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="offical-inner">
                                    <div class="Official-icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="Official-text">
                                        <a href="#">
                                            <p>
                                                contact@sigded.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="last">
                        <a href="#">
                            <p>Copyright © 2024 – All Rights Reserved. Made by Codicone</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end  -->





    <!-- back-to-top part start  -->


    <div class="back-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </div>



    <!-- back-to-topt end  -->


    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/custom.js"></script>

</body>

<!-- Mirrored from spaceraceit.com/html/bizpa/home-page-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Dec 2023 04:17:56 GMT -->

</html>