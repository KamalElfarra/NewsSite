@extends('layouts.master')
@section('css')

<link rel = "stylesheet" href = "\css\style.css">

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">القسم</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ إضافة قسم</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->

                <div class="card" style = "height:50px;">
						<div class="card  box-shadow-0">
							<div class="card-header">
							</div>
							<div class="card-body pt-0">
								<form method = "POST" action = "/store/type" class="form-horizontal" >
                                    @csrf
									<div class="form-group">
                                        <label style = "margin-right:2%;">الإسم</label>
										<input type="text" name = "name" class="form-control" id="inputName" placeholder="الإسم" style = "width:31%; margin-right:1% ">
									</div>

                                <div>
                                    <input type="submit" class="btn btn-primary" value = "إرسال" style = "width:100px;  margin-right:2%">
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
