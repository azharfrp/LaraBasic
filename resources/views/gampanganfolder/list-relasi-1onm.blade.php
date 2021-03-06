@extends('layouts.app')
@section('title', 'List One to Many')
@section('content')
<main role="main">
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                <strong>List Eloquent</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="5%">No.</th>
                                <th width="25%">Kelas</th>
                                <th>Nama Siswa</th>
                                <th width="5%">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($el AS $eloquent)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $eloquent->kelas_nama }}</td>
                                <td>
                                    @foreach( $eloquent->siswaHasMany AS $siswas )
                                        {{ $siswas->siswa_nama . ',' }}
                                    @endforeach
                                </td>
                                <td class="text-center">{{ $eloquent->siswaHasMany->count() }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection