<?php
include_once('../config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/usagepolicy.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/usagepolicy.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/usagepolicy.' . $LANG_TAG . '.php');
include_once ($SERVER_ROOT . '/classes/utilities/GeneralUtil.php');
header("Content-Type: text/html; charset=" . $CHARSET);
$serverHost = GeneralUtil::getDomain();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $DEFAULT_TITLE . ' ' . $LANG['DATA_USAGE_GUIDELINES'] ?></title>
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
		<a href="<?php echo htmlspecialchars($CLIENT_ROOT, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/index.php"><?= $LANG['HOME'] ?></a> &gt;&gt;
		<b><?php $LANG['DATA_USAGE_GUIDELINES'] ?></b>
	</div>
	<!-- This is inner text! -->
	<?php
		if($LANG_TAG == 'es'){
	?>
		<div role="main" id="innertext">
		<h1 class="page-heading">Normas para el uso adecuado de datos</h1>
		<h2>Recomendaciones Para Citar</h2>
		<p>Sugerimos usar el siguiente formato para citar los datos descargados desde del Consorcio de Herbarios de Briófitas:</p>
		<h3>Citación General</h3>
		<blockquote>
			<?php
			if (file_exists($SERVER_ROOT . '/includes/citationportal.php')) {
				include($SERVER_ROOT . '/includes/citationportal.php');
			}
			else {
				echo 'Datos de biodiversidad de ocurrencias de especímenes publicado por: ';
				if ($DEFAULT_TITLE) {
					echo $DEFAULT_TITLE;
				}
				else {
					echo 'Nombre de las personas o institución responsables del mantenimiento del portal';
				};
				echo ' (Se accede a través de la ';
				if ($DEFAULT_TITLE) {
					echo $DEFAULT_TITLE;
				}
				else {
					echo 'Nombre de las personas o institución responsables del mantenimiento del portal';
				};
				echo ', ' . $serverHost . $CLIENT_ROOT . ', ' . date('Y-m-d') . ').';
			};
			?>
		</blockquote>

		<h3>Uso de datos de ocurrencia para instituciones específicas: </h3>
		<p>Acceda a la página de perfil de cada colección para encontrar los formatos de cita disponibles.</p>
		<h4>Por ejemplo:</h4>
		<blockquote>
			<?php
			$collData['collectionname'] = 'Nombre de la Institución o Colección';
			$collData['dwcaurl'] = $serverHost . $CLIENT_ROOT . '/portal/content/dwca/NIC_DwC-A.zip';
			if (file_exists($SERVER_ROOT . '/includes/citationcollection.php')) {
				include($SERVER_ROOT . '/includes/citationcollection.php');
			} else {
				echo "Nombre de la Institución o Colección. Ensemble de données d'occurrence " . 'http://gh.local/Symbiota/portal/content/dwca/' . 'accessed via the ' . 'Fresh Symbiota Install' . ' Portal, ' . 'http://gh.local/Symbiota' . ', 2022-07-25.';
			}
			?>
		</blockquote>

		<h2>Política de Uso de datos de ocurrencia</h2>
		<div>
			<ul>
				<li>
					Aunque <?php echo $DEFAULT_TITLE; ?> mantiene la infraestructura para compartir datos de biodiversidad, no somos responsables 
					de la calidad de estos datos. La información disponible aquí está disponible como "tal cual". Quiere decir que, 
					es responsabilidad de las instituciones individuales y no del Consorcio en general mantener una alta calidad de sus datos. 
					Si usted encuentra errores es necesario comunicarse directamente con el dueño de los datos, es decir, el curador de la colección específica. 
				</li>
				<li>
					<?php echo $DEFAULT_TITLE; ?> no asume responsabilidad alguna por el mal uso o mala interpretación de los datos, tampoco somos responsables 
					de información incompleta o inadecuada. 
				</li>
				<li>
					Consideramos que es una cuestión de ética profesional reconocer el trabajo de otros científicos y citar el uso de sus 
					datos en cualquier publicación. Sugerimos contactar al investigador original directamente y pedir permiso para el uso de sus datos. 
				</li>
				<li>
					Solicitamos no redistribuir datos de nuestra plataforma sin permiso del dueño de esta información original. Sin embargo, usted puede publicar 
					un enlace a nuestra página web y recomendamos citar <?php echo $DEFAULT_TITLE; ?> como la fuente de la información que usted utilice. 
				</li>
				<li>
					Los dueños de los datos compartidas por cada colección participando en <?php echo $DEFAULT_TITLE; ?> son las instituciones o 
					personas compartiendo esta información. 
				</li>
			</ul>
		</div>

		<h2>Imágenes</h2>
		<p>
			Las imágenes disponibles de nuestro sitio web fueron generosamente proporcionadas por sus dueños para promover la educación y la ciencia. 
			Los autores mantienen todos sus derechos sobre ellas. Hay algunas fotos con copyright tradicional pero a menos que se indique lo contrario, 
			las imágenes están disponibles bajo licencia de Atribución-Compartir Igual, No portada (<a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA</a>): Eso quiere decir que usted es libre de compartir 
			(copiar y redistribuir el material en cualquier medio o formato) y adaptar (remezclar, transformar y construir a partir del material para cualquier 
			propósito, incluso comercialmente). Atribución: Usted debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han 
			realizado cambios. Puede hacerlo en cualquier forma razonable, pero no de forma tal que sugiera que usted o su uso tienen el apoyo de la 
			licenciante. CompartirIgual: Si remezcla, transforma o crea a partir del material, debe distribuir su contribución bajo la misma licencia 
			del original. No hay restricciones adicionales (no puede aplicar términos legales ni medidas tecnológicas que restrinjan legalmente a 
			otros a hacer cualquier uso permitido por la licencia).
		</p>

		<h2>Información general sobre los datos de ocurrencias de especímenes y sus imágenes</h2>
		<p>Los especímenes se utilizan para la investigación científica y, gracias a una preparación experta y un uso cuidadoso, pueden durar cientos de años. 
			Algunas colecciones contienen especímenes recolectados hace más de 100 años que ya no se encuentran en la zona. Al publicar estos especímenes en 
			la web como imágenes, su disponibilidad y valor aumentan sin aumentar los daños accidentales causados por su uso. Tenga en cuenta que, si está 
			considerando recolectar especímenes, la recolección normalmente requiere el permiso del propietario del terreno y, en el caso de plantas raras 
			y en peligro de extinción, podrían requerirse permisos adicionales. Es recomendable coordinar estas iniciativas con una institución regional 
			que gestione una colección de acceso público.
		</p>

		<p><b>Exoneración de Responsabilidad con respeto a Lenguaje Ofensiva:</b> <?php echo $DEFAULT_TITLE; ?> mantiene información sobre especímenes 
		históricos de sensibilidad cultural. Algunas colecciones tienen más de 200 años, y fueron recolectadas en todo el mundo. Algunos datos de estos especímenes 
		pueden ser considerados de lenguaje ofensivo. Esta información no refleja el actual punto de vista de <?php echo $DEFAULT_TITLE; ?> sino la mentalidad cultural y 
		situación social durante la época cuando los especímenes fueron recolectados y catalogados. 
		</p>
	</div>
	<?php
		}else if($LANG_TAG == 'fr'){
	?>
		<div role="main" id="innertext">
		<h1 class="page-heading">Lignes directrices pour une utilisation acceptable des données</h1>
		<h2>Formats de citation recommandés</h2>
		<p>Utilisez l'un des formats suivants pour citer les données extraites du réseau du <?php echo $DEFAULT_TITLE; ?>:</p>
		<h3>Citation générale:</h3>
		<blockquote>
			<?php
			if (file_exists($SERVER_ROOT . '/includes/citationportal.php')) {
				include($SERVER_ROOT . '/includes/citationportal.php');
			}
			else {
				echo 'Données sur la présence de biodiversité publiées par: ';
				if ($DEFAULT_TITLE) {
					echo $DEFAULT_TITLE;
				}
				else {
					echo "Nom des personnes ou de l'institution responsables de la maintenance du portail";
				};
				echo ' (accessible via le ';
				if ($DEFAULT_TITLE) {
					echo $DEFAULT_TITLE;
				}
				else {
					echo "Nom des personnes ou de l'institution responsables de la maintenance du portail";
				};
				echo ', ' . $serverHost . $CLIENT_ROOT . ', ' . date('Y-m-d') . ').';
			};
			?>
		</blockquote>

		<h3>Utilisation des données d'occurrence provenant d'institutions spécifiques:</h3>
		<p>Accédez à chaque page de profil de collection pour trouver les formats de citation disponibles.</p>
		<h4>Par exemple:</h4>
		<blockquote>
			<?php
			$collData['collectionname'] = "Nom de l'institution ou de la collection";
			$collData['dwcaurl'] = $serverHost . $CLIENT_ROOT . '/portal/content/dwca/NIC_DwC-A.zip';
			if (file_exists($SERVER_ROOT . '/includes/citationcollection.php')) {
				include($SERVER_ROOT . '/includes/citationcollection.php');
			} else {
				echo "Nom de l'institution ou de la collection. Ensemble de données d'occurrence " . 'http://gh.local/Symbiota/portal/content/dwca/' . 'accessible via le ' . 'Fresh Symbiota Install ' . 'Portal, ' . 'http://gh.local/Symbiota' . ', 2022-07-25.';
			}
			?>
		</blockquote>

		<h2>Politique d'utilisation des données d'occurrence</h2>
		<div>
			<ul>
				<li>
					Bien que <?php echo $DEFAULT_TITLE; ?> mette tout en œuvre pour contrôler et documenter la qualité des données qu'il publie, 
					celles-ci sont mises à disposition « en l'état ». Tout signalement d'erreur dans les données doit être adressé aux conservateurs 
					et/ou gestionnaires de collections concernés.
				</li>
				<li>
					<?php echo $DEFAULT_TITLE; ?> décline toute responsabilité pour les dommages résultant d'une mauvaise utilisation ou 
					interprétation des données, ou d'erreurs ou omissions pouvant y figurer.
				</li>
				<li>
					Il est considéré comme une question d'éthique professionnelle de citer et de reconnaître les travaux d'autres scientifiques ayant 
					donné lieu à des données utilisées dans des recherches ultérieures. Nous encourageons les utilisateurs à contacter le chercheur 
					initial responsable des données auxquelles ils accèdent.
				</li>
				<li>
					<?php echo $DEFAULT_TITLE; ?> demande que les données de ce site ne soient pas redistribuées sans l'autorisation écrite des propriétaires de ces données. 
					Cependant, les liens ou références vers ce site peuvent être publiés librement.
				</li>
				<li>
					Chaque collection participant au <?php echo $DEFAULT_TITLE; ?> conserve l'entière propriété des données partagées ici.
				</li>
			</ul>
		</div>

		<h2>Images</h2>
		<p>
			Les images de ce site web ont été généreusement mises à disposition par leurs propriétaires afin de promouvoir l'éducation et la recherche. 
			Les contributeurs conservent l'intégralité des droits d'auteur sur toutes leurs images. Cependant, sauf mention contraire, les auteurs ont 
			accepté de partager leurs images sous une licence Creative Commons Attribution-ShareAlike 3.0 Unported (<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">CC BY-SA</a>). Les utilisateurs sont 
			autorisés à partager (copier et redistribuer le contenu sur tout support et dans tout format) et à l'adapter (remixer, transformer et développer 
			le contenu à toutes fins, même commerciales). Attribution : Vous devez mentionner la source, fournir un lien vers la licence et indiquer si des 
			modifications ont été apportées. Vous pouvez le faire de toute manière raisonnable, mais pas d'une façon qui suggérerait que le concédant vous 
			soutient ou soutient votre utilisation. Partage dans les mêmes conditions : Si vous remixez, transformez ou développez le contenu, vous devez 
			distribuer vos contributions sous la même licence que l'original. Aucune restriction supplémentaire n'est autorisée (vous ne pouvez pas appliquer 
			de clauses légales ou de mesures techniques empêchant légalement d'autres personnes d'effectuer les actions autorisées par la licence).	
		</p>

		<h2>Notes sur les enregistrements et les images des spécimens</h2>
		<p>Les spécimens sont utilisés pour la recherche scientifique et, grâce à une préparation soignée et à une utilisation rigoureuse, 
			ils peuvent durer des centaines d'années. Certaines collections contiennent des spécimens collectés il y a plus de 100 ans, 
			qui pourraient ne plus être retrouvés dans leur zone de collecte d'origine. La mise à disposition de ces spécimens sur le web 
			sous forme d'images améliore leur disponibilité et leur valeur sans augmenter les dommages accidentels causés par leur utilisation.
		</p>

		<p><b>Avis de non-responsabilité concernant le langage offensant:</b> <?php echo $DEFAULT_TITLE; ?> peut contenir des spécimens et des documents 
		historiques culturellement sensibles. Les collections comprennent des spécimens datant de plus de 200 ans, collectés dans le monde entier. 
		Certains documents peuvent également contenir des propos offensants. Ces documents ne reflètent pas le point de vue actuel du 
		<?php echo $DEFAULT_TITLE; ?>, mais plutôt les mentalités et les circonstances sociales de l'époque où les spécimens ont été collectés ou catalogués.
		</p>
	</div>
	<?php
	} else {
	?>
	<div role="main" id="innertext">
		<h1 class="page-heading">Guidelines for Acceptable Use of Data</h1>
		<h2>Recommended Citation Formats</h2>
		<p>Use one of the following formats to cite data retrieved from the <?php echo $DEFAULT_TITLE; ?> network:</p>
		<h3>General Citation</h3>
		<blockquote>
			<?php
			if (file_exists($SERVER_ROOT . '/includes/citationportal.php')) {
				include($SERVER_ROOT . '/includes/citationportal.php');
			}
			else {
				echo 'Biodiversity occurrence data published by: ';
				if ($DEFAULT_TITLE) {
					echo $DEFAULT_TITLE;
				}
				else {
					echo 'Name of people or institutional reponsible for maintaining the portal';
				};
				echo ' (accessed through the ';
				if ($DEFAULT_TITLE) {
					echo $DEFAULT_TITLE;
				}
				else {
					echo 'Name of people or institutional reponsible for maintaining the portal';
				};
				echo ' Portal, ' . $serverHost . $CLIENT_ROOT . ', ' . date('Y-m-d') . ').';
			};
			?>
		</blockquote>

		<h3>Usage of occurrence data from specific institutions</h3>
		<p>Access each collection profile page to find the available citation formats.</p>
		<h4>Example</h4>
		<blockquote>
			<?php
			$collData['collectionname'] = 'Name of Institution or Collection';
			$collData['dwcaurl'] = $serverHost . $CLIENT_ROOT . '/portal/content/dwca/NIC_DwC-A.zip';
			if (file_exists($SERVER_ROOT . '/includes/citationcollection.php')) {
				include($SERVER_ROOT . '/includes/citationcollection.php');
			} else {
				echo 'Name of Institution or Collection. Occurrence dataset ' . 'http://gh.local/Symbiota/portal/content/dwca/' . 'accessed via the' . ' Fresh Symbiota Install ' . 'Portal, ' . 'http://gh.local/Symbiota' . ', 2022-07-25.';
			}
			?>
		</blockquote>

		<h2>Occurrence Record Use Policy</h2>
		<div>
			<ul>
				<li>
					While <?php echo $DEFAULT_TITLE; ?> will make every effort possible to control and document the quality
					of the data it publishes, the data are made available "as is". Any report of errors in the data should be
					directed to the appropriate curators and/or collections managers.
				</li>
				<li>
					<?php echo $DEFAULT_TITLE; ?> cannot assume responsibility for damages resulting from misuse or
					misinterpretation of datasets or from errors or omissions that may exist in the data.
				</li>
				<li>
					It is considered a matter of professional ethics to cite and acknowledge the work of other scientists that
					has resulted in data used in subsequent research. We encourages users to
					contact the original investigator responsible for the data that they are accessing.
				</li>
				<li>
					<?php echo $DEFAULT_TITLE; ?> asks that users not redistribute data obtained from this site without permission for data owners.
					However, links or references to this site may be freely posted.
				</li>
			</ul>
		</div>

		<h2>Images</h2>
		<p>Images within this website have been generously contributed by their owners to promote education and research. These contributors retain the full copyright for their images.
		Unless stated otherwise, images are made available under the Creative Commons Attribution-ShareAlike
		(<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank">CC BY-SA</a>).
		Users are allowed to copy, transmit, reuse, and/or adapt content, as long as attribution regarding the source of the content is made. If the content is altered, transformed,
		or enhanced, it may be re-distributed only under the same or similar license by which it was acquired.
		</p>

		<h2>Notes on Specimen Records and Images</h2>
		<p>Specimens are used for scientific research and because of skilled preparation and careful use they may last for hundreds of years. Some collections have specimens that were
		collected over 100 years ago that are no longer occur within the area. By making these specimens available on the web as images, their availability and value improves without
		an increase in inadvertent damage caused by use. Note that if you are considering making specimens, remember collecting normally requires permission of the landowner and,
		in the case of rare and endangered plants, additional permits may be required. It is best to coordinate such efforts with a regional institution that manages a publicly
		accessible collection.
		</p>

		<p><b>Disclaimer:</b> This data portal may contain specimens and historical records that are culturally sensitive. The collections include specimens dating back over 200 years
		collected from all around the world. Some records may also include offensive language. These records do not reflect the portal community's current viewpoint but rather the
		social attitudes and circumstances of the time period when specimens were collected or cataloged.
		</p>
	</div>
	<?php
	}
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>

</html>