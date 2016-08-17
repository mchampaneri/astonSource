<!DOCTYPE html>
<html>
    <head>
        <title>Aston | Login</title>
        <style>
            *{
                box-sizing: border-box;
            }

            html,
            body{
                background-color: #fff;
                height: 100%;
                width: 100%;
                overflow: hidden;
                padding: 0;
                margin: 0;
            }

            h2.aston-login{
                color: rgb(42, 52, 70);
            }
            .left{
                top:0;
                left: 0;;
                margin: 0;
                padding: 0;
                height: 100%;
                width: 50%;
                position: absolute;
                background-color: rgb(42, 52, 70);
            }
            .top-left{
                position: absolute;
                top:0;
                left: 0;
                height: 20%;
                width: 20%;
                border-style: solid;
                border-color: #ababab transparent transparent #cbcbcb;
                border-width: 30px 30px 30px 30px;
            }
            .right{

                margin: 0;
                padding: 10%;
                height: 100%;
                width: 50%;
                top:0;
                right: 0;
                position: absolute;
                background-color: rgb(255, 255, 250);
            }
            .top-right{
                position: absolute;
                top:0;
                right: 0;
                height: 20%;
                width: 20%;
                border-style: solid;
                border-color: rgb(21, 30, 43) rgb(42, 52, 70) transparent  transparent ;
                border-width: 30px 30px 30px 30px;
            }

            .right p{
                text-align: justify;
            }
            .login-box{
                position: absolute;
                height: 50%;
                width: 30%;
                top:15%;
                left: 35%;
                padding: 20px 20px;
                background-color: #fff;
                border: 2px solid #dddddd;
                box-shadow: 3px 3px 3px rgba(150,50,50,0.4);
                transition: all 0.5s  ;
                z-index: 1000;
            }
            .footer{
                width: 100%;
                position: absolute;
                padding: 30px 0;
                bottom: 0;
                left:0;
                overflow-x: hidden;
            }
            .login-box:hover{

                border: 2px solid #eeeeee;
                box-shadow: 3px 3px 3px rgba(100,100,100,0.8);
            }
            .input{
                border: none;
                border-bottom: 2px solid #aaaaaa;
                margin: 20px 0;
                padding: 4px 5px;
                font-size: 15px;
                display: block;
                width: 100%;
            }

            .btn{
                border: 0;
                border-radius: 3px;
                width: 49%;
                box-shadow: 3px 3px 3px rgba(100,100,100,0.3);
            }
            .login-btn{
                padding: 10px 0;
                background-color: rgb(42, 52, 70) ;
                font-size: 15px;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="left">
            <div class="top-left"></div>
        </div>
        <div class="login-box">
            <h2 class="aston-login">SIGNIN</h2>
            <input type="text" class="input" placeholder="name@domain.domain"></input>
            <input type="text" class="input" placeholder="name@domain.domain"></input>

            <div class="footer">
                <input type="submit" value="Signin" class="btn login-btn">
                <input type="submit" value="Signup" class="btn login-btn">

            </div>
        </div>
        <div class="right">
            <div class="top-right"></div>
        </div>
    </body>
</html>