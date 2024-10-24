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
            <img src="{{ asset('assets/img/cropped-cropped-logo-unila-resmi-1.png') }}" alt="Logo" class="logo-img">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
            
                <label for="nama"><strong>Nama:</strong></label>
                <input type="text" id="nama" name="nama"><br>
                @foreach($errors->get('nama') as $msg)
                    <p class="text-danger">{{$msg}}</p>
                @endforeach
                <label for="npm"><strong>NPM:</strong></label>
                <input type="text" id="npm" name="npm"><br>
                @foreach($errors->get('npm') as $msg)
                    <p class="text-danger">{{$msg}}</p>
                @endforeach
                <label for="kelas"><strong>Kelas:</strong></label>
                <select name="kelas_id" id="kelas_id">
                    @foreach($kelas as $kelasItem)
                    <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                    @endforeach
                </select>
                <!--<input type="text" id="kelas" name="kelas" required>--><br>
                <button type="submit"><strong>Submit</strong></button>
            </form>
        </div>
    </div>
</body>
</html>

