@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-dark table-striped table-hover">
            <thead class="">
                <tr>
                    <th>Fecha</th>
                    <th>Nº partido</th>
                    <th>Categoría</th>
                    <th>Equipo Local</th>
                    <th>Equipo visitante</th>
                    <th>Localidad</th>
                    <th>Principal</th>
                    <th>Auxiliar</th>
                    <th>Anotador</th>
                    <th>Cronometrador</th>
                    <th>24</th>
                </tr>
            </thead>
                <tbody>
                @foreach ($partidos as $partido)
                    <tr>
                    @foreach ($partido as $indice)
                        <td>{{ $indice }}</td>
                    @endforeach    
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
