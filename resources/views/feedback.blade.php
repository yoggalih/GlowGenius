<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/feedback.css') }}"> <!-- Link ke CSS eksternal -->
</head>

<body class="body">

    <div class="container">
        <h1 class="heading">Feedback Pengguna</h1>

        <!-- Formulir Feedback -->
        <form method="POST" action="{{ route('feedback.store') }}" class="form-feedback">
            @csrf
            <div class="form-group">
                <label for="feedback" class="form-label">Masukkan Feedback Anda</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Feedback</button>
        </form>

        <h2 class="subheading">Hasil Feedback</h2>
        <ul class="feedback-list">
            @foreach ($feedbacks as $feedback)
                <li class="feedback-item">{{ $feedback->content }}</li>
            @endforeach
        </ul>
    </div>

</body>

</html>
