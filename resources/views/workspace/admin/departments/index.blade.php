@extends('AstonLayouts::main')

@include('workspace.admin.partials.header-menu')

@section('page-title')
    Aston | Admin/Departments
@stop


@section('page-content')

    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                 <h1 class="page-header">Add New Department</h1>
            </div>
            <div class="panel-body">
                <input type="text" placeholder="Name" class="form-control">
            </div>
        </div>
    </div>

@stop

@section('page-js')
    <script type="text/javascript">
    $(document).ready(function() {

        $('#summernote').summernote();
        $('.datatable').DataTable();
    });
    </script>
@stop