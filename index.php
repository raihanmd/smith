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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MyGallery</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- <link
      rel="stylesheet"
      href="https://assets.ubuntu.com/v1/vanilla-framework-version-x.x.x.min.css"
    /> -->
  </head>
  <body>
    <!-- Navbar -->
    <nav class="animate__animated animate__pulse">
      <h1>Smith</h1>
      <ul>
        <li><a href="#" class="page">Home</a></li>
        <span class="span"></span>
        <li>
          <a href="#About" class="page">About</a>
          <span class="span"></span>
        </li>
        <li>
          <a href="#Gallery" class="page">Gallery</a>
          <span class="span"></span>
        </li>
        <li>
          <a href="#Porto" class="page">Portfolio</a>
          <span class="span"></span>
        </li>
        <li>
          <a href="#Contact" class="page">Contact</a>
          <span class="span"></span>
        </li>
        <li>
          <a href="login" class="gin">Login</a> 
          <span class="span"></span>
        </li>
      </ul>

      <div class="menu-toggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!--! Hero -->
    <div class="hero"></div>
    <!--! Akhir Hero -->
    <!-- Text -->
    <div class="text animate__animated animate__bounceIn">
      <h2>BOSTAMI</h2>
      <h1>Web Developer.</h1>
      <h4>base in indonesia.</h4>
      <a href="#" download="" class="cv">SEE PORTFOLIO</a>
    </div>
    <!-- Text -->

    <!-- About -->
    <div class="About" id="About">
      <img src="img/about.jpg" alt="About" width="100%" height="100%" />
      <div class="tentang">
        <span class="satu">ABOUT ME</span>
        <h3>
          Creative Independent Web <br />
          Developer based in Indo
        </h3>
        <p>
          I'm web designer, and I'm very passionate and dedicated to my work.
          <br />
          With 20 years experience as a professional web developer, I have
          <br />
          acquired the skills and knowledge necessary to make your project a
          <br />
          success. I enjoy every step of the design process, from discussion and
          <br />
          collaboration.
        </p>
        <a href="#" download="" class="cv">Download CV</a>
      </div>
    </div>
    <!-- Akhir About -->

    <div class="Porto" id="Gallery">
      <span class="dua">PORTFOLIO</span>
      <section class="section">
        <h3>Creative Portfolio</h3>
        <ul>
          <li><a href="#">All</a></li>
          <li><a href="#">Design</a></li>
          <li><a href="#">Branding</a></li>
          <li><a href="#">Photography</a></li>
        </ul>
      </section>
        <section class="gallery">
        <?php foreach($gambar as $row): ?>
        <img src="img/<?= $row["gambar"]?>" alt="gambar" />
        <?php endforeach; ?>
      </section>
    </div>

    <div class="bar" id="Porto">
      <section class="a">
        <h3>
          I have high skills in developing <br />
          and programming
        </h3>
        <p>
          I am working on a professional, visually sophisticated and <br />
          technologically proficient, responsive and multi-functional personal
          <br />
          portfolio template Shane.
        </p>
      </section>
      <section class="b">
        <div class="web-bar">
          <p class="weBD">Web Development</p>
          <p class="pBD">95%</p>
        </div>
        <div class="web"></div>

        <div class="web-bar">
          <p class="weB">Brand Identity</p>
          <p>80%</p>
        </div>
        <div class="brand"></div>

        <div class="web-bar">
          <p class="weB">Logo Design</p>
          <p>90%</p>
        </div>
        <div class="logo"></div>
      </section>
    </div>

    <section class="video">
      <img src="img/bg.png" alt="bg" />
      <div class="buton">
        <div class="play"></div>
        <h3>
          I am delivering beautiful digital <br />
          products for my clients
        </h3>
        <a href="#" download="" class="cv">Watch Video</a>
      </div>
      <div class="clip">
        <video src="video.mp4" controls></video>
        <b>Close</b>
      </div>
    </section>

        <!-- =================================== CONTACT =================================== -->
        <section class="contact" id="Contact">
      <h2>Contact US</h2>
      <form action="" method="POST" class="contactform">
      <?php if(@$terkirim == true) : ?>
        <div class="alert" id="alert1">
          <h2>Pesan anda sudah terkirim!!</h2>
          <h3>Terimakasih, tanggapan anda akan kami respon secepatnya, ASAP.</h3>
          <a id="clsalert" onclick="this.parentElement.style.opacity='0'; setTimeout(() => {this.parentElement.style.display='none';}, 1000)">&times</a>
        </div>
        <?php endif; ?>
      <?php if(@$gagal == true) : ?>
        <div class="alert-danger" id="alert2">
          <h2>Pesan anda gagal terkirim!!</h2>
          <h3>Harap isi form dengan benar, tulisannya lebih perhatikan lg yah! Pesan maksimal 300 kata</h3>
          <a id="clsalert" onclick="this.parentElement.style.opacity='0'; setTimeout(() => {this.parentElement.style.display='none';}, 1000)">&times</a>
        </div>
        <?php endif; ?>
        <div class="wrapper">
          <div class="input-data">
            <input type="text" required name="nama" />
            <div class="underline"></div>
            <label>Nama</label>
          </div>
        </div>
        <div class="wrapper">
          <div class="input-data">
            <input type="email" required name="email" />
            <div class="underline"></div>
            <label class="mail">Email</label>
          </div>
        </div>
        <div class="wrapper">
          <div class="input-data">
            <input type="number" required name="nohp" />
            <div class="underline"></div>
            <label>Nomor Henphone</label>
          </div>
        </div>
        <div class="wrapper">
          <div class="input-data">
            <textarea onkeyup="countChars(this);" id="pesantext" name="pesan" required autocomplete="off"></textarea>
            <div class="underline"></div>
            <label>Pesan</label>
            <p id="charNum">0/300</p>
          </div>
        </div>
        <div class="wrapper">
          <button type="submit" name="btncontact">Kirim</button>
        </div>
      </form>
    </section>
    <!-- =================================== CONTACT =================================== -->

    <!--TODO Footer  -->
    <footer>Copyright By Asep Firman</footer>
    <!--TODO Akhir Footer  -->

    <!-- <div class="galery">
        <img src="img/1.jpeg" alt="gambar">
        <img src="img/2.jpg" alt="gambar">
        <img src="img/3.jpg" alt="gambar">
        <img src="img/4.jpg" alt="gambar">
        <img src="img/5.jpg" alt="gambar">
        <img src="img/6.jpg" alt="gambar">
        <img src="img/7.jpg" alt="gambar">
        <img src="img/8.jpg" alt="gambar">
        <img src="img/9.jpg" alt="gambar">
        <img src="img/10.jpg" alt="gambar">
    </div>
    <a href="img/resume/resume.jpg" download="" class="cv">Download CV</a>
    <footer><a href="#">Copyright by asep</a></footer> -->

    <script src="js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>

    <script>
      const alert = document.querySelectorAll('.alert');
      const alertDanger = document.querySelectorAll('.alert-danger');
      const clsAlert = document.querySelectorAll('#clsalert');

    </script>
  </body>
</html>
