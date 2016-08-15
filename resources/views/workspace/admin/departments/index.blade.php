@extends('AstonLayouts::main')

@include('workspace.admin.partials.header-menu')

@section('page-title')
    Aston | Admin/Departments
@stop


@section('page-content')
        Content Starts Here

        <textarea name=""  cols="30" rows="10" id="summernote" ></textarea>


@stop

@section('page-js')
    <script type="text/javascript">
    $(document).ready(function() {

        $('#summernote').summernote();
    });
    </script>
@stop