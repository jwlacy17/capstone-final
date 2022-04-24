
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blockchain Framework </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
<link href="css/styles.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">

  </head>
  <body>
<!-- Nav bar  -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Blockchain Project </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About Blockchain </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Framework </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="change.php"> Change Management </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.php"> Latest News </a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>

<!-- Framework Content  -->

<h1 class="display-5"> Level 2 Use-Case Assessment </h1>

<?php
$value_to_page = array(
    "hbs" => 'useCase/digOwnership.php',
    "bs"  => 'useCase/energy.php',
    "pvr" => 'useCase/defi.php',
    "epc" => 'useCase/prov.php',
    "epc1" => 'useCase/payment.php',
);
if(isset($_POST['submit'])){

    // process other fields like $_POST['some-other']
    if(isset($_POST['options']) && isset($value_to_page[$_POST['options']])){
        header('Location: '.$value_to_page[$_POST['options']]);
        return;
    }
} ?>

<div>
<p> What use case do you want for your organization? </p>
<form method="post">
    <label><input type="radio" name="options" value="hbs" /> Digital Ownership</label>
    <label><input type="radio" name="options" value="bs" /> Energy </label>
    <label><input type="radio" name="options" value="pvr" /> Decentralized Finance</label>
    <label><input type="radio" name="options" value="epc" /> Provenance </label>
    <label><input type="radio" name="options" value="epc1" /> Payments & Cryptocurrencies </label>
    <button type="submit" name="submit">Submit </button>
</form>
</div>





    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
