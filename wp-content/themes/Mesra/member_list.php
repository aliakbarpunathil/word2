	<?php
	require_once('../../../wp-load.php');
	include dirname( __FILE__ ) .'/header.php' ;
	global $wpdb;
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
                            </span> / <span class="current-page" itemprop="title">Member List</span></div>
                        <!-- breadcrumb -->

						 <h4 style="text-align:right;">
							<form action="/action_page.php">
							  Search User Here:
							  <input type="search" name="search" id = "myInput" onkeyup="myFunction()" placeholder="Name, email, Phone, Adm No, etc...." style="font-size:12px;width:300px">							 
							</form>
						 </h4>
						 <?php
							$member_details = $wpdb->get_results("SELECT * FROM wp_user_details");
						 ?>
                        <section class="entry-list" style="padding-top:15px;border-top:solid #9a9a9a 3px;">
                            <ul class="clearfix" id = "myUL">
							<?php foreach($member_details as $member_detail){ ?>
                                <li>
                                    <article id="post-742" class="entry-item clearfix post-742 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion category-technology tag-awesome tag-css tag-jquery tag-kopa">
                                        <div class="entry-thumb">
                                            <a href="#" title="Haute Couture fact file bibendum"><img src="<?php echo $member_detail->profile_pic; ?>" alt="Haute Couture fact file bibendum" style = "height : 210px;" /></a>
                                        </div>
                                        <!-- entry-thumb -->
										
                                        <div class="entry-content" style="padding:0px;">
                                            <header>
                                                <h6 class="entry-title search_box" style="margin-bottom:0px;" id="mname">Name: <?php echo $member_detail->name; ?></h6>
												<div >Occupation: <?php echo $member_detail->occupation; ?></div>
                                                <div class="search_box">email: <?php echo $member_detail->email1; ?></div>
												<div class="search_box">phone: <?php echo $member_detail->mobile; ?></div> 
												<div class="search_box">Adm No:<?php echo $member_detail->admsn_no; ?></div>
												<div>10th Passout:<?php echo $member_detail->passout10; ?></div> 												
                                            </header>
                                            <h6 style="margin:0px;">Permanent Address</h6>
											<p><?php echo $member_detail->paddress; ?></p>
											<h6 style="margin:0px;">Office Address</h6>
											<p><?php echo $member_detail->oaddress; ?></p>
                                         </div>
                                        <!-- entry-content -->

                                    </article>
                                    <!-- entry-item -->
                                </li>
							<?php } ?>
								<li>
                                    <article id="post-742" class="entry-item clearfix post-742 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion category-technology tag-awesome tag-css tag-jquery tag-kopa">
                                        <div class="entry-thumb">
                                            <a href="#" title="Haute Couture fact file bibendum"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/Smile-2xau11nw5ptlaobzhmovm2.jpg" alt="Haute Couture fact file bibendum" /></a>
                                        </div>
                                        <!-- entry-thumb -->
										
                                        <div class="entry-content" style="padding:0px;">
                                            <header>
                                                <h6 class="entry-title search_box" style="margin-bottom:0px;" id="mname">Name: Bibin George</h6>
												<div >Occupation: Software Engineer</div>
                                                <div class="search_box">email: sample@gmail.com</div>
												<div class="search_box">phone: 123456789</div> 
												<div class="search_box">Adm No:123456</div>
												<div>10th Passout:2017</div> 												
                                            </header>
                                            <h6 style="margin:0px;">Permanent Address</h6>
											<p>Thekkathu(H), Cholathadam P.O, Poonjar Via, Kottayam Pin-686582</p>
											<h6 style="margin:0px;">Office Address</h6>
											<p>Thekkathu(H), Cholathadam P.O, Poonjar Via, Kottayam Pin-686582</p>
                                         </div>
                                        <!-- entry-content -->

                                    </article>
                                    <!-- entry-item -->
                                </li>
								<li>
                                    <article id="post-742" class="entry-item clearfix post-742 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion category-technology tag-awesome tag-css tag-jquery tag-kopa">
                                        <div class="entry-thumb">
                                            <a href="#" title="Haute Couture fact file bibendum"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/Smile-2xau11nw5ptlaobzhmovm2.jpg" alt="Haute Couture fact file bibendum" /></a>
                                        </div>
                                        <!-- entry-thumb -->
										
                                        <div class="entry-content" style="padding:0px;">
                                            <header>
                                                      <h6 class="entry-title search_box" style="margin-bottom:0px;" id="mname">Name: Bibin George</h6>
												<div >Occupation: Software Engineer</div>
                                                <div class="search_box">email: sample@gmail.com</div>
												<div class="search_box">phone: 123456789</div> 
												<div class="search_box">Adm No:123456</div>
												<div>10th Passout:2017</div> 											
                                            </header>
                                            <h6 style="margin:0px;">Permanent Address</h6>
											<p>Thekkathu(H), Cholathadam P.O, Poonjar Via, Kottayam Pin-686582</p>
											<h6 style="margin:0px;">Office Address</h6>
											<p>Thekkathu(H), Cholathadam P.O, Poonjar Via, Kottayam Pin-686582</p>
                                         </div>
                                        <!-- entry-content -->

                                    </article>
                                    <!-- entry-item -->
                                </li>
                                
                            </ul>                           

                        </section>
                        <!-- entry-list -->

                    </div>
                    <!-- main-col -->

                    <div class="sidebar widget-area-2 pull-left">

                        <div class="widget kopa-article-list-1-widget clearfix">
                            <h4 class="widget-title">Business</h4>
                            <article class="last-item clearfix">
                                <div class="entry-thumb">
                                    <a href="index475a.html?p=569" title="Star Wars: &#8216;Day one&#8217; shooting begins">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/slide-2-2xau10npfhs2enzqd0w74a.jpg" alt="Star Wars: &#8216;Day one&#8217; shooting begins" /> </a>
                                </div>                                <!-- entry-thumb -->
                               
                                <!-- entry-content -->
                            </article>
							 <article class="last-item clearfix">
                                <div class="entry-thumb">
                                    <a href="index475a.html?p=569" title="Star Wars: &#8216;Day one&#8217; shooting begins">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/bfi_thumb/slide-2-2xau10npfhs2enzqd0w74a.jpg" alt="Star Wars: &#8216;Day one&#8217; shooting begins" /> </a>
                                </div>                                <!-- entry-thumb -->
                               
                                <!-- entry-content -->
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
		
<script>
	function myFunction() {
		var input, filter, ul, li, a, i,j;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		var li_list = document.getElementById("node").querySelectorAll("#myUL>li");
			var x = document.getElementsByClassName("search_box");
			var i;
			for (i = 0; i < li_list.length; i++) {
				x = li_list[i].getElementsByClassName("search_box");
				for(j = 0; j < x.length; j++){
					a = x[i];
					if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
						li_list[i].style.display = "block";
					} else {
						li_list[i].style.display = "none";
					}	
				}
			}	
	}
</script>
             <?php include './footer.php' ?>