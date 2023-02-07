@extends('main')
@section('content')
<section id="banner-index2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <!--Banner Content-->
                <div id="banner-content-index2" class="text-center">
                    <!--Banner Body Content-->
                    <div class="banner-body-index2">
                        <h2 class="text-white">¿ESTÁ SEGURO DE CREAR UN NUEVO PROYECTO?</h2>
                        <p></p>
                    </div>
                    <!--Banner Button-->
                    <div id="banner-btn">
                        <a class="btn btn-general btn-banner-index2 " href="{{ route('nuevo-proyecto') }}" title="Read More" >SI</a>
                        <a class="btn btn-general btn-about-index2 " href="{{ url('/') }}" title="Read More">CANCELAR</a>
                    </div>
                </div>
                <!--Banner Content-->
            </div>
        </div>
    </div>
</section>

@endsection