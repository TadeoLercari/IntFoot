var formulario = document.getElementById('formulario');
var nombre = formulario.nombre;
var correo = formulario.correo;
var mensaje = formulario.mensaje
var sexo =  formulario.sexo;
var terminos = formulario.terminos;

function validar(e) {
	//Validamos el nombre
	if(nombre.value > 18) {
		alert('Maximo de caracteres permitidos');
	} else if (nombre.value == '') {
		alert('Por favor, ingresa un nombre');
	}
	//Validamos que el usuario escriba un correo
	if (!correo.checked) {
		alert('Por favor, escriba un correo');
	}
	//Validamos que el usuario escriba un mensaje
	if (!mensaje.checked) {
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