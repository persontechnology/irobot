@extends('main')
@section('content')
<section id="banner-aboutPage">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <!--Banner Content-->
                <div id="banner-content-aboutPage" class="text-center">
                    <!--Banner Body Content-->
                    <div class="banner-body-aboutPage">
                        <h2>Listado de proyectos</h2>
                        <h6><a href="{{ url('/') }}">Inicio</a> / Listado de proyectos</h6>
                    </div>
                </div>
                <!--Banner Content-->
            </div>
        </div>
    </div>
</section>

<section id="blog" class="section-wrapper">
    <div class="container">
        <div class="row">
            <!--Team Member 01-->
            @foreach ($proyectos as $pry)
                
            
            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                <div class="team-members team-member1">
                    <div class="team-member-overlay">
                        <ul class="social-list">
                            <li><a href="{{ route('principal',$pry->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            <li><a href="#" onclick="modalRenombrar(this)" data-id="{{ $pry->id }}" data-nombre="{{ $pry->nombre??'N/A' }}"><i class="fa fa-pencil"></i></a></li>
                            <li><a href="{{ route('eliminar',$pry->id) }}"><i class="fa fa-trash"></i></a></li>
                        </ul>
                        <img src="{{ asset('ui/assets/img/classes/nil.jpg') }}" class="img-fluid" alt="team member">
                    </div>
                    <div class="team-members-content text-center">
                        <a href="teacher-details1.html">
                            <h6>{{ $pry->nombre }}</h6>
                            <p>{{ $pry->created_at }}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <hr>
           {{ $proyectos->links() }}
        </div>
    </div>
</section>

@endsection