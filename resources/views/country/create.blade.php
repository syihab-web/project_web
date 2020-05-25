@extends('layouts.app')

@section('title', 'Form Tambah')

@section('content')
<br><br>

<div class="container">
    @if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
  @endif
  <br>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Perhatian</strong>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/country" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Negara</label>
        <input name="nama_negara" value="{{ old('nama_negara') }}" type="text" class="form-control" id="exampleInputEmail1" required>
         </div>
         <div class="form-group">
            <label for="exampleInputEmail2">Benua</label>
            <select class="custom-select" required id="exampleInputEmail2" name="benua" required>
              @foreach ($continent as $continent)
                <option value="{{ $continent->id_benua }}">{{ $continent->id_benua }}</option>
              @endforeach
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Positif</label>
        <input name="jml_positif" type="number" value="{{ old('jml_positif') }}" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Jumlah Sembuh</label>
        <input name="jml_sembuh" type="number" class="form-control" value="{{ old('jml_sembuh') }}" id="exampleInputPassword2" required>
          </div><div class="form-group">
            <label for="exampleInputPassword3">Jumlah Meninggal</label>
          <input name="jml_meninggal" type="number" value="{{ old('jml_meninggal') }}" class="form-control" id="exampleInputPassword3" required>
          </div><div class="form-group">
            <label for="exampleInputPassword4">Tanggal</label>
          <input name="tanggal" type="date" class="form-control" value="{{ old('tanggal') }}" id="exampleInputPassword4" required>
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
