<?php
error_reporting("E_ALL & ~E_NOTICE");
?>
<!doctype html>
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
  	<?php
function grade($nilai)
{
 if($nilai <= 100 ) { $grade = "A"; }
 if($nilai <  80 )  { $grade = "B"; }
 if($nilai <  70 )  { $grade = "C"; }
 if($nilai <  60 )  { $grade = "D"; }
 if($nilai <  50 )  { $grade = "E"; }

 return $grade;
}
?>
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
     <div class="container-luid mt-5 bg-light">
        <H2 class= " alert alert-light text-center text-dark"> Entry Nilai Mahasiswa</H2>

        <form action="" method="post">
          <div class="bg-light">
        <div class="mb-1 w-50 mx-auto">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" placeholder="masukkan nama" maxlength="25" size="25" autocomplete="off" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
        </div>

        <div class="mb-2 w-50 mx-auto">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control w-50" name="nim" minlength="12" maxlength="12" pattern="[0-9]*" placeholder="masukkan angka nim" autocomplete="off" required>
        </div>
        </div>
        <div class="bg-light">
        <div class="mb-2 w-50 mx-auto">
          <label for="nilaitugas" class="form-label">Nilai Tugas</label>
          <input type="number" class="form-control w-25" name="nilaitugas" size="3" placeholder="0-100" min="0" max="100" autocomplete="off" required>
        </div>
        <div class="mb-2 w-50 mx-auto">
          <label for="nilaiuts" class="form-label">Nilai UTS</label>
          <input type="number" class="form-control w-25" name="nilaiuts" size="3" placeholder="0-100" min="0" max="100" autocomplete="off" required>
        </div>
        <div class="mb-2 w-50 mx-auto">
          <label for="nilaiuas" class="form-label">Nilai UAS</label>
          <input type="number" class="form-control w-25" id="nilaiuas" name="nilaiuas" size="3" placeholder="0-100"  min="0" max="100" autocomplete="off" required>
          </div>
        
        </div>
        <div style="margin-left: 600px" class="d-inline">
        <button type="submit" class="btn btn-outline-primary">Submit</button><button type="Reset" class="btn btn-outline-warning ms-4" style="width: 85px" >Reset</button>
      </div>
      </form>
    </div>
    <hr>
      <?php
		$nama  = trim($_POST[nama]);
		$nim  = trim($_POST[nim]);
		$tugas  = trim($_POST[nilaitugas]);
		$uts  = trim($_POST[nilaiuts]);
		$uas  = trim($_POST[nilaiuas]);

		$nilai  = ($tugas*0.2)+ ($uts*0.35)+ ($uas*0.45);
		$grade  = grade($nilai);
		?>
    <h2 style="text-align: center;">Detail Nilai</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Nilai Tugas</th>
      <th scope="col">Nilai UTS</th>
      <th scope="col">Nilai UAS</th>
       <th scope="col">Total Nilai</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $nim;?></th>
      <td><?php echo $nama;?></td>
      <td><?php echo $tugas;?></td>
      <td><?php echo $uts;?></td>
      <td><?php echo $uas;?></td>
      <td><?php echo $nilai;?></td>
      <td><?php echo $grade;?></td>
    </tr>
  </tbody>
</table>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
      </body>
</html>