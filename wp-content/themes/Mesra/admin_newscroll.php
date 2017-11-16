	<?php
	require_once('../../../wp-load.php');
	include dirname( __FILE__ ) .'/header.php' ;
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
                            </span> / <span class="current-page">Scrolling News</span></div>
                        <!-- breadcrumb -->

                        <div id="page-10" class="page-content-area">
                            <div class="woocommerce">

                                <h2>Add News</h2>

                                <form method="post" class="login" action = "news_scroll_post.php">

                                   
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="username">News<span class="required">*</span></label>
                                       <textarea class="woocommerce-Input woocommerce-Input--text " name="news"></textarea>
                                    </p>
									
                                    <p class="form-row">                                        
                                        <input type="submit" class="woocommerce-Button button" name="login" value="Add New" />
                                    </p>                                    
                                </form>

                            </div>
                        </div>

                    </div>
                    <!-- main-col -->

                    <div class="sidebar widget-area-2 pull-left">

                        <div class="widget kopa-article-list-1-widget clearfix">
                            <h4 class="widget-title">Business</h4>
                            <article class="last-item clearfix">
                                <div class="entry-thumb">
                                    <a href="index475a.html?p=569" title="Star Wars: &#8216;Day one&#8217; shooting begins">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/slide-2-2xau10npfhs2enzqd0w74a.jpg" alt="Star Wars: &#8216;Day one&#8217; shooting begins" /> </a>
                                </div> 
								<div class="entry-thumb">
                                    <a href="index475a.html?p=569" title="Star Wars: &#8216;Day one&#8217; shooting begins">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/slide-2-2xau10npfhs2enzqd0w74a.jpg" alt="Star Wars: &#8216;Day one&#8217; shooting begins" /> </a>
                                </div> 								
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
       <?php include './footer.php' ?>