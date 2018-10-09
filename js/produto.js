var	inputTamanho	=	document.querySelector('[name=tamanho]');
var	outputTamanho	=	document.querySelector('[name=valortamanho]');
inputTamanho.oninput	=	mostraTamanho;
inputTamanho.onchange	=	mostraTamanho;

	
	function	mostraTamanho(){
		outputTamanho.value	=	inputTamanho.value;
		outputTamanho.textContent	=	event.target.value
	};

inputTamanho.oninput =	mostraTamanho