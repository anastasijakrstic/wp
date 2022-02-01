				<?php
                    global $atec; //Global variable for Redux
                    
                    $company = "";
                    $copyright  = "";
                    $fb = "";
                    $tw = "";
                    $ln = "";
                    $privacy_link = "";
                    $terms_link = "";

                ?>
				<!-- footer -->
				<footer class="footer">
				<div class="container-fluid" id="footer">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col-md-2 footer-box">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/lovegift-logo-2.png">
						        </div>
						        <div class="col-md-4 footer-box">
						        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
									<ul class="list-inline footer-social">
					                    <?php if( ! empty($atec["fb-link"])) { 
					                        $fb = $atec["fb-link"]; ?>
					                        <li>
					                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $fb;?>" title="Facebook"> <i class="fa fa-facebook fa-lg" aria-hidden="true"></i> </a>
					                        </li>
					                    <?php } ?>
					                    
					                    <?php if( ! empty($atec["tw-link"])) { 
					                        $tw = $atec["tw-link"]; ?>
					                        <li>
					                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $tw;?>" title="Twitter"> <i class="fa fa-twitter fa-lg" aria-hidden="true"></i> </a>
					                        </li>
					                        <?php } ?>
					                        
					                    <?php if( ! empty($atec["ln-link"])) { 
					                        $ln = $atec["ln-link"]; ?>   
					                        <li>
					                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $ln; ?>" title="LinkedIn"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> </a>
					                        </li>
					                    <?php } ?>
					                    <?php if( ! empty($atec["in-link"])) { 
					                        $ln = $atec["in-link"]; ?>   
					                        <li>
					                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $in; ?>" title="Instagram"> <i class="fa fa-instagram fa-lg" aria-hidden="true"></i> </a>
					                        </li>
					                    <?php } ?>
					                    <?php if( ! empty($atec["yt-link"])) { 
					                        $ln = $atec["yt-link"]; ?>   
					                        <li>
					                            <a class="btn-outline-light btn-social" target="_blank" href="<?php echo $yt; ?>" title="Youtube"> <i class="fa fa-youtube fa-lg" aria-hidden="true"></i> </a>
					                        </li>
					                    <?php } ?>
					                </ul>
								</div>
								<div class="col-md-3 footer-box">
									<ul>
										<li><a href="#">Reklamacije</a></li>
										<li><a href="#">Način plaćanja</a></li>
										<li><a href="#">Način isporuke</a></li>
										<li><a href="#">Odricanje od odgovornosti</a></li>
										<li><a href="#">Uputstvo za kupovinu</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-box">
									<h4>Pozovite nas</h4>
									<?php
						                if( ! empty($atec["call-us-number"])) {
						                    $header_phone = $atec["call-us-number"];
						                    $header_phone_clean = str_replace(array("/", "-", " "),"", $header_phone); ?>
						                    <a href="tel:<?php echo $header_phone_clean ?>"><?php echo $header_phone ?></a>
						                    <?php
						                }
					                ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				</footer>
				<div class="container-fluid website-design">
					<div class="container">
						Website design: <a href="https://atec.rs" target="_blank">ATEC Technologies</a>
					</div>
				</div>
				<!-- / footer -->
				<a id="scroll-top" href="#">Scroll</a>
        <?php wp_footer(); ?>
    </body>
    
</html>