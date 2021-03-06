@extends('template')

@section('title')
    @if (isset($title))
    -{{$title}} 
    @endif
@endsection

@section('content')
    
<div class="container">
<h3><b>Specializacje</b></h3></br></br>
{{-- Search Engine --}}
<form class="example" action="#">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
{{-- Search Engine --}}
<a href="{{ URL::to('specializations/create') }}">Dodawanie nowej specializacji</a>

    <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa</th>

                </tr>
            </thead>
                        
            <tbody>
                @foreach ($specializationsList as $specialization)

                   
                        <tr>
                            <th scope="row">{{ $specialization->id }}</th>
                            <td><a href="{{ URL::to('doctors/specializations/' . $specialization->id) }}">{{ $specialization->name }}</a></td>

                        </tr>
                      
                @endforeach
            </tbody>
    </table>
</div>
@endsection


