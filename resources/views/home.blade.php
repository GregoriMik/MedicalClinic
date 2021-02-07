@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
    </div>
</div>
@endsection
