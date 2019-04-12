<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Simple crud code_igniter">
  <meta name="author" content="Saefulloh">

  <title>Saefulloh Aziz</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/css/'); ?>bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/css/'); ?>my.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top py-4">
    <?= $this->session->flashdata('message'); ?>
      <div class="container">
        <a class="navbar-brand page-scroll" href="#home">Saefulloh Aziz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link ml-5 page-scroll active" href="#home">Home</a>
            <a class="nav-item nav-link ml-5 page-scroll active" href="#about">About</a>
            <a class="nav-item nav-link ml-5 page-scroll active" href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </nav>


    <!-- jumbotron -->
    <section id="home">
      <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container text-center text-white py-5">
          <img src="<?= base_url('assets/img/') . 'fuy.jpg'; ?>" class="img-thumbnail rounded-circle" width="25%">
          <h1 class="display-3 mt-3">Saefulloh Aziz</h1>
          <p class="lead mb-5">Student | Programmer | Designer</p>
        </div>
      </div>
    </section>

    <!-- about -->
    <section id="about">
      <div class="container pb-5">
        <div class="row">
          <div class="col text-center my-4">
            <h2 class="about">About</h2> 
            <hr width="30%"> 
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-5">
            <p class="pKiri">Hello, my name is Saefulloh Aziz. I'm is a student for last years in SMK Informatika Sumedang. A first son from a my lovely family. My mother name is Titin Suryatin and my father name is Enceng Sumitra.</p>
          </div>
          <div class="col-md-5">
            <p class="pKanan">My vision is to raise my family degree and provide useful innovation for a people. And i hope in my first change i work i can help my family economy. My principle is "work right", because some people just want to work fast but that make they uncare, and make som mistake and they must be work it again.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- contact -->
    <section id="contact" class="bg-light">
      <div class="container pb-5">
        <div class="row">
          <div class="col text-center my-4">
            <h2 class="contact">Contact Me!</h2>
            <hr width="30%"> 
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card text-white bg-dark mb-3">
              <div class="card-body">
                <h4 class="card-title">Saefulloh Aziz</h4>
                <p class="card-text">"Work smart, not work hard."</p>
              </div>
            </div>
            <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">16171234@smkifsmd.sch.id</li>
                <li class="list-group-item">SaefullohAziz027@gmail.com</li>
                <li class="list-group-item">+6281214392665</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <form action="<?= base_url('landing/index'); ?>" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="text" class="form-control" name="name" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="text" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="phonenumber">Phone number</label>
                <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>'); ?>
                <input type="text" class="form-control" name="phonenumber" id="phonenumber">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <?= form_error('message', '<small class="text-danger pl-3">', '</small>'); ?>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-success col-md-4 mb-5">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row py-3">
          <div class="col text-center">
            <p>&copy; 2019 by Saefulloh Aziz.</p>
            <a href="<?= base_url('crud'); ?>" class="btn btn-danger">Simple crud</a>
          </div>
        </div>
      </div>
    </footer>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/js/'); ?>jquery-3.3.1.min.js"></script>
  <script src="<?= base_url('assets/js/'); ?>bootstrap.js"></script>
  <script src="<?= base_url('assets/js/'); ?>jquery.easing.1.3.js"></script>
  <script src="<?= base_url('assets/js/'); ?>myScript.js"></script>

</body>

</html>
