@extends('layouts.backend')
@section('content')
    <div class="card m-4 card-primary card-outline mb-4">
        <div class="card-header">
            <h3 class="card-title">contact</h3>
            <div class="float-end">
                <a href="{{ route('contact.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <div class="ms-auto">
                </div>
        </div>
        <div class="card-body">
            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="foto" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="inputUserstatus" placeholder="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">No Telepon</label>
                    <input type="text" inputmode="numeric" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror"
                        id="inputUserstatus" placeholder="No Telepon">
                    @error('no_telp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" cols="20" rows="5" class="form-control @error('alamat') is-invalid @enderror"
                        id="inputUserstatus" placeholder="Alamat"></textarea>
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                        <button type="reset" class="btn btn-warning  px-4">Reset</button>
                    </div>
                </div>
        </div>
        </form>
        </table>
        {{-- {!! $contactes->withQueryString()->links('pagination::bootstrap-4') !!} --}}
    </div> <!-- /.card-body -->
    </div> <!-- /.card -->
    @stack('scripts')
    <script>
        document
        .querySelector("input[inputmode='numeric']")
        .addEventListener("input", (e) => {
            const value = e.target.value;

            console.log(value);
        })
    </script>
@endsection
