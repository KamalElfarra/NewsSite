<div class="my-auto">
						<div class="d-flex" style = "margin-top:3%;">
							<h4 class="content-title mb-0 my-auto">عرض الجدول</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ السياسة</span>
						</div>
</div>


<div class="modal" id="modaldemo1">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Add</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body" >
          <form method = "post" action = "/category/store">
									@csrf
										<div class="form-row">
											<div class="col-md-6 mb-3">
											<label for="validationDefault02" class = "last" style = "width:50%; margin-right:170%;">The Name</label>
											<input style = "margin-right:100%;"  type="text" class="form-control" name = "name" id="validationDefault02" required>
											</div>
										</div>
                    <div class="modal-footer">
                      <input class="btn ripple btn-primary" type="submit" value = "Send">
                      <input class="btn ripple btn-secondary" type="submit" data-dismiss="modal"  value = "Close">
                    </div>

          </form>
					</div>
				</div>
			</div>
</div>
