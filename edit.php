<?php

include_once 'Connection.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM data_mhs_trb WHERE id = $id") [0];


if(isset($_POST["submit"])){
  
  if(edit($_POST) > 0){
    echo"
    <script>
      alert('data berhasil diedit');
      document.location.href = 'admin.php';
    </script>
    ";
  }else {
    echo"
    <script>
      alert('data gagal diedit');
      document.location.href = 'admin.php';
    </script>
    ";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tambah data</title>
    <style>
        body{
            margin:0;
            padding:10px;
        }
        .row{
            padding:20px;
        }
    </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <h1>Edit Data Mahasiswa Tarbiyah dan Keguruan</h1>
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
  <div class="col-md-6">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" required autocomplete="off" value="<?= $mhs["nama"] ?>">
  </div>
  <div class="col-md-6">
    <label for="nim" class="form-label">nim</label>
    <input type="text" name="nim" class="form-control" id="nim" placeholder="contoh : Sopir" required autocomplete="off" value="<?= $mhs["nim"] ?>">
  </div>
  <div class="col-md-6">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat" required autocomplete="off" value="<?= $mhs["alamat"] ?>">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="contoh@gmail.com" required autocomplete="off" value="<?= $mhs["email"] ?>">
  </div>
  <div class="col-md-6">
    <label for="tanggal_lahir" class="form-label">Tanggal lahir</label>
    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required autocomplete="off" value="<?= $mhs["tanggal_lahir"] ?>">
  </div>
  <div class="col-md-6">
    <label for="jenis_kelamin" class="form-label">jenis kelamin</label>
    <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required autocomplete="off" value="<?= $mhs["jenis_kelamin"] ?>">
      <option>Laki-laki</option>
      <option>Perempuan</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="telepon" class="form-label">No telepon</label>
    <input type="text" name="telepon" class="form-control" id="telepon" placeholder="08123456789" required autocomplete="off" value="<?= $mhs["telepon"] ?>">
  </div>
  <div class="col-md-6">
    <label for="prodi" class="form-label">Prodi</label>
    <select id="prodi" name="prodi" class="form-select" required autocomplete="off" value="<?= $mhs["prodi"] ?>">
      <option>---</option>
      <option>Sistem Informasi</option>
      <option>FISIKA</option>
      <option>KIMIA</option>
      <option>PIAUD</option>
      <option>PAI</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="status" class="form-label">status</label>
    <select id="status" name="status" class="form-select" required autocomplete="off" value="<?= $mhs["status"] ?>">
      <option>---</option>
      <option>Aktif</option>
      <option>Tidak-aktif</option>
    </select>
  </div>
  <div class="col-12">
    <label for="gambar" class="form-label">Gambar</label><br><img src="image/<?= $mhs["gambar"] ?>" width="50" ><br>
    <input type="file" name="gambar" class="form-control" id="gambar"  autocomplete="off" value="<?= $mhs["gambar"] ?>">
  </div>
  <div class="col-12 mt-3">
    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
  </div>
</form>
</body>
</html>