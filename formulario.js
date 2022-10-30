(function(){
	var formulario = document.getElementById('formulario'),	
		nombre = formulario.nombre,
		correo = formulario.correo,
		mensaje = formulario.mensaje,
		sexo = formulario.sexo,
		terminos = formulario.terminos,
		error = document.getElementById('error');
		
		function validarNombre(e) {
			if(nombre.value == '' || nombre.value == null) {
				console.log('Por favor, completa el nombre');
				error.style.display = 'block';
				error.innerHTML += '<li>Por favor, completa el nombre</li>';
				
				e.preventDefault();
			} else {
				error.style.display = 'none';
			}
		}
		
		function validarCorreo(e) {
			if(correo.value == '' || correo.value == null) {
				console.log('Por favor, completa el correo');
				error.style.display = 'block';
				error.innerHTML += '<li>Por favor, completa el correo</li>';
				
				e.preventDefault();
		} else {
				error.style.display = 'none';
			}
		
		function validarMensaje(e) {
			if(mensaje.value == '' || mensaje.value == null) {
				console.log('Por favor, escriba un mensaje');
				error.style.display = 'block';
				error.innerHTML += '<li>Por favor, escriba un mensaje</li>';
				
				e.preventDefault();
		}   else {
				error.style.display = 'none';
			}
		
		function validarSexo(e) {
			if(sexo.value == '' || sexo.value == null) {
				console.log('Por favor, ingresa  un sexo');
				error.style.display = 'block';
				error.innerHTML += '<li>Por favor, ingresa un sexo</li>';
				
				e.preventDefault();
		}    else {
				error.style.display = 'none';
			}
		
		function validarTerminos(e) {
			if(terminos.checked == false) {
				console.log('Por favor, acepta los terminos');
				error.style.display = 'block';
				error.innerHTML += '<li>Por favor, acepta los terminos</li>';
				
				e.preventDefault();
			} else {
				error.style.display = 'none';
			}
		}
		
		
		function validarFormulario(e) {
			error.innerHTML = '';
			validarNombre(e);
			validarCorreo(e);
			validarMensaje(e);
			validarSexo(e);
			validarTerminos(e);
		}

		formulario.addEventListener('submit', validarFormulario);
} ())
/*var formulario = document.getElementById('formulario');
var nombre = formulario.nombre;
var correo = formulario.correo;
var mensaje = formulario.mensaje;
var sexo =  formulario.sexo;
var terminos = formulario.terminos;


function validar(e) {
	//Validamos el nombre
	if(nombre.value > 18) {
		alert('Maximo de caracteres permitidos');
	} else if (nombre.value == '') {
		alert('Por favor, ingresa un nombre');
	}
	//Validamos correo
	if(correo.value = '') {
		alert('Por favor, ingrese un correo');
	}
	//Validamos que el usuario ingrese un mensaje
	if(mensaje.value = '') {
		alert('Por favor, escriba un mensaje');
	}
	//Validamos los radio button 
	if(sexo[0].checked == false && sexo[1].checked == false){
		alert('Por favor ingresa un sexo');
	//Validamos los terminos y condiciones
	if(!terminos.checked){
		alert('Acepta los terminos');
	}
	}
	//Evitamos que se envie el formulario
     e.preventDefault();
}
    formulario.addEventListener('submit', validar);