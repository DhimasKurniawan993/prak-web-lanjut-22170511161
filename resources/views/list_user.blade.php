@extends('layouts.app')

@section('content')
<div class= 'tombol-atas'>
<button onclick="window.location='{{ route('user.create') }}'">Tambah Pengguna Baru</button>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($user as $user){
            ?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['nama']?></td>
                <td><?= $user['npm']?></td>
                <td><?= $user['nama_kelas']?></td>
                <td>
                <img src="{{ asset('storage/upload/' . $user->foto) }}" alt="Foto Pengguna" style="height: 100px;">
                </td>
                <td><button>Edit</button> <button class=tombol-red>hapus</button></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
@endsection