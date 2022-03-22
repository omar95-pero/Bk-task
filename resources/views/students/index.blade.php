@extends('layout')
@section('title')
   Students
@endsection
@section('content')
    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Students View</h4>
        </div>
        <div class="page-rightheader ms-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                <div class="btn-list">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New Student</button>							</div>
            </div>
        </div>
    </div>
    {{-- ------------------------------------------ --}}
    <table id="Datatable" class="display  w-100">
        <thead>
        <tr>
            <th>
                <input id="checkAll" type='checkbox' class='check-all form-check-input' >
            </th>
            <th> ID</th>
            <th> Name</th>
            <th> School Id</th>
            <th> Order</th>
            <th> Actions </th>
        </tr>


        </thead>
        <tbody>

        </tbody>

    </table>
    {{-- ------------------------------------------ --}}

    <!-- BASIC MODAL -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                    <form id="Form" action="{{ route('students.store') }}" method="POST" >
                        @csrf

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Student Name</label>
                            <input type="text" name="name" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">School Id</label>
                             <select name="school_id" class="form-select" aria-label="Default select example">
                                 <option label="Select Country" disabled selected>Select School</option>
                                 @foreach ($schools as $school)
                                   <option value="{{ $school->id }}">{{ $school->name }}</option>
                                 @endforeach

                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="save"  form="Form" type="submit" class="btn btn-primary">{{__('app.Save')}}    </button>
                    <button data-bs-dismiss="modal" type="button" class="btn btn-danger">{{__('app.cancel')}}  </button>
                </div>
            </div>
        </div>
    </div>
    <!-- New Project Modal -->


@endsection
@section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
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
            "ajax": "{{ route('students.index') }}",
            "columns": [{
                "data": "check_all",
                orderable: false,
                searchable: false
            },
                {
                    "data": "id",
                    orderable: false,
                    searchable: false
                },
                {
                    "data": "name",
                    orderable: false,
                    searchable: true
                },
                {
                    "data": "school_id",
                    orderable: false,
                    searchable: true
                },
                {
                    "data": "order",
                    orderable: false,
                    searchable: true
                },
                {
                    "data": "actions",
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
            order: [1, 'asc'],
        });

        /*======================================================*/
        /*======================================================*/
        /*====================Form Submit=======================*/
        /*======================================================*/
        /*======================================================*/



        $(document).on('submit','form#Form',function(e) {

            e.preventDefault();
            var myForm = $("#Form")[0]
            var formData = new FormData(myForm)
            var url = $('#Form').attr('action');
            $.ajax({
                url:url,
                type: 'POST',
                data: formData,
                beforeSend: function(){
                    $('.loader-ajax').show()
                },
                complete: function(){

                },
                success: function (data) {
                    console.log(data)
                    window.setTimeout(function() {
                        $('.loader-ajax').hide()
                        $('#exampleModal').modal('hide')
                        cuteToast({
                            type: "success", // or 'info', 'error', 'warning'
                            message: "operation Completed successfully",
                            timer: 3000
                        })

                    }, 1000);
                    datatable_selector.draw();
                },
                error: function (data) {
               console.log(data)
                    var errors = $.parseJSON(data.responseText);

                    $.each(errors, function (key, value) {
                        if ($.isPlainObject(value)) {
                            $.each(value, function (key, value) {
                                cuteToast({
                                    type: "error", // or 'info', 'error', 'warning'
                                    message: value,
                                    timer: 3000
                                });

                            });

                        } else {

                        }
                    });
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });

        /*======================================================*/
        /*======================================================*/
        /*====================Edit=======================*/
        /*======================================================*/
        /*======================================================*/


        $(document).on('click','.editButton',function (e) {
            e.preventDefault()
            var id = $(this).attr('id');

            var url = '{{route('students.edit',":id")}}';
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                type: 'GET',
                beforeSend: function(){

                    $('.loader-ajax').show()
                },
                success: function(data){
                    console.log(data)
                    window.setTimeout(function() {

                        $('.loader-ajax').hide()
                        $('#modal-body').empty();
                        $('#modal-body').html(data.html);
                        $('#exampleModalLabel').empty();
                        $('#exampleModalLabel').html('Edit School');
                    }, 10);
                },
                error: function(data) {
                    console.log(data)
                    $('.loader-ajax').hide()
                    $('#form-for-addOrDelete').html('<h3 class="text-center">{{__("app.You do not have the authority to do this")}}</h3>')
                    cuteToast({
                        type: "error", // or 'info', 'error', 'warning'
                        message: "{{__("app.You do not have the authority to do this")}}",
                        timer: 3000
                    });

                }
            });

        });



        $(document).on('click', '#checkAll', function(event) {
            event.preventDefault();
            var check = true;
            $('.check_all:checked').each(function() {
                check = false;
            });
            $('.check_all').prop('checked', check);

        });
        /*======================================================*/
        /*======================================================*/
        /*====================Delete Single Row=================*/
        /*======================================================*/
        /*======================================================*/


        $(document).on('click', '.delete', function () {
            var id = $(this).attr('id');
            Swal.fire({
                title: "{{__('app.Are you sure to complete Operation?')}}",
                text: "{{__("app.You can't undo after that")}}",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#ff675e',
                confirmButtonText: "{{__('app.Accept')}}",
                cancelButtonText: "{{__('app.cancel')}}",
                okButtonText: "{{__('app.Accept')}}",
                closeOnConfirm: false
            }).then((result) => {
                console.log(result)
                if (result.value) {
                    var url = '{{ route("schools.destroy", ":id") }}';
                    url = url.replace(':id', id);
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {id: id},
                        success: function (data) {
                            cuteToast({
                                type: "success", // or 'info', 'error', 'warning'
                                message: "{{__('app.operation Completed successfully')}}",
                                timer: 3000
                            });
                            datatable_selector.draw();
                        },error: function(data) {
                            console.log(data)
                            swal.close()
                            cuteToast({
                                type: "error", // or 'info', 'error', 'warning'
                                message: "{{__("app.You do not have the authority to do this")}}",
                                timer: 3000
                            });
                        }

                    });
                }
            });

        });


    </script>
@endsection
