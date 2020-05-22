@extends('layouts.app')

@section('title', 'Jumlah Covid per Provinsi')

@section('content')
<br><br>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Jumlah Positif</th>
            <th scope="col">Jumlah Sembuh</th>
            <th scope="col">Jumlah Meninggal</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($provinsi as $prov)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $prov->nama_provinsi }}</td>
            <td>{{ $prov->jml_positif }}</td>
            <td>{{ $prov->jml_sembuh }}</td>
            <td>{{ $prov->jml_meninggal }}</td>
            <td>{{ $prov->tanggal }}</td>
            <td><button type="button" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
