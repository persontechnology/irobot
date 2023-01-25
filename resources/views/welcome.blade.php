<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ config('app.name','') }}</title>

	<!-- Global stylesheets -->
	<link href="{{ asset('admin/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
	{{-- <script src="{{ ../../../assets/demo/ }}"></script> --}}
	<script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('admin/js/app.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
		<div class="container-fluid">
			

			<div class="navbar-brand flex-1 flex-lg-0">
				<a href="{{ url('/') }}" class="d-inline-flex align-items-center">
					<img src="{{ asset("admin/images/logo_icon.svg") }}" alt="">
					<img src="{{ asset('admin/images/logo_text_light.svg') }}" class="d-none d-sm-inline-block h-16px ms-3" alt="">
				</a>
			</div>

			<ul class="nav flex-row">
				
				<li class="nav-item nav-item-dropdown-lg dropdown">
					<a href="{{ url('/') }}" class="navbar-nav-link navbar-nav-link-icon rounded-pill {{ Route::is('welcome')?'bg-primary':'' }}">
						<i class="ph-house"></i>
					</a>
				</li>

				<li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
					<a href="{{ route('proyectos') }}" class="navbar-nav-link navbar-nav-link-icon rounded-pill {{ Route::is('proyectos')?'bg-primary':'' }}">
						<i class="ph-folder-open"></i>
					</a>
				</li>
			</ul>

			<div class="navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
				
			</div>

			<ul class="nav flex-row justify-content-end order-1 order-lg-2">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="offcanvas" data-bs-target="#notifications">
						<i class="ph-list"></i>
					</a>
				</li>

			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			@yield('content')


		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Notifications -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
		<div class="offcanvas-header py-0">
			<h5 class="offcanvas-title py-3">Acerca</h5>
			<button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill" data-bs-dismiss="offcanvas">
				<i class="ph-x"></i>
			</button>
		</div>

		<div class="offcanvas-body p-0">
			<div class="bg-light fw-medium py-2 px-3">
                <a href="#">TERMINOS DE CONDICIONES</a>
            </div>
			
			<div class="bg-light fw-medium py-2 px-3">
                <a href="">PRIVACIDAD POLICY</a>
            </div>
            <div class="bg-light fw-medium py-2 px-3">
                <a href="">LICENCIAS</a>
            </div>
            <div class="bg-light fw-medium py-2 px-3">
                <a href="">SOPORTE</a>
            </div>
			
		</div>
	</div>
	<!-- /notifications -->


		<form action="{{ route('actualizar') }}" method="POST">
			@csrf
			<div id="modal_mini" class="modal fade" tabindex="-1">
				<div class="modal-dialog modal-xs">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Renombrar</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<input type="hidden" name="id" id="idtxt">
						<div class="modal-body">
							<div class="form-floating">
								<input type="text" name="nombre" id="nombretxt" class="form-control" placeholder="Placeholder" autofocus>
								<label>Nombre de proyecto</label>
							</div>
						</div>
		
						<div class="modal-footer justify-content-between">
							<button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Guardar</button>
						</div>
					</div>
				</div>
			</div>
		</form>

</body>

<script>
	function modalRenombrar(arg){
		$('#modal_mini').modal('show');
		$('#idtxt').val($(arg).data('id'))
		$('#nombretxt').val($(arg).data('nombre'))
	}
</script>
</html>
