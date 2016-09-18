<!DOCTYPE html>
<html>
<head>
    <title>Aston | Login</title>
    @include('AstonLayouts::head')
    <style>
        .container{
            padding:30px;
        }
        .col-md-6:hover{
            background-color: rgba(100,100,100,0.5);
        }
    </style>
</head>
<body class="aston-theme-color">
    @include('front.layout.header')
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h4>Register As Student</h4>
                <div class="form-group">
                    <a href="{{route('register.student')}}" class="btn btn-lg btn-success">Register Now</a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <h4>Register As Faculty</h4>
                <div class="form-group">
                    <a href="{{route('register.faculty')}}" class="btn btn-lg btn-success">Register Now</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h4>ASTON 16</h4>
                <p>
                    Please, Do not try to register for wrong type of user.
                    It might cause troubles for you.
                </p>
            </div>
        </div>
    </div>
</body>
</html>