<?php
//error_reporting(E_ALL);
include_once("config/symbini.php");
header("Content-Type: text/html; charset=<?php echo $CHARSET; ?>");
?>
<html>
<head>
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	$activateJQuery = true;
	include_once($SERVER_ROOT.'/includes/head.php');
	?>
	<meta name='keywords' content='' />
	<link href="css/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="js/jquery.slides.js"></script>
	<script type="text/javascript">
		<?php include_once('/includes/googleanalytics.php'); ?>
	</script>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div  id="innertext">
		<div style="float:right;margin: 15px 20px;width:400px;">
			<div id="quicksearchdiv" style="width:400px;border:#000000 solid 0px;">
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
		<div style="margin:30px;font-size:130%">
			<div style="">
				The <b>Consortium of North American Bryophyte Herbaria</b> (CNABH) was created to serve as a gateway to distributed data resources
				of interest to the taxonomic and environmental research community in North America. Through a common web interface, we offer tools
				to locate, access and work with a variety of data, starting with searching databased herbarium records.
			</div>
			<div style="margin-top:10px;">
				As a regular visitor, we invite you to join. Create your own <a href="profile/newprofile.php">account</a> today!
				If you need access to specific resources, want to contribute occurrence records or images, report errors or simply provide
				feedback please do not hesitate to contact us at
				<a class="bodylink" href="mailto:CNABH.help@gmail.com">CNABH.help@gmail.com</a>
			</div>
			<div style="width:450px;margin-top:30px;">
				<div style="font-weight:bold;font-size:110%;">
					News and Events
				</div>
				<ul style="">
					<li>
						<b>January 2021</b> - Welcome our new portal manager Katie Pearson.
					</li>
					<li>
						<b>September 2020</b> - ASU and collaborators were recently awarded a new <a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001394" target="_blank">NSF Grant</a> to Build a <a href="https://www.idigbio.org/wiki/index.php/Building_a_global_consortium_of_bryophytes_and_lichens:_keystones_of_cryptobiotic_communities" target="_blank"><b>Global Consortium of Bryophytes and Lichens</b></a>.
					</li>
					<li>
						<b>August  2018</b> - ASU receives a  multimillion dollar grant from NSF to create the new
						<a href="https://biorepo.neonscience.org/"><b>NEON biorepository</b></a>;
						these funds will substantially strengthen the Symbiota software platform and add new functionality from which CNALH will benefit significantly as well.
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
