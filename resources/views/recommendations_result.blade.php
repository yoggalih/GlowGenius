<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekomendasi Skincare</title>
    <link rel="stylesheet" href="{{ asset('css/recommendations_result.css') }}"> <!-- Link ke file CSS eksternal -->
</head>

<body>

    <div class="container">
        <h1>Rekomendasi Skincare</h1>

        <div class="result">
            <h2>Hasil Rekomendasi</h2>
            <p><strong>Produk yang Dipilih:</strong> {{ ucfirst($product) }}</p>
            <p><strong>Masalah Kulit:</strong> {{ ucfirst($skinCondition) }}</p>
            <p><strong>Jenis Kulit:</strong> {{ ucfirst($skinType) }}</p>
            <p><strong>Rekomendasi Produk:</strong> {{ $recommendedProduct }}</p>
        </div>
        <a href="{{ route('dashboard') }}" class="btn-secondary">Kembali ke Dashboard</a>
    </div>
   
</body>

</html>
