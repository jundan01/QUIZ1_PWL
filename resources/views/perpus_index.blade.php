<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Perpustakaan</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .card { border: 1px solid #ccc; padding: 20px; border-radius: 8px; width: 400px;}
    </style>
</head>
<body>
    <div class="card">
        <h2>Daftar Koleksi Buku Perpustakaan</h2>
        <ul>
            @foreach($daftar_buku as $buku)
                <li>{{ $buku }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>