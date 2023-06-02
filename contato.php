<!DOCTYPE html>
<html class="no-js" lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>YottaWatt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="img/favicon.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
    <!-- Icon Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet" />
    <!-- Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/faq.css" rel="stylesheet" />
  </head>
  <body>
    <a href="https://api.whatsapp.com/send/?phone=551130427381&text=Ol%C3%A1%21+Estava+no+site+e+gostaria+de+mais+informa%C3%A7%C3%B5es+do+sistema.+&type=phone_number&app_absent=0" class="float btn-float" target="_blank">
      <i class="fa-brands fa-whatsapp my-float"></i>
      </a>
    <div class="container-fluid bg-black p-0">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="text-center p-2 slim-menu">
          <a href="index" class="btn btn-sm btn-primary text-uppercase">Fotovoltaicos<i class="fa-solid fa-leaf"></i>
          </a>

          <a href="em-construcao" class="btn btn-sm btn-primary text-uppercase">Construção e reforma <i class="fa-solid fa-helmet-safety"></i>
          </a>

          <a href="em-construcao" class="btn btn-sm btn-primary text-uppercase">Aquecedores de água <i class="fa-solid fa-temperature-arrow-up"></i>
          </a>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-darkblue navbar-dark sticky-top px-4 px-lg-5 py-lg-0">
      <a href="index" class="navbar-brand d-flex align-items-center">
        <img src="img/logo@2x.png" class="img-responsive logobox" alt="">
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon">
        <i class="fa-solid fa-bars" style="color:#000; font-size:28px;"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="index" class="nav-item nav-link">Home</a>
          <a href="index#sobre" class="nav-item nav-link">Sobre</a>
          <a href="index#servicos" class="nav-item nav-link">Serviços</a>
          <a href="simuladorsolar" class="nav-item nav-link">Simulador Solar</a>
          <a href="contato" class="nav-item nav-link active">Contato</a>
        </div>
      </div>
    </nav>

    <div class="container my-5">
      <h1 class="text-center mb-5 text-uppercase">Entre em contato</h1>
      <div class="row vertical-align">
        <div class="col-md-6">
          <div class="text-center d-flex aligns-items-center ">
            <img src="img/capturas/instalacao-paineis-equipe2.jpeg" class="img-fluid" alt="">
          </div>
          <div class="text-center d-flex aligns-items-center ">
            <img src="img/capturas/instalacao-paineis-equipe3.jpeg" class="img-fluid" alt="">
          </div>
        </div>
          <div class="col-md-6">
          <!-- Formulário HTML -->
          <form class="contatoform" method="post" action="enviar-contato.php">
            <div class="mb-4">
              <h4 class="text-black">Formulário</h4>
              <span class="text-muted">Preencha com seus dados para retornarmos contato.</span>
            </div>

            <div class="mb-3">
              <label for="nome" class="form-label">Nome:</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu Nome ..."  required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>
            </div>
            <div class="mb-3">
              <label for="telefone" class="form-label">Telefone:</label>
              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="11 9 1234-1234" required>
            </div>
            <div class="mb-3">
              <label for="assunto" class="form-label">Assunto:</label>
              <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto" required>
            </div>
            <div class="mb-3">
              <label for="mensagem" class="form-label">Mensagem:</label> <br>
              <textarea rows="5" cols="68" class="form-label" id="mensagem" name="mensagem"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100" name="submit">ENVIAR FORMULÁRIO</button>
          </form>

        </div>
      </div>
    </div>

    <section class="chamada mt-2 pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="chamadatext text-center col-lg-12 col-md-12 col-sm-12">
            <h2 class="fw-900"> ENTRE EM CONTATO CONOSCO </h2>
            <h3 class="fw-500 pb-3"> ECONOMIZE DINHEIRO E CONTRIBUA <br> PARA UM FUTURO SUSTENTÁVEL </h3>
  
            <div class="py-2">
              <h5 class="text-white"> <b>(11) 9.9706-1198</b></h5>
              <h5 class="text-white"> <b>(11) 9.9288-9886</b></h5>
              <h5 class="text-white"> <b>contato@yottawatt.com.br </b> </h5>
            </div>
            <a href="https://api.whatsapp.com/send/?phone=551130427381&text=Ol%C3%A1%21+Estava+no+site+e+gostaria+de+mais+informa%C3%A7%C3%B5es+do+sistema.+&type=phone_number&app_absent=0" class="btn btn-primary py-3 px-5 mt-4 mb-2">FALE COM UM ESPECIALISTA NO WHATSAPP <i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </section>

    
    <div class="d-flex flex-column h-100">
      <!-- FOOTER -->
      <footer class="w-100 flex-shrink-0">
        <div class="footerfim py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <p class="small mt-3 text-center">&copy; Copyrights. Todos os direitos reservados. <a class="text-primary" href="#">YottaWatt.com.br</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="footerfim-sm py-3">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center align-items-center">
                <img src="img/logo@2x.png" class="img-responsive" alt="" style="max-width:180px;">
              </div>
              <div class="col-12 text-center">
                <p class="small mt-3">&copy; Copyrights. Todos os direitos reservados. <a class="text-primary" href="#">Netsecurity.com.br</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <!-- Custom Javascript -->
    <script src="js/main.js"></script><script type="text/javascript">
      new PureCounter();

      new Swiper('.clients-slider', {
          speed: 400,
          loop: true,
          autoplay: {
              delay: 5000,
              disableOnInteraction: false
          },
          slidesPerView: 'auto',
          pagination: {
              el: '.swiper-pagination',
              type: 'bullets',
              clickable: true
          },
          breakpoints: {
              320: {
                  slidesPerView: 2,
                  spaceBetween: 40
              },
              480: {
                  slidesPerView: 3,
                  spaceBetween: 60
              },
              640: {
                  slidesPerView: 4,
                  spaceBetween: 80
              },
              992: {
                  slidesPerView: 6,
                  spaceBetween: 120
              }
          }
      });
  </script> 
  </body>
</html>
