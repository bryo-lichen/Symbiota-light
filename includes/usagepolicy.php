<?php
include_once('../config/symbini.php');
include_once ($SERVER_ROOT.'/classes/UtilityFunctions.php');
header("Content-Type: text/html; charset=" . $CHARSET);
$serverHost = UtilityFunctions::getDomain();
?>
<!DOCTYPE html>
<html lang="<?= $LANG_TAG ?>">

<head>
	<title><?= $DEFAULT_TITLE . ($LANG_TAG=='es') ? ' Política de Uso de Datos' : ' Data Usage Guidelines' ?></title>
	<?php

	include_once($SERVER_ROOT . '/includes/head.php');
	?>
</head>

<body>
	<?php
	$displayLeftMenu = true;
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath">
		<a href="<?php echo htmlspecialchars($CLIENT_ROOT, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/index.php">Home</a> &gt;&gt;
		<b>Data Usage Guidelines</b>
	</div>
	<!-- This is inner text! -->
	<main id="innertext">

		<?php
		if($LANG_TAG=='es'){
		?>
		<h1 class="page-heading">Normas para el uso adecuado de datos</h1><br />
		<h2>Recomendaciones Para Citar</h2>
		<div style="margin:10px">
			Sugerimos usar el siguiente formato para citar los datos descargados desde del Consorcio de Herbarios de Líquenes:
			<div style="font-weight:bold;margin-top:10px;">
				Citación General:
			</div>
			<div style="margin:10px;">
				<?php 
				echo 'Consorcio de Herbarios de Líquenes'; 
				echo ' ('.date('Y').') '; 
				echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php. '; 
				echo 'Fecha de acceso: '.date('d m Y').'. ';
				?>
			</div>
			<div style="font-weight:bold;margin-top:10px;">
				Uso de datos de ocurrencia para instituciones específicas:
			</div>
			<div style="margin:10px;">
				Datos de biodiversidad de ocurrencias de especímenes publicado por &lt;listado de colecciones&gt;
				(obtenido de <?php echo $DEFAULT_TITLE; ?>, 
				<?php echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php'; ?>, DD-MM-YYYY)<br/><br/>
				<b>Por ejemplo:</b><br/>
				Datos de biodiversidad de ocurrencias de especímenes publicado por 
				publicado por el Herbario de Líquenes de la Universidad de Talca, Chile
				(obtenido de <?php echo $DEFAULT_TITLE; ?>, 
				<?php echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php, '.date('Y-m-d').')'; ?>
			</div>
		</div>
		<a name="occurrences"></a>
		<h2>Política de Uso de datos de ocurrencia</h2>
		<div style="margin:10px;">
			<ul>
				<li>
					Aunque el Consorcio de Herbarios de Líquenes mantiene la infraestructura para compartir datos 
					de biodiversidad, no somos responsables de la calidad de estos datos. La información disponible aquí está disponible 
					como “tal cual”. Quiere decir que, es responsabilidad de las instituciones individuales y no del Consorcio en general 
					mantener una alta calidad de sus datos. Si usted encuentra errores es necesario comunicarse directamente con el dueño 
					de los datos, es decir, el curador de la colección específica.
				</li>
				<li>
					El Consorcio <i>no</i> asume responsabilidad alguna por el mal uso o mala interpretación de los datos, 
					tampoco somos responsables de información incompleta o inadecuada. 
				</li>
				<li>
					Consideramos que es una cuestión de ética profesional reconocer el trabajo de otros científicos y citar el uso 
					de sus datos en cualquier publicación. Sugerimos contactar al investigador original directamente y pedir permiso 
					para el uso de sus datos.
				</li>
				<li>
					Solicitamos no redistribuir datos de nuestra plataforma sin permiso del dueño de esta información original. 
					Sin embargo, usted puede publicar un <i>enlace</i> a nuestra página web y recomendamos citar el Consorcio como la 
					fuente de la información que usted utilice.
				</li>
				<li>
					Los dueños de los datos compartidas por cada colección participando en el Consorcio de Herbarios de Líquenes 
					son las instituciones o personas compartiendo esta información.
				</li>
			</ul>
		</div>
		<a name="images"></a>
		<h2>Imágenes</h2>
		<div style="margin:15px;">
			Las imágenes disponibles de nuestro sitio web fueron generosamente proporcionadas por sus dueños para promover la educación y la ciencia. 
			Los autores mantienen todos sus derechos sobre ellas. Hay algunas fotos con copyright tradicional pero a menos que se indique lo contrario, 
			las imágenes están disponibles bajo licencia de Atribución-Compartir Igual, No portada (<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>): 
			Eso quiere decir que usted es libre de compartir (copiar y redistribuir el material en cualquier medio o formato) y adaptar 
			(remezclar, transformar y construir a partir del material para cualquier propósito, incluso comercialmente). Atribución: 
			Usted debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han realizado cambios. 
			Puede hacerlo en cualquier forma razonable, pero no de forma tal que sugiera que usted o su uso tienen el apoyo de la licenciante. 
			CompartirIgual: Si remezcla, transforma o crea a partir del material, debe distribuir su contribución bajo la misma licencia del original. 
			No hay restricciones adicionales (no puede aplicar términos legales ni medidas tecnológicas que restrinjan legalmente a otros a hacer 
			cualquier uso permitido por la licencia).
		</div>
		<h2>Información general sobre los datos de ocurrencias de especímenes y sus imágenes</h2> 
		<div style="margin:15px;">
			Los especímenes científicos depositados en las colecciones del Consorcio fueron preparados con mucho cuidado para mantenerlos por unos 
			cientos de años para su investigación científica. Algunos herbarios del Consorcio mantienen especímenes colectados hace más de 100 años. 
			Muchas de las especies representadas por estos especímenes ya no se encuentran en su sitio de colecta original. Compartir estas muestras 
			en forma digital, como imagen por el Consorcio, puede ayudar en la preservación de estas muestras valiosas sin la necesidad de inadvertidamente 
			causar daño por su manipulación.<br></br>
			Por favor, antes de recolectar muestras usted necesita averiguar si es necesario tener permiso del dueño de la tierra donde se hace la recolección. 
			Para especies raras y/o amenazadas puede ser necesario obtener además un permiso adicional. En los diferentes países diferentes leyes aplican y 
			obviamente es necesario seguir todos los trámites y reglamentos necesarios. Generalmente es muy buena práctica coordinar sus esfuerzos de colecta 
			directamente con las instituciones locales, regionales y nacionales que manejan colecciones científicas. El Consorcio no es legalmente responsable 
			por los datos compartidos. Todas las bases de datos disponibles en este portal de biodiversidad, son compartidas asumiendo que todas las instituciones 
			participantes en el Consorcio ya tienen todos los permisos legales necesarios.
		</div>
		<h2>Exoneración de Responsabilidad con respeto a Lenguaje Ofensiva</h2> 
		<div style="margin:15px;">
			El Consorcio de Herbarios de Líquenes mantiene información sobre especímenes históricos de sensibilidad cultural. 
			Algunas colecciones tienen más de 200 años, y fueron recolectadas en todo el mundo. Algunos datos de estos especímenes pueden ser considerados 
			de lenguaje ofensivo. Esta información no refleja el actual punto de vista de Consorcio sino la mentalidad cultural y situación social durante la 
			época cuando los especímenes fueron recolectados y catalogados.
		</div>
		<?php
		} else {
		?>
		<h1 class="page-heading">Guidelines for Acceptable Use of Data</h1><br />
		<h2>Recommended Citation Formats</h2>
		<div style="margin:10px">
			Use one of the following formats to cite data retrieved from the <?php echo $DEFAULT_TITLE; ?> network:
			<div style="font-weight:bold;margin-top:10px;">
				General Citation:
			</div>
			<div style="margin:10px;">
				<?php 
				echo $DEFAULT_TITLE.' ('.date('Y').') '; 
				echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php. '; 
				echo 'Accessed on '.date('F d').'. '; 
				?>
			</div>
			<div style="font-weight:bold;margin-top:10px;">
				Usage of occurrence data from specific institutions:
			</div>
			<div style="margin:10px;">
				Biodiversity occurrence data published by: &lt;List of Collections&gt; 
				(Accessed through <?php echo $DEFAULT_TITLE; ?> Data Portal, 
				<?php echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php'; ?>, YYYY-MM-DD)<br/><br/>
				<b>For example:</b><br/>
				Biodiversity occurrence data published by: 
				Arizona State University, Field Museum of Natural History, and New York Botanical Garden 
				(Accessed through <?php echo $DEFAULT_TITLE; ?> Data Portal, 
				<?php echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php, '.date('Y-m-d').')'; ?>
			</div>
		</div>
		<a name="occurrences"></a>
		<h2>Occurrence Record Use Policy</h2>
		<div style="margin:10px;">
			<ul>
				<li>
					While the <?php echo $DEFAULT_TITLE; ?> will make every effort possible to control and document the quality 
					of the data it publishes, the data are made available "as is". Any report of errors in the data should be 
					directed to the appropriate curators and/or collections managers. 
				</li>
				<li>
					The <?php echo $DEFAULT_TITLE; ?> cannot assume responsibility for damages resulting from misuse or 
					misinterpretation of datasets or from errors or omissions that may exist in the data. 
				</li>
				<li>
					It is considered a matter of professional ethics to cite and acknowledge the work of other scientists that 
					has resulted in data used in subsequent research. We encourage users to 
					contact the original investigator responsible for the data that they are accessing. 
				</li>
				<li>
					The <?php echo $DEFAULT_TITLE; ?> asks that data are <i>not</i> redistributed from this site without written permission by the owners of these data sets. 
					However, links or references to this site may be freely posted.
				</li>
				<li>
					Every collection participating in the <?php echo $DEFAULT_TITLE; ?> maintains full ownership of the data shared here.
				</li>
			</ul>
		</div>
		<a name="images"></a>
		<h2>Images</h2>
		<div style="margin:15px;">
			Images within this website have been generously contributed by their owners to promote education and research. 
			Contributors retain full copyright for all of their images. However, unless specifically stated otherwise, authors 
			have agreed to share their images under a Creative Commons Attribution-ShareAlike 3.0 Unported (<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>)  license: 
			Users are allowed to <b>share</b> (copy and redistribute the material in any medium or format) and <b>adapt</b> 
			(remix, transform, and build upon the material for any purpose, even commercially). Attribution: You must give appropriate credit, 
			provide a link to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that 
			suggests the licensor endorses you or your use. ShareAlike: If you remix, transform, or build upon the material, you must distribute 
			your contributions under the <b>same</b> license as the original. No additional restrictions (you may not apply legal terms or 
			technological measures that legally restrict others from doing anything the license permits). 
		</div>
		<h2>Notes on Specimen Records and Images</h2> 
		<div style="margin:15px;">
			Specimens are used for scientific research and because of skilled preparation and 
			careful use they may last for hundreds of years. Some collections have specimens 
			that were collected over 100 years ago that may no longer be found within the original collection area. 
			By making these specimens available on the web as images, their availability and 
			value improves without an increase in inadvertent damage caused by use. <br>
			Please note that collecting specimens in most cases will require permission of the landowner. 
			In the case of rare and endangered species, additional permits may also be required. In different countries, 
			different laws may apply and it should be obvious that these regulations need to be adhered to. It is best to 
			coordinate such efforts with a regional or national institution that manages publicly accessible collections. 
			The Consortium is not legally responsible for any data being shared by any contributor. All data sets made 
			available through this biodiversity data portal are shared here assuming that legal collection requirements 
			have been adhered to by the different participating institutions that provide this information.
		</div>
		<h2>Disclaimer Regarding Offensive Language</h2> 
		<div style="margin:15px;">
			<?php echo $DEFAULT_TITLE; ?> may contain specimens and
			historical records that are culturally sensitive. The collections include specimens
			dating back over 200 years collected from all around the world. Some records may also
			include offensive language. These records do not reflect <?php echo $DEFAULT_TITLE; ?>’s current viewpoint
			but rather the social attitudes and circumstances of the time period when specimens were collected or cataloged.
		</div> 
		<?php
		}
		?>
	</main>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>