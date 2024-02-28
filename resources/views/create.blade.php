<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>tambah data</title>
</head>
<body>
    <h1 class="mb-0">Tambah data</h1>
    <hr/>
    <form action="{{ route('User.createe') }}" method="POST">
      @csrf
      <div class="row mb-3">
          {{-- <div class="col">
              <input type="file" name="img" class="form-control" >
          </div> --}}
          <div class="col">
              <input type="text" name="judul" class="form-control" placeholder="judul">
          </div>
          <div class="col">
              <input type="text" name="penulis" class="form-control" placeholder="Penulis">
          </div>
      </div>
      <div class="row mb-3">
          <div class="col">
              <input type="text" name="penerbit" class="form-control" placeholder="Penerbit">
          </div>
          <div class="col">
              <input class="form-control" name="tahun_terbit" placeholder="tahun terbit">
          </div>
      </div>

      <div class="row">
          <div class="d-grid">
              <button class="btn btn-primary">Submit</button>
          </div>
      </div>
    </form>
</body>
</html>
