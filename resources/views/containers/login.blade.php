<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Login</title>
    <style>
        .background{
            background-image: url('/images/login-bg.jpg');
            min-height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container{
            padding: 24px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            border-radius: 9px;
        }
        .main-wrapper {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .mt-2vh{
            margin-top: 2.5vh;
        }
        .center {
            text-align: center;
            font-size: 40px;
            font-weight: 700;
            padding-bottom: 16px;
            color: #03A9F4;
            text-shadow: -2px 2px hsla(0, 0%, 0%, 0.2);
        }
        .input-wrapper {
            margin-bottom: 16px;
        }
        .btn-login-wrapper {
            display: flex;
            justify-content: center;
        }
        input {
            width: 100%;
            padding: 1px 8px;
            border-radius: 2px;
            border: none;
            box-shadow: inset 0 1px 4px 0 hsla(0, 0%, 0%, 0.2);
            transition: 0.2s linear;
        }
        input:focus::placeholder {
            color: #fff;
        }
        input:hover::placeholder {
            color: #fff;
        }
        input:hover {
            background: #67cbf8;
        }
        input:focus {
            background: #67cbf8;
            outline: none;
        }
        label {
            font-size: 16px;
            font-weight: 400;
        }
        .btn-login {
            border: 1px solid #03A9F4;
            border-radius: 2px;
            background: #03A9F4;
            color: #fff;
            width: 100%;
            font-size: 18px;
            box-shadow: 0 1px 4px 0 hsla(0, 0%, 0%, 0.4);
            transition: 0.2s linear;
        }
        .btn-login:hover {
            background: #fff;
            cursor: pointer;
            color: #03A9F4;
            box-shadow: 0 2px 8px 0 hsla(0, 0%, 0%, 0.4);
        }
    </style>
</head>
<body class="background">
    <div class="login-container bg-white col-lg-4 col-12 mt-2vh mr-3 ml-3">
        <div class="center">Sponsor A Child</div>
        <div class="main-wrapper">
            <div>
                <form action="/backend/postlogin" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row input-wrapper">
                                <div class="col-lg-3">
                                    <label>Username:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input id="username" name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row input-wrapper">
                                <div class="col-lg-3">
                                    <label>Password:</label>
                                </div>
                                <div class="col-lg-9">
                                    <input id="password" type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="btn-login-wrapper">
                                <button class="btn-login">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>