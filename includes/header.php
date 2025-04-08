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
					<span id="profile">
						<form name="profileForm" method="post" action="<?= $CLIENT_ROOT . '/profile/viewprofile.php' ?>">
							<button class="button button-tertiary bottom-breathing-room-rel left-breathing-room-rel" name="profileButton" type="submit"><?= $LANG['H_MY_PROFILE'] ?></button>
						</form>
					</span>
					<span id="logout">
						<form name="logoutForm" method="post" action="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout">
							<button class="button button-secondary bottom-breathing-room-rel left-breathing-room-rel" name="logoutButton" type="submit"><?= $LANG['H_LOGOUT'] ?></button>
						</form>
					</span>
					<?php
				} else {
					?>
					<span id="login">
						<form name="loginForm" method="post" action="<?= $CLIENT_ROOT . "/profile/index.php" ?>">
							<input name="refurl" type="hidden" value="<?= htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES) ?>">
							<button class="button button-secondary bottom-breathing-room-rel left-breathing-room-rel" name="loginButton" type="submit"><?= $LANG['H_LOGIN'] ?></button>
						</form>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="https://symbiota.org">
					<div class="image-container">
						<?php 
						// <img src="<?= $CLIENT_ROOT \?\>/images/layout/logo_symbiota.png" alt="Symbiota logo"> 
						?>
					</div>
				</a>
				<div class="brand-name">
					<h1><?= $LANG['HEADER2'] ?></h1>
					<h2><?= $LANG['HEADER3'] ?></h2>
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
								<a href="<?= $CLIENT_ROOT; ?>/collections/index.php"><?php echo (isset($LANG['H_CLASSIC_SEARCH'])?$LANG['H_CLASSIC_SEARCH']:'Classic Search'); ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>"><?php echo (isset($LANG['H_ADVANCED_SEARCH'])?$LANG['H_ADVANCED_SEARCH']:'Advanced Search'); ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/map/mapinterface.php" target="_blank"><?php echo (isset($LANG['H_MAP'])?$LANG['H_MAP']:'Map Search'); ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/exsiccati/index.php"><?php echo (isset($LANG['H_EXSICCATAE'])?$LANG['H_EXSICCATAE']:'Exsiccatae'); ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist"><?php echo (isset($LANG['H_DYN_LISTS'])?$LANG['H_DYN_LISTS']:'Dynamic Species List'); ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key"><?php echo (isset($LANG['H_DYN_KEY'])?$LANG['H_DYN_KEY']:'Dynamic Identification Key'); ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php"><?php echo (isset($LANG['H_TAXONOMIC_EXPLORER'])?$LANG['H_TAXONOMIC_EXPLORER']:'Taxonomic Explorer'); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><?php echo (isset($LANG['H_IMAGES'])?$LANG['H_IMAGES']:'Images'); ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/imagelib/index.php?target=genus"><?php echo (isset($LANG['H_IMAGE_BROWSER'])?$LANG['H_IMAGE_BROWSER']:'Image Browser'); ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/imagelib/search.php"><?php echo (isset($LANG['H_IMAGE_SEARCH'])?$LANG['H_IMAGE_SEARCH']:'Image Search'); ?></a>
							</li>
						</ul>
					</li>
					<?php
						if($LANG_TAG=='es'){
					?>
					<li>
						<a href="#"><?php echo (isset($LANG['H_INVENTORIES'])?$LANG['H_INVENTORIES']:'Biota de Líquenes'); ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php"><?php echo (isset($LANG['INVPROJ']) ? $LANG['INVPROJ'] : 'Proyectos de Inventario'); ?></a>
							</li>
							<li>
                                <a href="#"> Listas Mundiales de Especies</a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519">América del norte</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=558">Listas Globales de L&iacute;quenes y Hongos Liquen&iacute;colas</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=556">Listas Rojas Globales de la UICN</a>
									</li>
								</ul>
							</li>
							<li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=51">Centroam&eacute;rica</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=516">Panam&aacute;</a>
								</li>
								</ul>
 							</li>
							 <li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=575">Sudam&eacute;rica</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=517">Ecuador</a>
								</li>
								</ul>
 							</li>
							<li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519">Norteam&eacute;rica</a>
 							</li>
							 <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=512">&Aacute;rtico</a>
	                          </li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=514">Canad&aacute;</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=555">M&eacute;xico</a>
							</li>
							<li>
								<a href="#">Estados Unidos: A-I</a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=513">Alaska</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=100">Arizona</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=533">Arkansas</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=101">California</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=103">Carolina del Norte</a>
								   </li>
								   <li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=537">Carolina del Sur</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=510">Colorado</a>
									</li>
									<li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=544">Dakota del Norte</a>
                        	       </li>
								   <li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=532">Dakota del Sur</a>
		                            </li>
                		            <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=509">Florida</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=530">Georgia</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=550">Hawai'i</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=540">Idaho</a>
		                            </li>
                		            <li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=554">Illinois</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=552">Indiana</a>
                                	</li>
                                    <li>
                                    	<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=518">Iowa</a>
		                            </li>
								</ul>
							</li>
                            <li>
                               <a href="#">Estados Unidos: K-N</a>
                               <ul>
							   		<li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=553">Kansas</a>
                                    </li>
                		            <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=534">Kentucky</a>
                                	</li>
		                            <li>
        		                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=528">Maine</a>
                		           </li>
                        		    <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=531">Maryland</a>
                                   </li>
                                   <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=511">Massachusetts</a>
	                               </li>
	        	                    <li>
        	        	               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=551">Michigan</a>
                	        	   </li>
	                	           <li>
        	                	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=546">Minnesota</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=547">Misisipi</a>
                                   </li>
								   <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=539">Misuri</a>
                                   </li>
								   <li>
	                                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=545">Montana</a>
        	                       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=529">Nebraska</a>
                	               </li>
	                        	    <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=521">Nevada</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=542">Nueva Jersey</a>
	                               </li>
        	                       <li>
                	                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=527">Nueva M&eacute;xico</a>
                        	       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=543">Nueva York</a>
                	               </li>
								   </li>
                               </ul>
                             </li>
                             <li>
                               <a href="#">Estados Unidos: O-Z</a>
                               <ul>
							   		<li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=541">Ohio</a>
                	               </li>
                        	       <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=538">Oklahoma</a>
	                               </li>
        	                       <li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=525">Oreg&oacute;n</a>
                        	       </li>
	                               <li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=535">Pensilvania</a>
                	               </li>
                		            <li>
                               	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=515">Tennessee</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=526">Texas</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=524">Utah</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=523">Virginia</a>
		                            </li>
									<li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=536">Virginia Occidental</a>
		                            </li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=548">Washington, D.C.</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=549">Washington</a>
                                	</li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=102">Wisconsin</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=522">Wyoming</a>
                                	</li>
								</ul>
                              </li>
                              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=500">Parques Nacionales de los Estados Unidos</a>
	                          </li>
               	              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=505">Regi&oacute;n Subpolar del Sur</a>
                              </li>
						</ul>
						</li>
					<?php
					} else {
					?>
					<li>
						<a href="#"><?php echo (isset($LANG['H_INVENTORIES']) ? $LANG['H_INVENTORIES'] : 'Species Checklists'); ?></a>
						<ul>
							<li>
							<a href="<?= $CLIENT_ROOT; ?>/projects/index.php"><?php echo (isset($LANG['INVPROJ']) ? $LANG['INVPROJ'] : 'Inventory Projects'); ?></a>
							</i>
							<li>
                                <a href="#">Global Checklists</a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519">North America</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=558">Global Checklists of Lichens & Lichenicolous Fungi</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=556">Global IUCN Red-Lists</a>
									</li>
								</ul>
							</li>
							<li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=512">Arctic</a>
							</li>
							<li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519">North America</a>
 							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=514">Canada</a>
							</li>
							<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=555">Mexico</a>
							</li>
							<li>
								<a href="#">US States: A-L</a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=513">Alaska</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=100">Arizona</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=533">Arkansas</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=101">California</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=510">Colorado</a>
									</li>
                		            <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=509">Florida</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=530">Georgia</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=550">Hawai'i</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=540">Idaho</a>
		                            </li>
                		            <li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=554">Illinois</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=552">Indiana</a>
                                	</li>
                                    <li>
                                    	<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=518">Iowa</a>
		                            </li>
                		            <li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=553">Kansas</a>
                                    </li>
                		            <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=534">Kentucky</a>
                                	</li>
								</ul>
							</li>
                            <li>
                               <a href="#">US States: M-N</a>
                               <ul>
		                            <li>
        		                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=528">Maine</a>
                		           </li>
                        		    <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=531">Maryland</a>
                                   </li>
                                   <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=511">Massachusetts</a>
	                               </li>
	        	                    <li>
        	        	               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=551">Michigan</a>
                	        	   </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=539">Missouri</a>
                                   </li>
								   <li>
        	                	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=546">Minnesota</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=547">Mississippi</a>
                                   </li>
                                   <li>
	                                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=545">Montana</a>
        	                       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=529">Nebraska</a>
                	               </li>
	                        	    <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=521">Nevada</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=542">New Jersey</a>
	                               </li>
        	                       <li>
                	                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=527">New Mexico</a>
                        	       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=543">New York</a>
                	               </li>
								   <li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=103">North Carolina</a>
								   </li>
        	                       <li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=544">North Dakota</a>
                        	       </li>
								   </li>
                               </ul>
                             </li>
                             <li>
                               <a href="#">US States: O-Z</a>
                               <ul>
							   		<li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=541">Ohio</a>
                	               </li>
                        	       <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=538">Oklahoma</a>
	                               </li>
        	                       <li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=525">Oregon</a>
                        	       </li>
	                               <li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=535">Pennsylvania</a>
                	               </li>
									<li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=537">South Carolina</a>
									</li>
                                    <li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=532">South Dakota</a>
		                            </li>
                		            <li>
                               	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=515">Tennessee</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=526">Texas</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=524">Utah</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=523">Virginia</a>
		                            </li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=548">Washington, D.C.</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=549">Washington</a>
                                	</li>
                                    <li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=536">West Virginia</a>
		                            </li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=102">Wisconsin</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=522">Wyoming</a>
                                	</li>
								</ul>
                              </li>
                              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=500">US National Parks</a>
	                          </li>
							  <li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=51">Central America</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=516">Panama</a>
								</li>
								</ul>
 							</li>
							 <li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=575">South America</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=517">Ecuador</a>
								</li>
								</ul>
 							</li>
							 <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=500">US National Parks</a>
	                          </li>
               	              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=505">Southern Subpolar Region</a>
                              </li>
						</ul>
					</li>
					<?php
					}
					?>
					<li>
						<a href="<?= $CLIENT_ROOT; ?>/collections/specprocessor/crowdsource/index.php"><?php echo (isset($LANG['H_CROWDSOURCING'])?$LANG['H_CROWDSOURCING']:'Crowdsourcing'); ?></a>
					</li>
					<li>
						<a href="#"><?php echo (isset($LANG['H_ASSOC_PROJECTS'])?$LANG['H_ASSOC_PROJECTS']:'Associated Projects'); ?></a>
						<ul>
							<li>
								<a href="http://bryophyteportal.org" target="_blank"><?php echo (isset($LANG['BRYO_PORTAL'])?$LANG['BRYO_PORTAL']:'Consortium of Bryophyte Herbaria'); ?></a>
							</li>
							<li>
								<a href="https://globaltcn.utk.edu/"><?php echo (isset($LANG['GLOBAL_NETWORK'])?$LANG['GLOBAL_NETWORK']:'GLOBAL Bryophytes and Lichens Network'); ?></a>
							</li>
							<li>
								<a href="http://mycoportal.org" target="_blank">MyCoPortal</a>
							</li>
						</ul>
					</li>
					<li>
					<a href="#"><?php echo (isset($LANG['H_MORE_INFO'])?$LANG['H_MORE_INFO']:'More Information'); ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/misc/collprofiles.php"><?php echo (isset($LANG['H_PARTNERS'])?$LANG['H_PARTNERS']:'Partners'); ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/includes/usagepolicy.php"><?php echo (isset($LANG['H_DATA_USAGE'])?$LANG['H_DATA_USAGE']:'Data Use'); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= (isset($LANG['H_SITEMAP'])?$LANG['H_SITEMAP']:'Sitemap') ?>
						</a>
					</li>
					<li>
						<a href="#"><?php echo (isset($LANG['H_HELP_RESOURCES'])?$LANG['H_HELP_RESOURCES']:'Help & Resources'); ?></a>
						<ul>
						<li>
							<?php
								if($LANG_TAG=='es'){
							?>
								<a href="https://help.lichenportal.org/index.php/es/chlal-ayuda-y-recursos/"><?php echo (isset($LANG['CONSORTIUM_RESOURCES'])?$LANG['CONSORTIUM_RESOURCES']:'Consortium Resources'); ?></a>
							<?php
								} else {
							?>
								<a href="https://help.lichenportal.org/index.php/en/cnalh-help-resources/"><?php echo (isset($LANG['CONSORTIUM_RESOURCES'])?$LANG['CONSORTIUM_RESOURCES']:'Consortium Resources'); ?></a>
							<?php
								}
							?>
							</li>
							<li>
								<a href='<?= $CLIENT_ROOT ?>/glossary/index.php'>
									<?= (isset($LANG['GLOSSARY'])?$LANG['GLOSSARY']:'Glossary') ?>
								</a>
							</li>
							<li>
								<?php
								if($LANG_TAG=='es'){
								?>
									<a href="https://biokic.github.io/symbiota-docs/es/" target="_blank"><?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Symbiota Help'); ?></a>
								<?php
								} else {
								?>
									<a href="http://symbiota.org/docs/" target="_blank"><?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Symbiota Help'); ?></a>
								<?php
								}
								?>
							</li>
						</ul>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
