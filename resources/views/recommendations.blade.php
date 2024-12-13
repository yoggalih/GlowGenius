<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekomendasi Skincare</title>
    <link rel="stylesheet" href="{{ asset('css/recommendations.css') }}"> <!-- Link ke file CSS eksternal -->
</head>

<body>

    <div class="container">
        <h1>Rekomendasi Skincare</h1>
        <form method="POST" action="{{ route('skincare.store') }}">
            @csrf
            <div class="form-group">
                <label for="product">Produk</label>
                <select class="form-control" id="product" name="product" required>
                    <option value="skintific">Skintific</option>
                    <option value="whitelab">Whitelab</option>
                    <option value="wardah">Wardah</option>
                    <option value="garnier">Garnier</option>
                    <option value="thebodyshop">The Body Shop</option>
                </select>
            </div>
            <div class="form-group">
                <label for="skin_condition">Masalah Kulit</label>
                <select class="form-control" id="skin_condition" name="skin_condition" required>
                    <option value="berjerawat">Berjerawat</option>
                    <option value="flek_hitam">Flek Hitam</option>
                    <option value="kusam">Kusam</option>
                    <option value="kering">Kering</option>
                    <option value="sensitif">Sensitif</option>
                </select>
            </div>
            <div class="form-group">
                <label for="skin_type">Jenis Kulit</label>
                <select class="form-control" id="skin_type" name="skin_type" required>
                    <option value="normal">Normal</option>
                    <option value="oily">Berminyak</option>
                    <option value="dry">Kering</option>
                    <option value="sensitive">Sensitif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>

        <!-- Hasil Prediksi (Belum Digunakan) -->
        <!-- <div class="result-container">
            <h3>Rekomendasi Anda:</h3>
            <p>Produk: Skintific</p>
            <p>Masalah Kulit: Berjerawat</p>
            <p>Jenis Kulit: Berminyak</p>
            <p>Rekomendasi Produk: Skincare ABC</p>
        </div> -->

    </div>

</body>

</html>
