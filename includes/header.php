<SCRIPT LANGUAGE=JAVASCRIPT>
<!--
if (top.frames.length!=0)
  top.location=self.document.location;
// -->
</SCRIPT>
<table id="maintable" cellspacing="0">
	<tr style="" >
		<td id="header" colspan="3">
			<div style="clear:both;height:115px;border-bottom:1px solid #333333;">
				<div style="float:left;">
					<img style="" src="<?php echo $CLIENT_ROOT; ?>/images/layout/logo.png" />
				</div>
				<div style="float:right;">
					<img style="" src="<?php echo $CLIENT_ROOT; ?>/images/layout/header1.gif" />
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
						?>
						<span style="">
							Welcome <?php echo $USER_DISPLAY_NAME; ?>!
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php">My Profile</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout">Logout</a>
						</span>
						<?php
					}
					else{
						?>
						<span style="">
							<a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['SCRIPT_NAME'].'?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
								Log In
							</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php">
								New Account
							</a>
						</span>
						<?php
					}
					?>
					<span style="margin-left:5px;margin-right:5px;">
					</span>
				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" >Home</a>
					</li>
					<li>
						<a href="#" >Search</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search Collections</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank">Map Search</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/exsiccati/index.php" >Exsiccati</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" >Dynamic Species List</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key" >Dynamic Identification Key</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php" >Taxonomic Explorer</a>
							</li>
						</ul>
				     </li>
				     <li>
						<a href="#" >Images</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" >Image Browser</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Image Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?" >Species Checklists</a>
						<ul>
   							<li>
							    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=24">Canada</a>
							</li>
							<li>
							    <a href="#">US States></a>
							    <ul>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=23">Arizona</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=15">California</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=4">Illinois</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=13">Iowa</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=8">Maine</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=3">Missouri</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=18">Montana</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=22">New Mexico</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=21">New York</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=1">North Carolina</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=20">Ohio</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=6">Pennsylvania</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=19">Washington</a>
							          </li>
							    </ul>
                            </li>
							<li>
							    <a href="#">Beyond North America></a>
							    <ul>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=9">Chile</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=11">Falkland Islands</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=5">Fiji</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=10">Guatemala</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=16">Indonesia</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=17">Malaysia</a>
							          </li>
							    </ul>
                            </li>
							<li>
							    <a href="#">Species Groups></a>
							    <ul>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=2">Frullania</a>
							          </li>
							          <li>
							          <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=25">Sphagnum</a>
							          </li>
							    </ul>
							</li>
							<li>
							    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=12">National Park Service</a>
							</li>
							<li>
							    <a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?proj=26">Teaching Checklists</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/collections/specprocessor/crowdsource/index.php">Crowdsourcing</a>
					</li>
					<li>
						<a href="#" >Associated Projects</a>
						<ul>
							<li>
								<a href="https://bryophyteportal.org/frullania/">Frullania Portal (CNABH)</a>
							</li>
							<li>
								<a href="https://lichenportal.org/cnalh/">Consortium of North American Lichen Herbaria (CNALH)</a>
							</li>
							<li>
								<a href="https://lichenportal.org/chlal/">Consorcio de Herbarios de L&iacutequenes en Am&eacuterica Latina (CHLAL)</a>
							</li>
							<li>
							<li>
								<a href="https://mycoportal.org/portal/">MyCoPortal</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >More Information</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/misc/collprofiles.php/">Partners</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/sitemap.php">Sitemap</a>
					</li>
					<li>
						<a href="#" >Help</a>
						<ul>
							<li>
								<a href="https://symbiota.org/docs/symbiota-introduction/symbiota-help-pages/">Symbiota Help</a>
							</li>
							<li>
								<a href="http://lichenportal.org/help-resources">Lichen Consortium Help & Resources</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</td>
	</tr>
    <tr>
		<td id='middlecenter'  colspan="3">

