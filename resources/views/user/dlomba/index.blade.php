@extends('user.layouts.app')
@section('title')
  Daftar Lomba
@endsection

@section('content')
<div class="card">
  <h5 class="h5 ml-4 mt-3"><strong>Pilih Lomba</strong></h5>
  <ul class="nav nav-pills mb-1 justify-content-start ml-4" id="pills-tab" role="tablist">
    @foreach ($lombas as $lomba)
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-{{Str::of($lomba->name)->replace(' ', '')}}-tab" data-toggle="pill" href="#pills-{{Str::of($lomba->name)->replace(' ', '')}}" role="tab" aria-controls="pills-{{Str::of($lomba->name)->replace(' ', '')}}" aria-selected="true">{{$lomba->name}}</a>
      </li>
    @endforeach
    
  </ul>
  <div class="tab-content" id="pills-tabContent">
    @foreach ($lombas as $lomba)
    <div class="tab-pane" id="pills-{{Str::of($lomba->name)->replace(' ', '')}}" role="tabpanel" aria-labelledby="pills-{{Str::of($lomba->name)->replace(' ', '')}}-tab">
      @if ($lomba->name=='Karya Tulis Ilmiah')
        <form role="form" action="{{route('daftar-lomba.store')}}" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            @csrf   
            <fieldset disabled="disabled">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
                  value="{{ Auth::user()->name }}">
              </div>
            </fieldset>
            <div class="form-group">
              <label for="name">Nama Lomba</label>
              <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
                  value="{{$lomba->name}}" disabled>
            </div>
            <div class="form-group">
              <select name="lomba_id" class="form-control" hidden required>
                  <option value="{{$lomba->id}}">{{$lomba->name}}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Tim</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="tim"
                value="{{ old('tim') }}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 1</label>
              <input type="text" class="form-control" name="anggota1" value="{{old('anggota1')}}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 2</label>
              <input type="text" class="form-control" name="anggota2" value="{{old('anggota2')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 3</label>
                <input type="text" class="form-control" name="anggota3" value="{{old('anggota3')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 4</label>
                <input type="text" class="form-control" name="anggota4" value="{{old('anggota4')}}">
            </div>
            <div class="form-group">
              <label for="name">Bukti pembayaran</label>
              <input type="file" class="form-control" name="bukti" placeholder="Bukti pendaftaran">
            </div>
          
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success" value="save" name="submit"
              onclick="return confirm('Apakah data sudah valid?')">Submit</button>
          </div>
        </form>
      @elseif($lomba->name=='Podcast')
        <form role="form" action="{{route('daftar-lomba.store')}}" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            @csrf   
            <fieldset disabled="disabled">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
                  value="{{ Auth::user()->name }}">
              </div>
            </fieldset>
            <div class="form-group">
              <label for="name">Nama Lomba</label>
              <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
                  value="{{$lomba->name}}" disabled>
            </div>
            <div class="form-group">
              <select name="lomba_id" class="form-control" hidden required>
                  <option value="{{$lomba->id}}">{{$lomba->name}}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Tim</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="tim"
                value="{{ old('tim') }}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 1</label>
              <input type="text" class="form-control" name="anggota1" value="{{old('anggota1')}}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 2</label>
              <input type="text" class="form-control" name="anggota2" value="{{old('anggota2')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 3</label>
                <input type="text" class="form-control" name="anggota3" value="{{old('anggota3')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 4</label>
                <input type="text" class="form-control" name="anggota4" value="{{old('anggota4')}}">
            </div>
            <div class="form-group">
              <label for="name">Bukti pembayaran</label>
              <input type="file" class="form-control" name="bukti" placeholder="Bukti pendaftaran">
            </div>
          
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success" value="save" name="submit"
              onclick="return confirm('Apakah data sudah valid?')">Submit</button>
          </div>
        </form>
      @elseif($lomba->name=='Poster')
        <form role="form" action="{{route('daftar-lomba.store')}}" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            @csrf   
            <fieldset disabled="disabled">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
                  value="{{ Auth::user()->name }}">
              </div>
            </fieldset>
            <div class="form-group">
              <label for="name">Nama Lomba</label>
              <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
                  value="{{$lomba->name}}" disabled>
            </div>
            <div class="form-group">
              <select name="lomba_id" class="form-control" hidden required>
                  <option value="{{$lomba->id}}">{{$lomba->name}}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Tim</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="tim"
                value="{{ old('tim') }}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 1</label>
              <input type="text" class="form-control" name="anggota1" value="{{old('anggota1')}}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 2</label>
              <input type="text" class="form-control" name="anggota2" value="{{old('anggota2')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 3</label>
                <input type="text" class="form-control" name="anggota3" value="{{old('anggota3')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 4</label>
                <input type="text" class="form-control" name="anggota4" value="{{old('anggota4')}}">
            </div>
            <div class="form-group">
              <label for="name">Bukti pembayaran</label>
              <input type="file" class="form-control" name="bukti" placeholder="Bukti pendaftaran">
            </div>
          
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success" value="save" name="submit"
              onclick="return confirm('Apakah data sudah valid?')">Submit</button>
          </div>
        </form>
      @elseif($lomba->name=='Creative Video')
        <form role="form" action="{{route('daftar-lomba.store')}}" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            @csrf   
            <fieldset disabled="disabled">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
                  value="{{ Auth::user()->name }}">
              </div>
            </fieldset>
            <div class="form-group">
              <label for="name">Nama Lomba</label>
              <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
              value="{{$lomba->name}}" disabled>
            </div>
            <div class="form-group">
              <select name="lomba_id" class="form-control" hidden required>
                  <option value="{{$lomba->id}}">{{$lomba->name}}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Tim</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="tim"
                value="{{ old('tim') }}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 1</label>
              <input type="text" class="form-control" name="anggota1" value="{{old('anggota1')}}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 2</label>
              <input type="text" class="form-control" name="anggota2" value="{{old('anggota2')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 3</label>
                <input type="text" class="form-control" name="anggota3" value="{{old('anggota3')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 4</label>
                <input type="text" class="form-control" name="anggota4" value="{{old('anggota4')}}">
            </div>
            <div class="form-group">
              <label for="name">Bukti pembayaran</label>
              <input type="file" class="form-control" name="bukti" placeholder="Bukti pendaftaran">
            </div>
          
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success" value="save" name="submit"
              onclick="return confirm('Apakah data sudah valid?')">Submit</button>
          </div>
        </form>
      @elseif($lomba->name=='Fotografi')
        <form role="form" action="{{route('daftar-lomba.store')}}" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            @csrf   
            <fieldset disabled="disabled">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
                  value="{{ Auth::user()->name }}">
              </div>
            </fieldset>
            <div class="form-group">
              <label for="name">Nama Lomba</label>
              <input type="text" class="form-control disabled" id="exampleInputEmail1" name="nama_lengkap"
                  value="{{$lomba->name}}" disabled>
            </div>
            <div class="form-group">
              <select name="lomba_id" class="form-control" hidden required>
                  <option value="{{$lomba->id}}">{{$lomba->name}}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Tim</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="tim"
                value="{{ old('tim') }}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 1</label>
              <input type="text" class="form-control" name="anggota1" value="{{old('anggota1')}}">
            </div>
            <div class="form-group">
              <label for="name">Nama anggota 2</label>
              <input type="text" class="form-control" name="anggota2" value="{{old('anggota2')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 3</label>
                <input type="text" class="form-control" name="anggota3" value="{{old('anggota3')}}">
            </div>
            <div class="form-group">
                <label for="name">Nama anggota 4</label>
                <input type="text" class="form-control" name="anggota4" value="{{old('anggota4')}}">
            </div>
            <div class="form-group">
              <label for="name">Bukti pembayaran</label>
              <input type="file" class="form-control" name="bukti" placeholder="Bukti pendaftaran">
            </div>
          
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success" value="save" name="submit"
              onclick="return confirm('Apakah data sudah valid?')">Submit</button>
          </div>
        </form>
      @endif
    </div>
    @endforeach
    
  </div>
</div>
@stop
