@extends('template')

@section('title')
    @if (isset($title))
    -{{$title}} 
    @endif
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <ul>{{ $patient->name }}</ul>
            {{-- <img src="{{ $patient->images }}" alt="Italian Trulli"> --}}
            {{-- <img src="{{  URL::asset('images/1.jpg')}}"> alt="#"> --}}
            {{-- <a href="{{ URL::to('patients/' . $patient->id ) }}"> TO POPRAWNIE DZIAŁA --}}
            <div id="images">
                <img src="{{URL::asset('images/'. $patient->images) }}">
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>Imię i Nazwisko:</td>
                    <td>{{ $patient->name }}</td>
                </tr>

                <tr>
                    <td>Pesel:</td>
                    <td>{{ $patient->pesel }}</td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td>{{ $patient->email }}</td>
                </tr>

                <tr>
                    <td>Telefon:</td>
                    <td>{{ $patient->phone }}</td>
                </tr>

                <tr>
                    <td>Adres:</td>
                    <td>{{ $patient->address }}</td>
                </tr>

               
            </table>
        </div>
    </div>
</div>

@endsection


