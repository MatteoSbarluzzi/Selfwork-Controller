<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $member['name'] }} {{ $member['surname'] }} - Blog di Matteo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <style>

      .wrapper {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      .content {
        flex: 1;
      }
    </style>
  </head>
  <body>

    <div class="wrapper">
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

      <div class="container mt-5 content">
        <div class="row">
          <div class="col-lg-8">
            <h1>{{ $member['name'] }} {{ $member['surname'] }}</h1>
            <p><strong>Ruolo:</strong> {{ $member['role'] }}</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis.</p>
          </div>

          <div class="col-lg-4">
            <img src="https://picsum.photos/350/200?random={{ rand(1, 100) }}" class="img-fluid mb-3" alt="Immagine Team Member">
          </div>
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
    </div>

  </body>
</html>
