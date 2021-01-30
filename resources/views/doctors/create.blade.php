@extends('template')

@section('title')
    @if (isset($title))
    -{{$title}} 
    @endif
@endsection

@section('content')
    
<div class="container">
<h4><b>Dodawanie nowego lekarza</b></h4></br></br>

    <form action="{{ action('DoctorController@store')}}"role="form" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
        
        <div class="form-group">
            <label for="name">Nazwisko i imie</label><br>
            <input type="name" class="form-control"name="name" placeholder="Kowalski Jan" />
        </div><br>

        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="text" class="form-control"name="email" placeholder="example@example.pl" />
        </div><br>

        <div class="form-group">
            <label for="password">Hasło</label><br>
            <input type="password" class="form-control"name="password"  />
        </div><br>

       

        <div class="form-group">
            <label for="phone">Telefon</label><br>
            <input type="phone" class="form-control"name="phone" placeholder="+48 777 777 777" />
        </div><br>

        <div class="form-group">
            <label for="address">Adres</label><br>
            <input type="address" class="form-control"name="address" placeholder="ul.Zamkowa 1/2, 00-000 Warszawa" />
        </div><br>

        <div class="form-group">
            <label for="pesel">Pesel</label><br>
            <input type="pesel" class="form-control"name="pesel" placeholder="88020411111" />
        </div><br>

        

        <div class="form-group">
            <label for="pesel">Specializacja</label><br>
            @foreach ($specializations as $specialization)
            <input type="checkbox" class="" name="specializations[]" checked="false"value="{{ $specialization->id }}"><ol>{{ $specialization->name }}</ol>
            {{-- <input type="checkbox" class="form-control"name="specializations[]" value="{{ $specialization->id }}"/> {{ $specialization->name }} --}}
            @endforeach
        </div>
            <input type="hidden" name="images" value="newUser.png"/>
        
           <input type="hidden" name="status" value="Active"/>

           <input type="submit" value="Dodaj"class="btn btn-primary"/><br><br>

    </form>

</div>
@endsection('content')


