<?php
include_once("config/symbini.php");
header("Content-Type: text/html; charset=ISO-8859-1");
?>
<html>
<head>
	<title>
	<?php if($LANG_TAG=='es'){
	?>
		Consorcio de Herbarios de L&iacute;quenes
	<?php
	}
	else {
	?>
		Consortium of Lichen Herbaria
	<?php
	}
	?>
	</title>
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
				if($LANG_TAG=='es'){
					$clid = 1279;
				}
				else{
					$clid = 1251;
				}
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
					<p style="margin-bottom: 2rem">
						<b>Welcome:</b> The <i>Consortium of Lichen Herbaria</i> has just been launched!
					</p>
					<div style="">
						The <i>Consortium</i> serves as gateway to biodiversity data of lichenized fungi. 
						It unites records not only from lichen herbaria in North America, but also from 
						herbaria in Latin America, Europe, Asia, Oceania, as well as personal collections 
						and research observations.
					</div>
					<div style="margin-top:10px;">
						Since its inauguration the <i>Consortium of North American Lichen Herbaria</i> (CNALH) has continuously grown, 
						and the launch of the <i>Consorcio de Herbarios de L&iacute;quenes en Am&eacute;rica Latina</i> (CHLAL) has been such a success 
						that we decided to merge existing biodiversity data platforms to better serve the community.
					</div>
					<div style="margin-top:10px;">
						Uniting these resources has many benefits: Less maintenance of a single platform means that we can focus more 
						on development and improving functionality. We currently serve the data through two language interfaces: English 
						and Spanish. A French user interface is in development.
					</div>
					<div style="margin-top:10px;">
						The website unites all resources previously offered through the <i>Consortium of North American Lichen Herbaria</i> (CNALH), 
						the <i>Consorcio de Herbarios de L&iacute;quenes en Am&eacute;rica Latina</i> (CHLAL), and the <i>Arctic Lichen</i> portal: specimen records, 
						field observations, dynamic and static checklists, images, interactive keys, and a taxonomic thesaurus.
					</div>
					<div style="margin-top:10px;">
						Our initiative is supported by the <i>Biodiversity Knowledge Integration Center</i> (BioKIC) of <i>Arizona State University</i>, 
						the <i>ASU Lichen Herbarium</i>, the <i>International Union for the Conservation of Nature</i> (IUCN), the <i>Grupo Latinoamericano 
						de Liquen&oacute;logos</i> (GLAL), the <i>Grupo Ecuatoriano de Liquenolog&iacute;a</i> (GEL), <i>iDigBio</i>, the <i>National Science Foundation</i> 
						(NSF), and the <i>GLOBAL Bryophytes and Lichens Network</i>.
					</div>
					<div style="margin-top:10px;">
						If you are new to the site, please <a href="<?php $CLIENT_ROOT.'/profile/newprofile.php'; ?>">create an account</a>. 
						Contact us if you are interested in contributing, either as individual user or as collection manager of an institution that would like to join: 
						<a href="mailto:LichenConsortium@gmail.com">LichenConsortium@gmail.com</a>.
						Previously-created accounts in CNALH and CHLAL will continue to function.
					</div>
				</div>
				<?php
			}
			else{
				//Text in this block is Spanish
				?>
				<div>
					<p style="margin-bottom: 2rem">
						<b>&iexcl;Bienvenido al Consorcio de Herbarios de L&iacute;quenes!</b>
					</p>
					<div style="">
						El <i>Consorcio</i> sirve como punto focal de la biodiversidad de hongos liquenizados no solamente en Norteam&eacute;rica, 
						sino tambi&eacute;n en Am&eacute;rica Latina, Europa, Asia, Ocean&iacute;a, as&iacute; como colecciones personales y  
						observaciones de investigaci&oacute;n.
					</div>
					<div style="margin-top:10px;">
						Desde de su inauguraci&oacute;n el <i>Consortium of North American Lichen Herbaria</i> (CHALH) ha crecido continuamente, 
						y el lanzamiento del <i>Consorcio de Herbarios de L&iacute;quenes en Am&eacute;rica Latina</i> (CHLAL) ha sido tan exitoso que 
						decidimos fusionar las plataformas para brindar mejor servicio a la comunidad.
					</div>
					<div style="margin-top:10px;">
						Unir los recursos tiene muchos beneficios: el mantenimiento de un solo sitio es m&aacute;s eficiente y significa 
						que podemos centrarnos en el desarrollo y mejoramiento de para mejorar la funcionalidad de la plataforma. Actualmente 
						compartimos los datos a trav&eacute;s de dos idiomas: ingl&eacute;s y espa&ntilde;ol. Estamos desarrollando la interface en franc&eacute;s.
					</div>
					<div style="margin-top:10px;">
						Este sitio unifica todos los recursos anteriormente ofrecidos a trav&acute;s del <i>Consorcio de Herbarios de L&iacute;quenes 
						de Am&eacute;rica del Norte</i> (CNALH), del <i>Consorcio de Herbarios de L&iacute;quenes en Am&eacute;rica Latina</i> (CHLAL) y del portal <i>Arctic 
						Lichen</i>: registros de especimenes, observaciones de campo, listas din&aacute;micas y est&aacute;ticas, 
						im&aacute;genes, claves interactivas y un diccionario taxon&acute;mico de sin&oacute;nimos.
					</div>
					<div style="margin-top:10px;">
						Nuestra iniciativa cuenta con el apoyo del <i>Biodiversity Knowledge Integration Center</i> (BioKIC) de <i>Arizona State 
						University</i>, el <i>ASU Lichen Herbarium</i>, la <i>Uni&oacute;n Internacional para la Conservaci&oacute;n de la Naturaleza</i> (UICN), 
						el <i>Grupo Latinoamericano de Liquen&oacute;logos</i> (GLAL) y el <i>Grupo Ecuatoriano de Liquenolog&iacute;a</i> ( GEL), <i>iDigBio</i>, 
						la <i>National Science Foundation</i> (NSF) y con el <i>GLOBAL Bryophytes and Lichens Network</i>.
					</div>
					<div style="margin-top:10px;">
						Si usted visita este sitio por la primera vez le sugerimos crear una cuenta. Si est&aacute; interesado en 
						contribuir y necesita ayuda como usuario individual o administrador de una instituci&oacute;n, estamos 
						disponibles en el correo: <a href="mailto:ConsorcioLiquenes@gmail.com">ConsorcioLiquenes@gmail.com</a>. Las cuentas de usuarios de plataformas anteriores siguen 
						funcionando.
					</div>
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
