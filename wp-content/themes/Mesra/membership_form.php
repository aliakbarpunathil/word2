	<?php
	require_once('../../../wp-load.php');
	include dirname( __FILE__ ) .'/header.php' ;
	
		if(isset($_GET['user_id'])){
			global $wpdb;
			$details = $wpdb->get_row("SELECT * FROM wp_user_details WHERE user_id = ".$_GET['user_id']);
			
		}
	
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
                                <dd><a href="#" title="Villagers fight off Boko Haram militants">Villagers fight off Boko Haram militants</a></dd>
                                <dd><a href="#" title="Haute Couture fact file bibendum">Haute Couture fact file bibendum</a></dd>
                                <dd><a href="#" title="J-Lo’s divisive Versace dress-trouser hybrid">J-Lo’s divisive Versace dress-trouser hybrid</a></dd>
                                <dd><a href="#" title="The Model Trainer: how to get legs like Gisele">The Model Trainer: how to get legs like Gisele</a></dd>
                                <dd><a href="#" title="Extreme places to visit in the U.S.">Extreme places to visit in the U.S.</a></dd>
                                <dd><a href="#" title="Jodie Foster marries Alexandra Hedison">Jodie Foster marries Alexandra Hedison</a></dd>
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
                            </span> / <span class="current-page">Membership</span></div>
                        <!-- breadcrumb -->

                        <div id="page-10" class="page-content-area">
                            <div class="woocommerce">

                                <h2>Membership Form</h2>

                                <form method="post" class="login" action = "<?php if($details){ echo get_template_directory_uri(); ?>/membership_form_edit_post.php <?php } else { echo get_template_directory_uri(); ?>/membership_form_post.php" enctype="multipart/form-data">
										<input type="hidden" value="<?php echo $details->user_id; ?>" name = "user_id">
                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="username">Name<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="news_heading" value="<?php echo $details->name; ?>" />
                                    </p>
                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                       <label for="username">Occupation<span class="required">*</span></label>
                                       <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="occupation" id="news_heading" value="<?php echo $details->occupation; ?>" />
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="username">Permanent Address<span class="required">*</span></label>
                                       <textarea class="woocommerce-Input woocommerce-Input--text " name="paddress" style="width:80%;height:150px;"><?php echo $details->paddress; ?></textarea>
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="username">Office Address<span class="required">*</span></label>
                                       <textarea class="woocommerce-Input woocommerce-Input--text " name="oaddress" style="width:80%;height:150px;"><?php echo $details->oaddress; ?></textarea>
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="username">Telephone with STD code<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="news_heading" value="<?php echo $details->phone; ?>" />
                                    </p>
                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                       <label for="username">Mobile<span class="required">*</span></label>
                                       <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="mobile" id="news_heading" value="<?php echo $details->mobile; ?>" />
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="username">email-1<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email1" id="news_heading" value="<?php echo $details->email1; ?>" />
                                    </p>
                                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                       <label for="username">email-2<span class="required">*</span></label>
                                       <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email2" id="news_heading" value="<?php echo $details->email2; ?>" />
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                       <label for="username">Admission No:<span class="required">*</span></label>
                                       <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="admsn_no" id="news_heading" value="<?php echo $details->admsn_no; ?>" />
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                       <label for="username">Year of Study in the Campus<span class="required">*</span></label>
                                       <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="year" id="news_heading" value="<?php echo $details->year; ?>" />
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                       <label for="username">Year of Pass Out 10th<span class="required">*</span></label>
                                       <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="passout10" id="news_heading" value="<?php echo $details->passout10; ?>" />
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                       <label for="username">Year of Pass Out 12th<span class="required">*</span></label>
                                       <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="passout12" id="news_heading" value="<?php echo $details->passout12; ?>" />
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                       <label for="username">Year of Pass Out Others<span class="required">*</span></label>
                                       <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="passout_o" id="news_heading" value="<?php echo $details->passout_o; ?>" />
                                    </p>									
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="username">Any References<span class="required">*</span></label>
                                       <textarea class="woocommerce-Input woocommerce-Input--text " name="ref" style="width:80%;height:150px;"><?php echo $details->ref; ?></textarea>
                                    </p>
									<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                        <label for="username">Uplaod Profile Image<span class="required">*</span></label>
										<input type="file" name="fileupload" id="fileupload">
									</p>
                                    <p class="form-row">                                        
                                        <label for="rememberme" class="inline">
                                        <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> I Accept the Terms and Conditions </label>
										<input type="submit" class="woocommerce-Button button" name="login" value="Submit Form" />
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