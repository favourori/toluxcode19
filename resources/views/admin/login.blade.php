
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body{
                background-color: #2a2e43;
            }
            .white{
                background-color: white;
            }

            .form-control{
                border-radius: 0em;
                height: 40px;
            }

            .btn{
                border-radius: 0em;
            }

            .error{
                color:red;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            
            <div class="row" style="display: flex; margin-top: 100px;">
                
                <div class="col-md-4 col-md-offset-4 white" style="margin: 0 auto;">
                    
                    <form action="{{route('admin.login')}}" method="POST" role="form" style="padding-top: 20px; padding-bottom: 50px;">
                        <h4>Login</h4><hr>
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="Email or password">
                            @if ($errors->has('email'))
                                <span class="error">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="error">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                       
                    
                        <button type="submit" class="btn btn-primary">&nbsp; Login &nbsp;</button>
                    </form>
                    
                </div>
                
            </div>
            
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
