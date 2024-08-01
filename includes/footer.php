<footer>
	<dialog id="accessibility-modal" class="accessibility-dialog" aria-label="<?= $LANG['ACCESSIBILITY_OPTIONS']; ?>">
		<h1><?= $LANG['ACCESSIBILITY_OPTIONS']; ?></h1>
		<p class="bottom-breathing-room-rel"><?= $LANG['ACCESSIBILITY_OPTIONS_DESCRIPTION']; ?></p>
		<button type="button" class="btn btn-primary bottom-breathing-room-rel" onclick="toggleAccessibilityStyles('<?= $CLIENT_ROOT . '/includes' . '/' ?>', '<?= $CSS_BASE_PATH ?>', '<?= $LANG['TOGGLE_508_OFF'] ?>', '<?= $LANG['TOGGLE_508_ON'] ?>')" id="accessibility-button" data-accessibility="accessibility-button">
			<?= $LANG['TOGGLE_508_ON'] ?>
		</button>
		<form method="dialog">
			<button type="submit" class="btn btn-primary"><?= $LANG['CLOSE']; ?></button>
		</form>
	</dialog>
	<div class="logo-gallery">
		<!---
		<button id="accessibility-options-button" type="button" class="btn btn-primary  accessibility-option-button">
			<span class="button__item-container">
				<?= $LANG['ACCESSIBILITY_OPTIONS']; ?>
				<span>
					<img alt="accessibility icon of a person" src="<?= $CLIENT_ROOT ?>/images/accessibility_FILL0_wght400_GRAD0_opsz24.svg" />
				</span>
	        </span>
		</button>
		--->
		<a href="https://biokic.asu.edu" target="_blank" title="Biodiversity Knowledge Integration Center" aria-label="Visit BioKIC website">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png"  alt="Logo for the Biodiversity Knowledge Integration Center" />
		</a>
		<a href="https://biokic.asu.edu/lichen-herbarium" target="_blank" title="ASU Lichen Herbarium" aria-label="Visit ASU Lichen Herbarium">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo_asu-lichen.jpg" alt="Logo ASU Lichen Herbarium"/>
		</a>
		<a href="https://www.iucnredlist.org/" target="_blank" title="IUCN" aria-label="Visit IUCN">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/1521112071-iucn.png" alt="Logo for IUCN" />
		</a>
		<a href="http://idigbio.org" target="_blank" title="iDigBio" aria-label="Visit iDigBio">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo_idig.png" alt="Logo for iDigBio, or, Integrated Digitized Biocollections"/>
		</a>
		<a href="https://www.nsf.gov" target="_blank" aria-label="Visit National Science Foundation website">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo_nsf.gif" alt="Logo for the National Science Foundation" />
		</a>
		<a href="https://globaltcn.utk.edu/" targe="_blank"><img src="<?php echo $CLIENT_ROOT; ?>/images/layout/global_logo.png" style="width:150px" /></a>
		<a href="http://glalia.blogspot.com/" target="_blank" title="Grupo Latinoamericano de Liquen&oacute;logos">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/GLALIA-Logo.jpg" style="width:120px" />
		</a>
		<a href="#">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/GEL-logo.jpg" style="width:115px" title="Grupo Ecuatoriano de Liquenolog&iacute;a (GEL)" />
		</a>
		
	</div>
	<p>
		This project made possible by National Science Foundation Awards
		<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1115116" target="_blank">#1115116</a>,
		<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001500" target="_blank">#2001500</a>,
		<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001394" target="_blank">#2001394</a>
		.
	</p>
	<p>
		For more information about Symbiota, <a href="https://symbiota.org/docs" target="_blank" rel="noopener noreferrer">read the docs</a> or contact the <a href="https://symbiota.org/contact-the-support-hub/" target="_blank" rel="noopener noreferrer">Symbiota Support Hub</a>
			.
	</p>
	<p>
		Powered by <a href="https://symbiota.org/" target="_blank">Symbiota</a>
		.
	</p>
	<script>
		let toggleOff508 = "<?= $LANG['TOGGLE_508_OFF'] ?>";
		let toggleOn508 = "<?= $LANG['TOGGLE_508_ON'] ?>";
	</script>
	<!--- 
	<script src="<?= $CLIENT_ROOT; ?>/js/symb/accessibility.footer.js?ver=1" type="text/javascript"></script> 
	--->
</footer>