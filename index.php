<!DOCTYPE html>
<html lang="pt-br">

<!-- <head> -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Família Del Pino</title>
  <meta name="description" content="Albúm de fotos família Del pino">
  <meta name="keywords" content="Familia, Del Pino, Cândido Acauan Nery, fotos, família">
  <meta name="author" content="Lucas Machado Angelo">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <a href="index.php">
          <img src="assets/img/brasao-logo1.png" alt="Del Pino" class="img-fluid">
        </a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#venue">Encontros</a></li>
          <li><a class="nav-link scrollto" href="#speakers">Origem</a></li>
          <li><a class="nav-link scrollto" href="#schedule">História</a></li>
          <li><a class="nav-link scrollto" href="#subscribe">Poema</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0 animate__animated animate__fadeInDown">Família <span>Del Pino</span></h1>
            <h1 class="mb-4 pb-0 animate__animated animate__fadeInUp" id="tradicao">Tradição e coragem</h1>
            <a href="#venue" class="btn-menu animate__animated animate__fadeInDown scrollto">Álbum de fotos</a>
            <a href="#schedule" class="btn-book animate__animated animate__fadeInUp scrollto">Nossa História</a>
        </div>
    </section><!-- End Hero Section -->
    
    <!-- ======= MAIN ======= -->
    <main id="main">
    <br><br>
      <!-- ======= Schedule Section ======= -->
      <section id="schedule" class="section-with-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <br><br>
            <h2>História: Origem da linhagem, tradição e luta</h2>
          </div>
          <p class="long-copy">
            São lembranças das fotografias que estão guardadas com muito amor. Momentos felizes foram registrados.
            Em cada foto tem seu fato marcado.
            <br>Muitas histórias aqui reunidas. São linhas da vida da minha família. Pessoas por mim muito queridas.
            Recordando com muitas saudades.
            <br>Estão todos aqui bem visual. Muitas fotos vão se tirando. Alguns membros partindo. E outros
            chegando.
            <br>A Família sempre aumentando. Velhos e novos se encontrando. Gerações e gerações se abraçando.
          </p>
        </div>
      </section><!-- End Schedule Section -->
      <!-- ======= Pictures Section ======= -->
      <section class="section-photos">
        <div class="d-flex align-items-center" data-aos="zoom-in">
          <ul class="images-showcase clearfix">
              <li>
                  <figure class="photo">
                      <img src="assets/img/photo1.jpg" alt="">
                  </figure>
              </li>
              <li>
                  <figure class="photo">
                      <img src="assets/img/photo2.jpg" alt="">
                  </figure>
              </li>
              <li>
                  <figure class="photo">
                      <img src="assets/img/photo3.jpg" alt="">
                  </figure>
              </li>
              <li>
                  <figure class="photo">
                      <img src="assets/img/photo4.jpg" alt="">
                  </figure>
              </li>
              <li>
                  <figure class="photo">
                      <img src="assets/img/photo5.jpg" alt="">
                  </figure>
              </li>
              <li>
                  <figure class="photo">
                      <img src="assets/img/photo6.jpg" alt="">
                  </figure>
              </li>
              <li>
                  <figure class="photo">
                      <img src="assets/img/photo7.jpg" alt="">
                  </figure>
              </li>
              <li>
                  <figure class="photo">
                      <img src="assets/img/photo8.jpg" alt="">
                  </figure>
              </li>
          </ul>
        </div>
    </section><!-- ======= End Pictures Section ======= -->

      <!-- ======= Venue Section ======= -->
      <section id="venue">
          <div class="container-fluid" data-aos="fade-up">
            <div class="section-header">
              <h2>Galeria de Fotos</h2>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul id="portfolio-flters">
                  <li data-filter=".ano2005">2005</li>
                  <li data-filter=".ano2006">2006</li>
                  <li data-filter=".ano2007">2007</li>
                  <li data-filter=".ano2009">2009</li>
                  <li data-filter=".ano2010" id="activeOption">2010</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="portfolio-container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-0">
              <?php 
                $dirArr = array("assets/img/ano2005", 
                                "assets/img/ano2006", 
                                "assets/img/ano2007", 
                                "assets/img/ano2009", 
                                "assets/img/ano2010");
                foreach($dirArr as $dir)
                {
                  $images = glob($dir . "/*");
                  $folder = str_replace("assets/img/", "", $dir);
                  foreach($images as $image)
                  {
                    echo '<div class="col-lg-2 col-md-4 portfolio-item '.$folder.'">
                            <div class="venue-gallery">
                              <a href="'.$image.'" class="glightbox" data-gall="venue-gallery">
                                <img src="'.$image.'" alt="" class="img-fluid">
                              </a>
                            </div>
                          </div>';
                  } 
                }          
              ?>
            </div>
          </div>
        </section><!-- End Venue Section -->
        <!-- ======= Speakers Section ======= -->
        <section id="speakers">
            <div class="container"> 
              <!-- data-aos="fade-up" -->
                <div class="section-header">
                    <h2>Del Pino</h2>
                </div>
                <p class="long-copy">
                  Sobrenomes não são apenas sons e palavras. Eles se originaram da necessidade de descrever a pessoa
                  ou a identificá-las mais facilmente.<br>
                  Antigamente, esses nomes adicionais eram como “apelidos” e não nomes de família.<br> Eles eram
                  descartados à medida que as gerações sucediam-se,
                  pois descreviam apenas uma pessoa e não toda a família.<br> Os sobrenomes passaram a ter significado
                  que
                  tem hoje a partir da Idade Média.<br>
                  O sobrenome espanhol Pino é de origem toponímica. Nomes toponímicos são aqueles que originam-se de
                  um lugar em particular.<br>
                  O nome relaciona-se ao lugar onde a pessoa morava, ou às terras que o indivíduo possuía. Neste caso,
                  o sobrenome faz parte de um conjunto de sobrenomes espanhóis..<br>
                  Fazem parte desse grupo os sobrenomes Pino del Rio e Pino de Dal, por exemplo.<br>
                  A palavra Pino deriva-se do nome que se dá à árvore do gênero pinus. Isso explica porque o brasão de
                  algumas ramificações da família Pino mostra um pinheiro.<br>
                  Assim, o brasão original do sobrenome refere-se a um lugar chamado Pino ou a uma moradia próxima a
                  um pinheiro.<br>
                  Um dos primeiros registros desse sobrenome é referente a Carlos Rodrigues de Pino, casado com Maria
                  del Pino e Monsalve, em 1693.<br>
                  Há também o registro do testamento de Maria Antonia del Pino em La Plata, em 1764.<br> O prefixo
                  espanhol del significa ”de(o)” e indica o local de origem do sobrenome.<br>
                  Um notável portador do sobrenome Pino é o soldado espanhol e administrador colonial Joacquin del
                  Pino, morto em 1804.<br>
                  Brasão de armas: Em um pátio verde, um leão vermelho bravo, diante de uma árvore do protetor.
              </p>
              <br><br><br>
            </div>
        </section><!-- End Speakers Section -->



        <!-- ======= Subscribe Section ======= -->
        <section id="subscribe" class="section-testimonials">
            <div class="container" id="testCandido">
              <!-- data-aos="zoom-out" -->

              <div class="section-header">
                <h2>Família</h2>
                <blockquote>
                  A família pode ser uma de nossas maiores fontes de felicidade. Nenhum amor é tão profundo, nenhuma
                  alegria tão plena quanto aquela que pode existir dentro do círculo familiar.<br> A família pode
                  ajudar-nos a receber o melhor que a vida tem a oferecer.<br>
                  Assim como com todas as outras coisas de valor, o relacionamento familiar dá trabalho, mas vale a
                  pena; porque a família foi feita para ficar junta para sempre e para dar-nos alegria.
                  <cite>
                      <img src="assets/img/candido.jpg" />Cândido Acauan Nery
                  </cite>
              </blockquote>
              </div>
            </div>
      </section><!-- End Subscribe Section -->

    </main><!-- Main Section -->


        
        <!-- <div class="row">
            <div class="col span-1-of-4 box">
                <ion-icon name="contacts"></ion-icon>
                <h3>Família</h3>
                <p>A natureza nos uniu em uma imensa família, e devemos viver nossas vidas unidos, ajudando uns aos
                    outros.</p>
            </div>
            <div class="col span-1-of-4 box">
                <ion-icon style="color: #4f4f4f" name="camera"></ion-icon>
                <h3>Album de Fotos</h3>
                <p>Fotografia nada mais é do que um cálculo onde as variáveis de soma são luz e criatividade,
                    elevadas a paixão daquele momento.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <ion-icon style="color: saddlebrown" name="bookmarks"></ion-icon>
                <h3>Agenda</h3>
                <p>Façamos da interrupção um caminho novo.
                    Da queda um passo de dança,
                    do medo uma escada,
                    do sonho uma ponte, da procura um encontro!</p>
            </div>
            <div class="col span-1-of-4 box">
                <ion-icon style="color: #f44242" name="heart-half"></ion-icon>
                <h3>Tradição</h3>
                <p>O amor é um ato.
                    O amor é um fato.
                    Novidade, história antiga, conto, resenha e poesia.</p>
            </div>
        </div> -->
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <h3>Del Pino</h3>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Família Del Pino</span></strong>. Todos os direitos reservados.
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
      window.onload = function()
      {
        document.getElementById("activeOption").click();
      };
    </script>
</body>

</html>
<script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>