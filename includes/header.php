<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel">
						<?= $LANG['H_WELCOME'] . ' ' . $USER_DISPLAY_NAME ?>!
					</div>
					<span style="white-space: nowrap;" class="button button-tertiary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/viewprofile.php"><?= $LANG['H_MY_PROFILE'] ?></a>
					</span>
					<span style="white-space: nowrap;" class="button button-secondary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout"><?= $LANG['H_LOGOUT'] ?></a>
					</span>
					<?php
				} else {
					?>
					<span class="button button-tertiary">
						<a onclick="window.location.href='#'">
							<?= $LANG['H_CONTACT_US'] ?>
						</a>
					</span>
					<span class="button button-secondary">
						<a href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= $LANG['H_LOGIN'] ?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<div class="brand-name">
					<h1>Consortium of Bryophyte Herbaria</h1>
					<h2>building a Consortium of Bryophytes and Lichens as keystones of cryptobiotic communities</h2>
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
					<li>
						<a href="#">
							<?= $LANG['H_SEARCH'] ?>
						</a>
						<ul>
							<li>
							<a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>">Search Collections</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/collections/map/index.php" target="_blank">Map Search</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/collections/exsiccati/index.php" >Exsiccatae</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=checklist" >Dynamic Species List</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/checklists/dynamicmap.php?interface=key" >Dynamic Identification Key</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/taxa/taxonomy/taxonomydynamicdisplay.php" >Taxonomic Explorer</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Images</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/imagelib/index.php" >Image Browser</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/imagelib/search.php" >Image Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/projects/index.php?" >Species Checklists</a>
						<ul>
   							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=24">North America</a>
							</li>
							<li>
								<a href="#">United States></a>
								<ul>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=23">Arizona</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=15">California</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=4">Illinois</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=13">Iowa</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=8">Maine</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=3">Missouri</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=18">Montana</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=22">New Mexico</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=21">New York</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=1">North Carolina</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=20">Ohio</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=6">Pennsylvania</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=19">Washington</a>
									  </li>
								  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=27">Wyoming</a>
									  </li>
								</ul>
							</li>
							<li>
								<a href="#">Beyond North America></a>
								<ul>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=9">Chile</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=11">Falkland Islands</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=5">Fiji</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=10">Guatemala</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=16">Indonesia</a>
									  </li>
									  <li>
									  <a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=17">Malaysia</a>
									  </li>
								</ul>
							</li>
							<li>
								<a href="#">Species Groups></a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=2">Frullania</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=28">Plagiochila</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=25">Sphagnum</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=12">US National Parks</a>
							</li>
							<!--
							<li>
								<a href="<?= $CLIENT_ROOT ?>/projects/index.php?proj=26">Teaching Checklists</a>
							</li>
							-->
						</ul>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/collections/specprocessor/crowdsource/index.php">Crowdsourcing</a>
					</li>
					<li>
						<a href="#" >Associated Projects</a>
						<ul>
							<li>
								<a href="https://lichenportal.org/portal/">Consortium of Lichen Herbaria</a>
							</li>
							<!--
							<li>
								<a href="https://bryophyteportal.org/frullania/">Frullania Portal (CNABH)</a>
							</li>
							-->
							<li>
								<a href="https://globaltcn.utk.edu/">GLOBAL Bryophytes and Lichens Network</a>
							</li>
							<li>
								<a href="https://mycoportal.org/portal/">MyCoPortal</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >More Information</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/includes/usagepolicy.php">Data Usage Policy</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT ?>/collections/misc/collprofiles.php/">Partners</a>
							</li>

						</ul>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
							<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>