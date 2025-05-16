<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sistem Aplikasi Akuntansi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: #fff;
    }
    .carousel-inner img {
  border-radius: 10px;
  max-height: 400px;
  object-fit: cover;
  width: 100%;
}
    .navbar {
      background-color: #1f1f1f;
    }
    .navbar-brand, .nav-link, .dropdown-item {
      color: #fff !important;
    }
    .dropdown-menu {
      background-color: #2a2a2a;
    }
    .carousel-inner img {
      border-radius: 10px;
    }
    .feature-icon {
      background-color: #1f1f1f;
      border-radius: 50%;
      width: 100px;
      height: 100px;    
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.5);
      transition: transform 0.3s ease;
    }
    .feature-icon:hover {
      transform: scale(1.1);
      background-color: #343a40;
    }
    .feature-title {
      font-size: 1.1rem;
      margin-top: 5px;
    }
    .card {
      background-color: #1e1e1e;
      color: #fff;
      border: none;
    }
    .card .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .card .btn-primary:hover {
      background-color: #0056b3;
    }
    footer {
      background-color: #1f1f1f;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Sistem Akuntansi</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Profile</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#sejarah">Sejarah Perusahaan</a></li>
            <li><a class="dropdown-item" href="#tentang">Tentang Aplikasi</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">Hubungi Kami</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Video Profile</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div class="container mt-4">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner shadow">
      <div class="carousel-item active">
        <img src="{{ asset('images/2.png') }}" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/1.png') }}" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/2.png') }}" class="d-block w-100" alt="Slide 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>

<!-- Fitur Utama -->
<div class="container mt-5">
  <div class="row text-center">
    @php
      $icons = ['grid-fill', 'file-earmark-text', 'cash-coin', 'gear-fill'];
      $menus = ['Dashboard', 'Laporan', 'Transaksi', 'Pengaturan'];
    @endphp
    @foreach ($menus as $i => $menu)
    <div class="col-6 col-md-3 mb-4">
      <div class="feature-icon">
        <i class="bi bi-{{ $icons[$i] }} text-primary" style="font-size: 2rem;"></i>
      </div>
      <div class="feature-title">{{ $menu }}</div>
    </div>
    @endforeach
  </div>

  <!-- Berita Terbaru -->
  <h4 class="mb-4 mt-5">Berita Terbaru</h4>
  <div class="row">
    @foreach ([1, 2, 3] as $i)
    <div class="col-md-4 mb-4">
      <div class="card h-100 shadow">
        <img src="{{ asset('images/' . $i . '.png') }}" class="card-img-top" alt="Berita {{ $i }}">
        <div class="card-body">
          <h5 class="card-title">Judul Berita {{ $i }}</h5>
          <p class="card-text">Ringkasan singkat berita ke-{{ $i }} mengenai perkembangan terbaru sistem akuntansi.</p>
          <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!-- Footer -->
<footer class="text-center py-3 mt-5">
  <div class="container">
    <p class="mb-0">&copy; {{ date('Y') }} Sistem Aplikasi Akuntansi. All rights reserved.</p>
  </div>
</footer>

<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
