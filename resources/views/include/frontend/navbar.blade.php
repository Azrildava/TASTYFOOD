<section class="header">
    {{-- Header --}}
    <div class="background-image">
        <div class="container pt-4">
            <div class="hero"></div>
            <nav class="navbar navbar-expand-lg pe-5">
                <button class="navbar-toggler" type="button" id="sidebarToggle" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
                <h1><a class="navbar-brand" href="{{ url('/') }}">TASTY FOOD</a></h1>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tentang') }}">TENTANG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('berita') }}">BERITA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('galeri') }}">GALERI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">KONTAK</a>
                        </li>
                    </ul>
                </div>
            </nav>
           <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h2>TASTY FOOD</h2>
                <button id="closeSidebar" class="close-btn"><i class="fa-solid fa-x fa-2xs"></i></button>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tentang') }}">TENTANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita') }}">BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('galeri') }}">GALERI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">KONTAK</a>
                </li>
            </ul>
        </div>
        </div>
        <div class="content">
            <div class="black-line mb-3"></div>
            <h1 class="mb-3" style="font-weight: 500">HEALTHY</h1>
            <h1 class="mb-3"><strong><b><b>TASTY FOOD</b></b></strong></h1>
            <p>
                <span class="konten" style="line-height: 2;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                    commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                    neque,
                    vel luctus ex. Fusce sit amet viverra ante.
                </span>
            </p>
            <a href="{{ route('tentang') }}" class="btn-black"><b>TENTANG KAMI</b></a>
        </div>
    </div>
    </div>
</section>
 <script>
        const toggler = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const closeBtn = document.getElementById('closeSidebar');

        // Menampilkan/menghilangkan sidebar saat tombol toggle diklik
        toggler.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });

        // Menutup sidebar saat tombol close diklik
        closeBtn.addEventListener('click', () => {
            sidebar.classList.remove('show');
        });
    </script>
