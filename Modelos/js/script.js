function Exemplo1(){

//Cria uma variavel recendo como valor uma mensagem de alerta, onde retorna true ou false
var resposta = confirm("Deseja excluir");

//Verifica se o usuario clicou em Ok então é verdadeiro, se clicou em cancelar é falso
if (resposta == true) {

	//Comando alert exibe o resultado em uma janela Modal
	alert("Verdadeiro");
}else if (resposta == false){
	alert("Falso");
}

//Comando para exibir resultado no console
console.log(resposta);

}

//const a;
//const b;

function somar(a, b) {

	return parseInt(a) + parseInt(b);

}

//console.log(somar(5, 2));

document.querySelector("#calcular").addEventListener("click", function(){

	let valorA = document.querySelector("#valorA").value;
	let valorB = document.querySelector("#valorB").value;

	if(valorA.length > 0 && valorB.length >0){

	//alert(parseInt(valorA)+parseInt(valorB));

	alert (somar(valorA, valorB));

	}else {
		alert("Digite um valor para o calculo");
	}	
});




	







