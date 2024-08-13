<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
	<meta name='keywords' content='' />
	<link href="<?php echo $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $CSS_BASE_PATH; ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="<?php echo $CLIENT_ROOT; ?>/js/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script src="<?php echo $CLIENT_ROOT; ?>/js/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var clientRoot = "<?php echo $CLIENT_ROOT; ?>";
	</script>
	<script src="<?php echo $CLIENT_ROOT; ?>/js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="<?php echo $CLIENT_ROOT; ?>/js/jquery.slides.js"></script>
</head>
<body>
	<?php
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath"></div>
	<main id="innertext">
		<h1 class="page-heading"><?php echo $DEFAULT_TITLE; ?> Home</h1>
		<div style="float:right;margin: 15px 20px;width:400px;">
			<div id="quicksearchdiv" style="width:400px;border: 1px solid #000000;padding-bottom:1rem;">
				<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Search Taxon'); ?></div>
					<input id="taxa" type="text" name="taxon" />
					<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
				</form>
			</div>
			<div style="">
				<?php
				$ssId = 1;
				$numSlides = 10;
				$width = 300;
				$dayInterval = 7;
				$clId = 40;
				$imageType = "field";
				$numDays = 240;
				ini_set('max_execution_time', 120); //300 seconds = 5 minutes
				include_once($SERVER_ROOT.'/classes/PluginsManager.php');
				$pluginManager = new PluginsManager();
				echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clId,$dayInterval);
				?>
			</div>
		</div>
		<?php
		if($LANG_TAG=='es'){
		?>
			<p>
				El <b>Consorcio de Herbarios de Bri&oacute;fitas</b> sirve como una puerta de entrada a la biodiversidad de musgos,
				hep&aacute;ticas y antocerotes en el mundo. El Consorcio incluye registros de espec&iacute;menes de bri&oacute;fitas en
				colecciones institucionales y personales. Nuestro objetivo es compartir estos registros p&uacute;blicamente
				con usuarios en todo el mundo. Originalmente el Consorcio empez&oacute; con la digitalizaci&oacute;n de herbarios en
				Am&eacute;rica del Norte, pero ahora invitamos a todos los colecciones del mundo a unirse al Consorcio para
				compartir sus registros m&aacute;s ampliamente con la comunidad de cient&iacute;fica internacional. Actualmente
				ofrecemos estos datos a trav&eacute;s de una interfaz en ingl&eacute;s y espa&ntilde;ol; una versi&oacute;n
				en franc&eacute;s est&acute; en desarrollo.
			</p>
			<p>
				Ofrecemos herramientas para ubicar, acceder y trabajar con una variedad de datos, especialmente registros
				de espec&iacute;menes, observaciones de campo, listas de especies est&aacute;ticas y din&aacute;micas, im&aacute;genes, claves
				interactivas y un tesauro taxon&oacute;mico. Si usted visita este sitio por la primera vez le sugerimos <a href="profile/newprofile.php">crear
				una cuenta</a>. Si est&aacute; interesado en contribuir y necesita ayuda como usuario individual o administrador
				de una instituci&oacute;n, estamos disponibles en el correo:
				<a class="bodylink" href="BryophyteConsortium@gmail.com">BryophyteConsortium@gmail.com</a>. Las cuentas creadas
				previamente en el Consorcio de Norte Am&eacute;rica seguir&aacute;n funcionando.
			</p>
		<?php
		} else {
		?>
			<p>
				The <b>Consortium of Bryophyte Herbaria</b> serves as gateway to plant biodiversity data for mosses,
				liverworts, and hornworts. The aim of the Consortium is to unite bryophyte specimen records from
				around the world, including personal collections and research observations, and serve as a gateway
				to distribute these resources to the public. The Consortium began with a focus on North American herbaria.
				It now welcomes all herbaria to join the Consortium to share specimen records with the international
				research community via this platform. We currently serve the data through an English and Spanish language
				interface; a French version is in development.
			</p>
			<p>
				We offer tools to locate, access and work with a variety of data, including specimen records, field observations,
				dynamic and static checklists, images, interactive keys, and a taxonomic thesaurus. If you are new to the site,
				please <a href="profile/newprofile.php">create an account</a>. Contact us if you are interested in contributing,
				either as individual user or as a collection manager of an institution that would like to join:
				<a class="bodylink" href="BryophyteConsortium@gmail.com">BryophyteConsortium@gmail.com</a>.
				Previously-created accounts in CNABH will continue to function.
			</p>
		<?php
		}
		?>
	</main>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
