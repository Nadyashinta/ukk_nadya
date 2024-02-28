<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="form-group">
        <p align="center" ><b>Data Laporan Buku</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>ID</th>
                <th>judul</th>
                <th>penulis</th>
                <th>penerbit</th>
                <th>Tahun terbit</th>

            </tr>
            @foreach ($data_barangs as $bk)
            <tr>

            <td>{{ $loop->iteration}}</td>
            <td>{{ $bk->judul}}</td>
            <td>{{ $bk->penulis}}</td>
            <td>{{ $bk->penerbit}}</td>
            <td>{{ $bk->tahun_terbit}}</td>

            </tr>
            @endforeach
        </table>
    </div>
    <button><a href="/admin">Back</a></button>
</body>
</html>
