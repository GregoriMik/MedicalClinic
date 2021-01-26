@extends('template')

@section('title')
    @if (isset($title))
    -{{$title}} 
    @endif
@endsection

@section('content')
    

    <table class="table">
        <h3><b>Pacjenci</b></h3></br></br>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imię i Nazwisko</th>
                    <th scope="col">Adres</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefon</th>
                    
                </tr>
            </thead>
                        
            <tbody>
                @foreach ($patientsList as $patient)

                   
                        <tr>
                            <th scope="row">{{ $patient->id }}</th>
                            <td><a href="{{ URL::to('patients/' . $patient->id ) }}">{{ $patient->name }}</a></td>
                            <td>{{ $patient->email }}</td>
                            <td>{{ $patient->phone }}</td>
                        </tr>
                      
                @endforeach
            </tbody>
    </table>
   

@endsection


