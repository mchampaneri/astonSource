@extends('AstonLayouts::templates.resource')


@section('page-title')
    Aston
@stop


@section('page-heading')
    Assignments
@stop

@section('page-buttons')
    <a href="{{route('messages.create')}}" class="btn btn-default">Add Result</a>
@stop

@section('page-body')
    <div class="row">
        <div class="col-md-8">
            <form action="{{route('messages.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="name" class="control-label">To</label>
                        </div>
                        <div class="col-md-9">
                            <select name="receiver_id"   class="form-control aston-select2">
                                @foreach($persons as $person)
                                    <option value="{{$person->id}}">{{App\User::Name($person->id)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1">
                            <label for="title" class="control-label">Subject</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1">
                            <label for="message" class="control-label">Message</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="message" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-1">
                            <label for="">Result Snap</label>
                        </div>
                        <div class="col-md-9">
                            <input type="file" name="attachment" class="form-control aston-image" >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-11">
                            <input type="submit" value="Save" class="btn btn-sm btn-success pull-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop