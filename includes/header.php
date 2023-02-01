<?php
if($LANG_TAG != 'en' && file_exists($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php');
else include_once($SERVER_ROOT.'/content/lang/header.en.php');
?>
<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Playfair+Display+SC" rel="stylesheet" />
<script type="text/javascript" src="/chlal/js/symb/base.js?ver=2"></script>
<script type="text/javascript">
	//Uncomment following line to support toggling of database content containing DIVs with lang classes in form of: <div class="lang en">Content in English</div><div class="lang es">Content in Spanish</div>
	$(document).ready(function() {
		setLanguageDiv();
	});
</script>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3">
			<div id="top_header">
				<?php
				if($LANG_TAG=='es'){
				//Latin American Lichen images
				?>
					<div style="float:right;">
						<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/la_header_right.jpg" />
					</div>
				<?php
				} else {
				?>
				<div style="float:right;">
					<img src="<?php echo $CLIENT_ROOT; ?>/images/layout/na_header_right.jpg" />
				</div>
				<?php
				}
				?>
				<div style="float:left;">
					<div id="header2" style="padding:30px 0px 0px 0px"><?php echo $LANG['HEADER2']; ?></div>
					<div id="header3">- <?php echo $LANG['HEADER3']; ?> -</div>
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
						?>
						<span style="">
							<?php echo (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome').' '.$USER_DISPLAY_NAME; ?>!
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php"><?php echo (isset($LANG['H_MY_PROFILE'])?$LANG['H_MY_PROFILE']:'My Profile')?></a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout"><?php echo (isset($LANG['H_LOGOUT'])?$LANG['H_LOGOUT']:'Logout')?></a>
						</span>
						<?php
						$LANG['H_LOGIN'] = 'Login';
						$LANG['H_NEW_ACCOUNT'] = 'New Account';
					}
					else{
						?>
						<span style="">
							<a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['SCRIPT_NAME']."?".htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>"><?php echo (isset($LANG['H_LOGIN'])?$LANG['H_LOGIN']:'Login')?></a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php"><?php echo (isset($LANG['H_NEW_ACCOUNT'])?$LANG['H_NEW_ACCOUNT']:'New Account')?></a>
						</span>
						<?php
					}
					?>
					<span style="margin-left:5px;margin-right:5px;">
						<select onchange="setLanguage(this)">
							<option value="en">English</option>
							<option value="es" <?php echo ($LANG_TAG=='es'?'SELECTED':''); ?>>Espa&ntilde;ol</option>
						</select>
						<?php
						/*
						if($IS_ADMIN){
							echo '<a href="'.$CLIENT_ROOT.'/content/lang/admin/langmanager.php?refurl='.$_SERVER['PHP_SELF'].'"><img src="'.$CLIENT_ROOT.'/images/edit.png" style="width:12px" /></a>';
						}
						*/
						?>
					</span>
				</div>
				
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" ><?php echo (isset($LANG['H_HOME'])?$LANG['H_HOME']:'Home'); ?></a>
					</li>
					<li>
						<a href="#" ><?php echo (isset($LANG['H_SEARCH'])?$LANG['H_SEARCH']:'Search'); ?></a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" ><?php echo (isset($LANG['H_COLLECTIONS'])?$LANG['H_COLLECTIONS']:'Specimen Search'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/mapinterface.php" target="_blank"><?php echo (isset($LANG['H_MAP'])?$LANG['H_MAP']:'Map Search'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/exsiccati/index.php"><?php echo (isset($LANG['H_EXSICCATAE'])?$LANG['H_EXSICCATAE']:'Exsiccatae'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist"><?php echo (isset($LANG['H_DYN_LISTS'])?$LANG['H_DYN_LISTS']:'Dynamic Species List'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key"><?php echo (isset($LANG['H_DYN_KEY'])?$LANG['H_DYN_KEY']:'Dynamic Identification Key'); ?></a>
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
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php?target=genus" ><?php echo (isset($LANG['H_IMAGE_BROWSER'])?$LANG['H_IMAGE_BROWSER']:'Image Browser'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" ><?php echo (isset($LANG['H_IMAGE_SEARCH'])?$LANG['H_IMAGE_SEARCH']:'Image Search'); ?></a>
							</li>
						</ul>
					</li>
				<?php
				if($LANG_TAG=='es'){
				?>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php" ><?php echo (isset($LANG['H_INVENTORIES'])?$LANG['H_INVENTORIES']:'Species Checklists'); ?></a>
						<ul>
							<li>
                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=519"> Listas Mundiales de Especies ></a>
								<ul>
								<li>
									<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=558">Listas Globales de L&iacute;quenes y Hongos Liquen&iacute;colas</a>
								</li>
								<li>
									<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=556">Listas Rojas Globales de la UICN</a>
								</li>
								</ul>
							</li>
							<li>
                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=51">Centroam&eacute;rica</a>
								<ul>
								<li>
									<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=516">Panam&aacute;</a>
								</li>
								</ul>
 							</li>
							 <li>
                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=575">Sudam&eacute;rica</a>
								<ul>
								<li>
									<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=517">Ecuador</a>
								</li>
								</ul>
 							</li>
							<li>
                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=519">Norteam&eacute;rica</a>
 							</li>
							 <li>
                               <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=512">&Aacute;rtico</a>
	                          </li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=514">Canad&aacute;</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=555">M&eacute;xico</a>
							</li>
							<li>
								<a href="#">Estados Unidos: A-I ></a>
								<ul>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=513">Alaska</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=100">Arizona</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=533">Arkansas</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=101">California</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=103">Carolina del Norte</a>
								   </li>
								   <li>
        	                            <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=537">Carolina del Sur</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=510">Colorado</a>
									</li>
									<li>
                	                    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=544">Dakota del Norte</a>
                        	       </li>
								   <li>
                                  		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=532">Dakota del Sur</a>
		                            </li>
                		            <li>
                                		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=509">Florida</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=530">Georgia</a>
                                	</li>
                                    <li>
		                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=550">Hawai'i</a>
                		            </li>
                                	<li>
                                        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=540">Idaho</a>
		                            </li>
                		            <li>
                                	    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=554">Illinois</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=552">Indiana</a>
                                	</li>
                                    <li>
                                    	<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=518">Iowa</a>
		                            </li>
								</ul>
							</li>
                            <li>
                               <a href="#">Estados Unidos: K-N ></a>
                               <ul>
							   		<li>
                                	    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=553">Kansas</a>
                                    </li>
                		            <li>
		                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=534">Kentucky</a>
                                	</li>
		                            <li>
        		                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=528">Maine</a>
                		           </li>
                        		    <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=531">Maryland</a>
                                   </li>
                                   <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=511">Massachusetts</a>
	                               </li>
	        	                    <li>
        	        	               <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=551">Michigan</a>
                	        	   </li>
	                	           <li>
        	                	        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=546">Minnesota</a>
                	               </li>
                        	       <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=547">Misisipi</a>
                                   </li>
								   <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=539">Misuri</a>
                                   </li>
								   <li>
	                                   <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=545">Montana</a>
        	                       </li>
	                               <li>
        	                           <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=529">Nebraska</a>
                	               </li>
	                        	    <li>
        	                           <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=521">Nevada</a>
                	               </li>
                        	       <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=542">Nueva Jersey</a>
	                               </li>
        	                       <li>
                	                   <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=527">Nueva M&eacute;xico</a>
                        	       </li>
	                               <li>
        	                           <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=543">Nueva York</a>
                	               </li>
								   </li>
                               </ul>
                             </li>
                             <li>
                               <a href="#">Estados Unidos: O-Z ></a>
                               <ul>
							   		<li>
        	                            <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=541">Ohio</a>
                	               </li>
                        	       <li>
                                		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=538">Oklahoma</a>
	                               </li>
        	                       <li>
                	                    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=525">Oreg&oacute;n</a>
                        	       </li>
	                               <li>
        	                            <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=535">Pensilvania</a>
                	               </li>
                		            <li>
                               	        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=515">Tennessee</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=526">Texas</a>
                                	</li>
                                    <li>
		                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=524">Utah</a>
                		            </li>
                                	<li>
                                        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=523">Virginia</a>
		                            </li>
									<li>
                                  		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=536">Virginia Occidental</a>
		                            </li>
                		            <li>
                              	        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=548">Washington, D.C.</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=549">Washington</a>
                                	</li>
                		            <li>
                              	        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=102">Wisconsin</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=522">Wyoming</a>
                                	</li>
								</ul>
                              </li>
                              <li>
                               <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=500">Parques Nacionales de los Estados Unidos</a>
	                          </li>
               	              <li>
                               <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=505">Regi&oacute;n Subpolar del Sur</a>
                              </li>
						</ul>
					</li>
					<?php
					} else {
					?>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php" ><?php echo (isset($LANG['H_INVENTORIES'])?$LANG['H_INVENTORIES']:'Species Checklists'); ?></a>
						<ul>
							<li>
                                				<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=519">Global Checklists ></a>
								<ul>
								<li>
									<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=558">Global Checklists of Lichens & Lichenicolous Fungi</a>
								</li>
								<li>
									<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=556">Global IUCN Red-Lists</a>
								</li>
								</ul>
							</li>
							<li>
                               <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=512">Arctic</a>
							</li>
							<li>
                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=519">North America</a>
 							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=514">Canada</a>
							</li>
							<li>
									<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=555">Mexico</a>
							</li>
							<li>
								<a href="#">US States: A-L ></a>
								<ul>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=513">Alaska</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=100">Arizona</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=533">Arkansas</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=101">California</a>
									</li>
									<li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=510">Colorado</a>
									</li>
                		            <li>
                                		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=509">Florida</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=530">Georgia</a>
                                	</li>
                                    <li>
		                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=550">Hawai'i</a>
                		            </li>
                                	<li>
                                        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=540">Idaho</a>
		                            </li>
                		            <li>
                                	    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=554">Illinois</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=552">Indiana</a>
                                	</li>
                                    <li>
                                    	<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=518">Iowa</a>
		                            </li>
                		            <li>
                                	    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=553">Kansas</a>
                                    </li>
                		            <li>
		                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=534">Kentucky</a>
                                	</li>
								</ul>
							</li>
                            <li>
                               <a href="#">US States: M-N ></a>
                               <ul>
		                            <li>
        		                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=528">Maine</a>
                		           </li>
                        		    <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=531">Maryland</a>
                                   </li>
                                   <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=511">Massachusetts</a>
	                               </li>
	        	                    <li>
        	        	               <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=551">Michigan</a>
                	        	   </li>
                        	       <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=539">Missouri</a>
                                   </li>
								   <li>
        	                	        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=546">Minnesota</a>
                	               </li>
                        	       <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=547">Mississippi</a>
                                   </li>
                                   <li>
	                                   <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=545">Montana</a>
        	                       </li>
	                               <li>
        	                           <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=529">Nebraska</a>
                	               </li>
	                        	    <li>
        	                           <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=521">Nevada</a>
                	               </li>
                        	       <li>
                                       <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=542">New Jersey</a>
	                               </li>
        	                       <li>
                	                   <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=527">New Mexico</a>
                        	       </li>
	                               <li>
        	                           <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=543">New York</a>
                	               </li>
								   <li>
										<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=103">North Carolina</a>
								   </li>
        	                       <li>
                	                    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=544">North Dakota</a>
                        	       </li>
								   </li>
                               </ul>
                             </li>
                             <li>
                               <a href="#">US States: O-Z ></a>
                               <ul>
							   		<li>
        	                            <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=541">Ohio</a>
                	               </li>
                        	       <li>
                                		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=538">Oklahoma</a>
	                               </li>
        	                       <li>
                	                    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=525">Oregon</a>
                        	       </li>
	                               <li>
        	                            <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=535">Pennsylvania</a>
                	               </li>
									<li>
        	                            <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=537">South Carolina</a>
									</li>
                                    <li>
                                  		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=532">South Dakota</a>
		                            </li>
                		            <li>
                               	        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=515">Tennessee</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=526">Texas</a>
                                	</li>
                                    <li>
		                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=524">Utah</a>
                		            </li>
                                	<li>
                                        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=523">Virginia</a>
		                            </li>
                		            <li>
                              	        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=548">Washington, D.C.</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=549">Washington</a>
                                	</li>
                                    <li>
                                  		<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=536">West Virginia</a>
		                            </li>
                		            <li>
                              	        <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=102">Wisconsin</a>
                                    </li>
		                            <li>
                		                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=522">Wyoming</a>
                                	</li>
								</ul>
                              </li>
                              <li>
                               <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=500">US National Parks</a>
	                          </li>
							  <li>
                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=51">Central America</a>
								<ul>
								<li>
									<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=516">Panama</a>
								</li>
								</ul>
 							</li>
							 <li>
                                <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=575">South America</a>
								<ul>
								<li>
									<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=517">Ecuador</a>
								</li>
								</ul>
 							</li>
							 <li>
                               <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=500">US National Parks</a>
	                          </li>
               	              <li>
                               <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=505">Southern Subpolar Region</a>
                              </li>
						</ul>
					</li>
					<?php
					}
					?> 
					<li>
						<a href="https://lichenportal.org/cnalh/collections/specprocessor/crowdsource/index.php"><?php echo (isset($LANG['H_CROWDSOURCING'])?$LANG['H_CROWDSOURCING']:'Crowdsourcing'); ?></a>
					</li>
					<li>
		<a href="#"><?php echo (isset($LANG['H_ASSOC_PROJECTS'])?$LANG['H_ASSOC_PROJECTS']:'Associated Projects'); ?></a>
			<ul>
				<li>
					<a href="/arctic" target="_blank"><?php echo (isset($LANG['ARCTIC_PORTAL'])?$LANG['ARCTIC_PORTAL']:'Arctic Lichens'); ?></a>
				</li>
				<li>
					<a href="http://bryophyteportal.org" target="_blank"><?php echo (isset($LANG['BYRO_PORTAL'])?$LANG['BRYO_PORTAL']:'Bryophyte Portal (CNABH)'); ?></a>
				</li>
				<li>
					<a href="/chlal" target="_blank">L&iacute;quenes en Am&eacute;rica Latina (CHLAL)</a>
				</li>
				<li>
					<a href="https://globaltcn.utk.edu/">GLOBAL Bryophytes and Lichens Network</a>
				</li>
				<li>
					<a href="http://mycoportal.org" target="_blank">MyCoPortal</a>
				</li>
			</ul>
					</li>
					<li>
					<a href="#" ><?php echo (isset($LANG['H_MORE_INFO'])?$LANG['H_MORE_INFO']:'More Information'); ?></a>
						<ul>
							<li>
								<a href="http://symbiota.org/docs/symbiota-introduction/symbiota-help-pages/" target="_blank" ><?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Symbiota Help'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/misc/collprofiles.php" ><?php echo (isset($LANG['H_PARTNERS'])?$LANG['H_PARTNERS']:'Partners'); ?></a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/includes/usagepolicy.php"><?php echo (isset($LANG['H_DATA_POLICY'])?$LANG['H_DATA_POLICY']:'Data Usage Policy'); ?></a>
							</li>
                            <li>
                                    <a href="<?php echo $CLIENT_ROOT; ?>/misc/links.php"><?php echo (isset($LANG['H_LINKS'])?$LANG['H_LINKS']:'Links'); ?></a>
                            </li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/sitemap.php"><?php echo (isset($LANG['H_SITEMAP'])?$LANG['H_SITEMAP']:'Sitemap') ?></a>
					</li>
                                        <li>
                                                <a href="https://help.lichenportal.org/index.php/en/cnalh-help-resources/"><?php echo (isset($LANG['H_AYUDA_RECURSOS'])?$LANG['H_AYUDA_RECURSOS']:'Help & Resources'); ?></a>
                                        </li>
				</ul>
			</div>
		</td>
	</tr>
	<tr>
		<td id='middlecenter'  colspan="3">
