@extends('workspace.layout.main')

@include('workspace.faculty.partial.faculty_menu')

@include('workspace.faculty.hodtasks.page_menu')

@section('page-title')
    Department Subject | Aston
@stop

@section('page-content')
    <div class="container">
        <table class="table table-hover">
            <thead>
              <th>Subject</th>
              <th>Semester</th>
              <th>Action</th>
            </thead>
            <tbody>
            @if (isset($subjects) && sizeof($subjects) > 0)
              @foreach($subjects as $subjec)
                <tr>
                  <td>
                    {{ $subject->name }}
                  </td>
                  <td>
                    {{ $subject->sem}}
                  </td>
                  <td>
                    <div class="row">
                      <div class="col-md-6">
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Remove</a>
                      </div>
                    </div>
                  </td>
                </tr>
              @endforeach
            @endif
            </tbody>
        </table>
    </div>
@stop
