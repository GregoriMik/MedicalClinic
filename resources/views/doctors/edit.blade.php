@extends('template')

@section('title')
    @if (isset($title))
    -{{$title}} 
    @endif
@endsection

@section('content')
    
<div class="container">
<h4><b>Edytacja lekarza</b></h4></br></br>

    <form action="{{ action('DoctorController@editStore')}}"role="form" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
        <input type="hidden" name="id" value="{{ $doctor->id }}"/>
        <div class="form-group">
            <label for="name">Nazwisko i imie</label><br>
            <input type="name" class="form-control"name="name" placeholder="Kowalski Jan"value="{{ $doctor-> name }}" />
        </div><br>

        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="text" class="form-control"name="email" placeholder="example@example.pl"value="{{ $doctor-> email }}" />
        </div><br>

        <div class="form-group">
            <label for="phone">Telefon</label><br>
            <input type="phone" class="form-control"name="phone" placeholder="+48 777 777 777"value="{{ $doctor-> phone }}" /> 
        </div><br>

        <div class="form-group">
            <label for="address">Adres</label><br>
            <input type="address" class="form-control"name="address" placeholder="ul.Zamkowa 1/2, 00-000 Warszawa" value="{{ $doctor-> address }}" />
        </div><br>

        <div class="form-group">
            <label for="pesel">Pesel</label><br>
            <input type="pesel" class="form-control"name="pesel" placeholder="88020411111"value="{{ $doctor-> pesel }}" />
        </div><br>

        

        <div class="form-group">
            <label for="pesel">Specializacja</label><br>
            @foreach ($specializations as $specialization)
                @if ($doctor->specializations->contains($specialization->id))
    <input type="checkbox"class=""name="specializations[]"value="{{ $specialization->id }}"checked/>{{ $specialization->name }}</br>
            @else 
    <input type="checkbox"class=""name="specializations[]"value="{{ $specialization->id }}"/>{{ $specialization->name }}
                @endif
            @endforeach
        </div>
        <div class="form-group">
            <label for="status">Status</label><br>
            @if ($doctor->status=='Active')
            Aktywny <input type="radio" class=""name="status" value="Active" checked="checked"/>
            Nieaktywny<input type="radio" class=""name="status" value="Inactive" />
            @else
            Aktywny<input type="radio" class=""name="status" value="Active" />
            Nieaktywny<input type="radio" class=""name="status" value="Inactive" checked="checked"/>
            @endif
        </div><br>
        
           

           <input type="submit" value="Zapisz"class="btn btn-primary"/><br><br>

    </form>

</div>
@endsection('content')


