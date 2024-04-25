<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dan Sidebar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container2 {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        .container3 {
            max-width: 800px;
            margin: auto;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            color: red;
        }

        .header h1 {
            
            margin: 0;
            text-align: center;
            flex-grow: 1;
        }
        .navbar-nav {
            margin: auto;
            display: flex;
            justify-content: center;
        }
        .nav-item{
            margin-right: 50px
        }
        .jumbotron {
            background-color: #f8f9fa;
            padding: 2rem 1rem;
            margin-bottom: 0;
        }
        .visi-misi {
            margin-top: 30px;
        }
        .visi-misi p {
            text-align: justify;
        }
        .profile-section {
            margin-top: 30px;
        }
        .profile-section p {
            text-align: justify;
        }
        .produk-section {
            margin-top: 30px;
        }
        .produk-section p {
            text-align: justify;
        }
        .produk-list {
            padding-left: 0;
        }
        .produk-list li {
            margin-bottom: 10px;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
            margin-top: 20px;
        }
        .gallery-item img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }
        th {
            background-color: #f8f9fa;
        }
        td img {
            max-width: 100px;
            max-height: 100px;
            object-fit: contain;
        }
        .contact-info {
            margin-bottom: 20px;
        }
        .contact-info p {
            margin-bottom: 5px;
        }
        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 50px 0;
        }
        .footer p {
            margin-bottom: 0;
        }
        .footer-links a {
            color: #fff;
        }
        .footer-links a:hover {
            color: #f8f9fa;
            text-decoration: underline;
        }
        .navbar1 {
            background-color: #e9ecef; 
        }
    
        .nav-link1:hover {
            background-color: #ced4da; 
        }
    </style>
</head>
<body>
    <div class="header">
        <div>
            <img src="logo.jpg" width="100" height="100" alt="Logo">
        </div>
        <h1>Pile Miles Club</h1>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f0f5f5;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/profil')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/visimisi')}}">Visi dan Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/produk')}}">Produk Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak" data-target="#kontak">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/aboutus')}}">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar" style="background-color: #f0f5f5;">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link nav-link1 active text-dark" href="{{url('/artikel')}}">
                                Artikel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 text-dark" href="{{url('/event')}}">
                                Event
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 text-dark" href="{{url('/galeri')}}">
                                Galeri Foto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 text-dark" href="{{url('/klien')}}">
                                Klien Kami
                            </a>
                        </li>
                        <li class="nav-item navbar-nav ms-auto">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link nav-link1 text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                        
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link nav-link1 text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link nav-link1 dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                        
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="dropdown-item text-decoration-none text-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </li>
                        
                    </ul>
                </div>
            </nav>
            
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4"> 
                @yield('content')
            </main>
        </div>
    </div>
    
    <style>
        
    </style>
    

    <footer class="footer" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Kontak Kami</h2>
                    <div class="contact-info">
                        <p><strong>Alamat:</strong> Jalan Raya Motor No. 123, Jakarta</p>
                        <p><strong>No Telepon:</strong> (021) 123-4567</p>
                        <p><strong>Faksimili:</strong> (021) 123-4568</p>
                        <p><strong>Email:</strong> info@pilemilesclub.com</p>
                    </div>
                </div>
                <div class="col-md-6 footer-links">
                    <h2>Halaman Kami</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{url('/index')}}">Home</a></li>
                        <li><a href="{{url('/profil')}}">Profil</a></li>
                        <li><a href="{{url('/visimisi')}}">Visi dan Misi</a></li>
                        <li><a href="{{url('/produk')}}">Produk Kami</a></li>
                        <li><a href="{{url('/aboutus')}}">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="text-center">&copy; 2024 Pile Miles Club. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil semua elemen dropdown-toggle
            var dropdownToggleList = document.querySelectorAll('.dropdown-toggle');
    
            // Tambahkan event listener untuk setiap elemen dropdown-toggle
            dropdownToggleList.forEach(function(dropdownToggle) {
                dropdownToggle.addEventListener('click', function(event) {
                    event.preventDefault(); // Hentikan perilaku default dari link
    
                    // Dapatkan parent dari tombol dropdown yang ditekan
                    var parentDropdown = this.parentNode;
    
                    // Toggle class 'show' pada dropdown-menu
                    parentDropdown.querySelector('.dropdown-menu').classList.toggle('show');
                });
            });
    
            // Tutup dropdown ketika mengklik di luar dropdown-menu
            window.addEventListener('click', function(event) {
                dropdownToggleList.forEach(function(dropdownToggle) {
                    var parentDropdown = dropdownToggle.parentNode;
                    var dropdownMenu = parentDropdown.querySelector('.dropdown-menu');
    
                    if (!dropdownMenu.contains(event.target) && !dropdownToggle.contains(event.target)) {
                        dropdownMenu.classList.remove('show');
                    }
                });
            });
        });
    </script>
</body>
</html>
