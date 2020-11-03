@extends('layouts.app')
@section('title', 'List One to One')
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
                                <th>Mata Pelajaran</th>
                                <th>Nama Guru</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($el AS $eloquent)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $eloquent->mapel_nama }}</td>
                                <td>{{ $eloquent->guruBelongsTo->guru_nama }}</td>
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