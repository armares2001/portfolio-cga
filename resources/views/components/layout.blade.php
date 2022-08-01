<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" defer></script>
    <title>Document</title>
</head>
<body>
    {{-- <x-nav></x-nav> --}}
    {{-- {{$slot}} --}}
    <div class="myContainer">
        <div class="navbar">
            <div class="menu">
                <h3 class="logo">Brand<span>Name</span></h3>
                <div class="menu-2">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    
        <div class="main-container">
            <div class="main">
                <header class="{{$itemid}}">
                    <div class="overlay">
                        <div class="inner">
                            {{$slot}}
                            {{-- <h2 class="title">abc</h2>
                            <br>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, assumenda? Alias quos porro maiores. Id beatae deserunt atque facere? Quisquam possimus corporis eaque recusandae, porro repellat maxime sequi quod explicabo?
                            </p>
                            <br>
                            <a href="#" class="myBtn">read more</a> --}}
                        </div>
                    </div>
                    {{-- <div>ciao</div> --}}
                </header>
            </div>
        </div>
        <div class="myShadow one"></div>
        <div class="myShadow two"></div>
        <div class="links">
            <ul>
                <li>
                    <a href="#" class="scale" style="--i:0.5s">Home</a>
                </li>
                <li>
                    <a href="#" class="scale" style="--i:0.10s">Service</a>
                </li>
                <li>
                    <a href="#" class="scale" style="--i:0.15s">Portfolio</a>
                </li>
                <li>
                    <a href="#" class="scale" style="--i:0.20s">Testimonials</a>
                </li>
                <li>
                    <a href="#" class="scale" style="--i:0.25s">About</a>
                </li>
                <li>
                    <a href="#" class="scale" style="--i:0.30s">Contact</a>
                </li>
    
            </ul>
        </div>
    </div>
</body>
</html>