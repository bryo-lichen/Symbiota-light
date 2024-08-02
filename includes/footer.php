<footer>
	<dialog id="accessibility-modal" class="accessibility-dialog" aria-label="<?= $LANG['ACCESSIBILITY_OPTIONS']; ?>">
		<h1><?= $LANG['ACCESSIBILITY_OPTIONS']; ?></h1>
		<p class="bottom-breathing-room-rel"><?= $LANG['ACCESSIBILITY_OPTIONS_DESCRIPTION']; ?></p>
		<button type="button" class="btn btn-primary bottom-breathing-room-rel" onclick="toggleAccessibilityStyles('<?php echo $CLIENT_ROOT . '/includes' . '/' ?>', '<?php echo $CSS_BASE_PATH ?>', '<?php echo $LANG['TOGGLE_508_OFF'] ?>', '<?php echo $LANG['TOGGLE_508_ON'] ?>')" id="accessibility-button" data-accessibility="accessibility-button">
			<?php echo (isset($LANG['TOGGLE_508_ON'])?$LANG['TOGGLE_508_ON']:'Switch Form Layout'); ?>
		</button>
		<form method="dialog">
			<button type="submit" class="btn btn-primary"><?= $LANG['CLOSE']; ?></button>
		</form>
	</dialog>
	<div class="logo-gallery">
		<button id="accessibility-options-button" type="button" class="btn btn-primary  accessibility-option-button">
			<span class="button__item-container">
				<?= $LANG['ACCESSIBILITY_OPTIONS']; ?>
				<span>
					<img alt="accessibility icon of a person" src="<?php echo $CLIENT_ROOT ?>/images/accessibility_FILL0_wght400_GRAD0_opsz24.svg" />
				</span>
                	</span>
		</button>

		<a href="https://biokic.asu.edu" target="_blank" title="Biodiversity Knowledge Integration Center">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png" style="width:180px" />
		</a>
		<a href="http://idigbio.org" target="_blank" title="iDigBio">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo_idig.png" style="width:150px" />
		</a>
		<a href="https://www.nsf.gov" target="_blank">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo_nsf.gif" style="width:70px" />
		</a>
		<a href="https://globaltcn.utk.edu/" targe="_blank">
			<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/global_logo.png" style="width:150px" />
		</a>
	</div>
	<p>
		This project made possible by National Science Foundation Awards:
		<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=1115116" target="_blank">#1115116</a>,
		<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001500" target="_blank">#2001500</a>,
		<a href="https://www.nsf.gov/awardsearch/showAward?AWD_ID=2001394" target="_blank">#2001394</a>
	</p>
	<p>
		Powered by <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', ()=>{
			document.getElementById('accessibility-button').disabled=false;
			updateButtonTextBasedOnEnabledStylesheet('<?php echo $LANG['TOGGLE_508_OFF'] ?>', '<?php echo $LANG['TOGGLE_508_ON'] ?>');
		});

		const openDialogButton = document.getElementById('accessibility-options-button');
		const accessibilityDialog = document.getElementById('accessibility-modal');

		openDialogButton.addEventListener('click', function() {
			accessibilityDialog.showModal();
		});
	</script>
</footer>
