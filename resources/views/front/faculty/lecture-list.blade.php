@extends('front.layout.main')

@section('page-content')

    <div class="container">
        @include('front.layout.partial.facultyinfo')
        <hr>

        <div class="row">
            <div class="col-sm-12">
                <h3>{{$subject->name}}</h3>
            </div>
            <div class="col-sm-12 text-center">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Info</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $lectures as $lecture)
                        <tr>
                            <td>{{$lecture->title}}</td>
                            <td>{{$lecture->info}}</td>
                            <td> <a  class="btn btn-sm btn-primary"
                                        href="{{url('/faculty/'.$faculty->id.'/subject/'.$subject->id.'/lecture/'.$lecture->id)}}">
                                    Go
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </ul>
            </div>
        </div>
    </div>
@stop