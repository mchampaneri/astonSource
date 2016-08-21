<!DOCTYPE html>
<html>
<head>
    <title>Aston | Login</title>
    @include('AstonLayouts::head')
    <style>
        .login-box{
            margin-top: 10%;
            padding: 40px;

        }

    </style>
</head>
<body class="aston-theme-color">

<div class="container">
    <div class="row">
        <div class="login-box col-sm-offset-8 col-sm-4">
            <div class="form-group text-center">
                <h4 class="aston-login">SIGN IN</h4>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="name@domain.domain"></input>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="name@domain.domain"></input>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-md btn-success" value="Sign In">

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group text-center">
                        <a href="{{url('/register')}}" class="btn btn-md btn-primary">Sing Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>