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
                <label for="product">Product</label>
                <select class="form-control" id="product" name="product" required>
                    <option value="facewash">Facewash</option>
                    <option value="toner">Toner</option>
                    <option value="moisturizer">Moisturizer</option>
                    <option value="sunscreen">Sunscreen</option>
                </select>
            </div>
            <div class="form-group">
                <label for="skin_condition">Skin Problem</label>
                <select class="form-control" id="skin_condition" name="skin_condition" required>
                    <option value="acne">Acne</option>
                    <option value="kusam">Kusam</option>
                    <option value="komedo">Komedo</option>
                    <option value="flek_hitam">Flek Hitam</option>
                </select>
            </div>
            <div class="form-group">
                <label for="skin_type">Skin Type</label>
                <select class="form-control" id="skin_type" name="skin_type" required>
                    <option value="oily">Oily</option>
                    <option value="dry">Dry</option>
                    <option value="combination">Combination</option>
                    <option value="sensitive">Sensitive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>


    </div>
    </div>


</body>

</html>
