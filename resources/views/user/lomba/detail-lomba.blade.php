@extends('user.layouts.app')

@section('title')
  Lomba
@endsection

@section('content')
  <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        {{ $dlombas->getLomba->name }}
      </h6>
    </div>
    <div class="card-body">
    <p>{{ $dlombas->getLomba->description }}</p>
    </div>
  </div>
  <div class="card mt-4">
    <div class="card-header">
      <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Informasi Lomba</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Pengumpulan Karya</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p><strong>Nomor urut : {{ $dlombas->id }}</strong></p>
            <p><strong>Nama kelompok : {{ $dlombas->tim }}</strong></p>
            <p><strong>Ketua Tim : {{ Auth::user()->name }}</strong></p>
            <p>Timeline Lomba</p>
          {{-- @if ($dlombas->)
              
          @endif --}}
          <p>Link grup lomba :<a href="#">link channel</a></p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <form role="form" action="#" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputEmail1">Link Karya</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap"
                placeholder="Masukkan Link">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    $('#myTab a').on('click', function(event) {
      event.preventDefault()
      $(this).tab('show')
    })
  </script>
@endpush
