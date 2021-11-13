<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">
    <title>Document</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid ">
          <a class="navbar-brand" href="{{ route('/') }}">Activity IPT</a>
          <div class="collapse navbar-collapse d-flex align-items-center justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories') }}">Categories</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('units') }}">Units</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('merchandises') }}">Merchandises</a>
                </li>
          </div>
        </div>
      </nav>

    @yield('content')




</body>
</html>
