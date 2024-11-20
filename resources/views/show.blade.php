@extends('layouts.user')
@section('content')
    <h2 class="tthick"><b>BERITA KAMI</b></h2>
    <div class="container news-detail">
        <div class="news-content-detail mb-3">
            <div class="news-image">
                <img src="{{asset ('/storage/beritas/' . $news->gambar)}}" alt="{{ $news->judul}}">
            </div>
            <div class="news-text">
                <h1 class="news-title mb-3">{{ $news->judul }}</h1><hr>
                <p class="news-description mb-3">{{ $news->deskripsi }}</p><hr>
                <p class="news-date mb-3"><small>Dibuat pada : {{ $news->created_at->format('d F Y') }}</small></p><hr>
                <p class="news-date mb-3"><small>Diperbarui pada : {{ $news->updated_at->format('d F Y') }}</small></p><hr>
            </div>
        </div>
    </div>
@endsection
