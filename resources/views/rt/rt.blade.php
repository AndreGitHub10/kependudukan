@extends('layouts.app')
@section('content')
<section class="section">
    <div class="card overflow-auto">
        @php($user = \Auth::user())
        <div class="card-header">
        <h4>{{ "Data Penduduk RT $user->rt / RW $user->rw" }}</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('rt.create') }}">
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
                        <th>Rw</th>
                        <th>Rt</th>
                        <th>Aksi</th>
                    </tr>    
                </thead>
                <tbody>
                    @foreach ($warga as $wargas)
                    <tr>
                        <td class="text-center">{{ ++$i }}</td>
                        <td>{{ $wargas->nama }}</td>
                        <td>{{ $wargas->alamat }}</td>
                        <td>{{ $wargas->tempat_lahir }}</td>
                        <td>{{ $wargas->tanggal_lahir }}</td>
                        <td>{{ $wargas->kontak }}</td>
                        <td>{{ $wargas->rw }}</td>
                        <td>{{ $wargas->rt }}</td>
                        <td>
                            <a href="{{ route('rt.edit',$wargas->id) }}"><button class="btn btn-warning" type="submit"><i class="fa fa-info-circle"></i>&nbsp;Edit</button></a>
                            <form method="POST" action="{{ route('rt.destroy', $wargas->id) }}" name="hapus">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Apakan anda ingin menghapus data {{ $wargas->nama }}?')"><i class="fa fa-info-circle"></i>&nbsp;Hapus</button>
                                <!-- <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Konfirmasi</h5>
                                                <button type="button" class="close rounded-pill"
                                                    data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Hapus Data?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Batal</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal" onclick="document.hapus.submit()">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Hapus</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </form>
                        </td>
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