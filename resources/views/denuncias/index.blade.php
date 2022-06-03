@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Denuncias</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-denuncia')
                        <a class="btn btn-warning" href="{{ route('denuncias.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Denunciante</th>
                                    <th style="color:#fff;">Fecha de Denuncia</th>
                                    <th style="color:#fff;">Ubicacion</th>                                    
                                    <th style="color:#fff;">Audio</th> 
                                    <th style="color:#fff;">Foto</th> 
                                    <th style="color:#fff;">Video</th>
                                   
                                    <th style="color:#fff;">Victima_o_Testigo</th>  
                                    <th style="color:#fff;">Tipo</th> 
                                    <th style="color:#fff;">Acciones</th>  
                                
                              </thead>
                              <tbody>
                            @foreach ($denuncias as $denuncia)
                            <tr>
                                <td style="display: none;">{{ $denuncia->id }}</td>                                
                                <td>{{$denuncia->denunciante}}</td>
                               
                                <td>{{$denuncia->fecha_denuncia}}</td>
                                <td>{{$denuncia->ubicacion}}</td>
                                <td>{{$denuncia->audio}}</td>
                                <td>{{$denuncia->foto}}</td>
                                <td>{{$denuncia->video}}</td>
                                <td>{{$denuncia->victima_o_testigo}}</td>
                                <td>{{$denuncia->tipo}}</td>
                                
                                <td>
                                    <form action="{{ route('denuncias.destroy',$denuncia->id) }}" method="POST">                                        
                                        @can('editar-denuncia')
                                        <a class="btn btn-info" href="{{ route('denuncias.edit',$denuncia->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-denuncia')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $denuncias->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection