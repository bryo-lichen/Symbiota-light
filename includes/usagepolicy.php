<?php
//error_reporting(E_ALL);
 include_once('../config/symbini.php');
 include_once('content/lang/index.'.$LANG_TAG.'.php');
 header("Content-Type: text/html; charset=".$charset);
 
?>
<html>
	<?php
	if($LANG_TAG=='en'){
	?>
	<head>
		<title><?php echo $defaultTitle; ?> Data Usage Guidelines</title>
		<?php
		$activateJQuery = false;
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<?php
	} else {
	?>
	<head>
		<title><?php echo $defaultTitle; ?> Política de Uso de Datos</title>
		<?php
		$activateJQuery = false;
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<?php
	}
	?>
	<body>
		<?php
		$displayLeftMenu = true;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<!-- This is inner text! -->
		<?php
			if($LANG_TAG=='en'){
		?>
		<div id="innertext">
			
			<h1>Guidelines for Acceptable Use of Data</h1><br />

			<h2>Recommended Citation Formats</h2>
			<div style="margin:10px">
				Use one of the following formats to cite data retrieved from CHLAL:
				<div style="font-weight:bold;margin-top:10px;">
					General Citation:
				</div>
				<div style="margin:10px;">
					<?php 
					echo 'Consorcio de Herbarios de Líquenes en América Latina [CHLAL]'. '.date('Y')'; 
					echo 'http//:'.$_SERVER['HTTP_HOST'].$clientRoot.(substr($clientRoot,-1)=='/'?'':'/') . '.'; 
					echo 'Accessed on '.date('F d').'. '; 
					?>
				</div>
				
				<div style="font-weight:bold;margin-top:10px;">
					Usage of occurrence data from specific institutions:
				</div>
				<div style="margin:10px;">
					Biodiversity occurrence data published by: &lt;List of Collections&gt; 
					(Accessed through the CHLAL Data Portal, 
					<?php echo 'http//:'.$_SERVER['HTTP_HOST'].$clientRoot.(substr($clientRoot,-1)=='/'?'':'/chlal/'); ?>, YYYY-MM-DD)<br/><br/>
					<b>For example:</b><br/>
					Biodiversity occurrence data published by: 
					Field Museum of Natural History, Museum of Vertebrate Zoology, and New York Botanical Garden 
					(Accessed through the CHLAL Data Portal, 
					<?php echo 'https://lichenportal.org/chlal/. ' . '.date('Y-m-d').')'; ?>
				</div>
			</div>
			<div>
			</div>

			<a name="occurrences"></a>
			<h2>Occurrence Record Use Policy</h2>
		    <div style="margin:10px;">
				<ul>
					<li>
						While CHLAL will make every effort possible to control and document the quality 
						of the data it publishes, the data are made available "as is". Any report of errors in the data should be 
						directed to the appropriate curators and/or collections managers. 
					</li>
					<li>
						CHLAL cannot assume responsibility for damages resulting from mis-use or 
						mis-interpretation of datasets or from errors or omissions that may exist in the data. 
					</li>
					<li>
						It is considered a matter of professional ethics to cite and acknowledge the work of other scientists that 
						has resulted in data used in subsequent research. We encourages users to 
						contact the original investigator responsible for the data that they are accessing. 
					</li>
					<li>
						CHLAL asks that users not redistribute data obtained from this site without permission for data owners. 
						However, links or references to this site may be freely posted.
					</li>
				</ul>
		    </div>
		
			<a name="images"></a>
			<h2>Images</h2>
		    <div style="margin:15px;">
		    	Images within this website have been generously contributed by their owners to 
		    	promote education and research. These contributors retain the full copyright for 
		    	their images. Unless stated otherwise, images are made available under the Creative Commons
		    	Attribution-ShareAlike (<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA</a>) 
				Users are allowed to copy, transmit, reuse, and/or adapt content, as long as attribution 
				regarding the source of the content is made. If the content is altered, transformed, or enhanced, 
				it may be re-distributed only under the same or similar license by which it was acquired. 
		    </div>

			<h2>Notes on Specimen Records and Images</h2> 
		    <div style="margin:15px;">
				Specimens are used for scientific research and because of skilled preparation and 
				careful use they may last for hundreds of years. Some collections have specimens 
				that were collected over 100 years ago that are no longer occur within the area. 
				By making these specimens available on the web as images, their availability and 
				value improves without an increase in inadvertent damage caused by use. Note that 
				if you are considering making specimens, remember collecting normally requires 
				permission of the landowner and, in the case of rare and endangered plants, 
				additional permits may be required. It is best to coordinate such efforts with a 
				regional institution that manages a publically accessible collection.
			</div> 

			<h2>Disclaimer Regarding Offensive Language</h2> 
		    <div style="margin:15px;">
				CHLAL may contain specimens and historical records that are culturally sensitive. 
			    	The collections include specimens dating back over 200 years collected from all around the world. Some records 
			    	may also include offensive language. These records do not reflect CHLAL’s current viewpoint but rather the social 
			    	attitudes and circumstances of the time period when specimens were collected or catalogued.
			</div>
			</div> 
		</div>
		<?php
			} else {
		?>
		<div id="innertext">
			
			<h1>Normas para el Uso Adecuado de Datos</h1><br />

			<h2>Recomendaciones Para Citar</h2>
			<div style="margin:10px">
				Sugerimos usar el siguiente formato para citar los datos descargados desde del CHLAL:
				<div style="font-weight:bold;margin-top:10px;">
					Citación General:
				</div>
				<div style="margin:10px;">
					<?php 
					echo 'CHLAL' . '.date('Y').'. '; 
					echo 'http//:'.$_SERVER['HTTP_HOST'].$clientRoot.(substr($clientRoot,-1)=='/'?'':'/').'index.php. '; 
					echo 'Accedido en '.date('d-m-Y').'. '; 
					?>
				</div>
				
				<div style="font-weight:bold;margin-top:10px;">
					Uso de datos de ocurrencia para instituciones específicas:
				</div>
				<div style="margin:10px;">
					<?php
					echo 'CHLAL' . '.date('Y').'. ';
					?>
					Datos de biodiversidad de ocurrencias de especímenes publicado por [listado de colecciones] (obtenido de CHLAL), 
					<?php echo 'http//:'.$_SERVER['HTTP_HOST'].$clientRoot.(substr($clientRoot,-1)=='/'?'':'/chlal/'); ?>, DD-MM-YYYY)<br/><br/>
					<b>Por ejemplo:</b><br/>
					CHLAL (2021) Datos de biodiversidad de ocurrencias de especímenes publicado por el Herbario de  
					Líquenes de la Universidad de Talca, Chile (obtenido por https://lichenportal.org/chlal/. Fecha de  
					acceso 24-05-2021)
				</div>
			</div>
			<div>
			</div>

			<a name="occurrences"></a>
				<h2>Política de Uso de Datos de Ocurrencia</h2>
		   		<div style="margin:10px;">
				<ul>
					<li>
						Aunque CHLAL mantiene la infraestructura para compartir datos de biodiversidad, 
						no somos responsables de la calidad de estos datos. La información disponible aquí está disponible como “tal cual”. 
						Quiere decir que, es responsabilidad de las instituciones individuales y no del Consorcio en general mantener una 
						alta calidad de sus datos. Si usted encuentra errores es necesario comunicarse directamente con el dueño de los datos, 
						es decir, el curador de la colección específica.
					</li>
					<li>
						CHLAL <i>no</i> asume responsabilidad alguna por el mal uso o mala interpretación de los datos, 
						tampoco somos responsables de información incompleta o inadecuada.
					</li>
					<li>
						Consideramos que es una cuestión de ética profesional reconocer el trabajo de otros científicos y citar el uso de 
						sus datos en cualquier publicación. Sugerimos contactar al investigador original directamente y pedir permiso para 
						el uso de sus datos.
					</li>
					<li>
						Solicitamos no redistribuir datos de nuestra plataforma sin permiso del dueño de esta información original. 
						Sin embargo, usted puede publicar un enlace a nuestra página web y recomendamos citar CHLAL como la fuente 
						de la información que usted utilice.
					</li>
				</ul>
		    </div>
		
			<a name="images"></a>
			<h2>Imágenes</h2>
		    <div style="margin:15px;">
		    		Las imágenes disponibles de nuestro sitio web fueron generosamente proporcionadas por sus dueños para promover 
			    la educación y la ciencia. Los autores mantienen todos sus derechos sobre ellas. Hay algunas fotos con copyright tradicional 
			    pero a menos que se indique lo contrario, las imágenes están disponibles bajo licencia de Atribución-Compartir Igual, No portada 
			    (<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA</a>). Eso quiere decir que usted es libre de compartir 
			    (copiar y redistribuir el material en cualquier medio o formato) y adaptar (remezclar, transformar y construir a partir del material 
			    para cualquier propósito, incluso comercialmente). Atribución: Usted debe dar crédito de manera adecuada, brindar un enlace a la licencia, 
			    e indicar si se han realizado cambios. Puede hacerlo en cualquier forma razonable, pero no de forma tal que sugiera que usted o su uso 
			    tienen el apoyo de la licenciante. CompartirIgual: Si remezcla, transforma o crea a partir del material, debe distribuir su contribución 
			    bajo la misma licencia del original. No hay restricciones adicionales (no puede aplicar términos legales ni medidas tecnológicas que 
			    restrinjan legalmente a otros a hacer cualquier uso permitido por la licencia). 
		    </div>

			<h2>Información general sobre los datos de ocurrencias de especímenes y sus imágenes</h2> 
		    <div style="margin:15px;">
			Los especímenes científicos depositados en las colecciones del Consorcio fueron preparados con mucho cuidado para mantenerlos por unos 
			    cientos de años para su investigación científica. Algunos herbarios del Consorcio mantienen especímenes colectados hace más de 100 
			    años. Muchas de las especies representadas por estos especímenes ya no se encuentran en su sitio de colecta original. Compartir 
			    estas muestras en forma digital, como imagen por el Consorcio, puede ayudar en la preservación de estas muestras valiosas sin la 
			    necesidad de inadvertidamente causar daño por su manipulación. 
			Por favor, antes de recolectar muestras usted necesita averiguar si es necesario tener permiso del dueño de la tierra donde se hace la 
			    recolección. Para especies raras y/o amenazadas puede ser necesario obtener además un permiso adicional. En los diferentes países 
			    diferentes leyes aplican y obviamente es necesario seguir todos los trámites y reglamentos necesarios. Generalmente es muy buena 
			    práctica coordinar sus esfuerzos de colecta directamente con las instituciones locales, regionales y nacionales que manejan colecciones 
			    científicas. El Consorcio no es legalmente responsable por los datos compartidos. Todas las bases de datos disponibles en este portal 
			    de biodiversidad, son compartidas asumiendo que todas las instituciones participantes en el Consorcio ya tienen todos los permisos 
			    legales necesarios.
			</div> 
			<h2>Exoneración de Responsabilidad con respeto a Lenguaje Ofensiva</h2> 
		    <div style="margin:15px;">
				CHLAL mantiene información sobre especímenes históricos de sensibilidad cultural. Algunas colecciones 
			    tienen más de 200 años, y fueron recolectadas en todo el mundo. Algunos datos de estos especímenes pueden ser considerados de 
			    lenguaje ofensivo. Esta información no refleja el actual punto de vista de CHLAL sino la mentalidad cultural y situación social 
			    durante la época cuando los especímenes fueron recolectados y catalogados.
			</div>
		</div>
		<?php
			}
		?>
		<?php
			include($serverRoot.'/footer.php');
		?>
	</body>
</html>
