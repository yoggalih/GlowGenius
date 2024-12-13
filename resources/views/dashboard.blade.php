<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> <!-- Link ke file CSS eksternal -->
</head>

<body class="body">

    <!-- Container for Dashboard Content -->
    <div class="form-container">
        <div class="form-box">
            
            <!-- Heading -->
            <div class="text-center mb-8">
                <h1 class="heading">Dashboard</h1>
                <p class="subheading">Welcome to your dashboard. Choose an action below or explore skincare tips!</p>
            </div>

            <!-- Dashboard Links -->
            <div class="button-group">
                <a href="{{ route('skincare.recommendations') }}" class="btn btn-primary">Rekomendasi Skincare</a>
                <a href="{{ route('feedback') }}" class="btn btn-secondary">Feedback</a>
            </div>

            <!-- Tips and Tricks Section -->
            <div class="tips-container">
                <h2 class="tips-heading">Tips & Tricks for Skincare</h2>
                <div class="tips-cards">
                    <div class="tip-card">
                        <h3 class="tip-title">Hydrate Your Skin</h3>
                        <p class="tip-description">Drinking enough water is essential for maintaining healthy and hydrated skin.</p>
                    </div>
                    <div class="tip-card">
                        <h3 class="tip-title">Use Sunscreen</h3>
                        <p class="tip-description">Protect your skin from harmful UV rays by applying sunscreen daily.</p>
                    </div>
                    <div class="tip-card">
                        <h3 class="tip-title">Exfoliate Regularly</h3>
                        <p class="tip-description">Exfoliating helps to remove dead skin cells and gives your skin a healthy glow.</p>
                    </div>
                    <!-- Add more tips here as needed -->
                </div>
            </div>

            <!-- Logout Form -->
            <div class="logout-container">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>
