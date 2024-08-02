<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/header.en.php');
else include_once($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php');
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<nav class="top-login">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<span style="">
						<?php echo (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome').' '.$USER_DISPLAY_NAME; ?>!
					</span>
					<span class="button button-tertiary">
						<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php"><?php echo (isset($LANG['H_MY_PROFILE'])?$LANG['H_MY_PROFILE']:'My Profile')?></a>
					</span>
					<span class="button button-secondary">
						<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout"><?php echo (isset($LANG['H_LOGOUT'])?$LANG['H_LOGOUT']:'Sign Out')?></a>
					</span>
					<?php
				} else {
					?>
					<span>
						<a href="#">
							Contact Us
						</a>
					</span>
					<span class="button button-secondary">
						<a href="<?php echo $CLIENT_ROOT . "/profile/index.php?refurl=" . $_SERVER['SCRIPT_NAME'] . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?php echo (isset($LANG['H_LOGIN'])?$LANG['H_LOGIN']:'Login')?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="https://symbiota.org">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo_symbiota.png" alt="Symbiota logo" width="100%">
				</a>
				<div class="brand-name">
					<h1>Symbiota Brand New Portal</h1>
					<h2>Redesigned by the Symbiota Support Hub</h2>
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" />
			<label class="hamb" for="side-menu"><span class="hamb-line"></span></label>
			<!-- Menu -->
			<nav class="top-menu">
				<ul class="menu">

					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" ><?php echo (isset($LANG['H_HOME'])?$LANG['H_HOME']:'Home'); ?></a>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_SEARCH'])?$LANG['H_SEARCH']:'Search'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" ><?php echo (isset($LANG['H_COLLECTIONS'])?$LANG['H_COLLECTIONS']:'Search Collections'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank"><?php echo (isset($LANG['H_MAP'])?$LANG['H_MAP']:'Map Search'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/exsiccati/index.php" ><?php echo (isset($LANG['H_EXSICCATAE'])?$LANG['H_EXSICCATAE']:'Exsiccatae'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" ><?php echo (isset($LANG['H_DYN_LISTS'])?$LANG['H_DYN_LISTS']:'Dynamic Species List'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key" ><?php echo (isset($LANG['H_DYN_KEY'])?$LANG['H_DYN_KEY']:'Dynamic Identification Key'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php" ><?php echo (isset($LANG['H_TAXONOMIC_EXPLORER'])?$LANG['H_TAXONOMIC_EXPLORER']:'Taxonomic Explorer'); ?></a>
							</li>
						</ul>
					 </li>
					 <li>
						<a href="#" ><?php echo (isset($LANG['H_IMAGES'])?$LANG['H_IMAGES']:'Images'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" ><?php echo (isset($LANG['H_IMAGE_BROWSER'])?$LANG['H_IMAGE_BROWSER']:'Image Browser'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" ><?php echo (isset($LANG['H_IMAGE_SEARCH'])?$LANG['H_IMAGE_SEARCH']:'Image Search'); ?></a>
							</li>
						</ul>
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
								<a href="#"><?php echo (isset($LANG['H_SP_GROUPS'])?$LANG['H_SP_GROUPS']:'Species Groups'); ?>></a>
								<ul>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=2">Frullania</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=28">Plagiochila</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=25">Sphagnum</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=12"><?php echo (isset($LANG['H_US_NPS'])?$LANG['H_US_NPS']:'US National Parks'); ?></a>
							</li>
							<!--
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=26">Teaching Checklists</a>
							</li>
							-->
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/collections/specprocessor/crowdsource/index.php"><?php echo (isset($LANG['H_CROWDSOURCE'])?$LANG['H_CROWDSOURCE']:'Crowdsourcing'); ?></a>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_ASSOC_PROJECTS'])?$LANG['H_ASSOC_PROJECTS']:'Associated Projects'); ?></a>
						<ul>
							<li>
								<a href="https://lichenportal.org/cnalh/"><?php echo (isset($LANG['H_CON_LICHENS'])?$LANG['H_CON_LICHENS']:'Consortium of Lichen Herbaria'); ?></a>
							</li>
							<!--
							<li>
								<a href="https://bryophyteportal.org/frullania/">Frullania Portal (CNABH)</a>
							</li>
							-->
							<li>
								<a href="https://globaltcn.utk.edu/"><?php echo (isset($LANG['H_GLOBAL'])?$LANG['H_GLOBAL']:'GLOBAL Bryophytes and Lichens Network'); ?></a>
							</li>
							<li>
								<a href="https://mycoportal.org/portal/">MyCoPortal</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_MORE_INFO'])?$LANG['H_MORE_INFO']:'More Information'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/includes/usagepolicy.php"><?php echo (isset($LANG['H_DATA_POLICY'])?$LANG['H_DATA_POLICY']:'Data Usage Policy'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/misc/collprofiles.php/"><?php echo (isset($LANG['H_PARTNERS'])?$LANG['H_PARTNERS']:'Partners'); ?></a>
							</li>

						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/sitemap.php"><?php echo (isset($LANG['H_SITEMAP'])?$LANG['H_SITEMAP']:'Sitemap') ?></a>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Help') ?></a>
						<ul>
							<li>
								<?php
								if($LANG_TAG=='es'){
								?>
									<a href="https://biokic.github.io/symbiota-docs/es/" target="_blank" ><?php echo (isset($LANG['H_SYMB_HELP'])?$LANG['H_SYMB_HELP']:'Symbiota Help'); ?></a>
								<?php
								} else {
								?>
									<a href="http://symbiota.org/docs/" target="_blank" ><?php echo (isset($LANG['H_SYMB_HELP'])?$LANG['H_SYMB_HELP']:'Symbiota Help'); ?></a>
								<?php
								}
								?>
							</li>
							<li>
								<a href="https://help.lichenportal.org/index.php/en/cnalh-help-resources/"><?php echo (isset($LANG['CONSORTIUM_RESOURCES'])?$LANG['CONSORTIUM_RESOURCES']:'Lichen Consortium Resources'); ?></a>
							</li>
						</ul>
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
	</header>
</div>
