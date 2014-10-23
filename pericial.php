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
	<div class="textos">
		<h1>pericial </h1>
	</div>
</div>

<section class="pericial ">
	<ul class="menu-pericial">
		<li><a href="">Valoración del daño corporal</a></li>
		<li class="pericial-selec"><a href="" >Incapacidades laborales</a></li>
		<li><a href="">Incapacitaciones judiciales</a></li>
		<li><a href="">Responsabilidad profesional sanitaria</a></li>
		<li><a href="">Minusvalías</a></li>
		<li><a href="">Valoración psiquiátrica forense</a></li>
		<li><a href="">Valoración de los art. 80.4 y 87 del CP español</a></li>
		<li><a href="">Valoración criminalística</a></li>
		<li><a href="">Medicina Legal Hospitalaria, del Trabajo y de los Seguros Médicos</a></li>
	</ul>

	<article class="seleccionado contenedor2">
		<div id="contenedor-titular">
			<h2 class="titular-selec"><span>Incapacidades laborales</span></h2>
		</div>
		<div class="contenedor-texto">
		<p>En el ámbito laboral hay situaciones en las que por motivos médicos un trabajador
			tiene limitaciones que le impiden realizar su trabajo de forma adecuada.
			En tal caso, el inspector médico del Instituto Nacional de la Seguridad Social (I.N.S.S.)
			evaluará esas limitaciones y le otorgará un grado de incapacidad (parcial, total, absoluta o gran invalidez).
			Acompañe a la solicitud de incapacidad una peritación objetiva.</p> <p> 
			Si usted no está de acuerdo con la decisión del INSS, puede interponer una
			demanda ante el Juzgado de lo Social. Dicha demanda debería estar acompañada de
			una peritación médica que justifique desde el punto de vista médico-funcional las
			limitaciones que sufre para realizar su trabajo. La elaboración de peritaciones en
			el ámbito laboral ayuda al juez a entender el carácter de sus limitaciones laborales,
			y en consecuencia a dictar una sentencia justa a su favor.</p>

		</div>
		<button class="btn">Hacer consulta</button>




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