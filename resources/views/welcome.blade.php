<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Wisherr') }}</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/welcome/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar  fixed-top navbar-light navbar-expand-lg " role="navigation">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"> <img height="80px" width="auto" src="{{asset('img/Wisherr.png')}}" alt="Website Logo"> </a>
            <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbarcollapsemain" aria-controls="navbarcollapsemain" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="sr-only">Navigation Toggler</span>
                <span class="navbar-toggler-icon "> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarcollapsemain">
                <ul class="navbar-nav mr-auto">

                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>
            </div>
    </div>
</nav>

<div id="home">
    <div class="landing-text">
        <h1>WELCOME TO WISHERR</h1>
        <h3>Setup Message For Important Upcoming Event</h3>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Start Creating</a>
    </div>
</div>

<div class="padding">
    <div class="container">
        <div class="row text-center">
            <h2>What is Wisherr?</h2>
            <p class="lead">Are you a person who have trouble remembering the date?
                            Isn't it exciting that you have to worry one less thing
                            in your life. With wisherr, you can create upcoming event
                            like birthday, anniversary, holiday etc. and set the message
                            to send to any person on that day, we will send the message
                            on your behalf.</p>

        </div>
    </div>
</div>

<div class="padding">
    <div class="container">
        <div class="row text-center">
            <h2>Our Services:</h2>
           <ul class="benifit">
               <li> * Create wish for many events like anniversay, birthday, new year etc. </li>
               <li> * Send message for any number of time in a day. You can select the time. </li>
               <li> * Edit your message by choosing any template from our template store. </li>
               <li> * Create your own message template or gift card and sell it in our store. </li>
           </ul>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-6">
            <h2>Contact Us:</h2>
            <p> Pradip Pokhrel<br>
                +9779864332324<br>
                wisherr.service@gmail.com<br>
                Kohakpur-11,Banke Nepal</p>
        </div>
        <div class="col-sm-6">
         <h2>Connect Us</h2>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
        </div>
    </div>
    <div class="row">
        <p>Copyright © Wisherr 2020</p>
    </div>
</footer>


</body>
</html>

