@extends('layouts.app')

@section('title', 'Jumlah Covid per Negara')

@section('content')
<br><br>

<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if (session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
    @endif
    <table>
        <tr>
            <td><a href="{{ URL('country/create') }}" class="btn btn-success mr-4">Tambah</a></td>
            <td><form action="/search" method="get" autocomplete="off">
                <div class="input-group">
                    <input type="text" name="search" class="form-control boxSearch" placeholder="Search country or continent ..." aria-label="Search with two button addons" aria-describedby="button-addon4">
                    <div class="input-group-append" id="button-addon4">
                      <button class="btn btn-outline-info" type="submit">Search</button>
                    </div>
                  </div>
                </form>
             </td>
        </tr>
    </table>
    <br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Negara</th>
            <th scope="col">Jumlah Positif</th>
            <th scope="col">Jumlah Sembuh</th>
            <th scope="col">Jumlah Meninggal</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody class="listSearch">

       <?php  $count = 1; ?>
       @foreach ($country as $negara)
        <tr>
            <th scope="row">{{ $country->perPage()*($country->currentPage()-1)+$count }}</th>
            <td>{{ $negara->nama_negara }}</td>
            <td>{{ $negara->jml_positif }}</td>
            <td>{{ $negara->jml_sembuh }}</td>
            <td>{{ $negara->jml_meninggal }}</td>
            <td>{{ $negara->tanggal }}</td>
            <td><a href="/country/{{ $negara->id }}/edit" class="btn btn-info">Edit</a>
                <form action="/country/{{ $negara->id }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php $count++; ?>
        @endforeach
        </tbody>
    </table>
        {{ $country->links() }}
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function($){

        $('.listSearch tr').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.boxSearch').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.listSearch tr').each(function(){
                if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList.length < 1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

    });
</script>

@endsection
