@extends('user.layouts.app')
@section('title')
  List Workshop
@endsection

@section('content')
  {{-- <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        List Workshop
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tema Workshop</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td scope="row">Unggul dengan Budidaya Tanaman
                Organik Microgreens</td>
              <td>Kegiatan ini akan dilakukan secara daring, dengan metode
                                konferensi video, diadakan menjadi dua sesi yang berbeda topik
                                pembahasan. Workshop ditargetkan dapat meningkatkan pengetahuan
                                dan kesadaran milenial terhadap pentingnya pertanian untuk
                                mencapai Indonesia emas. Sedangkan workshop diharapkan
                                menjadi forum yang dapat meningkatkan hard skill dan soft skill
                                pada bidang pertanian.</td>
              <td>Rp. 30.000</td>
              <td><a href="{{ route('user.ongkir') }}" class="btn btn-primary">Daftar</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> --}}
  
  <div class="card mb-3" style="max-width: 940px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="https://images.unsplash.com/photo-1593163415857-e39a618bf944?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1354&q=80" style="max-width: 310px;padding:10px; border:10px white; border-radius: 5px" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-primary font-weight-bold">Unggul dengan Budidaya Tanaman
            Organik Microgreens</h5>
          <p class="card-text">Kegiatan ini akan dilakukan secara daring, dengan metode
            konferensi video, diadakan menjadi dua sesi yang berbeda topik
            pembahasan. Workshop ditargetkan dapat meningkatkan pengetahuan
            dan kesadaran milenial terhadap pentingnya pertanian untuk
            mencapai Indonesia emas. Sedangkan workshop diharapkan
            menjadi forum yang dapat meningkatkan hard skill dan soft skill
            pada bidang pertanian.</p>
            <a href="#" class="card-text btn btn-secondary btn-sm" role="button" aria-pressed="true">Rp. 30.000</a>
            <a href="{{ route('user.ongkir') }}" class="card-text btn btn-primary btn-sm" role="button" aria-pressed="true">Daftar Workshop</a>
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
