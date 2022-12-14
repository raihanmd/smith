<?php
session_start();
require "function.php";

$gambar = query("SELECT * FROM picture");

if(@$terkirim == true){
  echo '<style type="text/css">
  #alert1 {
      display: block;
  }
  </style>';
}
if(@$gagal == true){
  echo '<style type="text/css">
  #alert2 {
      display: block;
  }
  </style>';
}

if(isset($_POST['btncontact'])){

  $maxpesan = strlen($_POST['pesan']);
  if($maxpesan <= 300){
    if(contact($_POST) > 0){
      $terkirim = true;
    }else{
      $gagal = true;
    }
  }else{
    $gagal = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header class="header pl-5">
      <div class="header-inner">
        <div class="container-fluid px-lg">
          <nav class="navbar navbar-expand-lg my-navbar">
            <a class="navbar-brand" href="#"
              ><span class="logo pl-5">Smith</span>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"
                ><i class="fas fa-bars" style="margin: 5px 0px 0px 0px"></i
              ></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Gallery
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Design</a>
                    <a class="dropdown-item" href="#">Branding</a>
                    <a class="dropdown-item" href="#">Photography</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">All</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <button class="header-btn my-2 my-sm-0" type="submit">
                  Login
                </button>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <div
      data-bs-spy="scroll"
      data-bs-target="#navbar-example2"
      data-bs-root-margin="0px 0px -40%"
      data-bs-smooth-scroll="true"
      class="scrollspy-example bg-light p-3 rounded-2"
      tabindex="0"
    ></div>
    <section id="home">
      <div class="card text-bg-dark">
        <img src="img/main.jpg" class="card-img" alt="main" />
        <div class="card-img-overlay p-5">
          <h5 class="card-title"><h2>BOSTAMI</h2></h5>
          <p class="card-text"><h1>Web Developer.</h1></p>
          <p class="card-text"><h4>base in indonesia.</h4></p>
          <p class="card-text"><button class="header-btn my-2 my-sm-0" type="submit">
            SEE PORTFOLIO
          </button></p>
        </div>
      </div>
    </section>

    <section id="about" class="mt-5">
      <div class="container text-center">
        <div class="row">
          <div class="col-md">
            <img src="img/about.jpg" class="img-fluid" alt="about" />
          </div>
          <div class="col p-5">
            <h3>Creative Independent Web Developer based in Indo</h3>
            <p>
              I'm web designer, and I'm very passionate and dedicated to my
              work. With 20 years experience as a professional web developer, I
              have acquired the skills and knowledge necessary to make your
              project a success. I enjoy every step of the design process, from
              discussion and collaboration.
            </p>

            <button class="header-btn my-2 my-sm-0" type="submit">
              Download CV
            </button>
          </div>
        </div>
      </div>
    </section>

    <section></section>

    <section id="gallery" class="mt-5">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="pb-5" style="color: #000">My Gallery</h2>
          </div>
        </div>
        <?php foreach($gambar as $g) : ?>
        <div class="row">
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="img/<?= $g ?>.jpg" class="card-img-top" alt="gambar" />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="portfolio" class="mt-5">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12">
            I have high skills in developing and programming
            <!-- <div class="d-flex p-2 justify-content-between">
              <div class="box">
                  <img src="img/icon-1.png" style="height: 7rem;">
                  <h3>html</h3>
              </div>
              <div class="box">
                  <img src="img/icon-2.png" style="height: 7rem;">
                  <h3>css</h3>
              </div>
              <div class="box">
                  <img src="img/icon-3.png" style="height: 7rem;">
                  <h3>javascript</h3>
              </div>
              <div class="box">
                  <img src="img/icon-4.png" style="height: 7rem;">
                  <h3>sass</h3>
              </div>
              <div class="box">
                  <img src="img/icon-5.png" style="height: 7rem;">
                  <h3>jquery</h3>
              </div>
              <div class="box">
                  <img src="img/icon-6.png" style="height: 7rem;">
                  <h3>react.js</h3>
              </div>
          </div> -->
          </div>
        </div>
      </div>
    </section>

    <section id="video" class="mt-5">
      <div class="card text-bg-dark" id="home">
        <img src="img/bg.png" class="card-img" alt="bg" />
        <div class="card-img-overlay">
          <h5 class="card-title">play</h5>
          <p class="card-text">
            I am delivering beautiful digital products for my clients
          </p>
          <p class="card-text"><small>Watch Video</small></p>
        </div>
      </div>
    </section>

    <section></section>

    <section id="contact" class="mt-5">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="pb-4">Contact</h2>
          </div>
        </div>
        <form class="row g-3">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Firts Name</label>
            <input type="text" class="form-control" id="inputEmail4" />
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="inputPassword4" />
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="inputAddress"
            />
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Telp</label>
            <input
              type="number"
              class="form-control"
              id="inputAddress2"
            />
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">City</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>Jakarta</option>
              <option>Bandung</option>
              <option>Tasikmayala</option>
              <option>Surabaya</option>
              <option>Yogyakarta</option>
              <option>Medan</option>
              <option>Malang</option>
              <option>Ciamis</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Maseger</label>
            <textarea class="form-control" cols="38" rows="10"></textarea>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" />
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Sumbit</button>
          </div>
        </form>
      </div>
    </section>
    <footer class="bg-primary text-white text-center mt-5 pb-3 pt-5">
      <p>
        Created with love by Smith
        <a
          href="https://www.instagram.com/smk.miftahussalam/?hl=id"
          class="text-white fw-bold"
          >Smk Miftahussalam.
        </a>
      </p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script src="js/popper.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.min.js"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
      $(function () {
        var navbar = $(".header-inner");
        $(window).scroll(function () {
          if ($(window).scrollTop() <= 40) {
            navbar.removeClass("navbar-scroll");
          } else {
            navbar.addClass("navbar-scroll");
          }
        });
      });
    </script>

    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
