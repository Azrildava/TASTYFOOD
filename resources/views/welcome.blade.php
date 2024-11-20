@extends('layouts.home')
@section('content')
    {{-- content About --}}
    <section class="aboute mt-3">
        <div class="grid-container p-3 text-center ">
            <h2 class="m-3"><b>TENTANG KAMI</b></h2>
            <div class=" abouteText col-6 mx-center my-4 text-center">
                <p class="abouteText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                    rutrum commodo, dui
                    diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                    Fusce sit amet viverra ante.</p>
            </div>
            <div class="black-line mb-3"></div><br>
        </div>
    </section>

    {{-- content Article --}}
    <section class="content-article">
        <div class="article">
            <div class="card">
                <img class="card-image" src="{{ asset('assets/img/img-1.png') }}" alt="">
                <h2 class="card1 mb-3">
                    <b class="article-title">LOREM IPSUM</b>
                </h2>
                <p class="mb-3 article-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                </p>
            </div>
            <div class="card">
                <img class="card-image" src="{{ asset('assets/img/img-2.png') }}" alt="">
                <h2 class="card1 mb-3">
                    <b class="article-title">LOREM IPSUM</b>
                </h2>
                <p class="mb-3 article-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                </p>
            </div>
            <div class="card">
                <img class="card-image" src="{{ asset('assets/img/img-3.png') }}" alt="">
                <h2 class="card1 mb-3">
                    <b class="article-title">LOREM IPSUM</b>
                </h2>
                <p class="mb-3 article-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                </p>
            </div>
            <div class="card">
                <img class="card-image" src="{{ asset('assets/img/img-4.png') }}" alt="">
                <h2 class="card1 mb-3">
                    <b class="article-title">LOREM IPSUM</b>
                </h2>
                <p class="mb-3 article-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                </p>
            </div>
        </div>
    </section>

    {{-- content News --}}
    <section class="content-news">
        <div class="news p-3">
            <h2 class="m-3"><b>BERITA KAMI</b></h2>
            <div class="container-news">
                <div class="row">
                    <div class="col-md-6">
                        <div class="news-card-big">
                            <div class="aspect-ratio">
                                <img src="{{ asset('assets/img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}"
                                    class="news-img-top" alt="Food Image">
                            </div>
                            <div class="news-body content-news mb-auto">
                                <h5 class="news-title"> LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</h5>
                                <p class="news-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fuscescelerisque magna aliquet
                                    cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat
                                    tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris
                                    eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat.
                                </p>
                                <a href="#" class="read-more card-news-big">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="news-card mb-4">
                                    <div class="aspect-ratio">
                                        <img src="{{ asset('assets/img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}"
                                            class="news-img-top" alt="Food Image">
                                    </div>
                                    <div class="news-body">
                                        <h5 class="news-title">LOREM IPSUM</h5>
                                        <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Praesent commodo,
                                        </p>
                                        <a href="#" class="read-more">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="news-card mb-4">
                                    <div class="aspect-ratio">
                                        <img src="{{ asset('assets/img/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}"
                                            class="news-img-top" alt="Food Image">
                                    </div>
                                    <div class="news-body">
                                        <h5 class="news-title">LOREM IPSUM</h5>
                                        <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Praesent commodo,
                                        </p>
                                        <a href="#" class="read-more">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="news-card mb-4">
                                    <div class="aspect-ratio">
                                        <img src="{{ asset('assets/img/jimmy-dean-Jvw3pxgeiZw-unsplash.jpg') }}"
                                            class="news-img-top" alt="Food Image">
                                    </div>
                                    <div class="news-body">
                                        <h5 class="news-title">LOREM IPSUM</h5>
                                        <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Praesent commodo,
                                        </p>
                                        <a href="#" class="read-more">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="news-card mb-4">
                                    <div class="aspect-ratio">
                                        <img src="{{ asset('assets/img/luisa-brimble-HvXEbkcXjSk-unsplash.jpg') }}"
                                            class="news-img-top" alt="Food Image">
                                    </div>
                                    <div class="news-body">
                                        <h5 class="news-title">LOREM IPSUM</h5>
                                        <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Praesent commodo,
                                        </p>
                                        <a href="#" class="read-more">Baca
                                            selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- content Galery --}}
    <section class="photo" style="background-color: white">
        <div class="container-img">
            <div class="gallery-title p-3">
                <h2 class="m-3"><b>GALLERI KAMI</b></h2>
            </div>
            <div class="row content-img">
                @php
                    $galery = App\Models\Galery::orderBy('id', 'asc')->get();
                @endphp
                @foreach ($galery->take(6) as $item)
                    <div class="col-md-4 col-sm-4">
                        <img src="{{ asset('/storage/galeris/' . $item->gambar) }}" class="rounded-img" alt="Food"
                            loading="lazy">
                    </div>
                @endforeach
            </div>
            <div class="botten">
                <a class="btn-more" href="{{ route('galeri') }}">
                    LIHAT LEBIH BANYAK
                </a>
            </div>
        </div>
    </section>
@endsection
