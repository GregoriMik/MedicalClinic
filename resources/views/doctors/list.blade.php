@extends('template')

@section('title'){{$title}}
    
@endsection

@section('content')
    

    <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imię i Nazwisko</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Adres</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
                        
            <tbody>
                @foreach ($doctorsList as $doctor)
                    <tr>
                        <th scope="row">{{ $doctor['id'] }}</th>
                        <td>{{ $doctor['firstname'] }}{{ $doctor['lastname'] }}</td>
                        <td>{{ $doctor['email'] }}</td>
                        <td>{{ $doctor['phone'] }}</td>
                        <td>{{ $doctor['address'] }}</td>
                        <td>{{ $doctor['status'] }}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
@endsection


