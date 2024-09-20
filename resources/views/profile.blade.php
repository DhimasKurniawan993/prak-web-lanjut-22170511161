<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #74bcff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #01016f;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            width: 100%;
        }

        .profile {
            display: flex;
            align-items: center;
            padding: 15px;
            margin: 15px;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #f8f8ff;
            margin-right: 20px;
        }

        .profile-info {
            flex: 1;
        }

        .profile-info h1 {
            margin-top: 0;
            color: #f8f8ff;
        }

        .profile-info p {
            margin-top: 0;
            color: #f8f8ff;
        }

    </style>
</head>
<body>
<div class="container">
        <div class="profile">
            <img src="{{ asset('images/cat_profil.png') }}" alt="Profile Picture" class="profile-img">
            <div class="profile-info">
                <h1>{{ $nama }}</h1>
                <p><strong>Kelas:</strong> {{ $kelas }}</p>
                <p><strong>NPM:</strong> {{ $npm }}</p>
            </div>
        </div>
    </div>
</body>
</html>