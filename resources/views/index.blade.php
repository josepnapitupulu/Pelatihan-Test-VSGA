<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dan Sidebar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
