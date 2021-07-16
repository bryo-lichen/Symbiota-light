<?php
include_once("config/symbini.php");
header("Content-Type: text/html; charset=ISO-8859-1");
?>
<html>
<head>
	<title>Consortium of North American Lichen Herbaria</title>
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<?php
	$activateJQuery = true;
	include_once($SERVER_ROOT.'/includes/head.php');
	?>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="js/jquery.slides.js"></script>
	<meta name='keywords' content='lichens,natural history collections,flora,checklists,species lists' />
	<script type="text/javascript">
		<?php include_once($SERVER_ROOT.'/includes/googleanalytics.php'); ?>
	</script>
</head>
<body>
	<?php
	$displayLeftMenu = true;
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<div id="innertext" style="">
		<div style="float:right;margin-left:15px;margin-right:25px">
			<div id="quicksearchdiv" style="width:400px;border:#000000 solid 0px;">
				<div style="margin-left:auto;margin-right:auto;width:360px">
					<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
					<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
						<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Search Taxon'); ?></div>
						<input id="taxa" type="text" name="taxon" style="width:275px" />
						<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms">
							<?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?>
						</button>
					</form>
				</div>
			</div>
			<div style="width:400px;">
				<?php
				$ssId = 1;
				$numSlides = 10;
				$width = 350;
				$dayInterval = 7;
				$clid = 1251;
				$imageType = "both";
				$numDays = 240;

				ini_set('max_execution_time', 120); //300 seconds = 5 minutes
				include_once('classes/PluginsManager.php');
				$pluginManager = new PluginsManager();
				echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clid,$dayInterval);
				?>
			</div>
 		</div>
		<div style="margin:30px;font-size:130%">
			<?php
			if($LANG_TAG=='en'){
				//Text in this block is English
				?>
				<div>
					<p>
						<b>Announcement</b>: We would like to invite you to participate in our workshop "<a href=https://doity.com.br/ial9/blog/workshops>Manejo de muestras y listas de especies 
						de l&iacute;quenes en el Consorcio de Herbarios de L&iacute;quenes en Am&eacute;rica Latina (CHLAL)</a>", a virtual workshop to take place at this year's International Symbosium of the 
						International Association for Lichenology (<a href=https://doity.com.br/ial9>IAL9</a>), August 7-9, from 12 noon - 7 pm (Brazilian time zone). The workshop is in Spanish 
						(both tutors also speak English, but the focus is on an audience of participants from Latin America).
					</p>
					<p style="margin-bottom: 2rem">
						<b>NEW:</b> In collaboration with the <a href="https://www.iucnredlist.org/" target ="_blank">IUCN</a>, the <span style="color:red;font-weight:bold">IUCN Global Red-List</span>
						<a href="https://lichenportal.org/cnalh/checklists/checklist.php?clid=1430&pid=0" target ="_blank"> is now featured on CNALH</a>.
						<br>For all species included in the global red-list, the taxon profiles now also include red-listing information, e.g., checkout the profile of <a href="https://lichenportal.org/cnalh/taxa/index.php?taxon=Mobergia%20calculiformis&formsubmit=Search%20Terms" target ="_blank"><i>Mobergia calculiformis</i></a>.
					</p>
					<div style="">
						The <b>Consortium of North American Lichen Herbaria</b> (CNALH) serves as a gateway to biodiversity data of lichenized fungi
						throughout North America. It provides access to an array of different resources: specimen records, field observations,
						dynamic and static checklists, images, interactive keys, and a taxonomic thesaurus.
					</div>
					<div style="margin-top:10px;">
						As a regular visitor, we invite you to join. Create your own <a href="profile/newprofile.php">account</a> today!
						If you need access to specific resources, want to contribute occurrence records or images, report errors or simply provide
						feedback please do not hesitate to contact us at
						<a class="bodylink" href="mailto:CNALH.help@gmail.com">CNALH.help@gmail.com</a>
					</div>
				</div>
				<div style="width:450px;margin-top:30px;">
					<div style="font-weight:bold;font-size:110%;">
						News and Events
					</div>
					<ul>
						<li>
							<b>April 2021</b> - The GLOBAL Bryophytes and Lichens Network, funded by the recent NSF Grant, launched a <a href="https://globaltcn.utk.edu/" target="_blank">new project website</a>, which includes a description of the project, digitization resources, and education and outreach material.
						</li>
						<li>
							<b>January 2021</b> - Welcome our new portal manager Katie Pearson.
						</li>
						<li>
							<b>September 2020</b> - ASU and collaborators were recently awarded a new <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001394" target="_blank">NSF Grant</a> to Build a <a href="https://www.idigbio.org/wiki/index.php/Building_a_global_consortium_of_bryophytes_and_lichens:_keystones_of_cryptobiotic_communities" target="_blank"><b>Global Consortium of Bryophytes and Lichens</b></a>.
						</li>
						<li>
							<b>July 2019</b> - We now launched <a href="http://help-resources.lichenportal.org" target="_blank"><B> CNALH Help &amp; Resources</b></a>, a site with tutorials how to join and participate, and some useful programs that can be downloaded.
						</li>
						<li>
							<b>August  2018</b> - ASU receives a  multimillion dollar grant from NSF to create the new
							<a href="https://biorepo.neonscience.org/"><b>NEON biorepository</b></a>;
							these funds will substantially strengthen the Symbiota software platform and add new functionality from which CNALH will benefit significantly as well.
						</li>
					</ul>
				</div>
				<?php
			}
			else{
				//Text in this block is Spanish
				?>
				<div>
					<p>
						<b>ANUNCIO</b>: Les invitamos participar en el taller virtual "<a href=https://doity.com.br/ial9/blog/workshops>Manejo de muestras y listas de especies 
						de l&iacute;quenes en el Consorcio de Herbarios de L&iacute;quenes en Am&eacute;rica Latina (CHLAL)</a>", en el congreso internacional del International Association for Lichenology (<a href=https://doity.com.br/ial9>IAL9</a>), 
						7 y 8 de Agosto (12 medio día – 7 pm, hora de Brazil). El taller es en espa&ntilde;ol.
					</p>
					<p style="margin-bottom: 2rem">
						<b>Nuevo:</b> En colaboraci&oacute;n con la <a href="https://www.iucnredlist.org/" target ="_blank">IUCN</a>, la <span style="color:red;font-weight:bold">Lista Roja</span>
						<a href="https://lichenportal.org/cnalh/checklists/checklist.php?clid=1430&pid=0" target ="_blank"> ahora est&aacute; disponible desde del CNLAH</a>.
						<br>Para todas las especies incluidas en la Lista Roja Global, ahora tambi&eacute;n se incluyen sus características taxon&oacute;micas, aqu&iacute; un ejemplo: 
						el perfil de <a href="https://lichenportal.org/cnalh/taxa/index.php?taxon=Mobergia%20calculiformis&formsubmit=Search%20Terms" target ="_blank"><i>Mobergia calculiformis</i></a>.
					</p>
					<div style="">
						El <b>Consorcio de Herbarios de L&iacute;quenes en Norteam&eacute;rica</b> (CNALH) establece un puente de conexi&oacute;n de datos de diversidad de 
						hongos liquenizados a trav&eacute;s de Norteam&eacute;rica. Provee acceso a diferentes fuentes de informaci&oacute;n: un registro de espec&iacute;menes, 
						observaciones de la distribuci&oacute;n de especies, mecanismos para establecer listas de especies din&aacute;micas y est&aacute;ticas, im&aacute;genes, 
						claves interactivas, y un tesauro taxon&oacute;mico.
					</div>
					<div style="margin-top:10px;">
						Como visitante regular, te invitamos a unirte. &iexcl;Crea tu propia cuenta hoy d&iacute;a! Si necesitas acceso a recursos espec&iacute;ficos, 
						deseas contribuir con im&aacute;genes o registros, reportar errores o simplemente aportar feedback, por favor no dudes en contactarnos 
						a <a class="bodylink" href="mailto:CNALH.help@gmail.com">CNALH.help@gmail.com</a>.
					</div>
				</div>
				<div style="width:450px;margin-top:30px;">
					<div style="font-weight:bold;font-size:110%;">
						NOTICIAS Y EVENTOS
					</div>
					<ul>
						<li>
							<b>Abril 2021</b> - La Red Global de Briofitas y L&iacute;quenes recibi&oacute; un soporte financiero del NSF, lanzando un 
							<a href="https://globaltcn.utk.edu/" target="_blank">sitio web</a> para el nuevo proyecto, el que incluye descripci&oacute;n del 
							proyecto, recursos digitales, educaci&oacute;n y material 
							de alcance para todos.
						</li>
						<li>
							<b>Enero 2021</b> - Le damos la bienvenida a nuestra gerente del nuevo portal Katie Pearson.
						</li>
						<li>
							<b>Septiembre 2020</b> - La Universidad del Estado de Arizona, ASU, y sus colaboradores fueron galardonados 
							con un nuevo soporte <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001394" target="_blank">financiero&acute;de NSF</a> para crear un <a href="https://www.idigbio.org/wiki/index.php/Building_a_global_consortium_of_bryophytes_and_lichens:_keystones_of_cryptobiotic_communities" target="_blank"><b>Consorcio Global de Briofitas y L&iacute;quenes</b></a>.
						</li>
						<li>
							<b>Julio 2019</b> -  Hemos lanzado <a href="http://help-resources.lichenportal.org" target="_blank"><B> Ayuda y Recursos CNALH</b></a>, 
							un sitio con tutoriales donde se explica c&oacute;mo unirse y participar, y c&oacute;mo descargar programas &uacute;tiles.
						</li>
						<li>
							<b>Agosto  2018</b> - ASU recibe un multi millonario aporte financiero de NSF para crear el nuevo 
							<a href="https://biorepo.neonscience.org/"><b>NEON biorepositorio</b></a>; estos fondos fortalecer&aacute;n sustancialmente 
							la plataforma del software de la Simbiota y a&ntilde;adir nueva funcionalidad donde la CNALH tambi&eacute;n se beneficiar&aacute;.
						</li>
					</ul>
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
