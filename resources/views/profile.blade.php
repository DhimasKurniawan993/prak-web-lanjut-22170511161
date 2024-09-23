<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<div class="container">
        <div class="text">
            <img src="{{ asset('assets/img/cat_profil.png') }}" alt="Profile Picture" class="profile-img">
            <div class="text-info">
                <h1>{{ $nama }}</h1>
                <p><strong>Kelas:</strong> {{ $kelas }}</p>
                <p><strong>NPM:</strong> {{ $npm }}</p>
            </div>
        </div>
    </div>
</body>
</html>