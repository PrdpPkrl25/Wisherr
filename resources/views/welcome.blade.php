@include('layouts.welcome-app')
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

