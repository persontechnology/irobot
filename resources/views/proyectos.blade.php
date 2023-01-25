@extends('welcome')
@section('content')
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

    
        <div class="bg-white">
            {{ $proyectos->links() }}
        </div>
    
    

</div>
@endsection