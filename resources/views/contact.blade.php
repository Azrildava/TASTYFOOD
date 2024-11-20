@extends('layouts.user')
@section('content')
    <div class="content">
        <h2><b>KONTAK KAMI</b></h2>
    </div>
    <section class="contact-container">
        <form class="container" action="{{ route('message.store') }}" method="POST">
            <h2 class="mb-5"><b>KONTAK KAMI</b></h2>  
            @csrf
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" placeholder="Subject" class="form-control input-field" name="subject"
                            value="{{ old('subject', 'example@gmail.com') }}">
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Name" class="form-control input-field" name="name">
                    </div>
                    <div class="mb-3">
                        <input type="email" placeholder="Email" class="form-control input-field" name="email">
                    </div>
                </div>
                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <textarea placeholder="Message" class="form-control input-field" name="message" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="action-button"><b>KIRIM</b></button>
            </div>
        </form>
    </section>

    <section class="info-section">
        @php $kontaks = App\Models\Contact::first(); @endphp <!-- Ambil satu kontak -->
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-4 contact-info">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5>EMAIL</h5>
                    <p class="inpo">{{ $kontaks->email }}</p> <!-- Menampilkan email -->
                </div>
                <div class="col-md-4 contact-info">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h5>PHONE</h5>
                    <p class="inpo">{{ $kontaks->no_telp }}</p> <!-- Menampilkan nomor telepon -->
                </div>
                <div class="col-md-4 contact-info">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5>LOCATION</h5>
                    <p class="inpo">{{ $kontaks->alamat }}</p> <!-- Menampilkan alamat -->
                </div>
            </div>
        </div>
    </section>
    <section class="maps">

        {{-- <gmp-map center="43.4142989,-124.2301242" zoom="4" map-id="DEMO_MAP_ID" style="height: 400px">
            <gmp-advanced-marker position="37.4220656,-122.0840897" title="Mountain View, CA"></gmp-advanced-marker>
            <gmp-advanced-marker position="47.648994,-122.3503845" title="Seattle, WA"></gmp-advanced-marker>
        </gmp-map> --}}

        <div id="map"></div>

    </section>

    {{-- <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=marker&v=beta"
        defer></script> --}}

    {{-- <!-- prettier-ignore -->
    <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
    ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "weekly"});</script> --}}

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-6.943196154140334, 107.66395896086692], 20); // Koordinat Surabaya
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        L.marker([-6.943196154140334, 107.66395896086692]).addTo(map).bindPopup('Lokasi Saya').openPopup();
    </script>
@endsection
