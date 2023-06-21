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
          <a href="index.php" class="btn btn-sm btn-primary text-uppercase">Fotovoltaicos<i class="fa-solid fa-leaf"></i>
          </a>

          <a href="em-construcao.html" class="btn btn-sm btn-primary text-uppercase">Construção e reforma <i class="fa-solid fa-helmet-safety"></i>
          </a>

          <a href="em-construcao.html" class="btn btn-sm btn-primary text-uppercase">Aquecedores de água <i class="fa-solid fa-temperature-arrow-up"></i>
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
          <div class="nav-item dropdown">
            <a href="index.php#sobre" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sobre</a>
            <div class="dropdown-menu bg-light m-0">
              <a href="index.php#sobre" class="dropdown-item">Quem somos</a>
              <a href="faq.html" class="dropdown-item">FAQ</a>
            </div>
          </div>
          <a href="index#servicos" class="nav-item nav-link">Serviços</a>
          <a href="simuladorsolar" class="nav-item nav-link active">Simulador Solar</a>
          <a href="contato" class="nav-item nav-link">Contato</a>
        </div>
      </div>
    </nav>

    <div class="container my-5">
      <h1 class="text-center mb-5 text-uppercase">Simulador Solar</h1>
      <div class="row">
        <div class="col-md-6">
          <!-- Formulário HTML -->
          <form class="simuladorform" method="post" action="enviar-contato-simulador.php">
            <h4 class="text-black">Entre em contato</h4>
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
              <label for="localidade" class="form-label">Localidade:</label>
              <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Sao Paulo" required>
            </div>
            <div class="mb-3">
              <label for="gasto" class="form-label">Gasto Mensal:</label>
              <input type="number" step="0.01" placeholder="R$ 0,00" class="form-control" id="gasto" name="gasto" required>
            </div>
            <div class="mb-3">
              <label for="mensagem" class="form-label">Mensagem:</label> <br>
              <textarea rows="5" cols="68" class="form-label" id="mensagem" name="mensagem"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
          </form>

        </div>
        <div class="col-md-6">
          <form class="simuladorCalc">
            <div class="mb-3">
              <h5 class="text-black">Calculadora de Economia de Energia:</h5>
              <label for="gasto-mensal" class="form-label">Gasto Atual Mensal com Energia (R$)</label>
              <input type="number" class="form-control" id="gasto-mensal" required>
            </div>
            <button type="button" id="calcular" class="btn btn-primary">Calcular</button>
          </form>

          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
              <span>Quantidade de Placas Solares</span>
              <span id="quantidade-placas"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Tamanho do Sistema (Kwp)</span>
              <span id="tamanho-sistema"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Quantidade de Módulos (un)</span>
              <span id="quantidade-modulos"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Produção Estimada Mensal (kWh/mês)</span>
              <span id="producao-mensal"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Produção Estimada Anual (kWh/ano)</span>
              <span id="producao-anual"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Área de Telhado Necessária (m²)</span>
              <span id="area-telhado"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Peso Estimado por m² (kg)</span>
              <span id="peso-estimado-m2"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Redução de CO2 na Atmosfera (kg CO2)</span>
              <span id="reducao-co2"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Equivalente a Árvores Plantadas (un)</span>
              <span id="arvores-plantadas"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Economia Mensal (R$)</span>
              <span id="economia-mensal"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Economia Total Acumulada em 30 Anos (R$)</span>
              <span id="economia-total"></span>
            </li>
          </ul>
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
    <script src="js/simulador.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    
    
  </body>
</html>
