@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
 h3{
    margin-right:70%;
 }
 #btn{
    margin-right:70%;
 }
 section{
    margin-left:-15%;
    margin-top:5%;
 }
 #upload{
    margin-right:90%;
 }
 #file{
    margin-right:70%;
 }
</style>


@endsection
@section('page-header')

<div class="my-auto">
        <div class="d-flex" style = "margin-top:3%;">
            <h4 class="content-title mb-0 my-auto">تحديث</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ البيانات</span>
        </div>
</div>

@endsection
@section('content')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets2/css/style.css">

	</head>
	<body>
    <div class = "card" style = "width:70%; margin-right:10%;">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div  class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">تحديث البيانات</h3>
									<div id="form-message-warning" class="mb-4"></div> 
									<form method="POST" action = "/update/sport/{{$edit->id}}" enctype="multipart/form-data" id="contactForm" name="contactForm">
                                            @csrf	
                                    <div class="row">
											<div class="col-md-6">
												<div class="form-group">
                                                    <label>Title</label>
													<input type="text" class="form-control" name="title" id="name" value="{{$edit->title}}" >
												</div>
											</div>

                                    <div class="form-group col-md-4">
                                        <label for="inputState">Category</label>
                                        <select id="inputState" class="form-control" name = "category_id" style = "width:230px; margin-right:-1%">                                           
                                            @foreach($all as $data)
                                                @if($data->name == 'الرياضة')
                                                 <option value = "{{$data->id}}" selected>{{$data->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="content" class="form-control" id="message" cols="30" rows="7" placeholder="Message">{{$edit->content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label id = "upload" for="exampleFormControlFile1">upload</label>
                                            <input name = "photo" id = "file" type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id = "btn" type="submit" value="Send Message" class="btn btn-primary">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
										</div>
									</form>
								</div>
							</div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
	<script src="assets2/js/jquery.min.js"></script>
  <script src="assets2/js/popper.js"></script>
  <script src="assets2/js/bootstrap.min.js"></script>
  <script src="assets2/js/jquery.validate.min.js"></script>
  <script src="assets2/js/main.js"></script>

	</body>
</html>





@endsection
@section('js')
@endsection