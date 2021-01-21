<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{  URL::asset('css/style.css')}}">
    <title>System obsługi @yield('title')</title>
  </head>
  <body>
    <div class="container">
        
            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('doctors/') }}">Lekarze</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Wizyty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Specjaliści</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#"></a>
                </li>
              </ul>



@yield('content')


    </div>
    <footer class="text-center">
        {{ $footerYear }}
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
<script src="{{ URL::asset('js/main.js ') }}"
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
