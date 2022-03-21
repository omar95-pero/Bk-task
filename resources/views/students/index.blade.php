@extends('layout')
@section('title')
Students
@endsection
@section('content')
    						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Studens View</h4>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addclientmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Student</a>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->
             <div class="modal fade"  id="addclientmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
                    </div>
				</div>
			</div>

@endsection
@section('scripts')
    <script>

    </script>
@endsection