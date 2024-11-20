@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                @if (session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card border-secondary">
                    <div class="card-header">Data berita
                        <a href="{{ route('berita.create') }}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
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
                                    @foreach ($beritas as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <span class="text-toggle" onclick="toggleText(this)">
                                                    {{ Str::limit($item->judul, 25, ' ...') }}
                                                </span>
                                                <span class="full-text" style="display: none;">{{ $item->judul }}</span>
                                            </td>
                                            <td>
                                                <span class="text-toggle" onclick="toggleText(this)">
                                                    {{ Str::limit($item->deskripsi, 80, ' ...') }}
                                                </span>
                                                <span class="full-text" style="display: none;">{{ $item->deskripsi }}</span>
                                            </td>
                                            <td><img src="{{ asset('/storage/beritas/' . $item->gambar) }}" alt=""
                                                    style="width: 150px; height: 100px; object-fit: cover"></td>
                                            <td>
                                                <form action="{{ route('berita.destroy', $item->id) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="{{ route('berita.edit', $item->id) }}"
                                                        class="btn btn-sm btn-success">Edit</a>
                                                    <a href="{{ route('berita.show', $item->id) }}"
                                                        class="btn btn-sm btn-warning">Show</a>
                                                    <a href="{{ route('berita.destroy', $item->id) }}"
                                                        class="btn btn-sm btn-danger" type="submit"
                                                        data-confirm-delete="true">Delete</a>
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
    <script>
        function toggleText(element) {
            const fullTextElement = element.nextElementSibling; // Ambil elemen berikutnya yang merupakan teks penuh
            const isHidden = fullTextElement.style.display === 'none';

            // Tampilkan atau sembunyikan teks penuh
            if (isHidden) {
                fullTextElement.style.display = 'inline'; // Tampilkan teks penuh
                element.style.display = 'none'; // Sembunyikan teks terbatas
            } else {
                fullTextElement.style.display = 'none'; // Sembunyikan teks penuh
                element.style.display = 'inline'; // Tampilkan teks terbatas
            }
        }
    </script>
@endsection
