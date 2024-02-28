<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hallo Selamat Datang Di Halaman Peminjaman</h1>

<form>
    <div class="row mb-3">
      <label for="username" class="form-label">username</label>
    </div>
    <div class="row mb-3">
        <label for="" class="form-label">judul buku</label>
      </div>
      <div class="row mb-3">
        <label for="tanggal_peminjaman" class="form-label">tanggal peminjaman</label>
        <input type="text" class="tanggal_peminjaman" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control" value="<?php echo date("Y-m-d"); ?>">
      </div>

      <button class="btn btn-primary">Submit</button>
</form>
</body>
</html>
