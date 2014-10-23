<?php 
	$dir = $_SERVER['DOCUMENT_ROOT']."/tutela/includes/";
?>
<?php  
	require($dir."header.php");
?>
<?php  
	require($dir."cabecera.php");
?>




<div class="fotoinicio">
	<div class="textos">
		<h1>Conectando medicina y justicia </h1>
		<h2>“Aportamos soluciones Médico-Legales”</h2>
	</div>
</div>

<section class="textointro ">
	<h3 class="">
		"Tutelamédica te ofrece sus conocimientos en
		Medicina Legal y Forense para ayudarte a  resolver cualquier aspecto
		médico con implicaciones legales y judiciales"
	</h3>
</section>
<section class="secciones contenedor2">
	
	<article class="quienes">
		<a href="javascript:void(0)">
			<div class="seccion-imagen">
				<img src="images/foto-quienes.jpg">
			</div>
			<div class="seccion-texto">
				<h5>¿Quiénes somos?</h5>
				<p>Somos expertos en Medicina Clínica, Legal y Forense, desarromos nuestra actividad en el ámbito privado.</p> 
			</div>
		</a>
	</article>

	<article class="paraquien">
		<a href="javascript:void(0)">
			<div class="seccion-imagen">
				<img src="images/foto-paraquien.jpg">
			</div>
			<div class="seccion-texto">
				<h5>¿Para quién trabajamos?</h5>
				<p>Para particulares, abogados y cualquier institución o empresa pública o privada.</p> 
			</div>
		</a>
	</article>

	<article class="consultenos">
		<a href="javascript:void(0)">
			<div class="seccion-imagen">
				<img src="images/foto-consulte.jpg">
			</div>
			<div class="seccion-texto">
				<h5>Consúltenos</h5>
				<p>Le asesoramos sobre viabilidad de
					demandas Médico-Legales
					y trazamos la estrategia adecuada.</p> 
			</div>
		</a>
	</article>

	<article class="gestione">
		<a href="javascript:void(0)">
			<div class="seccion-imagen">
				<img src="images/foto-gestione.jpg">
			</div>
			<div class="seccion-texto">
				<h5>Gestione su cuenta</h5>
				<p>Envíe, gestióne  y tramite
				sus expedientes, documentos, etc
				desde su panel de control.</p> 
			</div>
		</a>
	</article>


</section>


<section class="servicios">
	<div class="titularseccion">
		<h3 class="titular">servicios</h3>
	</div>
	<article class="servicios-pericial">
		<a href="pericial.php">
			<div class="serv-textos">
				<h3 class="titular">pericial</h3>
				<p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip exea . </p>
			</div>
		</a>
	</article>
	<article class="servicios-segunda">
		<a href="javascript:void(0)">
			<div class="serv-textos">
				<h3 class="titular">segunda opinion a distáncia (SOD)</h3>
				<p> Valoramos su documentación clínica y/o pericial
					y le aconsejamos sobre aquello que le preocupe sin
					desplazamientos, no importa donde se encuentre,
					estamos a un click de distancia.  </p>
			</div>
		</a>
	</article>
</section>


<div class="titularseccion">
	<h3 class="titular">noticias</h3>
</div>
<section class="noticias-section contenedor2">
	<article class="noticiapq">
		<a href="javascript:void(0)" title="ir a la noticia">
			<div class="imagen">
				<img src="http://lorempixel.com/300/200/">
			</div>
			<section class="texto-notipq">
				<h5>Titulo noticia</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt...
				</p>
			</section>
		</a>

	</article>
	<article class="noticiapq">
		<a href="javascript:void(0)" title="ir a la noticia">
			<div class="imagen">
				<img src="http://lorempixel.com/300/200/">
			</div>
			<section class="texto-notipq">
				<h5>Titulo noticia</h5>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit... 
				</p>
			</section>
		</a>

	</article>
	<article class="noticiapq">
		<a href="javascript:void(0)" title="ir a la noticia">
			<div class="imagen">
				<img src="http://lorempixel.com/300/200/">
			</div>
			<section class="texto-notipq">
				<h5>Titulo noticia</h5>
				<p> Lorem ipsum dolor sit amet, ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor...
				</p>
			</section>
		</a>

	</article>
</section>


<script>
    jQuery(document).ready(function($) {
        $(".menuprincipal li").removeClass('active');
        $(".inicio").addClass('active')
    });
</script>

<?php  
	require($dir."footer.php");
?>
