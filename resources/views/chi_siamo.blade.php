<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog di febbraio 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <style>
      body {
        background-image: url('https://picsum.photos/1920/1080?random=4');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
      }
    </style>
  </head>
  <body class="w-100">
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

    <div class="container-fluid mt-5">
      <h1 class="text-center mb-4">Chi Siamo</h1>
      <section>
        <h2>La Nostra Missione</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab nobis fugiat, vel cumque nemo reiciendis aut in repudiandae. Amet vitae tempora quia corrupti dicta saepe vel sapiente porro magni incidunt?
        </p>
      </section>

      <section class="mt-5">
        <h2>Il Nostro Team</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="https://picsum.photos/150/150?random=1" class="card-img-top" alt="Team Member">
              <div class="card-body">
                <h5 class="card-title">Mario Volpi</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut beatae, asperiores officiis iste, odit numquam aliquam dicta veniam consectetur a rerum minima quae dignissimos pariatur? Repellat voluptatum eos perspiciatis sunt!</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="https://picsum.photos/150/150?random=2" class="card-img-top" alt="Team Member">
              <div class="card-body">
                <h5 class="card-title">Luca Bianchi</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat molestias sint dolorum eos minima saepe obcaecati nihil illo, accusantium facilis optio asperiores laudantium repellat, tempora omnis, non harum voluptates porro?</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="https://picsum.photos/150/150?random=3" class="card-img-top" alt="Team Member">
              <div class="card-body">
                <h5 class="card-title">Anna Rossi</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum accusantium ducimus id maxime fuga atque molestias ratione! Labore, sapiente quasi soluta voluptatibus neque enim ipsa ducimus aut fuga repellendus eaque!</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="mt-5">
        <h2>La Nostra Visione</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ut asperiores possimus, eos eius dolorum minus, quas tempora explicabo, ipsam quae veniam. Aperiam ab provident consequatur, ex perspiciatis perferendis quo..
        </p>
      </section>

      <section class="mt-5">
        <h2>I Nostri Valori</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat id enim eveniet iure atque eos, mollitia unde voluptas perspiciatis repellat temporibus velit, voluptates quos fugit nostrum sunt adipisci quidem nobis.</p>
      </section>
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