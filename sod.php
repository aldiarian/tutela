<?php 
	$dir = $_SERVER['DOCUMENT_ROOT']."/tutela/includes/";
?>
<?php  
	require($dir."header.php");
?>
<?php  
	require($dir."cabecera.php");
?>

<div class="fotoinicio inicio-pericial">
	<div class="textos animated fadeInUp">
		<h1>segunda opinion a distáncia (SOD)</h1>
	</div>
</div>

<section class="pericial ">

	<article class="servicio-seleccionado contenedor2">
	
		<div class="contenedor-texto">
			<p>
La Segunda Opinión a Distáncia es un valioso recurso cuyo objetivo es ayudarle a tomar
decisiones importantes sobre su salud. 
Valoramos su documentación clínica y/o pericial y
le aconsejamos sobre aquello que le preocupe sin desplazamientos,
no importa donde se encuentre, estamos a un click de distancia. 
			</p>
			<ul>
				<li>Confirmación y orientación diagnóstica.</li>
				<li>Opciones terapéuticas.</li>
				<li>Consejo sobre calidad de instituciones sanitarias públicas y
					privadas de ámbito nacional español mediante el uso de
					herramientas objetivas:
				</li>
					<ul>
						<li>Certificados de Calidad y Acreditación de Clínicas y Hospitales.</li>
						<li>Servicios de Medicina Legal que velen por la seguridad del paciente
							y calidad asistencial.</li>
						<li>Titulación y experiencia del equipo directivo.</li>
						<li>Tipo de contratación del profesional sanitario.</li>
						<li>Acreditación docente.</li>
						<li>Publicaciones y Nivel de Impacto científico del personal.</li>
						<li>Ratios médico/paciente y enfermera/paciente en Servicios de Urgencias,
							Hospitalización y Unidad de Cuidados Intensivos.</li>
						<li>Relación médicos de guardia/número de pacientes.</li>
						<li>Estancias hospitalarias según GRD.</li>
						<li>Ratio visitas Urgencias/Hospitalización.</li>
						<li>Grado de cooperación y trasparencia de la institución ante solicitud de
							información sobre funcionamiento y organización asistencial.</li>
					</ul>
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