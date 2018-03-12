// Esse comando é chamado de Prologo, ou seja toda vez que eu for trabalhar com Jquery eu preciso colocar este comando
//onde document quer dizer o documento atual, read quer dizer quando, e funcition uma função, essa função é para ter certeza
//que o Jquery só vai ser executado após o carregamento da página.

$(document).ready(function(){

				//Criando um seletor ou seja comando para pegar o id de um objeto no caso o id logotipo
				$("#logotipo").on("mouseover",function(){
					$("#banner h1").addClass("efeito");

				}).on("mouseout", function(){

					$("#banner h1").removeClass("efeito");
				});

				$("#input-search").on("focus", function(){

					$("li.search").addClass("ativo");

				}).on("blur", function(){

					$("li.search").removeClass("ativo");

				});


				//Adcionando Plugin owl-Carousel

				$(".thumbnails").owlCarousel({
					
				 
					loop:true,
					margin: 10,
					//nav:true,
					//navText: ["Anterior","Próximo"],
					responsive: {
						0 :{

							items: 1
						},
						480 :{
							items: 3
						},
						768 :{
							items: 4
						}
						
					}
				});
			});