<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Web STMIK IKMI</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h1 {
            color: #333;
            font-size: 3em;
            margin-bottom: 10px;
        }

        .header p {
            color: #666;
            font-size: 1.2em;
        }

        .nav-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .card {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
            text-decoration: none;
            color: inherit;
        }

        .card:hover {
            transform: translateY(-10px);
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .card-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .instructions {
            background: #f0f7ff;
            padding: 30px;
            border-radius: 15px;
            margin-top: 40px;
        }

        .instructions h2 {
            color: #667eea;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Praktikum Web Lanjut</h1>
            <p>STMIK IKMI Cirebon - Framework Laravel 12</p>
        </div>
        <div class="nav-cards">
            <a href="/" class="card">
                <div class="card-icon">🏠</div>
                <h3>Home</h3>
                <p>Halaman Utama</p>
            </a>
            <a href="/about" class="card">
                <div class="card-icon">ℹ️</div>
                <h3>Tentang</h3>
                <p>Informasi Praktikum</p>
            </a>
            <a href="/profile" class="card">
                <div class="card-icon">👤</div>
                <h3>Profile</h3>
                <p>Data Mahasiswa</p>
            </a>
            <a href="/kampus" class="card">
                <div class="card-icon">🎓</div>
                <h3>Kampus</h3>
                <p>STMIK IKMI Cirebon</p>
            </a>
        </div>
        <div class="instructions">
            <h2>Instruksi Praktikum</h2>
            <p>1. Instal Laravel 12 menggunakan Composer</p>
            <p>2. Buat route untuk halaman statis</p>
            <p>3. Buat view dengan Blade template</p>
            <p>4. Passing data sederhana ke view</p>
            <p>5. Kustomisasi tampilan dengan CSS</p>
        </div>
    </div>
</body>

</html>