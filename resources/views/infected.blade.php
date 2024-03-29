@extends('layouts.app')
<link rel="stylesheet" href="{!! asset('assets/css/infected.css')!!}">
<script src="{!! asset('assets/js/infected.js') !!}"></script>
@section('content')
<div id="box1">
    <h1>Infected</h1>
</div>

 <div id="box2">
    <div class="scrollable">

        {{-- <h4>Select Number of Rows</h4>
        <div class="form-group">
            <select name="state" id="maxRows" class="form-control" style="width: 150px">
                <option value="50000">Show All</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
        </div> --}}
        <div class="row" >
            <h1 >Europe</h1>
            <div class="form-row align-right search">
                <div class="btn">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                </div>
                <form action="/searchEurope" method="GET" autocomplete="off">
                    <input type="text" class="form-control boxSearch-eur" name="searchEurope" id="" aria-describedby="helpId" placeholder="Search...">
                </form>
            </div>
         </div>
        <table id="mytable" class="table table-dark">
           <thead>
               <th>Country</th>
               <th>Total Cases</th>
               <th>Total Recovered</th>
               <th>Total Death</th>
           </thead>
           <tbody class="listSearch-eur">
            @foreach ($eropa as $europe)
            <tr>
                <td>{{ $europe->nama_negara }}</td>
                <td>{{ $europe->jml_positif }}</td>
                <td>{{ $europe->jml_sembuh }}</td>
                <td>{{ $europe->jml_meninggal }}</td>
            </tr>
            @endforeach
           </tbody>
        </table>

            {{ $eropa->links() }}

    </div>
    <div class="scrollable">

        {{-- <h4>Select Number of Rows</h4>
        <div class="form-group">
            <select name="state" id="maxRows" class="form-control" style="width: 150px">
                <option value="50000">Show All</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
        </div> --}}
        <div class="row" >
            <h1 >America</h1>
            <div class="form-row align-right search">
                <div class="btn">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                </div>
            <form action="/searchAmerica" method="GET" autocomplete="off">
              <input type="text" class="form-control boxSearch-usa" name="searchAmerica" id="" aria-describedby="helpId" placeholder="Search...">
            </form>
            </div>
         </div>
        <table id="mytable" class="table table-dark">
           <thead>
               <th>Country</th>
               <th>Total Cases</th>
               <th>Total Recovered</th>
               <th>Total Death</th>
           </thead>
           <tbody class="listSearch-usa">
            @foreach ($amerika as $america)
            <tr>
                <td>{{ $america->nama_negara }}</td>
                <td>{{ $america->jml_positif }}</td>
                <td>{{ $america->jml_sembuh }}</td>
                <td>{{ $america->jml_meninggal }}</td>
            </tr>
            @endforeach
           </tbody>
        </table>
        {{ $amerika->links() }}
    </div>

    <div class="scrollable">

        {{-- <h4>Select Number of Rows</h4>
        <div class="form-group">
            <select name="state" id="maxRows" class="form-control" style="width: 150px">
                <option value="50000">Show All</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
        </div> --}}
        <div class="row" >
            <h1 >Africa</h1>
            <div class="form-row align-right search">
                <div class="btn">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                </div>
                <form action="/searchAmerica" method="GET" autocomplete="off">
                    <input type="text" class="form-control boxSearch-afc" name="searchAfrica" id="" aria-describedby="helpId" placeholder="Search...">
                </form>

            </div>
         </div>
        <table id="mytable" class="table table-dark">
           <thead>
               <th>Country</th>
               <th>Total Cases</th>
               <th>Total Recovered</th>
               <th>Total Death</th>
           </thead>
           <tbody class="listSearch-afc">
            @foreach ($afrika as $africa)
            <tr>
                <td>{{ $africa->nama_negara }}</td>
                <td>{{ $africa->jml_positif }}</td>
                <td>{{ $africa->jml_sembuh }}</td>
                <td>{{ $africa->jml_meninggal }}</td>
            </tr>
            @endforeach

           </tbody>
        </table>

        {{ $afrika->links() }}

    </div>

    <div class="scrollable">

        {{-- <h4>Select Number of Rows</h4>
        <div class="form-group">
            <select name="state" id="maxRows" class="form-control" style="width: 150px">
                <option value="50000">Show All</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
        </div> --}}
        <div class="row" >
            <h1 >Asia</h1>
            <div class="form-row align-right search">
                <div class="btn">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                </div>
                <form action="/searchAmerica" method="GET" autocomplete="off">
                    <input type="text" class="form-control boxSearch-asia" name="searchAsia" id="" aria-describedby="helpId" placeholder="Search...">
                </form>

            </div>
         </div>
        <table id="mytable" class="table table-dark">
           <thead>
               <th>Country</th>
               <th>Total Cases</th>
               <th>Total Recovered</th>
               <th>Total Death</th>
           </thead>
           <tbody class="listSearch-asia">
            @foreach ($asia as $asian)
            <tr>
                <td>{{ $asian->nama_negara }}</td>
                <td>{{ $asian->jml_positif }}</td>
                <td>{{ $asian->jml_sembuh }}</td>
                <td>{{ $asian->jml_meninggal }}</td>
            </tr>
            @endforeach
           </tbody>
        </table>

        {{ $asia->links() }}

    </div>
 </div>
 <div class="scrollable">
        <div class="row" >
            <h1 >Australia</h1>
            <div class="form-row align-right search">
                <div class="btn">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                </div>
                <form action="/searchAmerica" method="GET" autocomplete="off">
                    <input type="text" class="form-control boxSearch-aus" name="searchAsia" id="" aria-describedby="helpId" placeholder="Search...">
                </form>

            </div>
         </div>
        <table id="mytable" class="table table-dark ">
           <thead>
               <th>Country</th>
               <th>Total Cases</th>
               <th>Total Recovered</th>
               <th>Total Death</th>
           </thead>
           <tbody class="listSearch-aus">
            @foreach ($australia as $ostrali)
            <tr>
                <td>{{ $ostrali->nama_negara }}</td>
                <td>{{ $ostrali->jml_positif }}</td>
                <td>{{ $ostrali->jml_sembuh }}</td>
                <td>{{ $ostrali->jml_meninggal }}</td>
            </tr>
            @endforeach
           </tbody>
        </table>

        {{ $australia->links() }}

    </div>




</div>

{{-- pagination ccd --}}

{{-- <script>
    var table = '#mytable'
    $('#maxRows').on('change', function(){
        $('.pagination').html('')
        var trnum = 0
        var maxRows = parseInt($(this).val())
        var totalRows = $(table+' tbody tr').length
        $(table+' tr:gt(0)').each(function(){
            trnum++
            if(trnum > maxRows){
                $(this).hide()
            }
            if(trnum <= maxRows){
                $(this).show()
            }
        })
        if(totalRows > maxRows){
            var pagenum = Math.ceil(totalRows/maxRows)
            for(var i = 1 ; i <= pagenum;){
                $('.pagination').append('<li data-page="'+i+'">\<span>'+ i++ +'<span class="sr-only">(current)</span></span>\</li>').show()
            }

        }
        $('.pagination li:first-child').addClass('active')

        $('.pagination li').on('click', function(){
            var pageNum = $(this).attr('data-page')
            var trIndex = 0;
            $('.pagination li').removeClass('active')
            $(this).addClass('active')
            $(table+' tr:gt(0)').each(function(){
                trIndex++
                if(trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
                    $(this).hide()
                }
                else{
                    $(this).show()
                }
            })
        })
    })
    $(function(){
        $('table tr:eq(0)').prepend('<th>ID</th>')
        var id = 0;
        $('table tr:gt(0)').each(function(){
            id++
            $(this).prepend('<td>' + id + '</td>')
        })
    })
</script> --}}
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function($){

        $('.listSearch-afc tr').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.boxSearch-afc').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.listSearch-afc tr').each(function(){
                if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList.length < 1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

    });
</script>
<script>
    $(document).ready(function($){

        $('.listSearch-eur tr').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.boxSearch-eur').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.listSearch-eur tr').each(function(){
                if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList.length < 1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

    });
</script>
<script>
    $(document).ready(function($){

        $('.listSearch-asia tr').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.boxSearch-asia').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.listSearch-asia tr').each(function(){
                if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList.length < 1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

    });
</script>
<script>
    $(document).ready(function($){

        $('.listSearch-usa tr').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.boxSearch-usa').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.listSearch-usa tr').each(function(){
                if ($(this).filter('[searchData *= ' + dataList + ']').length > 0 || dataList.length < 1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });

    });
</script>
<script>
    $(document).ready(function($){

        $('.listSearch-aus tr').each(function(){
            $(this).attr('searchData', $(this).text().toLowerCase());
        });
        $('.boxSearch-aus').on('keyup', function(){
        var dataList = $(this).val().toLowerCase();
            $('.listSearch-aus tr').each(function(){
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
