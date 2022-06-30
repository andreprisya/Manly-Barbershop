<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= base_url('assets/') ?>bulma/css/bulma.min.css" rel="stylesheet">
  <title>Manly Barbershop</title>
</head>

<body>
  <header>
    <div class="container is-fluid">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" whref="#">
          <img src="<?= base_url('assets/') ?>logo/body.png" style="height : 30px;">
          <img src="<?= base_url('assets/') ?>logo/word.png" width="">
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-end">
          <a class="navbar-item">
            Home
          </a>

          <a class="navbar-item">
            Documentation
          </a>


          <a class="navbar-item">
            More
          </a>

        </div>

        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
      </div>
    </nav>
  </header>
    </div>


    <main>
      <section class="hero is-primary">
        <div class="hero-body">
          <p class="title">
            Primary hero
          </p>
          <p class="subtitle">
            Primary subtitle
          </p>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
          <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
          is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
        </p>
      </div>
    </footer>
</body>

</html>