@extends('layouts.user')
@section('content')
    <h2 class="thick"><b>BERITA KAMI</b></h2>
    <!-- Hero Section -->
     <section class="news-content">
        <div class="container">
            <div class="row">
                <!-- Bagian Gambar Misi -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/eiliv-aceron-ZuIDLSz3XLg-unsplash.jpg') }}" alt="News Image"
                        class="img-fluid rounded-image-news">
                </div>
                <!-- Bagian Teks Misi -->
                <div class="col-md-6 text-content-news">
                    <h3><b>APA SAJA MAKANAN KHAS NUSANTARA?</b></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus
                        tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et
                        suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio.
                        Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante
                        volutpat</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus
                        tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et
                        suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio.
                        Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante
                        volutpat</p>

                    <a href="#" class="btn-black"><b>BACA SELENGKAPNYA</b></a>
                </div>
            </div>
        </div>
    </section>
    @endsection
