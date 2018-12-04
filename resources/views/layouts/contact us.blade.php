<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>kazed</title>

  
   


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: red;
}



</style>
</head>
<body>
     
    </head>
   <body>
<nav class="navbar navbar">
    
        <div class="container">
                <span class="navbar-toggler-icon"></span>
                    <a class="nav-item nav-link active" href="#">Home</a>
                    <a href="/about us">About us</a>
                    <a href="/previous work">Previous work</a>
                    <a href="/equipment">Equipment</a>
                    <a href="/location">Location</a>
                    <a href="/enquires">Enquires</a>
                    <a href="/contact Us">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="content">
                <div class="title m-b-md">
                    Contact Us
                
            
        </div>
   
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

    </body>
</html>
