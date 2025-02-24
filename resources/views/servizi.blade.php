<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog di febbraio 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <style>
      /* Immagine di sfondo per l'intera pagina */
      body {
        background-image: url('https://picsum.photos/1920/1080?random=5');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
      }
      .stars i {
        color: #FFD700; /* Colore oro per le stelle */
      }
    </style>
  </head>
  <body class="w-100">
    <!-- Navbar con container-fluid per occupare tutta la larghezza -->
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

    <!-- Sezione Servizi -->
    <section id="servizi" class="text-white py-5">
      <div class="container text-center">
        <h2 class="mb-4">I nostri Servizi</h2>
        <p class="lead mb-5">Offriamo una vasta gamma di servizi per soddisfare le tue esigenze. Scopri di più su come possiamo aiutarti a raggiungere i tuoi obiettivi.</p>

        <!-- Lista Servizi -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white">
              <img src="https://picsum.photos/350/200?random=1" class="card-img-top" alt="Servizio 1">
              <div class="card-body">
                <h5 class="card-title">Servizio 1</h5>
                <p class="card-text">Descrizione breve del primo servizio che offriamo, che può essere una consulenza, uno sviluppo o un altro servizio importante.</p>
                <a href="#" class="btn btn-primary">Scopri di più</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white">
              <img src="https://picsum.photos/350/200?random=2" class="card-img-top" alt="Servizio 2">
              <div class="card-body">
                <h5 class="card-title">Servizio 2</h5>
                <p class="card-text">Una breve descrizione di un altro servizio che offriamo, utile per chi cerca soluzioni personalizzate o particolari competenze.</p>
                <a href="#" class="btn btn-primary">Scopri di più</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card bg-dark text-white">
              <img src="https://picsum.photos/350/200?random=3" class="card-img-top" alt="Servizio 3">
              <div class="card-body">
                <h5 class="card-title">Servizio 3</h5>
                <p class="card-text">Un altro servizio che risponde alle necessità dei nostri clienti, come una strategia, un piano o un processo specifico.</p>
                <a href="#" class="btn btn-primary">Scopri di più</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonianze -->
    <section id="testimonianze" class="bg-light py-5">
      <div class="container text-center">
        <h3 class="mb-4">Cosa Dicono i Nostri Clienti</h3>
        <div class="row">
          <div class="col-md-4">
            <div class="testimonial">
              <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, a labo tempore! Voluptates illo a soluta quaerat in.</p>
              <p>Valerio del Buono</p>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testimonial">
              <p class="lead">Lorte hic nemo veniam architecto illo? In, numquam. Quasi, quisquam eligendi.</p>
              <p>Annalisa Esposito</p>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
                <i class="bi bi-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="testimonial">
              <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque repelus perferendis eveniet ipsam quas, ipsum cupiditate excepturi temporibus quaerat.</p>
              <p>Luigi Bianchi</p>
              <div class="stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
   

    <!-- Footer -->
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
