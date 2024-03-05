<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
  <style>
    /*
 * Globals
 */

    /* Links */
    a,
    a:focus,
    a:hover {
      color: #fff;
    }

    /* Custom default button */
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus {
      color: #333;
      text-shadow: none;
      /* Prevent inheritance from `body` */
      background-color: #fff;
      border: .05rem solid #fff;
    }


    /*
 * Base structure
 */

    html,
    body {
      height: 100%;
      background-color: #333;
    }

    body {
      display: -ms-flexbox;
      display: -webkit-box;
      display: flex;
      -ms-flex-pack: center;
      -webkit-box-pack: center;
      justify-content: center;
      color: #fff;
      /* text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5); */
      box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .cover-container {
      max-width: 42em;
    }


    /*
 * Header
 */
    .masthead {
      margin-bottom: 2rem;
    }

    .masthead-brand {
      margin-bottom: 0;
    }

    .nav-masthead .nav-link {
      padding: .25rem 0;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
      background-color: transparent;
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }

    @media (min-width: 48em) {
      .masthead-brand {
        float: left;
      }

      .nav-masthead {
        float: right;
      }
    }


    /*
 * Cover
 */
    .cover {
      padding: 0 1.5rem;
    }

    .cover .btn-lg {
      padding: .75rem 1.25rem;
      font-weight: 700;
    }


    /*
 * Footer
 */
    .mastfoot {
      color: rgba(255, 255, 255, .5);
    }
  </style>
  <title>Love</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/"> -->

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="./Cover Template for Bootstrap_files/cover.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <a href="{{ url()->previous() }}"><button type="button" class="btn btn-sm btn-outline-secondary" onmouseover="this.style.backgroundColor='red'; this.style.color='white';" onmouseout="this.style.backgroundColor='inherit'; this.style.color='grey';">back</button></a>
    <main role="main" class="inner cover">
      <h1 class="cover-heading">Love</h1>
      <img src="{{ asset('images/love.jpg') }}" alt="Thumbnail [100%x225]" style="height: 300px; width: 100%; display: block; object-fit:contain;">
      <br>
      <p class="lead">Love story adalah genre tentang kisah cinta yang direkam dalam media visual untuk disiarkan di bioskop dan televisi yang berfokus pada gairah, emosi, dan keterlibatan kasih sayang dari karakter utama dan perjalanan yang benar-benar kuat, cinta sejati dan murni mereka yang akan membawa mereka melalui kencan, pacaran atau pernikahan.
      </p>
  </div>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="./Cover Template for Bootstrap_files/jquery-3.2.1.slim.min.js.download" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="./Cover Template for Bootstrap_files/popper.min.js.download"></script>
  <script src="./Cover Template for Bootstrap_files/bootstrap.min.js.download"></script>


</body>

</html>