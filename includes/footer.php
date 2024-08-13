<footer>
	<div class="logo-gallery">
	<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://biokic.asu.edu" target="_blank" title="<?= $LANG['F_BIOKIC'] ?>" aria-label="Visit BioKIC website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png"  alt="<?= $LANG['F_BIOKIC_LOGO'] ?>" />
		</a>
		<a href="http://idigbio.org" target="_blank" title="iDigBio" aria-label="<?= $LANG['F_VISIT_IDIGBIO'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_idig.png" alt="<?= $LANG['F_IDIGBIO_LOGO'] ?>" />
		</a>
		<a href="https://www.nsf.gov" target="_blank" aria-label="<?= $LANG['F_VISIT_NSF'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo_nsf.gif" alt="<?= $LANG['F_NSF_LOGO'] ?>" />
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
	<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
