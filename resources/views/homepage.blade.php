<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog di febbraio 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Blog di Matteo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('chi_siamo') }}">Chi siamo</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('servizi') }}">Servizi</a></li>
          </ul>
        </div>
      </div>
    </nav>
    
    <header class="hero">
      <div class="container text-center text-white">
        <h1>Benvenuto nel blog di febbraio 2025</h1>
        <p>Scopri le novità di questo mese!</p>
      </div>
    </header>
    
    <div class="container mt-5">
      <div class="row">
        @foreach ($posts as $post)
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://picsum.photos/400/300?random={{ $loop->index }}" class="card-img-top" alt="Immagine post">
              <div class="card-body d-flex flex-column justify-content-center text-center">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{ Str::limit($post['content'], 100) }}</p>
                <a href="{{ route('pagina_dettaglio' . ($loop->index % 3 + 1)) }}" class="btn btn-primary">Leggi di più</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    
    <footer class="bg-dark text-white text-center p-3 mt-5">
    <div class="container">
        <h5>Contatti</h5>
        <p>Email: mariovolpi@infoblog.com</p>
        <p>Telefono: +39 123 456 7890</p>
        <p>Indirizzo: Via della fortuna 241, Bologna, Italia</p>
        <div class="social-icons mt-3">
            <a href="https://www.facebook.com" class="text-white mx-2" target="_blank" style="text-decoration: none;">
                <i class="bi bi-facebook" style="font-size: 1.5rem; display: inline-block;"></i>
            </a>
            <a href="https://www.twitter.com" class="text-white mx-2" target="_blank" style="text-decoration: none;">
                <i class="bi bi-twitter" style="font-size: 1.5rem; display: inline-block;"></i>
            </a>
            <a href="https://www.instagram.com" class="text-white mx-2" target="_blank" style="text-decoration: none;">
                <i class="bi bi-instagram" style="font-size: 1.5rem; display: inline-block;"></i>
            </a>
            <a href="https://www.linkedin.com" class="text-white mx-2" target="_blank" style="text-decoration: none;">
                <i class="bi bi-linkedin" style="font-size: 1.5rem; display: inline-block;"></i>
            </a>
        </div>
    </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
