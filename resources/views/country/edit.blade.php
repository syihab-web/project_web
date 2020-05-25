@extends('layouts.app')

@section('title', 'Form Edit')

@section('content')
<br><br>

<div class="container">
<form action="/country/{{ $country->id }}" method="POST" enctype="multipart/form-data">
    @method('patch')
    {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Negara</label>
            <input name="nama_negara" disabled value="{{ $country->nama_negara }}" type="text" class="form-control" id="exampleInputEmail1" required>
         </div>
         <div class="form-group">
            <label for="exampleInputEmail2">Benua</label>
            <select class="custom-select" disabled required id="exampleInputEmail2" name="benua" required>
                <option value="{{ $country->benua }}">{{ $country->benua }}</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Positif</label>
        <input name="jml_positif" type="number" value="{{ $country->jml_positif }}" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Jumlah Sembuh</label>
        <input name="jml_sembuh" type="number" value="{{ $country->jml_sembuh }}" class="form-control" id="exampleInputPassword2" required>
          </div><div class="form-group">
            <label for="exampleInputPassword3">Jumlah Meninggal</label>
          <input name="jml_meninggal" type="number" value="{{ $country->jml_meninggal }}" class="form-control" id="exampleInputPassword3" required>
          </div><div class="form-group">
            <label for="exampleInputPassword4">Tanggal</label>
          <input name="tanggal" type="date" class="form-control" value="{{ $country->tanggal }}" id="exampleInputPassword4" required>
          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
