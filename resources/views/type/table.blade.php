@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@endsection
@section('page-header')

    @include('politic.modal')

@endsection
@section('content')



<table class="table" style = "margin-top:3%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">icons</th>


    </tr>
  </thead>
  <tbody>

    <?php $i = 1; ?>
    @foreach($type as $data)
    <tr>

      <th scope="row">{{$i++}}</th>
      <td>{{$data->name}}</td>
      <td>
        <a href = "/category/edit/" target = "_blank"><i class="mdi mdi-account-edit" style = "width:50%;"></i> </a>    
        <a href = "/category/delete/"><i class="mdi mdi-account-remove" style = "margin-right:-25%;"></i></a>  
      </td>

    </tr>

    @endforeach

  </tbody>
</table>


@endsection
@section('js')
@endsection