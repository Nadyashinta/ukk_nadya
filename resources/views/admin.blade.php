<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Laporan
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="laporan">Laporan buku</a></li>
                  <li><a class="dropdown-item" href="laporanpinjam">Laporan peminjaman</a></li>
                  {{-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-disabled="true" href="create">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-disabled="true" href="/logout">Logout</a>
              </li>
            </ul>
            <form class="from-inline" role="search" action="/admin" method="GET">
              <input class="form-control me-2" type="search" name="search" placeholder="isikan judul buku" aria-label="Search">
              {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}

              {{-- @if (count($results) > 0)
    <ul>
        @foreach ($results as $result)
            <li>{{ $result->judul }}</li>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif --}}
            </form>
          </div>
        </div>
      </nav>

      <table class="table">
 <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
      <tbody class="table-group-divider">
        @if ($buku->count()>0)
        @foreach ($buku as $bk)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $bk->judul}}</td>
            <td>{{ $bk->penulis}}</td>
            <td>{{ $bk->penerbit}}</td>
            <td>{{ $bk->tahun_terbit}}</td>
            <td class="align-middle">
                 <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn"><a href="{{ url('delete',$bk->id) }}" onclick="return confirm('apa yakin ingin menghapus data?')" type="button" class="btn btn-info">Delete</a></button>
                   <button class="btn"><a href="{{ url('updatee',$bk->id) }}" type="button" class="btn btn-warning">Update</a></button>
                  </div>
            </td>
        </tr>

        @endforeach
        @else
         <tr>
            <td class="text-center" colspan="5">Product not found</td>
         </tr>
        @endif
    </tbody>
      </table>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
