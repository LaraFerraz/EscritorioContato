<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escritório Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=VMeks02W"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="images/logo2.jpeg" rel="shortcut icon">
</head>
<body>
    
<div id="cookieModal" class="modal-cookie" style="display: none;">
  <div class="modal-cookie-content">
    <h4>Este site usa cookies 🍪</h4>
    <p>Utilizamos cookies para melhorar sua experiência, personalizar conteúdo e analisar nosso tráfego. Leia nossa 
     <a href="index.php?page=politica" target="_blank">Política de Cookies</a>.
    </p>
    <div class="modal-cookie-buttons">
      <button onclick="aceitarCookies()">Aceitar todos</button>
      <button onclick="recusarCookies()">Recusar</button>
      <button onclick="abrirConfig()">Gerenciar cookies</button>
    </div>
  </div>
</div>

    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="?param=index">
      <img src="images/logo.png" alt="Logo do escritório Contato" width="70" height="70" class="d-inline-block align-text-center">
      ESCRITÓRIO CONTATO
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2">
        <li class="nav-item"><a class="nav-link active" href="index.php?page=home">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=sobre-nos">SOBRE NÓS</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#servicos" role="button" data-bs-toggle="dropdown">SERVIÇOS</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?page=servicos#servicos-contabeis">Serviços Contábeis</a></li>
            <li><a class="dropdown-item" href="index.php?page=servicos#assessoria-empresarial">Assessoria Empresarial</a></li>
            <li><a class="dropdown-item" href="index.php?page=servicos#imposto-renda">Imposto de Renda</a></li>
            <li><a class="dropdown-item" href="index.php?page=servicos#itr">ITR</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=contato">CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>
    
        <?php
            $page = $_GET['page'] ?? 'home';

            switch ($page) {
                case 'politica':
                    include 'pages/politica.php';
                    break;
                case 'sobre-nos':
                    include 'pages/sobre-nos.php';
                    break;
                case 'servicos':
                    include 'pages/servicos.php';
                    break;
                case 'contato':
                    include 'pages/contato.php';
                    break;
                case 'home':
                default:
        ?>
        <img src="images/banner3.png" class="img-fluid w-100" alt="banner" style="height: 400px; object-fit: cover;">
                    <main class="container">
                       <section class="mt-4 d-flex flex-column align-items-center" style="text-align: justify;">
                            <br>
                            <br>
                            <h2 class="text-center">Seja Bem-vindo</h2>
                                <p>
                                    No Escritório Contato, entendemos que cuidar da contabilidade vai muito além de números e obrigações fiscais, trata-se de oferecer tranquilidade, organização e apoio estratégico para pessoas físicas, empreendedores e empresas que querem crescer com segurança.
                                </p>
                                <p>
                                    Com mais de 30 anos de experiência, atuamos com seriedade e compromisso, oferecendo um atendimento personalizado, com soluções adequadas à realidade de cada cliente.
                                </p>
                                <p class = "text-center">
                                    <a href="index.php?page=contato" class = "btn btn-secondary">
                                        Fale Conosco 
                                    </a>
                                </p>
                        </section>
                    </main>
                   <section class="container my-5 servicos-bg-area"> <h2 class="text-center mb-4">Nossos Serviços</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center"> <div class="col">
            <a href="index.php?page=servicos#servicos-contabeis" class="text-decoration-none text-dark">
                <div class="card h-100"> <div class="card-body">
                        <h5 class="card-title text-center">Serviços Contábeis</h5>
                        <p class="card-text">Escrituração contábil, apuração de impostos e entrega de obrigações fiscais para manter sua empresa em dia.</p>
                    </div>
                    <img src="images/card4.png" class="card-img-bottom" style="height:60px;" alt="imagem cor azul">
                </div>
            </a>
        </div>

        <div class="col">
            <a href="index.php?page=servicos#assessoria-empresarial" class="text-decoration-none text-dark">
                <div class="card h-100"> <div class="card-body">
                        <h5 class="card-title text-center">Assessoria</h5>
                        <p class="card-text">Abertura, regularização e suporte estratégico para empresas em todas as etapas do negócio.</p>
                    </div>
                    <img src="images/cor.card.png" class="card-img-bottom" style="height:60px;" alt="imagem cor azul">
                </div>
            </a>
        </div>

        <div class="col">
            <a href="index.php?page=servicos#imposto-renda" class="text-decoration-none text-dark">
                <div class="card h-100"> <div class="card-body">
                        <h5 class="card-title text-center">Imposto de Renda</h5>
                        <p class="card-text">Declaração de IR para pessoas físicas e jurídicas com atenção a todos os detalhes e deduções legais.</p>
                    </div>
                    <img src="images/card2.png" class="card-img-bottom" style="height:60px;" alt="imagem cor azul">
                </div>
            </a>
        </div>

        <div class="col">
            <a href="index.php?page=servicos#itr" class="text-decoration-none text-dark">
                <div class="card h-100"> <div class="card-body">
                        <h5 class="card-title text-center">ITR</h5>
                        <p class="card-text">Preenchimento e envio da Declaração do Imposto Territorial Rural com conformidade e agilidade.</p>
                    </div>
                    <img src="images/card3.png" class="card-img-bottom" style="height:60px;" alt="imagem cor azul">
                </div>
            </a>
        </div>
    </div>
</section>


                    <!-- Seção Escritório -->
                    <section class="mt-5 text-center">
                        <br>
                        <br>
                        <h2>Nosso Escritório</h2>
                        <!-- Espaço para Imagem -->
                        <p>Rua  Roberto Brzezinski, 653, sala 01 - Campo Mourão/Paraná</p>
                        <p>Telefone: (44) 3523-1815 | Email: Contato@hotmail.com</p>
                        <!-- Google Maps -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.425194085611!2d-52.3759135!3d-24.051326899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed75437f65ca71%3A0xe958d6a338c50a93!2sEscrit%C3%B3rio%20Contato%20Contabilidade%20-%20Campo%20Mour%C3%A3o%20PR!5e0!3m2!1spt-BR!2sbr!4v1749681286298!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </section>
                    <?php
                    break;
            }
        ?>
   

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>© 2025 Escritório Contato. Todos os direitos reservados.</p>
        <p>
            <a href="https://wa.me/5544999871789" target="_blank" class="text-white text-decoration-none mx-2">
                <i class="fa-brands fa-whatsapp"></i>
            </a> |
            <a href="https://www.instagram.com/escritoriocontato_/" target="_blank" class="text-white  text-decoration-none mx-2">
                <i class="fa-brands fa-instagram"></i>
            </a> |
             <a href="tel:+554435231815" class="text-white  text-decoration-none mx-2">
                <i class="fa-solid fa-phone"></i>
            </a> 
        </p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
<script>
  function aceitarCookies() {
    localStorage.setItem('cookieConsent', 'aceito');
    document.getElementById('cookieModal').style.display = 'none';
    // Ative scripts de terceiros aqui, se necessário
  }

  function recusarCookies() {
    localStorage.setItem('cookieConsent', 'recusado');
    document.getElementById('cookieModal').style.display = 'none';
    // Bloqueie ou desative cookies desnecessários aqui
  }

  function abrirConfig() {
    alert('Painel de configuração em breve...');
    // Aqui você pode abrir outro modal com opções de personalização de cookies
  }

  window.onload = function () {
    const consent = localStorage.getItem('cookieConsent');
    if (!consent) {
      document.getElementById('cookieModal').style.display = 'flex';
    }
  };
</script>

</body>
</html>
