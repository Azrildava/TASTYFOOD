 @extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Tambah galeri
                        <a href="{{ route('galeri.index') }}" class="btn btn-sm btn-primary" style="float: right;">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="form-label">Gambar</label>
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                                            value="{{old ('gambar')}}" placeholder="gambar" required>
                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-sm btn-success" type="submit">simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
