@extends('user.layouts.app')
@section('title')
  List Webinar
@endsection

@section('content')
  {{-- <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        List Webinar
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tema Webinar</th>
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
              <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum quod nobis aspernatur explicabo
                vel suscipit pariatur debitis, quas autem eu</td>
              <td>Rp. 30.000</td>
              <td><a href="{{ route('user.daftarwebinar') }}" class="btn btn-primary">Daftar</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> --}}

  <div class="card mb-3" style="max-width: 940px;">
    <div class="row no-gutters">
      <div class="col-md-4 m-10">
        <img src="{{ asset('upage/img/contoh-poster.jpg') }}" class="img-fluid mw-310 px-3 py-3 sm-2 md-1 lg-1" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title text-primary font-weight-bolder">Unggul dengan Budidaya Tanaman
            Organik Microgreens</h5>
          <div class="card-text text-primary font-weight-bold">Deskripsi Webinar</div>
          <p class="card-text text-justify">Kegiatan ini akan dilakukan secara daring, dengan metode
            konferensi video, diadakan menjadi dua sesi yang berbeda topik
            pembahasan. Workshop ditargetkan dapat meningkatkan pengetahuan
            dan kesadaran milenial terhadap pentingnya pertanian untuk
            mencapai Indonesia emas. Sedangkan workshop diharapkan
            menjadi forum yang dapat meningkatkan hard skill dan soft skill
            pada bidang pertanian.</p>
            <a href="#" class="card-text btn btn-white btn-sm" role="button" aria-pressed="true"><b class="text-primary">Rp. 30.000</b></a>
            <a href="{{ route('user.ongkir') }}" class="card-text btn btn-primary btn-sm" role="button" aria-pressed="true"><b>Daftar Webinar</b></a>
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
