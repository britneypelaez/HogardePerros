@extends('layouts.HomeFundacion.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Certificados</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <a class="btn btn-warning" href="{{ route('Certificados.create')}}">Nuevo</a>
                        <table class="table table-striped mt-2 text-center">
                            <thead style="background-color: #e1986e;">
                                <th style="display: none;">ID</th>
                                <th style="color: #fff;">Nombre</th>
                                <th style="color: #fff;">Identificación</th>
                                <th style="color: #fff;">Fecha</th>
                                <th style="color: #fff;">Monto</th>
                                <th style="color: #fff;">Documento</th>
                                <th style="color: #fff;">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach($certificados as $certificado)
                                <tr>
                                    <td style="display: none;">{{ $certificado->certificado }}</td>
                                    <td>{{ $certificado->nombre }}</td>
                                    <td>{{ $certificado->identificacion }}</td>
                                    <td>{{ $certificado->fecha }}</td>
                                    <td>{{ $certificado->monto }}</td>
                                    <td><a href="{{env('APP_URL')}}/storage/document/certifications/{{ $certificado->documento }}">
                                        <img alt="image" src="{{ asset('storage/document/word.png') }}"  width="35px" height="35px">
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('Certificados.destroy', $certificado->certificados) }}" method="POST">
                                            @csrf
                                            <a class="btn btn-info" href="{{ route('Certificados.edit', $certificado->certificados) }}">Editar</a>
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" >Borrar</button>
                                        </form>
                                    </td>
    
                                </tr>
                                @endforeach


                            </tbody>
                        </table>

                        <!-- Centramos la paginación a la derecha-->
                        <div class="pagination justify-content-end">
                            {!! $certificados->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection