 @extends('layouts.backend')
 @section('content')
     <div class="card  m-4 card-primary card-outline mb-4">
         <div class="card-header">Tambah tentang
             <a href="{{ route('tentang.index') }}" class="btn btn-sm btn-primary" style="float: right;">Kembali</a>
         </div>
         <div class="card-body">
             <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="row">
                     <div class="col">
                         <div class="mb-3">
                             <label for="form-label">Judul</label>
                             <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                                 value="{{ old('judul') }}" placeholder="judul" required>
                             @error('judul')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                     <div class="col">
                         <div class="mb-3">
                             <label for="form-label">Content</label>
                             <input type="text" class="form-control @error('content') is-invalid @enderror"
                                 name="content" value="{{ old('content') }}" placeholder="content" required>
                             @error('content')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                     <div class="col">
                         <div class="mb-3">
                             <label for="form-label">Deskripsi</label>
                             <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                 name="deskripsi" value="{{ old('deskripsi') }}" placeholder="deskripsi">
                             @error('deskripsi')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>
                 </div>
                 <div class="mb-3">
                     <div class="d-md-flex d-grid align-items-center gap-3">
                         <button type="submit" class="btn btn-primary px-4">Submit</button>
                         <button type="reset" class="btn btn-warning  px-4">Reset</button>
                     </div>
                 </div>
         </div>
         </form>
     </div>
 @endsection
