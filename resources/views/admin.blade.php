<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" defer></script>
</head>
<body>
    <x-nav_admin/>
    <div class="offcanvas offcanvas-start show my-mt" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Dashboard</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> --}}
        </div>
        <div class="offcanvas-body">
          <ul>
            <li>
              <a href="">Developers</a>
            </li>
          </ul>
        </div>
    </div> 
</body>
</html>