<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pekerja</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <h1>Detail Pekerja</h1>
        <table class="table">
        <div class="container">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $farmer->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $farmer->nama }}</td>
        </tr>
        <tr>
            <th>Lama Bekerja</th>
            <td>{{ $farmer->lama_bekerja}}</td>
        </tr>
        <tr>
            <th>Tempat Asal</th>
            <td>{{ $farmer->asal}}</td>
        </tr>
        <tr>
            <th>Umur</th>
            <td>{{ $farmer->umur}}</td>
        </tr>
    </table>
    </div>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
