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
            <div class="form-row">
                <div class="btn">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                </div>
              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Search...">
              
            </div>
         </div>
        <table id="mytable" class="table table-dark">
           <thead>
               <th>Country</th>
               <th>Total Cases</th>
               <th>Total Recovered</th>
               <th>Total Death</th>
           </thead>
           <tbody>
               <tr>
                   <td>Zimbabwe</td>
                   <td>2000</td>
                   <td>0</td>
                   <td>0</td>
               </tr>
               <tr>
                <td>Zimbabwe</td>
                <td>2000</td>
                <td>0</td>
                <td>0</td>
            </tr>
               
           </tbody>
        </table>

        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#"></a></li>
            <li class="page-item"><a class="page-link" href="#"></a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

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
            <div class="form-row">
                <div class="btn">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                </div>
              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Search...">
              
            </div>
         </div>
        <table id="mytable" class="table table-dark">
           <thead>
               <th>Country</th>
               <th>Total Cases</th>
               <th>Total Recovered</th>
               <th>Total Death</th>
           </thead>
           <tbody>
               <tr>
                   <td>Zimbabwe</td>
                   <td>2000</td>
                   <td>0</td>
                   <td>0</td>
               </tr>
               <tr>
                <td>Zimbabwe</td>
                <td>2000</td>
                <td>0</td>
                <td>0</td>
            </tr>
               
           </tbody>
        </table>

        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#"></a></li>
            <li class="page-item"><a class="page-link" href="#"></a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

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
            <div class="form-row">
                <div class="btn">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                </div>
              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Search...">
              
            </div>
         </div>
        <table id="mytable" class="table table-dark">
           <thead>
               <th>Country</th>
               <th>Total Cases</th>
               <th>Total Recovered</th>
               <th>Total Death</th>
           </thead>
           <tbody>
               <tr>
                   <td>Zimbabwe</td>
                   <td>2000</td>
                   <td>0</td>
                   <td>0</td>
               </tr>
               <tr>
                <td>Zimbabwe</td>
                <td>2000</td>
                <td>0</td>
                <td>0</td>
            </tr>
               
           </tbody>
        </table>

        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#"></a></li>
            <li class="page-item"><a class="page-link" href="#"></a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

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
            <div class="form-row">
                <div class="btn">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>
                </div>
              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Search...">
              
            </div>
         </div>
        <table id="mytable" class="table table-dark">
           <thead>
               <th>Country</th>
               <th>Total Cases</th>
               <th>Total Recovered</th>
               <th>Total Death</th>
           </thead>
           <tbody>
               <tr>
                   <td>Zimbabwe</td>
                   <td>2000</td>
                   <td>0</td>
                   <td>0</td>
               </tr>
               <tr>
                <td>Zimbabwe</td>
                <td>2000</td>
                <td>0</td>
                <td>0</td>
            </tr>
               
           </tbody>
        </table>

        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#"></a></li>
            <li class="page-item"><a class="page-link" href="#"></a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>

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








    
@endsection