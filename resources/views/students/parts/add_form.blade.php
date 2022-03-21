			<!-- Add New Client Modal -->

						<div class="modal-header">
							<h5 class="modal-title">Add New Client</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client ID</label>
										<input class="form-control" type="text" placeholder="Enter Number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client Name</label>
										<input class="form-control" type="text" placeholder="Enter Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Email Address</label>
										<input class="form-control" type="text" placeholder="Enter Email Address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" type="password" placeholder="Enter Password">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Phone</label>
										<input class="form-control" type="text" placeholder="Enter PhoneNumber">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">URL</label>
										<input class="form-control" type="text" placeholder="Enter Website eg:https://">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">City</label>
										<input class="form-control" type="text" placeholder="Enter City">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">State</label>
										<input class="form-control" type="text" placeholder="Enter State">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">ZIP Code</label>
										<input class="form-control" type="text" placeholder="Enter ZIP Code">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Country</label>
										<select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Country">
											<option label="Select Country"></option>
											<option value="1">Germany</option>
											<option value="3">Canada</option>
											<option value="4">Usa</option>
											<option value="5">Afghanistan</option>
											<option value="6">Albania</option>
											<option value="7">China</option>
											<option value="8">Denmark</option>
											<option value="9">Finland</option>
											<option value="10">India</option>
											<option value="11">Kiribati</option>
											<option value="12">Kuwait</option>
											<option value="13">Mexico</option>
											<option value="14">Pakistan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Address</label>
								<textarea rows="3" class="form-control" placeholder="Address1"></textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Upload Image:</label>
								<div class="form-group">
								   <label for="form-label" class="form-label"></label>
									<input class="form-control" type="file">
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 me-5">Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Active</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">InActive</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success" onclick="not1()">Submit</button>
						</div>

			<!-- Add New Client Modal -->
