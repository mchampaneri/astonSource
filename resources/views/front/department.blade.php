<!DOCTYPE html>
<html style="height: 100%; width: 100%">
<head>
    <title>Aston | Home</title>
    @include('AstonLayouts::head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="height: 100%;width: 100%">
<div class="wrapper" style="height: 100%;width: 100%;">
    <div style="position: fixed; background-color: #fff; z-index: 1000; width: 100%; box-shadow: 2px 2px 3px rgba(0,0,0,0.3);">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div style="color: #000; font-size: 18px; padding-right: 30px;margin-top: 10px;" class="text-center">
                        ASTON
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="margin-top: 10px;">
                        <a href="#" style="color: #000; font-size: 18px; padding-right:20px; "> Home </a>
                        <a href="#" style="color: #000; font-size: 18px; padding-right:20px; "> Lectures </a>
                        <a href="#" style="color: #000; font-size: 18px; padding-right:20px; "> Blog</a>
                        <a href="#" class="pull-right" style="color: #000; font-size: 18px; padding-right:20px; "> Login <i
                                    class="fa fa-sign-in"></i></a>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <div style="width: 100%; padding-top: 80px;">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 col-md-offset-8">
                    <input type="text" class="form-control" placeholder="Search ...">
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1">
                    <img src="{{asset('images/noprofile.jpg')}}" alt="" height="auto" width="100%">
                    <h4>Mr Abcd Efghi</h4>
                </div>
                <div class="col-sm-2 col-sm-offset-1">
                    <img src="{{asset('images/noprofile.jpg')}}" alt="" height="auto" width="100%">
                    <h4>Mr Abcd Efghi</h4>
                </div>
                <div class="col-sm-2 col-sm-offset-1">
                    <img src="{{asset('images/noprofile.jpg')}}" alt="" height="auto" width="100%">
                    <h4>Mr Abcd Efghi</h4>
                </div>
                <div class="col-sm-2 col-sm-offset-1">
                    <img src="{{asset('images/noprofile.jpg')}}" alt="" height="auto" width="100%">
                    <h4>Mr Abcd Efghi</h4>
                </div>
                <div class="col-sm-2 col-sm-offset-1">
                    <img src="{{asset('images/noprofile.jpg')}}" alt="" height="auto" width="100%">
                    <h4>Mr Abcd Efghi</h4>
                </div>

                <div class="col-sm-2 col-sm-offset-1">
                    <img src="{{asset('images/noprofile.jpg')}}" alt="" height="auto" width="100%">
                    <h4>Mr Abcd Efghi</h4>
                </div>
                <div class="col-sm-2 col-sm-offset-1">
                    <img src="{{asset('images/noprofile.jpg')}}" alt="" height="auto" width="100%">
                    <h4>Mr Abcd Efghi</h4>
                </div>

            </div>
        </div>
    </div>
</div>
@include('AstonLayouts::foot')
</body>
</html>