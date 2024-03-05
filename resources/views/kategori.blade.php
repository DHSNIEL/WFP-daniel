<!DOCTYPE html>

<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Kategori</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="./Album example for Bootstrap_files/album.css">
</head>

<body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <!-- <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p> -->
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="text-white">Follow on Twitter</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="text-white">Like on Facebook</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
      <div class="container d-flex justify-content-between">
        <a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
            <circle cx="12" cy="13" r="4"></circle>
          </svg> &nbsp;
          <strong> Kategori</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main role="main">

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Cinemas
        </h1>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block; object-fit:cover;" src="{{ asset('images/anime.jpg') }}">
              <div class="card-body">
                <p class="card-text">Anime</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="kategori/anime"><button type="button" class="btn btn-sm btn-outline-secondary">Book</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="object-fit:cover;height: 225px; width: 100%; display: block;" src="{{ asset('images/horror.jpg') }}" data-holder-rendered="true">
              <div class="card-body">
                <p class="card-text">Horror</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="kategori/horror"><button type="button" class="btn btn-sm btn-outline-secondary" onmouseover="this.style.backgroundColor='#4CAF50'; this.style.color='white';" onmouseout="this.style.backgroundColor='white'; this.style.color='grey';">Book</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- come here disini di sini bro -->
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="object-fit:cover; height: 225px; width: 100%; display: block;" src="{{ asset('images/love.jpg') }}" data-holder-rendered="true">
              <div class="card-body">
                <p class="card-text">Love Story</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="kategori/love"><button type="button" class="btn btn-sm btn-outline-secondary">Book</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </main>

  <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <!-- <a href="https://getbootstrap.com/docs/4.0/examples/album/#">Back to top</a> -->
      </p>
      <!-- <p>Album example is © Bootstrap, but please download and customize it for yourself!</p> -->
      <!-- <p>New to Bootstrap? <a href="https://getbootstrap.com/docs/4.0/">Visit the homepage</a> or read our <a href="https://getbootstrap.com/docs/4.0/getting-started/">getting started guide</a>.</p> -->
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="./Album example for Bootstrap_files/jquery-3.2.1.slim.min.js.download" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="./Album example for Bootstrap_files/popper.min.js.download"></script>
  <script src="./Album example for Bootstrap_files/bootstrap.min.js.download"></script>
  <script src="./Album example for Bootstrap_files/holder.min.js.download"></script>


  <svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
    <defs>
      <style type="text/css"></style>
    </defs><text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text>
  </svg>
</body>

</html>