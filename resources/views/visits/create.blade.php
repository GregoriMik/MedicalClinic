@extends('template')

@section('title')
    @if (isset($title))
    -{{$title}} 
    @endif
@endsection

@section('content')
    
<div class="container">
<h4><b>Dodawanie nowej wizyty</b></h4></br></br>

    <form action="{{ action('VisitController@store')}}"role="form" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
        
        <div class="form-group">
            <label for="name">Lekarz</label><br>
            <select name="doctor">
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}"> {{ $doctor->name }} </option>
                @endforeach
            </select>
        </div><br>
        
        <div class="form-group">
            <label for="name">Pacjent</label><br>
            <select name="patient">
                
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}"> {{ $patient->name }} </option>
                @endforeach
            </select>
        </div><br>
        
        <div class="form-group">
            <label for="date">Data wizyty</label><br>
            <input type="date" class="form-control"name="date" />
        </div><br>
        
        <input type="submit" value="Dodaj"class="btn btn-primary"/><br><br>

    </form>

</div>
@endsection('content')


