@extends('template')

@section('title')
    @if (isset($title))
    -{{$title}} 
    @endif
@endsection

@section('content')
    
<div class="container">
<h3><b>Wizyty</b></h3></br></br>
{{-- Search Engine --}}
<form class="example" action="/action_page.php">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
{{-- Search Engine --}}
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pacjent</th>
                    <th scope="col">Lekarz</th>
                    <th scope="col">Data</th>

                </tr>
            </thead>
                        
            <tbody>
                @foreach ($visits as $visit)

                   
                        <tr>
                            <th scope="row">{{ $visit->id }}</th>
                            <td>{{ $visit->patient_id }}</a></td>
                            <td>{{ $visit->doctor_id }}</a></td>
                            <td>{{ $visit->date }}</a></td>

                        </tr>
                      
                @endforeach
            </tbody>
    </table>
</div>
@endsection