<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Helmet - Home</title>
    @vite(['resources/css/app.css', 'resources/css/styles.css'])
</head>
<body>
    <div class="sidebar">
        <div class="brand">Smart Helmet</div>
        <ul class="menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Absensi</a></li>
            <li><a href="#">Lokasi</a></li>
            <li><a href="#">CRUD Karyawan</a></li>
        </ul>
        <div class="profile">
            <img src="{{ asset('images/user.png') }}" alt="User">
            <span>{{ $user->name ?? 'Nama Boss' }}</span>
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>

    <div class="content">
        <h1>Welcome to Smart Helmet</h1>
        <p>Your Safety, Our Priority – We build technology to protect what matters most</p>

        <div class="stats">
            <div>Jumlah Pekerja: {{ $jumlahPekerja }}</div>
            <div>Online: {{ $online }}</div>
            <div>Insiden Hari Ini: {{ $insidenHariIni }}</div>
        </div>

        <h2>Notifikasi</h2>
        <div class="notification">
            <p>[ Detail Insiden: Rayden ]</p>
            <p>- Waktu: 14:05</p>
            <p>- Lokasi: Blok C, Proyek Utama</p>
            <p>- Status: 🔴 Jatuh</p>
            <p>- Catatan: Tidak memberikan reaksi sudah 5 menit</p>
            <button>Mark as Handled</button>
        </div>
    </div>
</body>
</html>
