<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= base_url('assets/') ?>bulma/css/bulma.css" rel="stylesheet">
  <title>Manly Barbershop</title>

  <style>
    * {
      scroll-behavior: smooth;
    }

    a {
      font-weight: 500;
    }

    li {
      font-weight: 500;
    }
  </style>

</head>

<body>
  <header>
    <div id="navbar" class="container is-maxwidth" style="padding-top: 5px;">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-start">
          <img src="<?= base_url('assets/') ?>logo/logo.png" width="150px">
        </div>

        <div id="navbarBasicExample" class="navbar-menu" style="padding-top: 5px;">
          <div class="navbar-end">
            <div class="navbar-item">
              <a href="#tentang" class="navbar-item">
                Tentang
              </a>

              <a href="#services" class="navbar-item">
                Services
              </a>

              <a href="#stylist" class="navbar-item">
                Stylist
              </a>

              <div style="padding-left: 30px;" class="buttons">
                <a class="button is-primary" style="padding: 0px 25px 0px 25px; background-color: #B09B71;">
                  <strong>Daftar</strong>
                </a>
                <a class="button is-light" style="padding: 0px 25px 0px 25px;">
                  Masuk
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>

    <section id="tentang" class="bg-white">
      <div style="padding: 140px 0px 200px 0px;" class="container section">
        <div class="columns is-vcentered is-variable is-0">
          <div class="column is-0">
            <figure class="image is-centered" style="padding-left: 90px ;margin: -100px 120px 0px 0px; padding-right:20px">
              <img style="border-radius: 6px;position: absolute;z-index: 9999;box-shadow: -45px -40px 0px 6px #B09B71;" src="<?= base_url('assets/') ?>img/banner1.jpg" alt="">
            </figure>
          </div>
          <div class="column">
            <div class="content" style="padding-left: 20px;">
              <h1 style="font-weight: bold; font-size: 50px">Discover What Good Hair is with us.</h1>
              <p style="font-size: 17px;">Booking pelayanan kami sekarang dan rasakan sensasi potongan rambut terbaik yang pernah anda rasakan.</p>
              <div class="buttons">
                <a href="" class="button is-primary" style="background-color: #B09B71; font-weight: 600;font-size: 17px;">Booking Sekarang!</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" style="background-color: #B09B71;">
      <div style="padding: 150px 30px 90px 10px;" class="container section">
        <div class="content has-text-centered" style="margin-top: -90px;">
          <h1 style="color: white; font-weight: 700;font-size: 35px;"><span style="color: #363636;">Pelayanan</span> Terbaik Kami!</h1>
        </div>

        <nav class="columns">
          <div class="column has-text-centered" style="background-color: white; border-radius: 10px; margin: 30px 20px 0px 100px;">
            <article class="media">
              <figure class="media-left">
                <span class="icon has-text-danger">
                  <i class="fas fa-cog fa-3x"></i>
                </span>
              </figure>
              <div class="media-content">
                <div class="content">
                  <h4 class="heading"><strong>Haircut</strong></h4>
                  <ul>
                    <li>Manly Executive Cut</li>
                    <li>Manly Grooming Cut</li>
                    <li>Manly Basic Cut</li>
                    <li>Long Haircut</li>
                    <li>Manly Little Cut</li>
                  </ul>
                </div>
              </div>
            </article>
          </div>

          <div class="column has-text-centered" style="background-color: white; border-radius: 10px; margin: 30px 100px 0px 20px;">
            <article class="media">
              <figure class="media-left">
                <span class="icon has-text-danger">
                  <i class="fas fa-cog fa-3x"></i>
                </span>
              </figure>
              <div class="media-content">
                <div class="content">
                  <h4 class="heading"><strong>Treatment</strong></h4>
                  <ul>
                    <li>Creambath</li>
                    <li>Hair Spa</li>
                    <li>Facial</li>
                    <li>Smoothing / Down Perm</li>
                    <li>Hair Mask</li>
                  </ul>
                </div>
              </div>
            </article>
          </div>
        </nav>

        <nav class="columns">
          <div class="column has-text-centered" style="background-color: white; border-radius: 10px; margin: 30px 20px 0px 100px;">
            <article class="media">
              <figure class="media-left">
                <span class="icon has-text-danger">
                  <i class="fas fa-cog fa-3x"></i>
                </span>
              </figure>
              <div class="media-content">
                <div class="content">
                  <h4 class="heading"><strong>Extras</strong></h4>
                  <ul>
                    <li>Basic Coloring</li>
                    <li>Hair Tatto Single Side</li>
                    <li>Hair Tatto Full Head</li>
                    <li>Full Head Shave</li>
                    <li>Wash & Styling</li>
                    <li>Barber Calling</li>
                  </ul>
                </div>
              </div>
            </article>
          </div>

          <div class="column has-text-centered" style="background-color: white; border-radius: 10px; margin: 30px 100px 0px 20px;">
            <article class="media">
              <figure class="media-left">
                <span class="icon has-text-danger">
                  <i class="fas fa-cog fa-3x"></i>
                </span>
              </figure>
              <div class="media-content">
                <div class="content">
                  <h4 class="heading"><strong>Shave</strong></h4>
                  <ul>
                    <li>Shave</li>
                    <li>Traditional Swing Shave</li>
                  </ul>
                </div>
              </div>
            </article>
          </div>
        </nav>
      </div>
    </section>

    <section id="stylist">
      <div class="container section" style="padding: 80px 0px 150px 0px;">
        <div class="content has-text-centered">
          <h1 style="font-weight: 700;font-size: 35px;"><span style="color:#B09B71; margin-right: 10px;">Stylist</span>Terbaik Kami</h1>
        </div>

        <nav class="columns" style="margin-top: 50px;">

          <div class="column has-text-centered">
            <div class="card">
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img class="is-rounded" src="<?= base_url('assets/') ?>img/harry.jpg" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="content">
                    <p class="title is-4">Harry</p>
                    <p class="subtitle is-6" style="color: gray;">Stylist</p>
                  </div>
                </div>

                <div class="content" style="text-align: left;">
                <p>
                  "Kepuasan Anda merupakan kepuasan kami"
                </p>
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <br>
                </div>
              </div>
            </div>
          </div>

          <div class="column has-text-centered">
            <div class="card">
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img class="is-rounded" src="<?= base_url('assets/') ?>img/juan.jpg" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="content">
                    <p class="title is-4">Juan</p>
                    <p class="subtitle is-6" style="color: gray;">Stylist</p>
                  </div>
                </div>

                <div class="content" style="text-align: left;">
                <p>
                  "Pelayanan adalah nomor 1"
                </p>
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <br>
                </div>
              </div>
            </div>
          </div>

          <div class="column has-text-centered">
            <div class="card">
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img class="is-rounded" src="<?= base_url('assets/') ?>img/gilang.jpg" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="content">
                    <p class="title is-4">gilang</p>
                    <p class="subtitle is-6" style="color: gray;">Stylist</p>
                  </div>
                </div>

                <div class="content" style="text-align: left;">
                <p>
                  "Memberikan usaha pada tiap helai rambut"
                </p>
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <img src="<?= base_url('assets/') ?>icon/ic_star.svg" >
                  <br>
                </div>
              </div>
            </div>
          </div>

        </nav>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Made with <Span style="color: red;">&#10084;</Span> by Andre </strong>
      </p>
    </div>
  </footer>
</body>

</html>