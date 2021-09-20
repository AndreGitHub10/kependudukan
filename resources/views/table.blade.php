@extends('layouts.app')
@section('content')
<section class="section">
    <div class="card overflow-auto">
        <div class="card-header">
        Data Penduduk
        </div>
        <div class="card-body">
            <a href="{{ route('warga.create') }}">
                <button type="button" class="btn btn-primary mb-1">Tambah Data</button>
            </a>
            <table class="table table-striped table-hover" id="table1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Kontak</th>
                        <th>RW</th>
                        <th>RT</th>
                        <th>Aksi</th>
                    </tr>    
                </thead>
                <tbody>
                    @foreach ($warga as $wargas)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $wargas->nama }}</td>
                        <td>{{ $wargas->alamat }}</td>
                        <td>{{ $wargas->tempat_lahir }}</td>
                        <td>{{ $wargas->tanggal_lahir }}</td>
                        <td>{{ $wargas->kontak }}</td>
                        <td>{{ $wargas->rw }}</td>
                        <td>{{ $wargas->rt }}</td>
                        <td>
                            <form method="POST" action="{{ route('warga.destroy', $wargas->id) }}">
                            @method('DELETE')
                            @csrf
                            
                            <button class="btn btn-danger" type="submit"><i class="fa fa-info-circle"></i>&nbsp;Hapus</button>
                            </form>
                        </td>
                        <!-- <td>
                            <span class="badge bg-success">Active</span>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@section('extended_js')
<script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endsection