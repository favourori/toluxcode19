
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Bonbon' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    </head>
    <body>
        <div class="container" style="margin-top: 50px; text-align: center">
        <div class="row" style="padding: 0; margin: 0;">
            <div class="col-md-6 col-md-offset-3 text-center" style="border: 1.3px solid #cecece; padding: 0;">
                <h1 style="font-family: 'Bonbon'; font-size: bolder; margin-bottom: 15px; color: #ee2b47">OlX</h1>
                <h2>Hi {{$seller_name}}</h2>
                <p style="color: grey">
                    {{$user->firstname}} {{$user->lastname}} 
                    contacted you about this advert {{$advert->title}}
                    <img src="{{$advert->image[0]->image}}" class="img-responsive">
                </p>
                <br>
                <!-- <p style="color: grey">Thank you for registering on our platform</p> -->
                <br>
                <div style="background-color: #efefef; padding: 0;">
                    <h3 style="color: grey; font-size: 19px; padding-top: 10px;">Experience the best</h3>
                    <br>
                    <a href="#"><i style="color: grey; font-size: 20px; padding-right: 4px;" class="fa fa-facebook"></i></a>
                    <a href="#"><i style="color: grey; font-size: 20px; padding-right: 4px;" class="fa fa-twitter"></i></a>
                    <a href="#"><i style="color: grey; font-size: 20px; padding-right: 4px;" class="fa fa-instagram"></i></a>
                    <br><br>
                    <p style="color: grey;">
                        P.O.Box 6543 33 Iweka Road Onitsha, Anambra state Nigeria
                    </p>
                    <p style="color: grey;">
                        Visit us at <a href="{{url('')}}">{{env('APP_NAME')}}</a>
                    </p>
                    <br>
                </div>
            </div>
        </div>
            
        </div>

        <!-- jQuery -->
        <script src="{{asset('js/jquery-min.js')}}"></script>
        <!-- Bootstrap JavaScript -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>