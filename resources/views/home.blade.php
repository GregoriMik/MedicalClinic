<<<<<<< HEAD
@extends('layouts.app')
=======
@extends('template')
>>>>>>> 193e2dd51ae18a60338241b2ea77fbf3e1124cfe

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<<<<<<< HEAD
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
                </div>
            </div>
=======
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
>>>>>>> 193e2dd51ae18a60338241b2ea77fbf3e1124cfe
    </div>
</div>
@endsection
