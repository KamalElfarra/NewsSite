@extends('layouts.master')
@section('css')

<link rel = "stylesheet" href = "\css\style.css">

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">إضافة</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ بيانات</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->

                <div class="card" style = "height:650px;">
						<div class="card  box-shadow-0">
							<div class="card-header">
								<h4 class="card-title mb-1">إضافة منشور</h4>
							</div>
							<div class="card-body pt-0">
								<form method = "POST" action = "/store/economy" enctype="multipart/form-data" class="form-horizontal" >
                                    @csrf
									<div class="form-group">
                                        <label style = "margin-right:2%;">العنوان</label>
										<input type="text" name = "title" class="form-control" id="inputName" placeholder="title" style = "width:31%; margin-right:1% ">
									</div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">القسم</label>
                                        <select id="inputState" class="form-control" name = "category_id" style = "width:100%; margin-right:-1%">
                                            <option selected>Choose...</option>
                                           
                                            @foreach($category as $data)
                                            <option value = "{{$data->id}}">{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                <div class="card-body" style = "margin-right:50%; margin-top:-15%; width:50%;">
                                    <div>
                                        <h6 class="card-title mb-1" style = "text-align:left; margin-left:35%;"></h6>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12 col-md-8">
                                            <input type="file" class="dropify" name = "photo" data-height="200" />
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <textarea  name = "content" placeholder="Tall textarea" cols="20" rows = "10" style = "width:75%; margin-right:-0%" > </textarea> <br>
                                </div>
                                <br> <br> <br>


                                <div>
                                    <input type="submit" class="btn btn-primary" value = "Send" style = "width:100px; margin-top:-5%;  margin-right:5%">
                                </div>


                                </form>
							</div>
						</div>
					</div>


                    <br> <br> <br>
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->

		<!--Modal-->
		<div class="modal" id="modalQuill">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header pd-20">
						<h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body pd-0">
						<div class="ql-wrapper ql-wrapper-modal ht-250">
							<div class="flex-1" id="quillEditorModal2">
								<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
								<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
							</div>
						</div>
					</div>
					<div class="modal-footer pd-20">
						<button class="btn btn-main-primary" type="button">Save changes</button> <button class="btn btn-light" type="button">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!--/Modal-->
@endsection
@section('js')

<script src="\js\main.js"></script> 
@endsection