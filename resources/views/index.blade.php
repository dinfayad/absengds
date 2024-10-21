@extends('template.app')

@section('content')
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Posisi</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($absens as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['divisi'] }}</td>
                <td>{{ $item['posisi'] }}</td>
                <td class="d-flex justify-content-center">
                    <a href="#" class="btn btn-primary me-2">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection