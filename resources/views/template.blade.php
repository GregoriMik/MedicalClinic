<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{  URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>System obsługi @yield('title')</title>
  </head>
  <body>
    <div class="container">
        <div>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('doctors/') }}">Lekarze</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('visits/') }}">Wizyty</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('specializations/') }}">Specializacje</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('patients/') }}">Pacjenci</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ URL::to('home/') }}">Panel Logowania @if (isset($name))
                    {{ Auth::user()->name }}
                  @endif</a>
                </li>
              </ul>
              
              

@yield('content')


    </div>
    <footer class="text-center">
      @if (isset($footerYear))
      {{ $footerYear }}
      @endif
        
    </footer>
    <style>
      body {
        font-family: Arial;
      }
      
      * {
        box-sizing: border-box;
      }
      
      form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
      }
      
      form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
      }
      
      form.example button:hover {
        background: #0b7dda;
      }
      
      form.example::after {
        content: "";
        clear: both;
        display: table;
      }
      </style>
    <!-- Optional JavaScript; choose one of the two! -->
<script src="{{ URL::asset('js/main.js ') }}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
