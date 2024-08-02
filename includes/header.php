<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php')) include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
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
						<?= (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome') . ' ' . $USER_DISPLAY_NAME ?>!
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
				<a href="https://symbiota.org">
					<div class="image-container">
						<img src="<?= $CLIENT_ROOT ?>/images/layout/logo_symbiota.png" alt="Symbiota logo">
					</div>
				</a>
				<div class="brand-name">
					<h1>Symbiota Brand New Portal</h1>
					<h2>Redesigned by the Symbiota Support Hub</h2>
				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>">
							<?= $LANG['H_SEARCH'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/collections/map/index.php" rel="noopener noreferrer">
							<?= $LANG['H_MAP_SEARCH'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/checklists/index.php">
							<?= $LANG['H_INVENTORIES'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/imagelib/search.php">
							<?= $LANG['H_IMAGES'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/includes/usagepolicy.php">
							<?= $LANG['H_DATA_USAGE'] ?>
						</a>
					</li>
					<li>
						<a href="https://symbiota.org/docs" target="_blank" rel="noopener noreferrer">
							<?= $LANG['H_HELP'] ?>
						</a>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?" ><?php echo (isset($LANG['H_INVENTORIES'])?$LANG['H_INVENTORIES']:'Species Checklists'); ?></a>
						<ul>
   							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=24"><?php echo (isset($LANG['H_NORTH_AMERICA'])?$LANG['H_NORTH_AMERICA']:'North America'); ?></a>
							</li>
							<li>
								<a href="#"><?php echo (isset($LANG['H_US'])?$LANG['H_US']:'United States'); ?>></a>
								<ul>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=23"><?php echo (isset($LANG['H_AZ'])?$LANG['H_AZ']:'Arizona'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=15"><?php echo (isset($LANG['H_CA'])?$LANG['H_CA']:'California'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=4"><?php echo (isset($LANG['H_IL'])?$LANG['H_IL']:'Illinois'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=13"><?php echo (isset($LANG['H_IO'])?$LANG['H_IO']:'Iowa'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=8"><?php echo (isset($LANG['H_ME'])?$LANG['H_ME']:'Maine'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=3"><?php echo (isset($LANG['H_MO'])?$LANG['H_MO']:'Missouri'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=18"><?php echo (isset($LANG['H_MT'])?$LANG['H_MT']:'Montana'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=22"><?php echo (isset($LANG['H_NM'])?$LANG['H_NM']:'New Mexico'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=21"><?php echo (isset($LANG['H_NY'])?$LANG['H_NY']:'New York'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=1"><?php echo (isset($LANG['H_NC'])?$LANG['H_NC']:'North Carolina'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=20"><?php echo (isset($LANG['H_OH'])?$LANG['H_OH']:'Ohio'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=6"><?php echo (isset($LANG['H_PE'])?$LANG['H_PE']:'Pennsylvania'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=19"><?php echo (isset($LANG['H_WA'])?$LANG['H_WA']:'Washington'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=27"><?php echo (isset($LANG['H_WY'])?$LANG['H_WY']:'Wyoming'); ?></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><?php echo (isset($LANG['H_BEYOND_NA'])?$LANG['H_BEYOND_NA']:'Beyond North America'); ?>></a>
								<ul>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=9"><?php echo (isset($LANG['H_CHILE'])?$LANG['H_CHILE']:'Chile'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=11"><?php echo (isset($LANG['H_FALKLAND_ISL'])?$LANG['H_FALKLAND_ISL']:'Falkland Islands'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=5"><?php echo (isset($LANG['H_FIJI'])?$LANG['H_FIJI']:'Fiji'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=10"><?php echo (isset($LANG['H_GUATEMALA'])?$LANG['H_GUATEMALA']:'Guatemala'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=16"><?php echo (isset($LANG['H_INDONESIA'])?$LANG['H_INDONESIA']:'Indonesia'); ?></a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=17"><?php echo (isset($LANG['H_MALAYSIA'])?$LANG['H_MALAYSIA']:'Malaysia'); ?></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Sub Menu</a>
								<ul>
									<li>
										<a href="#">Link 3</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG == 'es' ? 'SELECTED' : '') ?>>Espa&ntilde;ol</option>
							<option value="fr" <?= ($LANG_TAG == 'fr' ? 'SELECTED' : '') ?>>Français</option>
						</select>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Espa&ntilde;ol</option>
							<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>
						</select>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Espa&ntilde;ol</option>
							<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
