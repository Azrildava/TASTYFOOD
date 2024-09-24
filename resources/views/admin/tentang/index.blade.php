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
                <div class="card-header">Data tentang
                    <a href="{{ route('tentang.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($tentang as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->judul}}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td><img src="{{asset('/storage/tentangs/'. $item->gambar)}}" alt="" style="width: 100px"></td>
                                    <td>
                                        <form action="{{ route('tentang.destroy', $item->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{ route('tentang.edit', $item->id) }}"
                                                class="btn btn-sm btn-success">Edit</a>
                                            <button class="btn btn-sm btn-danger" type="submit"
                                               data-confirm-delete="true" >Delete</button>
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
