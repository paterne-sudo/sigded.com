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

<!-- Mirrored from spaceraceit.com/html/bizpa/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Dec 2023 04:21:29 GMT -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact-us</title>

  <!-- googlefont link  -->
  <link
    href="../../../fonts.googleapis.com/css2f7f7.css?family=DM+Sans&amp;family=Poppins:wght@400;500;600;700&amp;family=Urbanist:wght@400;500;600;700;800&amp;display=swap"
    rel="stylesheet">


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






    <!-- about-banner part start -->

    <section class="about-banner">
      <div class="container">
        <div class="row">
          <div class="about-banner-text">
            <h1>Contactez-Nous</h1>

            <div class="about-banner-btm">
              <div class="text">
                <a href="index.php">Acceuil</a>
              </div>
              <div class="icon">
                <i class="fa-sharp fa-solid fa-angle-right"></i>
              </div>
              <div class="text">
                <a href="#">Contactez-nous</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- about-banner end -->


    <!-- Contact us start -->



    <section class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="contact-us-item">
              <h2>Contactez-Nous</h2>
              <p>
                Des questions? Commentaires? Vouloir programmer une démo ? Nous serions ravis de discuter !</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="contact-us-item">
              <div class="contact-us-item-inner">
                <div class="icon">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="text">
                  <h3>Email</h3>
                  <a href="#">contact@sigded.com</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="contact-us-item">
              <div class="contact-us-item-inner">
                <div class="icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div class="text">
                  <h3>Numero de telephone</h3>
                  <a href="#">(229) 90 27 84 68</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>






    <!-- Contact us end -->




    <!-- question start -->


    <section class="question">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="question-send">
              <form action="" method="post">

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"></label>
                  <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom complet*" required>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"></label>
                  <input type="email" class="form-control" name="email" placeholder="Entrez Votre Email*">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"></label>
                  <input type="text" class="form-control" name="subject" placeholder="Entrez votre sujet*" required>
                </div>
                <div class="mb-3 b">
                  <label for="exampleFormControlTextarea1" class="form-label"></label>
                  <textarea class="form-control" name="texte" placeholder="Ecrivez içi votre message**"
                    rows="5"></textarea>
                </div>

                <div class="send-btn">
                  <a><button type="submit" name="valider">VALIDER</button></a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- question end -->





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

<!-- Mirrored from spaceraceit.com/html/bizpa/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Dec 2023 04:21:29 GMT -->

</html>