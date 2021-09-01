<?php
error_reporting("E_ALL & ~E_NOTICE");
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>TOOLS</title>
  </head>
  <style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
  <body>
       <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
       <div class="container-fluid">
        <a class="navbar-brand" href="index.php">TOOLS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="entry.php">Entry Nilai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="balok.php">Balok</a>
            </li>  
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <H3 class= " alert alert-light text-center text-dark mt-5 "> Luas dan Volume Balok</H3>
    </div>
    <div class="container-fluid bg-light" > 
      <img src="balokmuter.gif" height="150" width="150" margin style="margin-left: auto; margin-right: auto; display: block; margin-top: 10px;">
    </div>
    <form class="offset-lg-2 col-lg-8" action="" method="post">
  <div class="row mt-3 mb-4">
    <div class="col text-center">
      <label for="panjangbalok" class="mb-2">Panjang Balok</label>
     <input name="panjangbalok" id="panjangbalok" class="form-control" value="0" type="number" min="1" onchange="this.value = Math.floor(Math.max(this.value,1))" required>
    </div>
    <div class="col text-center">
      <label for="lebarbalok" class="mb-2">Lebar Balok</label>
     <input name="lebarbalok" id="lebarbalok" value="0" type="number" class="form-control" min="1" onchange="this.value = Math.floor(Math.max(this.value,1))" required>
    </div>
    <div class="col text-center">
      <label for="tinggibalok" class="mb-2">Tinggi Balok</label>
      <input name="tinggibalok" id="tinggibalok" value="0" type="number" class="form-control" min="1" onchange="this.value = Math.floor(Math.max(this.value,1))" required>
    </div>
  </div>
   <div style="margin-left: 365px" class="d-inline">
        <button type="submit" class="btn btn-outline-primary">Submit</button><button type="Reset" class="btn btn-outline-warning ms-4" style="width: 85px" >Reset</button>
      </div>
</form>
 <?php
    $p  = trim($_POST[panjangbalok]);
    $l  = trim($_POST[lebarbalok]);
    $t  = trim($_POST[tinggibalok]);

    $luas    = 2*(($p*$l)+($p*$t)+($l*$t));
    $volume  = $p*$l*$t;
    ?>
<div class="mt-5">
 <h2 style="text-align: center;" class="">Hasil Hitung</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Panjang</th>
      <th scope="col">Lebar</th>
      <th scope="col">Tinggi</th>
      <th scope="col">Luas Balok</th>
      <th scope="col">Volume Balok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $p;?></td>
      <td><?php echo $l;?></td>
      <td><?php echo $t;?></td>
      <td><?php echo $luas;?></td>
      <td><?php echo $volume;?></td>
    </tr>
  </tbody>
</table>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
      </body>
</html>