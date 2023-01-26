<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ config('app.name','') }}</title>

	<!-- Font Awesome -->
    <link    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
	<!-- Global stylesheets -->
	<link href="{{ asset('admin/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('admin/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->



    {{-- esta librerai es para arrastrar los elementos de un lugar a otro --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.js" integrity="sha512-MrA7WH8h42LMq8GWxQGmWjrtalBjrfIzCQ+i2EZA26cZ7OBiBd/Uct5S3NP9IBqKx5b+MMNH1PhzTsk6J9nPQQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.css" integrity="sha512-49xW99xceMN8dDoWaoCaXvuVMjnUctHv/jOlZxzFSMJYhqDZmSF/UnM6pLJjQu0YEBLSdO1DP0er6rUdm8/VqA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	{{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

	{{-- p5 --}}
	<script src="https://cdn.jsdelivr.net/npm/p5@1/lib/p5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/p5@1/lib/addons/p5.sound.min.js"></script>

	{{-- tour --}}
	<link rel="stylesheet" href="{{ asset('tour/css/bs5-intro-tour.css') }}">
    <script src="{{ asset("tour/js/bs5-intro-tour.js") }}"></script>


	<!-- Core JS files -->
	<script src="{{ asset('admin/demo/demo_configurator.js') }}"></script>
	<script src="{{ asset('admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('admin/js/app.js') }}"></script>
	<!-- /theme JS files -->

	<style>
		div.scrollmenu {
		background-color: #333;
		overflow: auto;
		white-space: nowrap;
		}
        .btn-block {
            display: block;
            width: 100%;
        }
	</style>

</head>

<body>
	<!-- Page content -->
	<div class="page-content">
		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Content area -->
				<div class="content">
					<!-- Form layouts -->
					<div class="row">
						<div class="col-6" id="tourUno">

							<div class="card">
								<div class="card-header d-sm-flex align-items-sm-center py-sm-0">
                                    <a href="{{ route('welcome') }}" class="btn btn-link">
                                        <i class="ph-arrow-arc-left"></i>
                                    </a>
									<small>Bienvenido {{ config('app.name','') }}</small>
									<div class="ms-sm-auto my-sm-auto">
										<button type="button" class="btn btn-success btn-sm" onclick="ejecutar(this)" id="btnEjecutar">
											<i class="ph-play"></i> Ejecutar
										</button>
										<button type="button" class="btn btn-danger btn-sm" onclick="cancelar(this)" id="brtnCancelarContinuar">
											<i class="ph-stop"></i> Cancelar
										</button>
										<button type="button" class="btn btn-dark btn-sm" onclick="guardar(this)" id="brtnCancelarContinuar">
											<i class="ph-floppy-disk"></i> Guardar {{ $pry->nombre }}
										</button>
										<button type="button" class="btn btn-primary btn-sm" onclick="iniciarRecorrido(this)">
											<i class="ph-info"></i>
										</button>


									</div>
								</div>
								
								<div class="card-body" id="nivel-uno-contenedor"  style="overflow: auto;">
									{!! $pry->codigo !!}
								</div>
			
								<div class="card-body block" id="nivel-dos-contenedor"  style="overflow: auto;">
								</div>
			
			
								<div class="card-body block" id="nivel-tres-contenedor"  style="overflow: auto;">
								</div>
							</div>

						</div>

						<div class="col-6" id="tourDos">
							<!-- Vertical form -->
							<div class="card card-body">
								<main class="row"></main>
							</div>
							<!-- /vertical form -->

						</div>
					</div>
					<!-- /form layouts -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /inner content -->


			<!-- Footer -->
			<div class="navbar navbar-sm border-top" id="tourTres">
				<div class="container-fluid">
					<!-- Vertical tabs -->
					
					<div class="d-sm-flex">
						<ul class="nav nav-tabs nav-tabs-vertical nav-tabs-vertical-start wmin-sm-200 me-sm-3 mb-3 mb-sm-0">
							<li class="nav-item">
								<a href="#v-tabs-nivel-uno" onclick="cambiarNivel(this);" id="v-tabs-nivel-uno-tab" class="nav-link active" data-bs-toggle="tab">
									<i class="ph-number-one me-2"></i>
									NIVEL
								</a>
							</li>

							<li class="nav-item">
								<a href="#v-tabs-nivel-dos" onclick="cambiarNivel(this);" id="v-tabs-nivel-dos-tab" class="nav-link" data-bs-toggle="tab">
									<i class="ph-number-two me-2"></i>
									NIVEL
								</a>
							</li>

							<li class="nav-item">
								<a href="#v-tabs-nivel-tres" onclick="cambiarNivel(this);" id="v-tabs-nivel-tres-tab" class="nav-link" data-bs-toggle="tab">
									<i class="ph-number-three me-2"></i>
									NIVEL
								</a>
							</li>

							
						</ul>

						<div class="tab-content flex-sm-fill">
							<div class="tab-pane fade show active" id="v-tabs-nivel-uno">
								<div class="my-1" id="acciones-tab-uno">
                            
                            
									{{-- botones de acciones --}}
									
									<button type="button" class="btn btn-primary" 
										data-color="primary" 
										data-clasei="fa-solid fa-left-long fa-2x" 
										data-accion="izquierda" 
										data-valor="1" 
										data-bs-popup="tooltip" 
										title="Mover izquierda"
									>
										<i class="fa-solid fa-left-long fa-2x"></i>
									</button>
		
									<button type="button" class="btn btn-primary" 
										data-color="primary" 
										data-clasei="fa-solid fa-right-long fa-2x" 
										data-accion="derecha" 
										data-valor="1" 
										data-bs-popup="tooltip" 
										title="Mover derecha"
									>
										<i class="fa-solid fa-right-long fa-2x"></i>
									</button>
		
									<button type="button" class="btn btn-primary" 
										data-color="primary" 
										data-clasei="fa-solid fa-up-long fa-2x" 
										data-accion="arriba" 
										data-valor="1" 
										data-bs-popup="tooltip" 
										title="Mover arriba"
									>
										<i class="fa-solid fa-up-long fa-2x"></i>
									</button>
		
									<button type="button" class="btn btn-primary" 
										data-color="primary" 
										data-clasei="fa-solid fa-down-long fa-2x" 
										data-accion="abajo" 
										data-valor="1" 
										data-bs-popup="tooltip" 
										title="Mover abajo"
									>
										<i class="fa-solid fa-down-long fa-2x"></i>
									</button>
		
									<button type="button" class="btn btn-warning" 
										data-color="warning" 
										data-clasei="fas fa-lightbulb fa-2x" 
										data-accion="prenderLuz" 
										data-valor="#0f0" 
										data-bs-popup="tooltip" 
										title="Encender luz"
									>
										<i class="fas fa-lightbulb fa-2x"></i>
									</button>
									<button type="button" class="btn btn-success" 
										data-color="success" 
										data-clasei="fa-solid fa-volume-high fa-2x" 
										data-accion="pitar" 
										data-valor="sonido/
										sonidocorto.mp3" data-bs-popup
										="tooltip" title="Pitar"
									>
										<i class="fa-solid fa-volume-high fa-2x"></i>
									</button>
									<button type="button" class="btn btn-danger" 
										data-color="danger" 
										data-clasei="fa-solid fa-stop fa-2x" 
										data-accion="finalizar" 
										data-valor="0" 
										data-bs-popup="tooltip" 
										title="Finalizar"
									>
										<i class="fa-solid fa-stop fa-2x"></i>
									</button>
		
		
								</div>
							</div>

							<div class="tab-pane fade" id="v-tabs-nivel-dos">
								<div class="my-1 container" id="acciones-tab-dos" style="overflow: auto; white-space: nowrap;">
								</div>
							</div>

							<div class="tab-pane fade" id="v-tabs-nivel-tres">
								<div class="my-1 container" id="acciones-tab-tres" style="overflow: auto; white-space: nowrap;">
								</div>
							</div>

						</div>
					</div>
					
					<!-- /vertical tabs -->
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


    <form action="{{ route('guardar') }}" id="formGuardar" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $pry->id }}">
        <textarea style="display: none;" name="contenidoHtml" id="contenidoHtml"></textarea>
    </form>


	{{-- modal elementos para cambiar lo svalores --}}
    <div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"></h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="contenedorDireccion">
                    <label class="form-label" for="rangoValor">Valor</label>
                    <div class="range">
                        <input type="range" onchange="cambiarValor(this)" class="form-range" min="1" max="10" step="1" value="1" id="rangoValor" />
                    </div>
                </div>
                

                <div id="contenedorLuz">
                    <label for="txtColorLuz" class="form-label">Seleccionar color de luz</label>
                    <input type="color" class="form-control form-control-color" id="txtColorLuz" onchange="cambiarColorLuz(this)" value="#563d7c" title="Choose your color">
                </div>


                <div id="contenedorPitar">
                    <!-- Default radio -->
                    @foreach (\File::allFiles(public_path('sonido')) as $item)
                    @php
                        $slice = Str::after($item, public_path()."/sonido/")
                    @endphp
                        
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="{{ $slice }}" value="{{ Str::after($item, public_path()) }}" onclick="cambiarSonido(this)" />
                                <label class="form-check-label" for="{{ $slice }}"> {{ $slice }} </label>
                            </div>
                        
                    @endforeach
                </div>

                <input type="hidden" id="idBoton">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"  onclick="elimnarAccion(this)">Eliminar</button>
                <button type="button" class="btn btn-primary" onclick="cerrarModal(this)">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

	 
    <script src="{{ asset('js/nivel-uno.js') }}"></script>
  <script>


    var nombreObjetoMover="ROBOT."

        // ARRASTRAR OBJETOS DEL NIVEL UNO
        dragula([document.getElementById("acciones-tab-uno"), document.getElementById("nivel-uno-contenedor")], {
        copy: function (el, source) {
            return source === document.getElementById("acciones-tab-uno");
        },
        accepts: function (el, target) {
            return target !== document.getElementById("acciones-tab-uno");
        },
        invalid: function (el, handle) {
            return false;
        }
        }).on('drop', function (el) {
            // asiganar nuevo metodo al boton arrastrado para abrir la modal de opciones
            let r = (Math.random() + 1).toString(36).substring(7);
            $(el).attr('id',r);
            $(el).attr('onClick', 'abrirModal(this)');
            $(el).attr('class', $(el).attr('class')+" m-1");
            
        }).on('out',function(el){
            // finalizado el arrastre del boton, se actualiza los niveles dos y tres
            actualizarContenedorDos();
            actualizarContenedorTres();
        });

        // ARRASTRAR OBJETOS NIVEL DOS
        dragula([document.getElementById("acciones-tab-dos"), document.getElementById("nivel-dos-contenedor")], {
        copy: function (el, source) {
            return source === document.getElementById("acciones-tab-dos");
        },
        accepts: function (el, target) {
            return target !== document.getElementById("acciones-tab-dos");
        },
        invalid: function (el, handle) {
            return false;
        }
        }).on('drop', function (el) {
            // asiganar nuevo metodo al boton arrastrado para abrir la modal de opciones
            let r = (Math.random() + 1).toString(36).substring(7);
            $(el).attr('id',r);
            $(el).attr('onClick', 'abrirModal(this)');
            $(el).attr('class', $(el).attr('class')+" m-1 btn-block");

        }).on('out',function(el){
            // finalizado el arrastre del boton, se actualiza los niveles uno y tres
            actualizarContenedorUno();
            actualizarContenedorTres();
        });
        

        // ARRASTRAR OBJETOS NIVEL TRES
        dragula([document.getElementById("acciones-tab-tres"), document.getElementById("nivel-tres-contenedor")], {
        copy: function (el, source) {
            return source === document.getElementById("acciones-tab-tres");
        },
        accepts: function (el, target) {
            return target !== document.getElementById("acciones-tab-tres");
        },
        invalid: function (el, handle) {
            return false;
        }
        }).on('drop', function (el) {
            // asiganar nuevo metodo al boton arrastrado para abrir la modal de opciones
            let r = (Math.random() + 1).toString(36).substring(7);
            $(el).attr('id',r);
            $(el).attr('onClick', 'abrirModal(this)');
            $(el).removeClass().addClass("btn btn-tertiary btn-block text-start");
            $(el).data("clasei");

            // si opcion es pitar, optener el valor de pitar: solo el nombre de la cancion, caso contrario es el mismo valor
            if($(el).data('accion')==='pitar'){
                var arrmu = $(el).data('valor').split('/');
                $(el).html('<small class="text-dark">'+nombreObjetoMover+'</small><small class="text-'+$(el).data('color')+'">'+$(el).data('accion')+"("+arrmu[1]+')</small>')
            }else{
                $(el).html('<small class="text-dark">'+nombreObjetoMover+'</small><small class="text-'+$(el).data('color')+'">'+$(el).data('accion')+"("+$(el).data('valor')+')</small>')
            }
            

        }).on('out',function(el){
            // finalizado el arrastre del boton, se actualiza los niveles uno y dos
            actualizarContenedorUnoDos()
        });

        // AL CARGAR LA PG, ACTUALIZAR NIVEL DOS Y TRES SI EXISTE, DE LA BDD
        actualizarContenedorDos();
        actualizarContenedorTres();
 

    // abrir la modal de opciones para asignar/seleccionar valores
    function abrirModal(arg){
        // obtener nombre de la accion del boton
        let accion=$(arg).data('accion');
        switch (accion) {
            case 'prenderLuz':
                // mostrar seleccionar color
                $('#contenedorLuz').show();
                $('#contenedorDireccion').hide();
                $('#contenedorPitar').hide();
                break;
            case 'izquierda':
            case 'derecha':
            case 'arriba':
            case 'abajo':
                // mostrar asiganar valor 
                $('#contenedorDireccion').show();
                $('#contenedorLuz').hide();
                $('#contenedorPitar').hide();
                break;
            case 'pitar':
                // mostrar seleccionar musica/sonido
                $('#contenedorPitar').show();
                $('#contenedorDireccion').hide();
                $('#contenedorLuz').hide();
                break;
            case 'finalizar':
                // no mostrar nada
                $('#contenedorPitar').hide();
                $('#contenedorDireccion').hide();
                $('#contenedorLuz').hide();
                break;
            default:
                
                break;
        }

        // asignar titulo de la modal con el nombre de la accion
        $('#staticBackdropLabel').html(accion);
        // mostrar la modal
        $('#staticBackdrop').modal('show');
        // asiganr al input de la modal un id
        $('#idBoton').val($(arg).attr('id'));
        // asignar un valor el rango
        $('#rangoValor').val(parseFloat($(arg).data('valor')))
    }

    // actualizar valor del rango 
    function cambiarValor(arg){
        // obtenemos el id del input de la modal
        let btnid=$('#idBoton').val();
        // al boton selecionado actualizamos el valor seleccionado
        $("#"+btnid).data('valor',parseFloat($(arg).val())).attr('data-valor',parseFloat($(arg).val()));
    }

    // actualizar valor de color
    function cambiarColorLuz(arg){
        // obtenemos el id del input de la modal
        let btnid=$('#idBoton').val();
        // al boton selecionado actualizamos el valor seleccionado
        $("#"+btnid).data('valor',$(arg).val()).attr('data-valor',$(arg).val());
    }

    // actualizar valor del sonido/musica
    function cambiarSonido(arg){
        // obtenemos el id del input de la modal
        let btnid=$('#idBoton').val();
        // al boton selecionado actualizamos el valor seleccionado
        $("#"+btnid).data('valor',$(arg).val()).attr('data-valor',$(arg).val());
        
    }

    // actualizar niveles 
    function cambiarNivel(arg){
        // obtener el id de cada tab
        let nombreTab=$(arg).attr('id');
		console.log(nombreTab)
        switch (nombreTab) {
            // mostrar nivel uno
            case 'v-tabs-nivel-uno-tab':
                mostrarNivelUno();
                break;
                // mostrar nivel dos
            case 'v-tabs-nivel-dos-tab':
                mostrarNivelDos();
            break;
            // mostrar nivel tres
            case 'v-tabs-nivel-tres-tab':
                mostrarNivelTres();
                break;
            default:
                break;
        }
    }


    // actualizar el contenedor del nivel tres
    function actualizarContenedorTres(){
        // copiar elementos del nivel uno al nivel tres
        $('#nivel-tres-contenedor').html($('#nivel-uno-contenedor').children().clone());
        // realizar un rrecorrido de los elementos
        for(let e of Array.from($("#nivel-tres-contenedor>"))){
            //  eliminamos la clase del elemnto y añadimos nueva clase
            $(e).removeClass().addClass("btn btn-tertiary btn-block text-start");
            // si elemento es igual a sonido/musica 
            if($(e).data('accion')==='pitar'){
                // separamos la string/ur y obtenemos solo el nombre de la musica
                var arrmu = $(e).data('valor').split('/');
                $(e).html('<small class="text-dark">'+nombreObjetoMover+'</small><small class="text-'+$(e).data('color')+'">'+$(e).data('accion')+"("+arrmu[2]+')</small>')
            }else{
                // asiganr nuevos valores a elemtos
                $(e).html('<small class="text-dark">'+nombreObjetoMover+'</small><small class="text-'+$(e).data('color')+'">'+$(e).data('accion')+"("+$(e).data('valor')+')</small>')
            }
        }
    }
     // actualizar el contenedor del nivel dos
    function actualizarContenedorDos(){
         // copiar elementos del nivel uno al nivel dos
        $('#nivel-dos-contenedor').html($('#nivel-uno-contenedor').children().clone());
        // realizar un rrecorrido de los elementos
        for(let e of Array.from($("#nivel-dos-contenedor>"))){
            // añadir classe al boton que se ajuste al contenedor
            $(e).addClass("btn-block")
            let mii=$(e).children('i')[0];
             // si elemento es igual a sonido/musica 
            if($(e).data('accion')==='pitar'){
                // separamos la string/ur y obtenemos solo el nombre de la musica
                var arrmu = $(e).data('valor').split('/');
                
                $(mii).html('<small class="mx-2">'+$(e).data('accion')+" "+arrmu[2]+'</small>')
            }else{
                // asiganr nuevos valores a elemtos
                $(mii).html('<small class="mx-2">'+$(e).data('accion')+" "+$(e).data('valor')+'</small>')
            }
        }
    }

    // actualizar el contenedor del nivel uno
    function actualizarContenedorUno(){
        // copiar elementos del nivel dos al nivel uno
        $('#nivel-uno-contenedor').html($('#nivel-dos-contenedor').children().clone());
        // realizar un rrecorrido de los elementos
        for(let e of Array.from($("#nivel-uno-contenedor>"))){
            // remover la clase del boton largo
            $(e).removeClass("btn-block ").attr('style','')
            let mii=$(e).children('i')[0];
            // vaciral elmento i
            $(mii).html("");
        }
    }

     // actualizar el contenedor del nivel uno y dos
    function actualizarContenedorUnoDos(){
       // copiar elementos del nivel tres al nivel uno
        $('#nivel-uno-contenedor').html($('#nivel-tres-contenedor').children().clone());
        // realizar un rrecorrido de los elementos
        for(let e of Array.from($("#nivel-uno-contenedor>"))){
            // remover la clase y añadir nuevas clases al boton
            $(e).removeClass().addClass("btn btn-"+$(e).data('color')+" m-1").attr('style','')
            // añadir elemento i al boton
            $(e).html("<i class='"+$(e).data('clasei')+"'></i>");
        }
        
        // copiar elementos del nivel tres al nivel dos
        $('#nivel-dos-contenedor').html($('#nivel-tres-contenedor').children().clone());
        // realizar un rrecorrido de los elementos
        for(let e of Array.from($("#nivel-dos-contenedor>"))){
            // remover la clase y añadir nuevas clases al boton y vaciar el html del boton
            $(e).removeClass().addClass("btn btn-"+$(e).data('color')+" btn-block m-1").html("");
            // si accion es pitar
            if($(e).data('accion')==='pitar'){
                // asiganar valor de musica soloel nombre de la cancion
                var arrmu = $(e).data('valor').split('/');
                $(e).html('<i class="'+$(e).data('clasei')+'"><small class="mx-2">'+$(e).data('accion')+" "+arrmu[1]+'</small></i>')
            }else{
                // añadir valores del boton
                $(e).html('<i class="'+$(e).data('clasei')+'"><small class="mx-2">'+$(e).data('accion')+" "+$(e).data('valor')+'</small></i>')
            }
        }
    }


    // cargar botones de acciones del nivel dos
    function cargarAccionesNivelDos(){
        // // copiar elementos del nivel uno al nivel dos
        $('#acciones-tab-dos').html($('#acciones-tab-uno').children().clone());
        // reccoreido de elementos
        for(let e of Array.from($("#acciones-tab-dos>"))){
            // añadir clase al elemento boton
            $(e).addClass("m-1")
            let mii=$(e).children('i')[0];
            // si accion es pitar
            if($(e).data('accion')==='pitar'){
                // añadimos valor solo de la cancion o musica
                var arrmu = $(e).data('valor').split('/');
                $(mii).html('<small class="mx-2">'+$(e).data('accion')+" "+arrmu[1]+'</small>')
            }else{
                // añadimos valores del boton
                $(mii).html('<small class="mx-2">'+$(e).data('accion')+" "+$(e).data('valor')+'</small>')
            }
        }
    }

    // cargar botones de acciones del nivel tres
    function cargarAccionesNivelTres(){
        // // copiar elementos del nivel dos al nivel tres
        $('#acciones-tab-tres').html($('#acciones-tab-dos').children().clone());
        // reccoreido de elementos
        for(let e of Array.from($("#acciones-tab-tres>"))){
             // remover la clase y añadir nuevas clases al boton
            $(e).removeClass().addClass("btn btn-outline-"+$(e).data('color')+" m-1");
            // si accion es pitra
            if($(e).data('accion')==='pitar'){
                // añadimos valor solo de la cancion o musica
                var arrmu = $(e).data('valor').split('/');
                $(e).html('<i class="fa-solid fa-left-long fa-2x" style="display:none;"></i>'+$(e).data('accion')+'<span class="badge bg-'+$(e).data('color')+' ms-2">'+arrmu[1]+'</span>')
            }else{
                // añadimos valores del boton
                $(e).html('<i class="fa-solid fa-left-long fa-2x" style="display:none;"></i>'+$(e).data('accion')+'<span class="badge bg-'+$(e).data('color')+' ms-2">'+$(e).data('valor')+'</span>')
            }
        }
    }


    // cargamos las acciones de los niveles dos y tres
    cargarAccionesNivelDos();
    cargarAccionesNivelTres();

    // mostrar acciones del nivel uno
    function mostrarNivelUno(){
        $('#nivel-dos-contenedor').hide();
        $('#nivel-tres-contenedor').hide();
        $('#nivel-uno-contenedor').show();
    }

    // mostrar acciones del nivel dos
    function mostrarNivelDos(){
        $('#nivel-uno-contenedor').hide();
        $('#nivel-tres-contenedor').hide();
        $('#nivel-dos-contenedor').show();
    }
    
    // mostrar acciones del nivel tres
    function mostrarNivelTres(){ 
        $('#nivel-uno-contenedor').hide();
        $('#nivel-dos-contenedor').hide();
        $('#nivel-tres-contenedor').show();
    }

    // cargar mostrar acciones nivel uno
    mostrarNivelUno();
   

    // cerar la modal
    function cerrarModal(){
        $('#staticBackdrop').modal('hide');
        actualizarContenedorDos();
        actualizarContenedorTres();
    }

    

    function iniciarRecorrido(){
        var steps = [
            {
                title: "Bienvenido",
                content: "JUEGO DE ROBOT PARA NIÑOS DE UTC"
            },
            {
                id: "tourUno",
                content: "CONTENEDOR DE ACCIONES"
            },
            {
                id: "tourDos",
                content: "RESULTADO DE ACCIONES"
            },
            {
                id: "tourTres",
                content: "CONTENEDOR DE TODAS LAS ACCIONES"
            }
        ];
        var tour = new Tour(steps);
        tour.show();
    }


    // guardar proyecto
    function guardar(){
        var h=$("#nivel-uno-contenedor").html();
       $('#contenidoHtml').val(h);
       $('#formGuardar').submit();
    }

    // elimnar elemento accion
    function elimnarAccion(){
        $('#staticBackdrop').modal('hide');
        let btnid=$('#idBoton').val();
        $("#"+btnid).remove();
        guardar();
    }

	
  </script>
	
</body>
</html>