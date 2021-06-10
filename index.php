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
			?>
		</div>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
