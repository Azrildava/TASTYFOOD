@extends('layouts.user')
@section('content')
    <h2 class="thicck"><b>BERITA KAMI</b></h2>
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

    <section class="news-other">
        <div class="container">
            <h3 class="news-other text-center"><b>BERITA LAINNYA</b></h3>
            <div class="row g-5">
                @php
                    $beritas = App\Models\Berita::orderBy('id', 'asc')->get();
                    $duplicatedBeritas = $beritas->concat($beritas); // Menggabungkan koleksi dengan dirinya sendiri
                @endphp

                @foreach ($duplicatedBeritas as $item)
                    <div class="col-md-3"> <!-- 4 kolom per baris -->
                        <div class="card berita-card distance-card">
                            <img alt="Fresh vegetables on a table" class="card-img-top" height="200"
                                src="{{ asset('/storage/beritas/' . $item->gambar) }}" width="600" />
                            <div class="card-body d-flex">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <p class="card-text">{{ $item->deskripsi }}</p>
                                <a class="read-more" href="#">
                                    Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endsection
