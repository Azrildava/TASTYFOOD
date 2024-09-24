@extends('layouts.backend')
@section('content')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">contact</h3>
            <div class="float-end">
                <a href="{{ route('contact.create') }}" class="btn btn-sm btn-primary">Add</a>
            </div>
        </div> <!-- /.card-header -->
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th style="text-align: center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($kontaks as $data)
                        <tr class="align-middle">
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_telp }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td class="text-center">
                                <form action="{{ route('contact.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="action-buttons-grid">
                                        <a href="{{ route('contact.edit', $data->id) }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                        <a href="{{ route('contact.destroy', $data->id) }}" class="btn btn-sm btn-danger"
                                            data-confirm-delete="true">Delete</a>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                Data Data Belum Tersedia.
                            </td>
                    @endforelse
                </tbody>
            </table>
            {{-- {!! $contactes->withQueryString()->links('pagination::bootstrap-4') !!} --}}
        </div> <!-- /.card-body -->
    </div> <!-- /.card -->
@endsection
