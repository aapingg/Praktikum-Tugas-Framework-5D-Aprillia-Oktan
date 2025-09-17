<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <ul>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('users', ['id' => 11]) }}">User 11</a></li>
        <li><a href="{{ route('edit') }}">Manage Edit</a></li>
        <li><a href="{{ route('barang') }}">Manage Barang</a></li>
    </ul>
</body>
</html>
