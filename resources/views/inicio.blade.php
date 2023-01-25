{{-- extender de la nuestro archivo --}}
@extends('welcome')
@section('content')

<div class="gradient-8">
    <!-- Jumbotron -->
    <div class="text-white py-2 py-sm-4 my-3">
        <div class="container text-center">
            <h1 class="display-6 mb-1"><span class="fw-semibold">Bienvenido a</span> - {{ config('app.name') }}</h1>
            <p class="fs-lg">{{ date('Y') }}</p>

            <div class="hstack flex-column flex-sm-row justify-content-sm-center gap-2 gap-sm-3 pt-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_scrollable" class="btn btn-white w-100 w-sm-auto fw-semibold shadow py-2 px-3">
                    <i class="ph-play mr-2"></i> <strong class="mx-2">Manual</strong>
                </a>
            </div>
        </div>
    </div>
    <!-- /jumbotron -->
</div>

<div class="container">
    <div class="row my-2">
        <div class="col-md-3">
            <a href="{{ route('nuevo-proyecto') }}" class="me-3">
                <div class="card card-body">
                    <div class="d-flex">
                        <img src="{{ asset('mas.png') }}" class="rounded" width="44" height="44" alt="">
                        <div class="flex-fill">
                            <h6 class="mb-0 text-dark mx-2">NUEVO PROYECTO</h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        @foreach ($proyectos as $pry)
        <div class="col-md-3">
            <div class="card card-body">
                <div class="d-flex">
                    <a href="#" class="me-3">
                        <img src="{{ asset('coche.png') }}" class="rounded" width="44" height="44" alt="">
                    </a>

                    <div class="flex-fill">
                        <h6 class="mb-0">{{ $pry->nombre??'N/A' }}</h6>
                        <span class="text-muted">{{ $pry->created_at??'' }}</span>
                    </div>

                    <div class="align-self-center ms-3">
                        <div class="dropdown">
                            <a href="#" class="text-body" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ph-list"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                                <a href="{{ route('principal',$pry->id) }}" class="dropdown-item">
                                    <i class="ph-eye me-2"></i>
                                    Ver
                                </a>

                                <a href="#" onclick="modalRenombrar(this)" data-id="{{ $pry->id }}" data-nombre="{{ $pry->nombre??'N/A' }}" class="dropdown-item">
                                    <i class="ph-pencil-simple me-2"></i>
                                    Renombrar
                                </a>
                                <a href="{{ route('eliminar',$pry->id) }}" class="dropdown-item">
                                    <i class="ph-trash me-2"></i>
                                    Eliminar
                                </a>
                                {{-- <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-share-network me-2"></i>
                                    Compartir
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
        @endforeach
        
    </div>
</div>

<!-- Scrollable modal -->
<div id="modal_scrollable" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Bienvenido a {{ config('app.name','') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="list-group">
                    <a href="{{ asset('pdf/INTRODUCCION.pdf') }}" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="ph-file-pdf mr-2 text-danger"></i> <strong class="mx-2">INTRODUCCION</strong>
                        <i class="ph-caret-right ms-auto"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="ph-file-pdf mr-2 text-danger"></i> <strong class="mx-2">NIVEL DE APRENDIZAJE UNO</strong>
                        <i class="ph-caret-right ms-auto"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="ph-file-pdf mr-2 text-danger"></i> <strong class="mx-2">NIVEL DE APRENDIZAJE DOS</strong>
                        <i class="ph-caret-right ms-auto"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="ph-file-pdf mr-2 text-danger"></i> <strong class="mx-2">NIVEL DE APRENDIZAJE TRES</strong>
                        <i class="ph-caret-right ms-auto"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="ph-file-pdf mr-2 text-danger"></i> <strong class="mx-2">CAMBIE SIN PROBLEMAS LOS NIVELES DE APRENDIZAJE</strong>
                        <i class="ph-caret-right ms-auto"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <i class="ph-file-pdf mr-2 text-danger"></i> <strong class="mx-2">COMÓ PUEDO EMPEZAR</strong>
                        <i class="ph-caret-right ms-auto"></i>
                    </a>

                    
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-black" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- /scrollable modal -->

@endsection