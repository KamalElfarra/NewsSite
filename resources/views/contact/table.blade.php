@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@endsection
@section('page-header')

    @include('contact.modal')



@endsection
@section('content')



<table class="table" style = "margin-top:3%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">notice</th>
      <th scope="col">image</th>
      <th scope="col">video</th>
      <th scope="col">icons</th>
      <th scope="col">download</th>



    </tr>
  </thead>
  <tbody>

  <?php $i = 1; ?>
    @foreach($get_all as $data)

    <tr>

      <th scope="row">{{$data->id}}</th>
      <td>{{ substr($data->title,0,30)}}</td>
      <td>{{ substr($data->content,0,20) }}</td>
      <td>{{$data->notice}}</td>

      <td>
        @if(is_file($data->file))
        <img src = "/{{ $data->file }}" width = "50" height = "50">
        @else
        <p>{{$data->file}}</p>
        @endif
      </td>  
      <td>

      @if(is_file($data->video))
        <video width="150" height="150" controls style = "margin-top:-10%">
              <source src="/{{ $data->video }}" type="video/mp4">
        </video>
      @else
      <p>{{$data->video}}</p>
      @endif
      </td>
      <td>
        <a href = "/edit/contact/{{$data->id}}" target = "_blank"><i class="mdi mdi-account-edit" style = "width:50%;"></i> </a>    
        <a href = "/delete/contact/{{$data->id}}"><i class="mdi mdi-account-remove" style = "margin-right:-25%;"></i></a>  
        <a href = "/info/contact/{{$data->id}}" target = "_blank"><i class="ti-info-alt" style = "margin-right:-12%;"></i></a>  
        
      </td>

      <td>

      @if(file_exists($data->file))
        <a href = "/download/image/contact/{{$data->id}}" ><i class="ti-image" style = "width:200px;"></i></a>          
      @endif

      @if(file_exists($data->video))
        <a href = "/download/video/contact/{{$data->id}}" ><i class=" ti-control-pause " style = "width:200px;"></i></a>  
      @endif

      </td>


    </tr>

    @endforeach

  </tbody>
</table>

<div class="d-flex justify-content-center">
        {!! $get_all->links('pagination::bootstrap-4') !!}
</div>

@endsection
@section('js')
@endsection