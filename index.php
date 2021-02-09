<?php
include_once('config/symbini.php');
include_once('content/lang/index.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<?php
	$activateJQuery = true;
	include_once($SERVER_ROOT.'/includes/head.php');
	?>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="js/jquery.slides.js"></script>
	<script type="text/javascript">
		<?php include_once($SERVER_ROOT.'/includes/googleanalytics.php'); ?>
	</script>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div  id="innertext">
		<div style="float:right;margin-left:15px;">
			<div id="quicksearchdiv">
				<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Search Taxon'); ?></div>
					<input id="taxa" type="text" name="taxon" />
					<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
				</form>
			</div>
			<div style="">
				<?php
				//---------------------------SLIDESHOW SETTINGS---------------------------------------
				//If more than one slideshow will be active, assign unique numerical ids for each slideshow.
				//If only one slideshow will be active, leave set to 1.
				$ssId = 1;
				//Enter number of images to be included in slideshow (minimum 5, maximum 10)
				$numSlides = 10;
				//Enter width of slideshow window (in pixels, minimum 275, maximum 800)
				$width = 350;
				//Enter amount of days between image refreshes of images
				$dayInterval = 7;
				//Enter amount of time (in milliseconds) between rotation of images
				$interval = 7000;
				//Enter checklist id, if you wish for images to be pulled from a checklist,
				//leave as 0 if you do not wish for images to come from a checklist
				//if you would like to use more than one checklist, separate their ids with a comma ex. "1,2,3,4"
				$clid = '1279';
				//Enter field, specimen, or both to specify whether to use only field or specimen images, or both
				$imageType = 'both';
				//Enter number of days of most recent images that should be included
				$numDays = 30;

				//---------------------------DO NOT CHANGE BELOW HERE-----------------------------
				ini_set('max_execution_time', 120);
				include_once($SERVER_ROOT.'/classes/PluginsManager.php');
				$pluginManager = new PluginsManager();
				echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clid,$dayInterval,$interval);
				?>
			</div>
		</div>
		<div style="margin:20px;font-size:120%">
			<?php
			if($LANG_TAG=='en'){
				?>
				<div class="lang en" style="padding: 0px 10px;">
					<p style="margin-bottom: 2rem"><b>Good News:</b><br> ASU and collaborators were recently awarded a new <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001394" target="_blank">NSF Grant</a> to Build a <a href="https://www.idigbio.org/wiki/index.php/Building_a_global_consortium_of_bryophytes_and_lichens:_keystones_of_cryptobiotic_communities" target="_blank"><b>Global Consortium of Bryophytes and Lichens</b></a>.</p>
					<p>
						The Consortium of Latin American Lichen Herbaria (CHLAL) is an initiative of the Grupo de Liquenólogos en América Latina (GLAL) to establish a data portal for
						biodiversity information focusing on lichenized fungi from South America, Central America and the part of North America were Spanish and/or Portuguese is widely spoken.
						The Consortium of Latin American Lichen Herbaria (CHLAL) is an initiative of the Grupo de Liquenólogos en América Latina (GLAL) to establish a data portal for
						biodiversity information focusing on lichenized fungi from South America, Central America and the part of North America were Spanish and/or Portuguese is generally used.
						This region is characterized by an huge geographic and habitat diversity: from the deserts of the Sonora and Chihuahua in northern Mexico, around the Gulf of Mexico
						and across the Caribbean Islands, throughout the tropical forests of Central America and the Amazon region, along the Andes, the Galapagos Islands, the coastal Atacama
						desert of Peru and Chile, the pampas of Argentina and Uruguay, to the southernmost subpolar regions; all these environments are inhabited by an enormous lichen diversity:
						from Mexico in the north all the way to the southernmost tip of South America.
					</p>
					<p>
						The Grupo de Liquenólogos en América Latina (GLAL) is dedicated to the scientific study of lichenized fungi in this region and the principal objective of this
						website portal is to provide detailed information about the biodiversity of these organisms in this region. With its partner institutions, this Consorcio Website
						provides efficient tools to manage specimen data directly, mechanisms to establish dynamic and static species checklists for different Latin American regions
						(regionally across countries as well as on the national and local level). The site also provides a library of specimen based images from contributing institutions
						as well as a taxonomic thesaurus to facilitate the navigation of taxonomic synonyms.
					</p>
					<p>
						Currently this website still remains a pioneer initiative, a pilot project. The information available is currently based on the same database of the
						Consortium of North American Lichen Herbaria (CNALH: <a href="http://lichenportal.org">http://lichenportal.org</a>).
					</p>
					<p>
						To assure that this portal becomes more useful we invite everyone, institutions, individual researchers and students to contribute and participate.
						You are welcome to browse our site, but even more welcome to contribute; for more information how to become involved, please contact:
						<a href="mailto:CHLAL.help@gmail.com"><b>CHLAL.help@gmail.com</b></a>
					</p>
				</div>
				<?php
			}
			else{
				?>
				<div class="lang es" style="padding: 0px 10px;">
					<p style="margin-bottom: 2rem"><b>Buenas Noticias:</b><br> ASU y sus colaboradores recientemente ganaron un soporte financiero del <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001394" target="_blank">NSF</a> para construir un <a href="https://www.idigbio.org/wiki/index.php/Building_a_global_consortium_of_bryophytes_and_lichens:_keystones_of_cryptobiotic_communities" target="_blank"><b>Consorcio Global de Briofitos y Líquenes</b></a>.</p>
					<p>
						El Consorcio de Herbarios de L&iacute;quenes en Am&eacute;rica Latina (CHLAL) es una iniciativa del Grupo de Liquen&oacute;logos en Am&eacute;rica Latina (GLAL)
						para establecer un portal de informaci&oacute;n sobre la biodiversidad de l&iacute;quenes en Sudam&eacute;rica, Am&eacute;rica Central y la parte de
						Norte Am&eacute;rica donde se habla principalmente espa&ntilde;ol y/o portugu&eacute;s. Esta regi&oacute;n es caracterizada por una diversidad geogr&aacute;fica
						y ambiental gigante: desde de los desiertos de la Sonora y Chihuahua en el norte de M&eacute;xico, por el Golfo de M&eacute;xico y las islas del Caribe,
						los bosques tropicales en Am&eacute;rica Central y de la Amazon&iacute;a, las cordilleras de los Andes, las Islas Gal&aacute;pagos, los desiertos costeros de
						Per&uacute; y de Chile, las pampas de Argentina y Uruguay, hasta las regiones subpolares; todas estas regiones est&aacute;n caracterizadas por una diversidad
						de especies de l&iacute;quenes enorme: desde M&eacute;xico en el norte hasta la punta del continente en el sur.
					</p>
					<p>
						El Grupo de Liquen&oacute;logos en Am&eacute;rica Latina (GLAL) se dedica a las investigaciones cient&iacute;ficas de los hongos liquenizados en esta
						regi&oacute;n y el objetivo principal de este portal es as&iacute; proveer informaci&oacute;n detallada sobre la biodiversidad de estos organismos en esta
						regi&oacute;n. La p&aacute;gina web del Consorcio y sus socios por eso provee herramientas eficientes para el manejo de datos de colecciones de
						l&iacute;quenes, mecanismos para establecer listas din&aacute;micas y est&aacute;ticas de especies por las diferentes regiones de Am&eacute;rica Latina
						(regional, nacional y/o local), una librer&iacute;a de im&aacute;genes de l&iacute;quenes depositadas como muestras en diferentes instituciones, un
						explorador taxon&oacute;mico para facilitar el manejo de la sinonimia en la regi&oacute;n.
					</p>
					<p>
						A la fecha esta p&aacute;gina todav&iacute;a representa un proyecto piloto. La informaci&oacute;n actualmente en l&iacute;nea es basado todav&iacute;a
						en las mismas bases de datos como el Consortium of North American Lichen Herbaria (CNALH: <a href="http://lichenportal.org">http://lichenportal.org</a>).
					</p>
					<p>
						Para que crece este proyecto y para la informaci&oacute;n sea m&aacute;s &uacute;til para Am&eacute;rica Latina ¡estamos invitando a todos ustedes!
						Est&aacute;n muy bienvenidos participar. Invitamos a cualquier instituci&oacute;n, estudiantes y/o investigadores individuales contribuir su
						informaci&oacute;n y utilizar las herramientas que ofrecemos; para m&aacute;s informaci&oacute;n detallada de c&oacute;mo involucrarse al Consorcio de
						Herbarios de Am&eacute;rica Latina por favor p&oacute;nganse en contacto con: <a href="mailto: CHLAL.help@gmail.com"><b>CHLAL.help@gmail.com</b></a>
					</p>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
