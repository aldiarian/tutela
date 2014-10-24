<?php 
	$dir = $_SERVER['DOCUMENT_ROOT']."/tutela/includes/";
?>
<?php  
	require($dir."header.php");
?>
<?php  
	require($dir."cabecera.php");
?>

<div class="fotoinicio inicio-med-clinica">
	<div class="textos">
		<h1 class="animated fadeInUp" >Medicina Clínica<h1>
	</div>
</div>

<section class="pericial ">
	<ul class="menu-servicio">
		<li class="servicio-selec"><a href="">Medicina interna</a></li>
		<li ><a href="" >Neumología</a></li>
	</ul>

	<article class="servicio-seleccionado contenedor2">
		<div id="contenedor-titular">
			<h2 class="titular-selec"><span>Medicina interna</span></h2>
		</div>
		<div class="contenedor-texto">
			<h4>¿Qué hace el internista?</h4>
			<ul>
				<li>Guía al enfermo coordinando la actuación frente a su enfermedad.</li>
				<li>Especialistas en el manejo de enfermedades que afectan a diversos órganos (enfermedades sistémicas).
				</li>
				<li>Atención integral y completa de los pacientes con problemas de salud complejos.</li>
				<li>Coordina a los especialistas necesarios para obtener un diagnóstico y tratamiento adecuados.</li>
			</ul>
			<h4>Cartera de Servicios - <br> Diagnóstico, Tratamiento y Prevención:</h4>
			<ul>

				<li>Enfermedades de riesgo cardiovascular:</li>
						<ul>
							<li>Diabetes.  </li>
							<li>Hipertensión arterial.</li>
							<li>Hipercolesterolemia e hipertrigliceridemia.</li>
							<li>Síndrome de apneas de sueño.</li>
							<li>Insuficiencia renal crónica.</li>
							<li>EPOC.</li>
							<li>Tabaquismo.</li>
							<li>Obesidad.</li>
						</ul>
				<li>Enfermedades infecciosas, en especial el VIH, hepatitis C y Tuberculosis. </li>
				<li>Insuficiencia cardiaca.</li>
				<li>Enfermedades reumatológicas y autoinmunes.</li>
				<li>Trombosis venosas y embolismo pulmonar</li>
			</ul>
				<button class="btn">Hacer consulta</button>
		</div>
	</article>

</section>










<script>
    jQuery(document).ready(function($) {
        $(".menuprincipal li").removeClass('active');
        $(".servicios p").addClass('activa')
    });
</script>

<?php  
	require($dir."footer.php");
?>