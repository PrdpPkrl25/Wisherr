<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Wisherr') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css" rel="stylesheet">


</head>

<body>
<nav class="navbar  navbar-fixed-top navbar-expand-md " role="navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}"> <img height="80px" width="auto" src="{{asset('img/Wisherr.png')}}" alt="Website Logo"> </a>
            <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbar-collapse-main">
                <span class="sr-only">Navigation Toggler</span>
                <span class="navbar-toggler-icon "> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
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
        <h1>WISHERR</h1>
        <h3>Setup Message For Important Upcoming Event</h3>
        <a href="{{ route('login') }}" class="btn btn-default btn-lg">Start Creating</a>
    </div>
</div>

<div class="padding">
    <div class="container">
        <div class="row text-center">
            <h1>Want to know about us?</h1>
            <p class="lead"> You can now create event of your keen person and preset the message so you will never forget as we will send the pre set message on your behalf.</p>
            <p class="lead"> You can send the message at any number of time on the day of the event. Now You wont have to be the person who keep forgetting to wish or the one who wish late.</p>
        </div>
    </div>
</div>

<div class="padding">
    <div class="container">
        <div class="row text-center">
            <h1>Services:</h1>
           <ul class="benifit">
               <li> Create wish for many events like anniversay,birthday,new year etc. </li>
               <li> Send message for any no of time in a day. You can select the time. </li>
               <li> Edit your message from pre selected template </li>
               <li> Create your own message template or gift card and sell it in our store </li>
           </ul>
        </div>
    </div>
</div>
<div id="fixed">

</div>

<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-6">
            <h1>Contact Us:</h1>
            <p> Pradip Pokhrel<br>
                +9779864332324<br>
                wisherr.service@gmail.com<br>
                Kohakpur-11,Banke Nepal</p>
        </div>
        <div class="col-sm-6">
         <h3>Connect Us</h3>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
        </div>
    </div>
</footer>


</body>
</html>

