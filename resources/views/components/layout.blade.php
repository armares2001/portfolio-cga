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
                            <div class="margin">
                                {{$slot}}
                            </div>
                            {{-- <div class="footer"></div> --}}
                        </div>
                    </div>
                    <div class="container-footer">
                        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
                          <div class="col-md-4 d-flex align-items-center ms-3">
                            <span class="text-muted">© 2021 Company, Inc</span>
                          </div>

                          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                            <img src="./img/GitHub.webp" class="ms-3 me-3 rounded border" height="40px" width="40px" alt="GitHub" srcset="">
                            <img src="./img/gitlab.webp" class="ms-3 me-3" height="40px" width="40px" alt="GitLab" srcset="">
                          </ul>
                        </footer>
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
                @auth
                    <li>
                        <a href="{{route('developer.index')}}"  class="scale" style="--i:0.20s">MyArea</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="scale" style="--i:0.20s">logout</a>
                    </li>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <li>
                        <a href="{{route('login')}}"  class="scale" style="--i:0.20s">MyArea</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</body>
</html>
