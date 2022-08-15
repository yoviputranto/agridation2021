@extends('user.layouts.app')
@section('title')
  List Lomba yang diikuti
@endsection

@section('content')

<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lomba</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dlombas as $dlomba)
                            @if ($dlomba->status == 'berhasil' && $dlomba->getUser->id == Auth::user()->id)
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>{{ $dlomba->getLomba->name }}</td>
                                    <td>{{ $dlomba->getLomba->description }}</td>
                                    <td>{{ $dlomba->getLomba->price }}</td>
                                    <td>
                                        <a href="{{ route('user.detail.detail-lomba', $dlomba->id) }}" class="btn btn-primary btn-block">Akses</a>
                                    </td>
                                </tr>
                            </thead>
                            @endif
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

