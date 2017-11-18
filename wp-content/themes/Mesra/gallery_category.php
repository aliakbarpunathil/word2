	<?php
		require_once('../../../wp-load.php');
		include dirname( __FILE__ ) .'/header.php' ;
		global $wpdb;
		$albums = $wpdb->get_results("SELECT DISTINCT album FROM wp_gallery");
	?>

    <div id="main-content">

        <div class="widget-area-1">

            <!-- widget -->

            <div class="stripe-box">

                <div class="wrapper">

                    <div class="left-color"></div>

                    <!-- widget -->
                    <!-- top new -->

                    <div class="right-color"></div>

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
                            </span> / <span class="current-page">Gallery</span>
							<?php if(is_super_admin()){ ?>					
							<a href="<?php echo get_template_directory_uri(); ?>/admin_gallery.php" title="" class="more-link" style="float:right"><span>Add New Album</span></a>
							<?php } ?>
							</div>
                        <!-- breadcrumb -->
                        <section class="kopa-gallery-masonry-widget widget">
                            <ul id="options1" class="options option-set clearfix filters" data-option-key="filter">
                                <li>
                                    <label class="active">
                                        <input value="all-1" type="radio" name="radio-1-set">All Category</label>
                                </li>
                               
                            </ul>
                            <!-- option-set -->
                            <div class="kopa-gallery-list-wrapper">
                                <ul class="kopa-gallery-list clearfix" data-filter-id="#options1" style="position: relative; height: 1385px;">
								<?php foreach($albums as $album) { ?>
                                    <li class="gallery-item all-1 kopa-cat-15-1 kopa-cat-14-1" style="position: absolute; left: 0px; top: 5px;">
                                        <article class="entry-item clearfix">
                                            <div class="entry-thumb">
                                                <a href="<?php echo get_template_directory_uri(); ?>/gallery.php?album=<?php echo $album->album; ?>" title="Haute Couture fact file bibendum">
												<?php $image =  $wpdb->get_row("SELECT image from wp_gallery WHERE album = ". $album->album); ?>
												<img src="<?php echo $image->image ?>" alt="Haute Couture fact file bibendum"></a>
                                            </div>
                                            <!-- entry-thumb -->

                                            <div class="entry-content clearfix">
												<?php if(is_super_admin()){ ?>	
                                                <header>
                                                    <a href="indexb5e7.html?cat=15" class="entry-categories pull-left">Category</a>
                                                    <a href="#" class="entry-categories pull-right" style="margin-right:0px;">Delete</a>
                                                    <!--rating: editor & user -->
                                                </header>
												<?php } ?>
                                                <h6 class="entry-title"><a href="indexe0d2.html?p=742" title="Haute Couture fact file bibendum">Haute Couture fact file bibendum</a></h6>
                                                
                                            </div>
                                            <!-- entry-content -->
                                        </article>
									
                                        <!-- entry-item -->
                                    </li>
									<?php } ?>
                                    <li class="gallery-item all-1 kopa-cat-15-1 kopa-cat-14-1" style="position: absolute; left: 225px; top: 5px;">
                                        <article class="entry-item clearfix">
                                            <div class="entry-thumb">
                                                <a href="indexb648.html?p=773" title="J-Lo’s divisive Versace dress-trouser hybrid"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/unsplash-49-2xau11nw2770vendepfmdm.jpg" alt="J-Lo’s divisive Versace dress-trouser hybrid"></a>
                                            </div>
                                            <!-- entry-thumb -->

                                            <div class="entry-content clearfix">
											<?php if(is_super_admin()){ ?>	
                                                <header>
                                                    <a href="indexb5e7.html?cat=15" class="entry-categories pull-left">Category</a>
                                                    <a href="#" class="entry-categories pull-right" style="margin-right:0px;">Delete</a>
                                                </header>
											<?php } ?>
                                                <h6 class="entry-title"><a href="indexb648.html?p=773" title="J-Lo’s divisive Versace dress-trouser hybrid">J-Lo’s divisive Versace dress-trouser hybrid</a></h6>
                                               
                                            </div>
                                            <!-- entry-content -->
                                        </article>
                                        <!-- entry-item -->
                                    </li>
                                    <li class="gallery-item all-1 kopa-cat-14-1 kopa-cat-19-1" style="position: absolute; left: 450px; top: 5px;">
                                        <article class="entry-item clearfix">
                                            <div class="entry-thumb">
                                                <a href="index0745.html?p=532" title="The Model Trainer: how to get legs like Gisele"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/unsplash-79-2xau11nw2770vendepfmdm.jpg" alt="The Model Trainer: how to get legs like Gisele"></a>
                                            </div>
                                            <!-- entry-thumb -->

                                            <div class="entry-content clearfix">
												<?php if(is_super_admin()){ ?>	
                                                <header>
                                                    <a href="index49ce.html?cat=14" class="entry-categories pull-left">Category</a>
                                                    <a href="#" class="entry-categories pull-right" style="margin-right:0px;">Delete</a>
                                                </header>
												<?php } ?>
                                                <h6 class="entry-title"><a href="index0745.html?p=532" title="The Model Trainer: how to get legs like Gisele">The Model Trainer: how to get legs like Gisele</a></h6>
                                               
                                            </div>
                                            <!-- entry-content -->
                                        </article>
                                        <!-- entry-item -->
                                    </li>
                                    <li class="gallery-item all-1 kopa-cat-15-1" style="position: absolute; left: 675px; top: 5px;">
                                        <article class="entry-item clearfix">
                                            <div class="entry-thumb">
                                                <a href="index336f.html?p=778" title="Extreme places to visit in the U.S."><img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/unsplash-18-2xau11nw2770vendepfmdm.jpg" alt="Extreme places to visit in the U.S."></a>
                                            </div>
                                            <!-- entry-thumb -->

                                            <div class="entry-content clearfix">
												<?php if(is_super_admin()){ ?>	
                                                <header>
                                                    <a href="indexb5e7.html?cat=15" class="entry-categories pull-left">Category</a>
													<a href="#" class="entry-categories pull-right" style="margin-right:0px;">Delete</a>
                                                </header>
												<?php } ?>
                                                <h6 class="entry-title"><a href="index336f.html?p=778" title="Extreme places to visit in the U.S.">Extreme places to visit in the U.S.</a></h6>
                                                
                                            </div>
                                            <!-- entry-content -->
                                        </article>
                                        <!-- entry-item -->
                                    </li>
                                    
                                </ul>
                            </div>
                        </section>
                        <!-- widget -->

                    </div>
                    <!-- main-col -->

                    <div class="sidebar widget-area-2 pull-left">

                        <div class="widget kopa-article-list-1-widget clearfix">
                            <h4 class="widget-title">Sponsored by </h4>
                            <article class="last-item clearfix">
                                <div class="entry-thumb">
                                    <a href="index475a.html?p=569" title="Star Wars: &#8216;Day one&#8217; shooting begins">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/gate.jpg" alt="Star Wars: &#8216;Day one&#8217; shooting begins" /> </a>
                                </div>
                                <!-- entry-thumb -->
                                <!-- entry-content -->
                            </article>
                            <article class="last-item clearfix">
                                <div class="entry-thumb">
                                    <a href="index475a.html?p=569" title="Star Wars: &#8216;Day one&#8217; shooting begins">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/resort.jpg" alt="Star Wars: &#8216;Day one&#8217; shooting begins" /> </a>
                                </div>
                                <!-- entry-thumb -->
                                <!-- entry-content -->
                            </article>
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
        <!-- main-content -->
     <?php include './footer.php' ?>