@extends('layouts.app')

@section('content')
<section class="section">
    <div class="card overflow-auto">       
        <div class="card-header">
        <h4>{{ "Data User" }}</h4>
        </div>
        <div class="card-body">
            <a href="{{ route('user.create') }}">
                <button type="button" class="btn btn-primary mb-1">Tambah User</button>
            </a>
            <table class="table table-striped table-hover" id="table1">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Kontak</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Aksi</th>
                    </tr>    
                </thead>
                @foreach ($user as $users)
                    <tr>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->kontak }}</td>
                        <td>{{ $users->rw }}</td>
                        <td>{{ $users->rt }}</td>
                        <td>
                            <form method="POST" action="{{ route('user.destroy', $users->id) }}">
                            @method('DELETE')
                            @csrf
                            
                            <button class="btn btn-primary" type="submit"><i class="fa fa-info-circle"></i>&nbsp;Hapus</button>
                            </form>
                        </td>
                        <!-- <td>
                            <span class="badge bg-success">Active</span>
                        </td> -->
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</section>

@endsection