@extends('layouts.app')

@section('content')
    <div class="general-container">
        <section class="home-section">
            <div class="">

                @if (Session::has('mensaje'))
                    {{ Session::get('mensaje') }}
                @endif
                <div class="container-title">
                    <div class="back-icon"></div>
                    <h1>Empleados</h1>
                </div>
                <div class="container-actions">
                    <div class="container-actions-sections">
                    <div class="container-actions-delete-section">
                        <div class="delete-icon"></div>
                            <p class="text-subtitles">Borrar selección</p>
                    </div>
                    <div class="container-actions-delete-section">
                        <div class="download-icon"></div>
                            <p class="text-subtitles">Descargar datos</p>
                    </div>
                </div>

                    <a href="{{ url('empleado/create') }}" class="btn btn-success"><div class="add-icon"></div>Agregar</a>
                </div>

                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Nombres<br><input type="search" class="search" placeholder="Buscar"></th>
                                <th>Apellidos</th>
                                <th>Identificación</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            
                            @foreach ($empleados as $empleado)
                            <tr class="espacio"></tr>
                                <tr class="tr-data">
                                    <td scope="row">{{ $empleado->Nombres }}</td>
                                    <td>{{ $empleado->Apellidos }}</td>
                                    <td>{{ $empleado->Identificacion }}</td>
                                    <td>{{ $empleado->Telefono }}</td>
                                    <td>{{ $empleado->Ciudad }}</td>
                                    <td>{{ $empleado->Departamento }}</td>
                                    <td class="actions">
                                        <a href="{{ url('/empleado/' . $empleado->id . '/edit') }}"
                                            class=""><div class="btn btn-warning"></div></a>
                                        <form action="{{ url('/empleado/' . $empleado->id) }}" class="d-inline"
                                            method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <input class="btn btn-danger" type="submit"
                                                onclick="return confirm('¿Quieres borrar?')" value="">
                                        </form>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
