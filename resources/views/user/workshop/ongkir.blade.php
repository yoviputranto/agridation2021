@extends('user.layouts.app')
@section('title')
    Cek Ongkir
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">
      Cek Ongkir
    </h6>
  </div>
  <form action="{{ url('/peserta/workshop/ongkir') }}" method="GET">
      @csrf
      <div class="card-body">
          <div class="row">
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <h6>Kirim ke</h6>
                  <select name="province" id="mark" class="form-control">
                    <option value="">Pilih Provinsi</option>
                    @foreach ($provinces as $result)
                      <option value="{{ $result->id }}">{{ $result->province }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <select name="destination" id="series" class="form-control">
                    <option value="">Pilih Kota</option>
                    @foreach ($cities as $city)
                      <option value="{{ $city->id }}" data-chained="{{ $city->province_id }}" selected="selected"> {{ $city->type }} {{ $city->city_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <h6>Pilih Kurir</h6>
                  <select name="courier" class="form-control">
                    <option value="" holder>Pilih Kurir</option>
                    <option value="jne">JNE</option>
                    <option value="tiki">TIKI</option>
                    <option value="pos">POS Indonesia</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <button type="submit" class="btn btn-info btn-block">Hitung Ongkir</button>
                </div>
              </div>
            </div>
      </div>
  </form>
    
  @if ($cekongkir)
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Service</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Estimasi</th>
                    <th>Note</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cekongkir as $result)
                    <tr>
                      <td>{{ $result['service'] }}</td>
                      <td>{{ $result['description'] }}</td>
                      <td>{{ $result['cost'][0]['value'] }}</td>
                      <td>{{ $result['cost'][0]['etd'] }}</td>
                      <td>{{ $result['cost'][0]['note'] }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    @endif
  
  <div class="card-footer">
    <a href="{{ route('workshop.create') }}" class="btn btn-primary">Lanjutkan Pendaftaran</a>
  </div>
</div>
@endsection