@extends('layouts.HomeFundacion.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Mascotas Perdidas</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="controles Cont_serviciosVeterinarios">
                        <div>
                            <a class="btn btn-warning" href="#modalsCreatePerdidas">Nuevo</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="services">

                        @foreach($MascotasPerdidas as $MascotasPerdida)

                        <div class="cards">
                            <div class="cards1">
                                <div class="picture">
                                    <img src="{{ asset("storage/$MascotasPerdida->imagen_mascota") }}" alt="" />
                                </div>
                                <div class="description">
                                    <h1>{{ $MascotasPerdida->nombre_mascota }}</h1>
                                    <a style="display: none;">{{ $MascotasPerdida->id }}</a>
                                    <div class="opcionesAdmin">
                                        <a href="#modalsEditPerdidas{{ $MascotasPerdida }}"><img
                                                src="{{ asset('img/Home/edit.png') }}" alt="" /></a>
                                        <a href="#modalsPerdidasEliminar{{ $MascotasPerdida }}"><img src="{{ asset('img/Home/delete.png') }}"
                                                alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('HomeFundacion.MascotasPerdidas.editar')
                        @include('HomeFundacion.MascotasPerdidas.Eliminar')

                        <!-- <tr>
                                <td style="display: none;">{{ $MascotasPerdida->id }}</td>
                                <td>{{ $MascotasPerdida->nombre_mascota }}</td>
                                <td>{{ $MascotasPerdida->descripcion }}</td>
                                <td>{{ $MascotasPerdida->Especie->descripcion }}</td>
                                <td>{{ $MascotasPerdida->Raza->descripcion }}</td>
                                <td>{{ $MascotasPerdida->Color->descripcion }}</td>
                                <td>{{ $MascotasPerdida->Estado->descripcion }}</td>
                                <td><img src="{{ asset("storage/$MascotasPerdida->imagen_mascota") }}" width="70px" height="70px"></td>
                                <td>
                                    <form action="{{ route('MascotasPerdidas.destroy', $MascotasPerdida) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('MascotasPerdidas.edit', $MascotasPerdida) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" >Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        </table> -->
                        @endforeach

                        @include('HomeFundacion.MascotasPerdidas.crear')

                    </div>

                    <!-- Centramos la paginación a la derecha-->
                    <div class="pagination justify-content-end">
                        {!! $MascotasPerdidas->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection