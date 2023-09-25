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
                                <form method="POST" action = "/category/update/{{$edit->id}}" >
                                            @csrf	
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{$edit->name}}" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input id = "btn" type="submit" value="إرسال" class="btn btn-primary">
                                            <div class="submitting"></div>
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