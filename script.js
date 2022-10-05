//Contiene respuestas correctas
let correctas = [3,4,2,2,4,4,3,7,4];

//donde se guardan las respuestas del usuario
let opcion_elegida=[];
let cantidad_correctas = 0;

//funcion que toma el numero de pregunta y el input elegido de esa pregunta
function respuesta(num_pregunta, seleccionada) {
	//guardo respuesta elegida
	opcion_elegida[num_pregunta] = seleccionada.value;
	//siguiente codigo es para poner en color blanco
	//el fondo de los inputs para cuando elige otra opcion
	//armo id para seleccionar el section correspondiente
	id="p" + num_pregunta;
	
	labels = document.getElementById(id).childNodes;
	labels[3].style.backgroundColor = "white";
	labels[5].style.backgroundColor = "white";
	labels[7].style.backgroundColor = "white";
	
	//doy color a label seleccionado
	seleccionada.parentNode.style.backgroundColor =  "#cec0fc";
}

//funcion que compara los arreglos para saber cuantas estuvieron correctas 
function corregir(){
	cantidad correctas = 0;
	for(i=0; i<correctas.lenght;i++) {
		if(correctas[i]==opcion elegida[i]) {
			cantidad_correctas++;
		}
	}
	document.getElementById("resultado").innerHTML = cantidad_correctas;
}