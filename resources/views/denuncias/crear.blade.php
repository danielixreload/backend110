@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Denuncia</h3>
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

                    <form action="{{ route('denuncias.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">Denunciante</label>
                                   <input type="text" name="denunciante" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">                     
                                <div class="form-floating">
                                <label for="fecha_denuncia">Fecha_Denuncia</label>
                                <input type="date" name="fecha_denuncia" class="form-control">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-floating">
                                <label for="ubicacion">Ubicacion</label>
                                <input type="text" name="ubicacion" class="form-control">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-floating">
                                <label for="audio">Audio</label>
                                <input type="text" name="audio" class="form-control">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-floating">
                                <label for="foto">Foto</label>
                                <input type="text" name="foto" class="form-control">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-floating">
                                <label for="video">Video</label>
                                <input type="text" name="video" class="form-control">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-floating">
                                <label for="victima_o_testigo">Victima_o_Testigo</label>
                                <input type="text" name="victima_o_testigo" class="form-control">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-floating">
                                <label for="tipo">Tipo</label>
                                <input type="text" name="tipo" class="form-control">
                                </div>
                                
                            
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