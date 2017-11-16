	<?php
	require_once('../../../wp-load.php');
	include dirname( __FILE__ ) .'/header.php' ;
	global $wpdb;
	$exe_comite = $wpdb->get_results("SELECT u.name, u.profile_pic, u.role, r.role roles FROM wp_user_details u JOIN user_roles r ON u.role = r.id");
	
	?>

    <div id="main-content">

        <div class="widget-area-1">


			 <div class="stripe-box">

                <div class="wrapper">   

                    <div class="right-color"></div>

                    <div class="social-links-container">
                        <div class="social-links-wrapper">
                            <ul class="social-links clearfix">
                                <li>
                                    <a href="#" class="fa fa-facebook" target="_self" title="Facebook"></a>
                                </li>

                                <li>
                                    <a href="#" class="fa fa-twitter" target="_self" title="Twitter"></a>
                                </li>

                                <li>
                                    <a href="#" class="fa fa-google-plus" target="_self" title="Google+"></a>
                                </li>

                                <li>
                                    <a href="indexd784.html?feed=rss2" class="fa fa-rss" target="_self" title="Rss"></a>
                                </li>

                                <li>
                                    <a href="#" class="fa fa-flickr" target="_self" title="Flickr"></a>
                                </li>

                                <li>
                                    <a href="#" class="fa fa-tumblr" target="_self" title="Tumblr"></a>
                                </li>

                                <li>
                                    <a href="skype:#?call" class="fa fa-skype" target="_self" title="Skype"></a>
                                </li>

                                <li>
                                    <a href="#" class="fa fa-pinterest" target="_self" title="Pinterest"></a>
                                </li>

                                <li>
                                    <a href="#" class="fa fa-youtube" target="_self" title="Youtube"></a>
                                </li>
                            </ul>
                            <!-- social-links -->
                        </div>
                        <!-- social-links-wrapper -->
                        <span class="triangle-1st"></span>
                        <span class="triangle-2nd"></span>
                    </div>
                    <!-- social-links-container -->

                    <div class="weather-widget-wrapper">
                        <span class="triangle-1st"></span>
                        <span class="triangle-2nd"></span>
                        <div class="widget widget_awesomeweatherwidget masonry-brick">
                            <div class="awesome-weather-wrap awecf custom awe_with_stats awe_wide" id="awesome-weather-vietnam">
                                <div class="awesome-weather-header">
                                    No Data </div>
                                <div class="awesome-weather-current-temp">
                                    <i class="icon-weather wi wi-day-sunny"></i>
                                </div>
                            </div>
                        </div>
                        <!-- weather-widget-wrapper -->

                    </div>
                    <!-- wrapper -->

                </div>
                <!-- stripe-box -->

            </div>
            <!-- widget-area-1 -->
            <div class="bn-box">

                <div class="wrapper clearfix">

                    <div class="kp-headline-wrapper clearfix">
                        <span class="kp-headline-title">BREAKING NEWS</span>
                        <div class="kp-headline clearfix">
                            <dl class="ticker-1 clearfix" data-speed="0.07">
                                <dt style="display: none;">ticket title</dt>
                                <dd><a href="indexc052.html?p=888" title="Villagers fight off Boko Haram militants">Villagers fight off Boko Haram militants</a></dd>
                                <dd><a href="indexe0d2.html?p=742" title="Haute Couture fact file bibendum">Haute Couture fact file bibendum</a></dd>
                                <dd><a href="indexb648.html?p=773" title="J-Lo’s divisive Versace dress-trouser hybrid">J-Lo’s divisive Versace dress-trouser hybrid</a></dd>
                                <dd><a href="index0745.html?p=532" title="The Model Trainer: how to get legs like Gisele">The Model Trainer: how to get legs like Gisele</a></dd>
                                <dd><a href="index336f.html?p=778" title="Extreme places to visit in the U.S.">Extreme places to visit in the U.S.</a></dd>
                                <dd><a href="index61f2.html?p=693" title="Jodie Foster marries Alexandra Hedison">Jodie Foster marries Alexandra Hedison</a></dd>
                            </dl>
                        </div>
                    </div>
                    <!-- kp-headline-wrapper -->

                </div>
                <!-- wrapper -->

            </div>
            <!-- bn-box -->

            <section class="main-section">
                <div class="wrapper clearfix">

                    <div class="main-col pull-left">

                        <div class="breadcrumb clearfix"><span>You are here: </span> <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="http://upsidethemes.net/demo/news-maxx"><span itemprop="title">Home</span></a>
                            </span> / <span class="current-page">Gallery</span></div>
                        <!-- breadcrumb -->

                        <!-- widget -->

                        <section class="kopa-gallery-masonry-widget widget">                           
                           <div class="widget-area-6">

								<div id="kopa_widget_woocommerce_products-1" class="widget kopa-product-list-widget">
								<?php 
								foreach($exe_comite as $exe_com)
								if($exe_com->role == "1" ) { ?>	
								
									<div class="col-md-12" style="padding:10px;">
									    <div class="col-md-4"></div>
										<div class="col-md-4">
												<article class="entry-item">
													<div class="entry-thumb" style="text-align:center;">														
															<img src="<?php echo $exe_com->profile_pic; ?>" style="border:solid #dadada  2px;">
															<h4 style="margin:2px;"><?php echo $exe_com->name; ?></h4>
															<h5 style="margin:0px;color:#3b5998">President</h5>
													</div>													
													<!-- entry-content -->
												</article>
										</div>
										<div class="col-md-4"></div>
									</div>
								<?php } ?>
									<div class="col-md-12" style="padding:10px;">
									<?php foreach($exe_comite as $exe_com)
								if($exe_com->role == "2" ) { ?>	
									   <div class="col-md-4">
												<article class="entry-item">
													<div class="entry-thumb" style="text-align:center;">														
															<img src="<?php echo $exe_com->profile_pic; ?>" style="border:solid #dadada  2px;">
															<h4 style="margin:2px;"><?php echo $exe_com->name; ?></h4>
															<h5 style="margin:0px;color:#3b5998">Secretary</h5>
													</div>													
													<!-- entry-content -->
												</article>
										</div>
									<?php } ?>
									<?php foreach($exe_comite as $exe_com)
								if($exe_com->role == 3 ) { ?>	
										<div class="col-md-4">
												<article class="entry-item">
													<div class="entry-thumb" style="text-align:center;">														
															<img src="<?php echo $exe_com->profile_pic; ?>" style="border:solid #dadada  2px;">
															<h4 style="margin:2px;"><?php echo $exe_com->name; ?></h4>
															<h5 style="margin:0px;color:#3b5998">Treasurer</h5>
													</div>													
													<!-- entry-content -->
												</article>
										</div>
										<?php } ?>
										<?php foreach($exe_comite as $exe_com)
								if($exe_com->role == 18 ) { ?>	
										<div class="col-md-4">
											<article class="entry-item">
													<div class="entry-thumb" style="text-align:center;">														
															<img src="<?php echo $exe_com->profile_pic; ?>" style="border:solid #dadada  2px;">
															<h4 style="margin:2px;"><?php echo $exe_com->name; ?></h4>
															<h5 style="margin:0px;color:#3b5998">Immediate Past President</h5>
													</div>													
													<!-- entry-content -->
											</article>
										</div>
										<?php } ?>
									</div>	
									
								<div class="col-md-12" style="padding:10px;">
									<h4 class="widget-title">Vice Presidents</h4>
									<?php foreach($exe_comite as $exe_com)
								if($exe_com->role == 4 ) { ?>	
									   <div class="col-md-4">
												<article class="entry-item">
													<div class="entry-thumb" style="text-align:center;">														
															<img src="<?php echo $exe_com->profile_pic; ?>" style="border:solid #dadada  2px;">
															<h4 style="margin:2px;"><?php echo $exe_com->name; ?></h4>															
													</div>													
													<!-- entry-content -->
												</article>
										</div>
									<?php } ?>
									</div>
								
								<div class="col-md-12" style="padding:10px;">
									<h4 class="widget-title">Joint Secreatries</h4>
									<?php foreach($exe_comite as $exe_com)
								if($exe_com->role == 5 ) { ?>	
									   <div class="col-md-4">
												<article class="entry-item">
													<div class="entry-thumb" style="text-align:center;">														
															<img src="<?php echo $exe_com->profile_pic; ?>" style="border:solid #dadada  2px;">
															<h4 style="margin:2px;"><?php echo $exe_com->name; ?></h4>
															
													</div>													
													<!-- entry-content -->
												</article>
										</div>
									<?php } ?>
									</div>
									
									<h4 class="widget-title">Executive Committee</h4>
									<ul class="clearfix">
									
									<?php foreach($exe_comite as $exe_com)
								if($exe_com->role == 6 ) { ?>	
										<li style="height: 401px;">
											<article class="entry-item">
												<div class="entry-thumb">
													<a href="#" title="">
														<img src="<?php echo $exe_com->profile_pic; ?>" alt="Crepe Stretch Jordan"> </a>
												</div>
												<div class="entry-content text-center">
													<h6 class="entry-title"><?php echo $exe_com->name; ?></h6>
													
												</div>
												<!-- entry-content -->
											</article>
											<!-- entry-item -->
										</li>
										<?php } ?>
										<li style="height: 401px;">
											<article class="entry-item">
												<div class="entry-thumb">
													<a href="indexfd45.html?product=joules-maryse-dress" title="Joules Maryse Dress">
														<img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/Smile-2xau11nw5u1kn1ypfydfyi.jpg" alt="Joules Maryse Dress"> </a>
												</div>
												<div class="entry-content text-center">
													<h6 class="entry-title"><a href="indexfd45.html?product=joules-maryse-dress" title="Joules Maryse Dress">Joules Maryse Dress</a></h6>
													
												</div>
												<!-- entry-content -->
											</article>
											<!-- entry-item -->
										</li>
										<li style="height: 401px;">
											<article class="entry-item">
												<div class="entry-thumb">
													<a href="index1dd2.html?product=carven-angora-sweater" title="Carven Sweater">
														<img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/Smile-2xau11nw5u1kn1ypfydfyi.jpg" alt="Carven Sweater"> </a>
												</div>
												<div class="entry-content text-center">
													<h6 class="entry-title"><a href="index1dd2.html?product=carven-angora-sweater" title="Carven Sweater">Carven Sweater</a></h6>
													
												</div>
												<!-- entry-content -->
											</article>
											<!-- entry-item -->
										</li>																		
									</ul>
									
										<div class="col-md-12" style="padding:10px;">
									<?php foreach($exe_comite as $exe_com)
								if(($exe_com->role > 6 )&& ($exe_com->role < 18 )) { ?>	
									   <div class="col-md-4">
												<article class="entry-item">
													<div class="entry-thumb" style="text-align:center;">														
															<img src="<?php echo $exe_com->profile_pic; ?>" style="border:solid #dadada  2px;">
															<h4 style="margin:2px;"><?php echo $exe_com->name; ?></h4>
															<h5 style="margin:0px;color:#3b5998"><?php echo $exe_com->roles; ?></h5>
													</div>													
													<!-- entry-content -->
												</article>
										</div>
									<?php } ?>
								</div>
									
									
								</div>
							</div>
														
                           
                        </section>

                    </div>
                    <!-- main-col -->

                    <div class="sidebar widget-area-2 pull-left">

                        <div class="widget kopa-article-list-1-widget clearfix">
                            <h4 class="widget-title">Business</h4>
                            <article class="last-item clearfix">
                                <div class="entry-thumb">
                                    <a href="indexe0d2.html?p=742" title="Haute Couture fact file bibendum">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/Smile-2xau11nw5u1kn1ypfydfyi.jpg" alt="Haute Couture fact file bibendum" /> </a>
                                </div>
                                <div class="entry-thumb">
                                    <a href="indexe0d2.html?p=742" title="Haute Couture fact file bibendum">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/Smile-2xau11nw5u1kn1ypfydfyi.jpg" alt="Haute Couture fact file bibendum" /> </a>
                                </div>
                            </article>
                            <!-- last-item -->
                           
                        </div>                       
                    </div>
                    <!-- widget-area-2 -->

                    <div class="clear"></div>

                </div>
                <!-- wrapper -->

            </section>
            <!-- main-section -->
        </div>
        <!-- main-content -->
      <?php include './footer.php' ?>