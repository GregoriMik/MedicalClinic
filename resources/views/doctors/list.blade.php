@extends('template')

@section('title')
    @if (isset($title))
    -{{$title}} 
    @endif
@endsection

@section('content')
    
{{-- Search Engine --}}
<form class="example" action="#">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
{{-- Search Engine --}}
<a href="{{ URL::to('doctors/create') }}">Dodawanie nowego lekarza</a>

    <table class="table">
        <h3><b>Lekarze</b></h3></br></br>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imię i Nazwisko</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Specializacje</th>
                    <th scope="col">Adres przychodni</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operacje</th>
                </tr>
            </thead>
                        
            <tbody>
                @foreach ($doctorsList as $doctor)

                   
                        <tr>
                            <th scope="row">{{ $doctor->id }}</th>
                            <td><a href="{{ URL::to('doctors/' . $doctor->id ) }}">{{ $doctor->name }}</a></td>
                            <td>{{ $doctor->email }}</td>
                            <td>{{ $doctor->phone }}</td>
                            <td>
                                @foreach ($doctor->specializations as $specialization)
                                <ul>   
                                    <li>{{ $specialization->name}}</li>
                                </ul>
                                @endforeach    
                            </td>
                            <td>{{ $doctor->address }}</td>
                            <td>{{ $doctor->status }}</td>
                            <td><a href="{{ URL::to('doctors/delete/' . $doctor->id) }}" onclick="return confirm('Czy na pewno usunąć?')">Usuń lekarza</a></td>
                            <td><a href="{{ URL::to('doctors/edit/' . $doctor->id) }}" onclick="return confirm('Czy na pewno edytować?')">Edycja Lekarza</a></td>
                        </tr>
                      
                @endforeach
            </tbody>
    </table>
   
    @foreach ($statistics as $stat)
        @if ($stat->status == 'Active')
            Liczba lekarzy dostępnych:{{ $stat->user_count }}
        @endif <br>
        @if ($stat->status == 'Inactive')
        Liczba lekarzy niedostępnych: {{ $stat->user_count }}
        @endif
        
    @endforeach
@endsection


