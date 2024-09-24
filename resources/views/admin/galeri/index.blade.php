@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <div class="card border-secondary">
                <div class="card-header">Data galeri
                    <a href="{{ route('galeri.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($galeris as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{asset('/storage/galeris/'.$item->gambar)}}" alt="" style="width: 100px"></td>
                                    <td>
                                        <form action="{{ route('galeri.destroy', $item->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{ route('galeri.edit', $item->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                            <button class="btn btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
