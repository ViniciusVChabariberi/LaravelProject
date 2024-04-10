<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ETEC ZL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="home">Escola Técnica da Zona Leste</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="quemsomos">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticias">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato">Contato</a>
          </li>
          <li class="nav-item">
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
              @auth
              <a href="{{ url('/dashboard') }}" class="nav-link rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
              </a>
              @else
              <a href="{{ route('login') }}" class="nav-link rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
              </a>

              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="nav-link rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
              </a>
              @endif
              @endauth
            </nav>
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5 text-center" id="sobre">
    <h2>ETEC Zona Leste</h2>
    <p class="fs-5">A Escola Técnica da Zona Leste é uma instituição dedicada a oferecer cursos técnicos de alta qualidade nas áreas de tecnologia, administração, logística, entre outros.</p>
  </div>


  <div class="container mt-5" id="noticias">
    <h2>Notícias</h2>
    <div class="card mb-3">
      <img src="{{ asset('imagens/etec1.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ETEC está de portas abertas!</h5>
        <p class="card-text">Nossa instituição está aberta e pronta para o ano letivo de 2024. Alunos, compareçam as aulas e cumpram seus deveres de acordo com o manual do aluno!</p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="{{ asset('imagens/etec3.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Feira Tecnológica</h5>
        <p class="card-text">No último bimestre, nossa instituição promove a participação de todas as turmas da escola na feira tecnológica, onde são apresentados projetos desenvolvidos ao longo do ano pelos alunos.</p>
      </div>
    </div>
    <div class="card mb-3">
      <img src="{{ asset('imagens/etec4.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">O Auditório recebe novos equipamentos</h5>
        <p class="card-text">O auditório da ETEC Zona Leste recebeu novos equipamentos de aúdio de som e promete uma nova qualidade na experiência.</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
