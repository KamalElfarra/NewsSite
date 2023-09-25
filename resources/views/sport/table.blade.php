@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@endsection
@section('page-header')

    @include('sport.modal')

@endsection
@section('content')



<table class="table" style = "margin-top:3%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">category</th>
      <th scope="col">photo</th>

      <th scope="col">icons</th>


    </tr>
  </thead>
  <tbody>

  <?php $i = 1; ?>
    @foreach($get_data as $data)

    <tr>

      <th scope="row">{{$i++}}</th>
      <td>{{ substr($data->title,0,30)}}</td>
      <td>{{ substr($data->content,0,20) }}</td>
      <td>{{$data->category->name}}</td>
      <td> <img src = "/{{$data->photo}}" width = "50" height = "50"> </td>

      <td>
        <a href = "/edit/sport/{{$data->id}}" target = "_blank"><i class="mdi mdi-account-edit" style = "width:50%;"></i> </a>    
        <a href = "/delete/sport/{{$data->id}}"><i class="mdi mdi-account-remove" style = "margin-right:-25%;"></i></a>  
      </td>


    </tr>

    @endforeach

  </tbody>
</table>

<div class="d-flex justify-content-center">
        {!! $get_data->links('pagination::bootstrap-4') !!}
</div>

@endsection
@section('js')
@endsection