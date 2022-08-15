@extends('user.layouts.app')
@section('title')
  List Lomba
@endsection

@section('content')
  <div class="card mb-5">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        List Lomba
      </h6>
    </div>
    <div class="card-body">
      
      <div class="row">
        <div class="col-md-3 col-xs-12 mb-3">
          <div class="list-group" id="myList" role="tablist">
            @foreach ($lombas as $tablomba)
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#{{Str::of($tablomba->name)->replace(' ', '')}}" role="tab">
              {{ $tablomba->name }}
            </a>
            @endforeach
          </div>
        </div>
        <div class="col-md-9 col-xs-12">
          <div class="tab-content">
            @foreach ($lombas as $lomba)
            <div class="tab-pane" id="{{Str::of($lomba->name)->replace(' ', '')}}" role="tabpanel">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">{{ $lomba->name }}</td>
                      <td>{{ $lomba->description }}</td>
                      <td>Rp. {{ $lomba->price }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            
            @endforeach
          </div>
          <center>
            <a href="{{ route('daftar-lomba.create') }}" class="btn btn-primary">Daftar lomba</a>
          <center>
        </div>
      </div>
     
    </div>
  </div>
@endsection

@push('scripts')
<script>
  $(function() {
    $('#myList a:last-child').tab('show')
  })

</script>
@endpush

