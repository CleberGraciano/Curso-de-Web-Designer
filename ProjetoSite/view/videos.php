

<?php include_once("header.php") ?>

<!-- Importa a biblioteca do player de video personalizado -->

<link rel="stylesheet" type="text/css" href="lib/plyr/dist/plyr.css">



		<section>
		<div id="call-to-action">

			<div class="container">

				<div class="row text-center">
						<h2>Videos </h2>
						<hr>
				</div>

					<div class="row">

						<div class="player">
						<video src="mp4/highlights.mp4"  controls="true" poster="img/highlights.jpg">
							
						<!-- <track kind="captions" label="English captions" src="vtt/captions.vtt" srclang="en" default> -->
						<track kind="subtitles" label="Português (Brasil)" src="vtt/legendas.vtt" srclang="pt-br" default>
						</video> 

					</div><br>
						<input id="volume" type="range" min="0" max="1" step="0.01" value="1">
						<button type="button" id="btn-play-pause" class="btn btn-success">PLAY</button> 

					<!--	<audio src="mp3/audio.mp3" style="display: none"></audio> -->
				
				
					</div>

				</div>
			</div>	

			<!-- Videos -->
			<div id="news" class="container" style="top: 0">
				<div class="row text-center">
					<h2>Latest News</h2>
					<hr>
				</div>

				<div class="row thumbnails owl-carousel owl-theme">

					<div class="item" data-video="highlights">
						<div class="item-inner">
						<img src="img/highlights.jpg" alt="Noticia">
						<h3>Highlights</h3>
						</div>
					</div>
					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
						<h3>Orlando City Foundation 2015</h3>
						</div>
					</div>
					<div class="item" data-video="highlights">
						<div class="item-inner">
						<img src="img/highlights.jpg" alt="Noticia">
						<h3>Highlights</h3>
						</div>
					</div>
					<div class="item" data-video="Orlando_City_Foundation_2015">
						<div class="item-inner">
						<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
						<h3>Orlando City Foundation 2015</h3>
						</div>
					</div>
					

				</div>
				
			</div> 	<!-- Fecha Videos -->

		</section> <!-- Finalizou o Corpo do Site -->


		
		<script src="lib/plyr/dist/plyr.js"></script>
		<?php include_once("footer.php") ?>

		