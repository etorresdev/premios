@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Premios
                </div>

                <div class="card-body">
                    <table class="col-md-10">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Detalle</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($premios as $premio)
                                <tr>
                                    <td>
                                        {{-- <ahref="#" data-bs-toggle="modal" data-bs-target="#registrarModal"> --}}
                                            <div class="text" style="color: black">{{ $premio->nombre }}</div>

                                        {{-- </ahref=> --}}
                                    </td>
                                    <td>{{ $premio->detalle }}</td>
                                    <td>
                                        {{-- <a href="" data-bs-toggle="modal" data-bs-target="#registrarModal">Registrar</a> --}}
                                        <button data-bs-toggle="modal" data-bs-target="#registrarModal" class="btn .btn-lg btn-primary">Registrar</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <br>
                    <div class="">
                        {{ $premios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
