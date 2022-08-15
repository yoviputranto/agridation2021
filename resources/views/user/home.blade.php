@extends('user.layouts.app')
@section('title')
  Beranda
@endsection
@section('content')
  <!-- Content Row -->
  <div class="row">
    <div class="col-md-3 col-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Total lomba agridation</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $lombas }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-th-large fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Lomba yang Diikuti</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-flag-checkered fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Workshop yang Diikuti</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-seedling fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                  Webinar yang Diikuti
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">1</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="section">
    <div class="row">
      @foreach ($dlombas as $dlomba)
        @if ($dlomba->getUser->id == Auth::user()->id && $dlomba->status == 'berhasil')
        <div class="col-md-4 col-xs-12">
          <div class="card mb-3">
            <div class="card-header py-auto">
              <br>
              <p>Nama lomba yang diikuti : <strong>{{ $dlomba->getLomba->name }}</strong></p>
            </div>
            <div class="card-body">
              <table class="table">
                <tr>
                  <th>Nama Tim</th>
                  <td>:</td>
                  <td>{{ $dlomba->tim }}</td>
                </tr>
                <tr>
                  <th>Ketua Tim</th>
                  <td>:</td>
                  <td><strong>{{ Auth::user()->name }}</strong></td>
                </tr>
                <tr>
                  <th>Anggota Tim</th>
                  <td>:</td>
                  <td>{{ $dlomba->anggota1 }}</td>
                </tr>
                <tr>
                  <th></th>
                  <td></td>
                  <td>{{ $dlomba->anggota2 }}</td>
                </tr>
                <tr>
                  <th></th>
                  <td></td>
                  <td>{{ $dlomba->anggota3 }}</td>
                </tr>
                <tr>
                  <th></th>
                  <td></td>
                  <td>{{ $dlomba->anggota4 }}</td>
                </tr>
              </table>
              <a href="{{ route('user.detail.detail-lomba', $dlomba->id) }}" class="btn btn-primary float-right">Akses Lomba</a>
            </div>
          </div>
        </div>
        @endif
      @endforeach
    </div>
  </div>
@endsection
