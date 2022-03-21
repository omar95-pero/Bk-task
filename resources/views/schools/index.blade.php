@extends('layout')
@section('title')
Schools
@endsection
@section('content')
    						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Schools View</h4>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addclientmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New School</a>
									</div>
								</div>
							</div>
						</div>
						                        {{-- ------------------------------------------ --}}
                        <table id="Datatable" class="display  w-100">
                            <thead>
                                <tr>
                                    <th>
                                        <input id="checkAll" type='checkbox' class='check-all form-check-input '
                                            data-tablesaw-checkall>
                                    </th>
                                    <th> {{ __('app.ID') }}</th>
                                    <th> {{ __('app.Name') }}</th>
                                </tr>


                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                        {{-- ------------------------------------------ --}}

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

        let datatable_selector;
        datatable_selector = $('#Datatable').DataTable({
            dom: 'Bfrtip',
            responsive: 1,
            "processing": true,
            "lengthChange": true,
            "serverSide": true,
            "ordering": false,
            "searching": true,
            'iDisplayLength': 20,
            "ajax": "{{ route('schools.index') }}",
            "columns": [{
                    "data": "id",
                    orderable: false,
                    searchable: false
                },
                {
                    "data": "name",
                    orderable: false,
                    searchable: true
				}
            ],
            "language": {
                "sProcessing": "{{ __('admin.sProcessing') }}",
                "sLengthMenu": "{{ __('admin.sLengthMenu') }}",
                "sZeroRecords": "{{ __('admin.sZeroRecords') }}",
                "sInfo": "{{ __('admin.sInfo') }}",
                "sInfoEmpty": "{{ __('admin.sInfoEmpty') }}",
                "sInfoFiltered": "{{ __('admin.sInfoFiltered') }}",
                "sInfoPostFix": "",
                "sSearch": "{{ __('admin.sSearch') }}:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "{{ __('admin.sFirst') }}",
                    "sPrevious": "{{ __('admin.sPrevious') }}",
                    "sNext": "{{ __('admin.sNext') }}",
                    "sLast": "{{ __('admin.sLast') }}"
                }
            },
            order: [
                [2, "desc"]
            ],
        });

    </script>
@endsection