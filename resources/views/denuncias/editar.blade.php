@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Denuncias</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('denuncias.update',$denuncia->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="denunciante">Denunciante</label>
                                   <input type="text" name="denunciante" class="form-control" value="{{ $denuncia->denunciante }}">
                                </div>
                            </div>
                           
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                    
                                <div class="form-floating">
                                <label for="fecha_denuncia">Fecha de Denuncia</label>
                                <textarea type="date" class="form-control" name="fecha_denuncia" >{{ $denuncia->fecha_denuncia }}</textarea>                                
                                
                                </div>
                                <div class="form-floating">
                                <label for="ubicacion">Ubicacion</label>
                                <textarea  class="form-control" name="ubicacion" >{{ $denuncia->ubicacion }}</textarea>                                
                                
                                </div>
                                <div class="form-floating">
                                <label for="audio">Audio</label>
                                <textarea  class="form-control" name="audio" style="height: 100px">{{ $denuncia->audio }}</textarea>                                
                                
                                </div>
                                <div class="form-floating">
                                <label for="audio">Foto</label>
                                <textarea  class="form-control" name="foto" style="height: 100px">{{ $denuncia->foto }}</textarea>  
                                                          
                                
                                </div>
                                <div class="form-floating">
                                <label for="video">Video</label>
                                <textarea  class="form-control" name="video" style="height: 100px">{{ $denuncia->video }}</textarea>                                
                                
                                </div>
                                
                                                               
                                <div class="form-floating">
                                <label for="victima_o_testigo">Victima_o_Testigo</label>
                                <textarea  class="form-control" name="victima_o_testigo" style="height: 100px">{{ $denuncia->victima_o_testigo }}</textarea>                                
                                
                                </div>
                                </div>
                                <div class="form-floating">
                                <label for="tipo">Tipo</label>
                                <textarea  class="form-control" name="tipo" style="height: 100px">{{ $denuncia->tipo }}</textarea>                                
                                
                                </div>
                                

                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection