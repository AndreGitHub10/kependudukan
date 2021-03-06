@extends('layouts.app')
@section('content')
<section class="section">
    <div class="card overflow-auto">
        @php($user = \Auth::user())
        <div class="card-header">
        <h4>{{ "Data Penduduk RW $user->rw" }}</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover" id="table1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Kontak</th>
                        <th>Rw</th>
                        <th>Rt</th>
                        <!-- <th>Aksi</th> -->
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
                        <!-- <td>
                            <form method="POST" action="{{ route('warga.destroy', ['warga' => $wargas->id]) }}">
                            @method('DELETE')
                            @csrf
                            
                            <button class="btn btn-primary" type="submit"><i class="fa fa-info-circle"></i>&nbsp;Hapus</button>
                            </form>
                        </td> -->
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
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    
    <script src="assets/js/main.js"></script>
<script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endsection