@extends('template')

@section('title')
    @if (isset($title))
    -{{$title}} 
    @endif
@endsection

@section('content')
    
<div class="container">
<h4><b>Dodawanie nowej specializacji</b></h4></br></br>

    <form action="{{ action('SpecializationController@store')}}"role="form" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
        <div class="form-group">
            <label for="name">Nazwa specializacji</label><br>
            <input type="text" class="form-control"name="name" />
        </div><br>
        <input type="submit" value="Dodaj"class="btn btn-primary"/><br><br>

    </form>

</div>
@endsection('content')


