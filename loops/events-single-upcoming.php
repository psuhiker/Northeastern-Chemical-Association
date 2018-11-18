<?php include (TEMPLATEPATH . '/includes/marquee.php' ); ?>

<section class="event details">
    <div class="container">
        <div class="row">
        
        	<div class="col-sm-5">
        		<?php if ( get_field('event_featured_image') ) { ?>
        		    <div class="event block" style="background-image: url(<?php the_field('event_featured_image'); ?>);">
        		<?php } else { ?>
        		    <div class="event block" style="background-image: url(<?php the_field('marquee_image', 8); ?>);">
        		<?php } ?>
	        	    <div class="outer">
	        	        <div class="inner">
	        	        
	        	            <?php $date = get_field('event_date', false, false); $date = new DateTime($date); ?>
	        	            
	        	            <div class="date">
	        	                <span class="day">
	        	                    <?php echo $date->format('j'); ?>
	        	                </span>
	        	                <span class="month">
	        	                    <?php echo $date->format('F'); ?>
	        	                </span>
	        	                <span class="year">
	        	                    <?php echo $date->format('Y'); ?>
	        	                </span>
	        	            </div>
	        	            
	        	            <div class="title">
	        	                <?php the_title(); ?>
	        	            </div>
	        	        
	        	        </div>
	        	    </div>
	        	</div>
        	</div>
        	
        	<div class="col-sm-7">
        		<div class="event description">
        	
	        		<?php if( get_field('event_description') ) { ?>
	        		    <?php the_field('event_description'); ?>
	        		<?php } ?>
	        		
	        		<div class="row _row-eq-height">
	        		
		        		<?php if( get_field('event_time') ) { ?>
			        		<div class="col-md-6 col-lg-3">
			        			<p class="no-margin--bottom"><strong>Date</strong></p>
			        			<p><?php the_field('event_time'); ?></p>
			        		</div>
			        	<?php } ?>
			        	
			        	<?php if( get_field('event_location') ) { ?>
			        		<div class="col-md-6 col-lg-4">
			        			<p class="no-margin--bottom"><strong>Location</strong></p>
			        			<p><?php the_field('event_location'); ?></p>
			        		</div>
			        	<?php } ?>
						
						<?php if( have_rows('event_pricing') ): ?>
						
							<div class="col-md-12 col-lg-5">
							
								<p class="no-margin--bottom"><strong>Cost</strong></p>
								
								<?php while ( have_rows('event_pricing') ) : the_row(); ?>
								
									<?php if ( is_user_logged_in() ) { ?>
									
										<p class="no-margin--bottom">
											<strong>
												<?php if( get_sub_field('event_pricing_member_price') ) { ?>
													$<?php the_sub_field('event_pricing_member_price'); ?>
												<?php } else { ?>
													$<?php the_sub_field('event_pricing_price'); ?>
												<?php } ?>
											</strong>
											<?php the_sub_field('event_pricing_label'); ?> 
										</p>
									
									<?php } else { ?>
									
										<p class="no-margin--bottom">
											<strong>
												$<?php the_sub_field('event_pricing_price'); ?>
											</strong>
											<?php the_sub_field('event_pricing_label'); ?>
										</p>
									
									<?php } ?>
								
								<?php endwhile; ?>
								
							</div>
						
						<?php else : endif; ?>
		        	
		        	</div>
		        	
		        	<p class="default-margin--top"><a href="#registration" class="btn btn-default register" data-toggle="tab">Register</a></p>
        	
        		</div>
        	</div>
        
        </div>
    </div>
</section>

<section class="event tabs">
	<div class="container">
	    <div class="row">
	    
	    	<ul class="nav nav-tabs" role="tablist">
	    		<?php if( get_field('event_speakers') ) { ?>
	    			<li role="presentation" class="col-sm-4 no-padding--horizontal" id="linkSpeakers"><a href="#speakers" aria-controls="speakers" role="tab" data-toggle="tab">Speakers</a></li>
	    		<?php } ?>
	    		<?php if( get_field('event_accomodations') ) { ?>
	    	    	<li role="presentation" class="col-sm-4 no-padding--horizontal" id="linkAccomodations"><a href="#accomodations" aria-controls="accomodations" role="tab" data-toggle="tab">Accomodations</a></li>
	    	    <?php } ?>
	    	    <li role="presentation" class="active col-sm-4 no-padding--horizontal" id="linkRegistration"><a href="#registration" aria-controls="registration" role="tab" data-toggle="tab">Registration</a></li>
	    	  </ul>
	    
	    </div>
	</div>
</section>

<section class="event tabs-content">
	<div class="container">
	    <div class="row">
	    
	    	<div class="tab-content">
	    
		    	<?php if( get_field('event_speakers') ) { ?>
		    		<div role="tabpanel" class="tab-pane" id="speakers">
		    		
		    		    <div class="col-xs-12">
		    			    <?php the_field('event_speakers'); ?>
		    			</div>
		    			
		    		</div>
		    	<?php } ?>
		    	
		    	<?php if( get_field('event_accomodations') ) { ?>
		    		<div role="tabpanel" class="tab-pane" id="accomodations">
		    		
		    		    <div class="col-md-8 col-lg-6 lg-margin--bottom">
		    		    
		    		        <?php the_field('event_accomodations'); ?>
		    		        
		    		    </div>
		    		    
		    		    <div class="clearfix"></div>
		    		        
		    		    <?php if( have_rows('event_hotels') ): ?>
		    		        <?php  while ( have_rows('event_hotels') ) : the_row(); ?>
		    		        
		    		            <div class="col-md-8 col-lg-6">
		    		            
		    		                <p class="no-margin--bottom">
		    		                    <span class="default-margin--right">
		    		                        <strong><?php the_sub_field('event_hotel_name'); ?></strong>
		    		                    </span>
		    		                    <a href="<?php the_sub_field('event_hotel_website'); ?>" target="_blank" class="font-size--xs text-nowrap">Visit Website</a>
		    		                </p>
		    		                
		    		                <?php if( get_sub_field('event_hotel_address') ) { ?>
		    		                    <p><?php the_sub_field('event_hotel_address'); ?></p>
		    		                <?php } ?>
		    		                
		    		                <?php if( get_sub_field('event_hotel_rate') ) { ?>
		    		                    <p class="no-margin--bottom"><strong>Room Rate</strong></p>
		    		                    <p><?php the_sub_field('event_hotel_rate'); ?></p>
		    		                <?php } ?>
		    		                
		    		                <p><strong>Reservations</strong></p>
		    		                
		    		                <?php if( get_sub_field('event_hotel_reservation_link') ) { ?>
		    		                    <div class="float--left">
		    		    	                <p><a href="<?php the_sub_field('event_hotel_reservation_link'); ?>" target="_blank" class="btn btn-primary btn-sm">
		    		    	                    Book Online
		    		    	                </a></p>
		    		    	            </div>
		    		                <?php } ?>
		    		                
		    		                <?php if( get_sub_field('event_hotel_phone') ) { ?>
		    		                    <p class="no-margin--bottom"><?php the_sub_field('event_hotel_phone'); ?></p>
		    		                <?php } ?>
		    		                
		    		                <?php if( get_sub_field('event_hotel_phrase') ) { ?>
		    		                    <p class="font-size--xs">mention '<?php the_sub_field('event_hotel_phrase'); ?>' to receive special rate</p>
		    		                <?php } ?>
		    		                    
		    		            </div>
		    		            
		    		            <?php if( get_sub_field('event_hotel_image') ) { ?>
		    		            
		    		                <div class="col-md-4 col-lg-6">
		    		                
		    		                    <img src="<?php the_sub_field('event_hotel_image'); ?>">
		    		                
		    		                </div>
		    		            
		    		            <?php } ?>
		    		            
		    		            <div class="clearfix"></div>
		    		            
		    		        <?php endwhile; ?>
		    		    <?php else : endif; ?>
		    		
		    		</div>
		    	<?php } ?>
		    	
		    	<div role="tabpanel" class="tab-pane active" id="registration">
		    	
		    	    <a name="registration"></a>
		    	
		    		<?php if ( is_user_logged_in() ) { ?>
		    		
		    			<?php 
		    			    $member_id = get_current_user_id();
		    			    $memberStatusDate = get_field('member_renewal', 'user_' . $member_id);
		    			    $memberStatusDateDisplay = get_field('member_renewal', 'user_' . $member_id); $memberStatusDateDisplay = new DateTime($memberStatusDateDisplay);
		    			    $memberStatusDate = new DateTime($memberStatusDate);
		    			    $expireDate = date('Y') . '1231'; 
		    			    if ( $memberStatusDate->format('Ymd') < $expireDate ) {
		    			?>
		    			
			    			<div class="col-xs-6 lg-margin--bottom">
			    			
			    				<p class="no-margin--bottom font-size--md">
			    					<strong>
			    						Your Membership is Expired
			    					</strong>
			    				</p> 
			    				<p>Your Membership expired on <?php echo $memberStatusDateDisplay->format('n/j/y'); ?>. Included in the price of this event is your membership renewal.</p>
			    			
			    			</div>
			    			
			    			<div class="clearfix"></div>
		    		
			    		    <div class="col-sm-6 col-md-8 col-sm-push-6 col-md-push-4">
			    		        <p><strong>Not your account?</strong> <a href="<?php echo wp_logout_url( get_permalink() ); ?>">Log out</a></p>
			    		    </div>
			    		    
			    		    <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-8 lg-margin--bottom">
			    		    
			    		    	<?php 
			    		            global $current_user; get_currentuserinfo(); 
			    		            $member_id = get_current_user_id();
			    		            $member_company = get_field('member_company', 'user_' . $member_id);
			    		            // $events_registered = get_field('member_events_registered', 'user_' . $member_id);
			    		        ?>
			    		    
			    		        <p class="no-margin--bottom">
			    		            <strong>Member Name:</strong> 
			    		            <?php echo $current_user->user_firstname; ?> <?php echo $current_user->user_lastname; ?>
			    		        </p>
			    		        <p class="no-margin--bottom">
			    		            <strong>Company:</strong> 
			    		            <?php echo $member_company; ?>
			    		        </p>
			    		        <p>
			    		            <strong>Email Address:</strong> 
			    		            <?php echo $current_user->user_email; ?>
			    		        </p>
			    		    
			    		    </div>
			    		    
			    		    <div class="clearfix"></div>
			    		    <?php ninja_forms_display_form(21); ?>
    		    		
    		    		<?php } else { ?>
    		    		
    		    			<div class="col-sm-6 col-md-8 col-sm-push-6 col-md-push-4">
    		    		        <p><strong>Not your account?</strong> <a href="<?php echo wp_logout_url( get_permalink() ); ?>">Log out</a></p>
    		    		    </div>
    		    		    
    		    		    <div class="col-sm-6 col-md-4 col-sm-pull-6 col-md-pull-8 lg-margin--bottom">
    		    		    
    		    		        <?php 
    		    		            global $current_user; get_currentuserinfo(); 
    		    		            $member_id = get_current_user_id();
    		    		            $member_company = get_field('member_company', 'user_' . $member_id);
    		    		            // $events_registered = get_field('member_events_registered', 'user_' . $member_id);
    		    		        ?>
    		    		    
    		    		        <p class="no-margin--bottom">
    		    		            <strong>Member Name:</strong> 
    		    		            <?php echo $current_user->user_firstname; ?> <?php echo $current_user->user_lastname; ?>
    		    		        </p>
    		    		        <p class="no-margin--bottom">
    		    		            <strong>Company:</strong> 
    		    		            <?php echo $member_company; ?>
    		    		        </p>
    		    		        <p>
    		    		            <strong>Email Address:</strong> 
    		    		            <?php echo $current_user->user_email; ?>
    		    		        </p>
    		    		    
    		    		    </div>
    		    		
    		    		    <div class="clearfix"></div>
    		    		    <?php ninja_forms_display_form(7); ?>
    		    		
    		    		<?php } ?>
    		    		
    		    		<?php if (false !== strpos($url,'?redirect=true' )) { ?>
    		    		<?php } else { ?>
    		    		    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/queryString.js"></script>
    		    		    <script type="text/javascript">
    		    		       reloadWithQueryStringVars({
    		    		           "redirect": "true", 
    		    		           "company": "<?php echo $member_company; ?>", 
    		    		           "eventtitle": "<?php the_title(); ?>",
    		    		           //"price": "<?php echo $price; ?>",
								   <?php $priceCount = 1; if( have_rows('event_pricing') ) : ?>
								   	<?php while ( have_rows('event_pricing') ) : the_row(); ?>
								   		"price_<?php echo $priceCount; ?>": "<?php if( get_sub_field('event_pricing_member_price') ) { ?><?php the_sub_field('event_pricing_member_price'); ?><?php } else { ?><?php the_sub_field('event_pricing_price'); ?><?php } ?>",
								   		"label_<?php echo $priceCount; ?>": "<?php the_sub_field('event_pricing_label'); ?>",
								   	<?php $priceCount++; endwhile;  ?>
								   <?php else : endif; ?>
								   // "eventsregistered": "<?php echo $events_registered; ?><?php the_id(); ?>%2C",
    		    		       });
    		    		    </script>
    		    		<?php } ?>
		    		
		    		<?php } else { ?>
		    			
		    			<div class="col-xs-12">
		    				<p><strong>Already a NECA Member?</strong> <a href="" data-toggle="modal" data-target="#loginModal">Log in</a></p>
		    			</div>
		    			
		    			<div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
		    			    <div class="modal-dialog" role="document">
		    			        <div class="modal-content">
		    			            <div class="modal-header">
		    			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		    			                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		    			                </button>
		    			                <h4 class="modal-title">Member Log In</h4>
		    			            </div>
		    			            <div class="modal-body lg-padding--top">
		    			                <?php include (TEMPLATEPATH . '/includes/login-events.php' ); ?>
		    			                <div class="clearfix"></div>
		    			            </div>
		    			        </div>
		    			    </div>
		    			</div>
		    			
		    			<div class="clearfix"></div>
		    			
		    			<div class="default-margin--top">
		    			
		    			    <div class="clearfix"></div>
		    				<?php ninja_forms_display_form(10); ?>
		    				
		    				<?php if (false !== strpos($url,'?redirect=true' )) { ?>
		    				<?php } else { ?>
		    				    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/queryString.js"></script>
		    				    <script type="text/javascript">
		    				       reloadWithQueryStringVars({
		    				           "redirect": "true", 
		    				           "eventtitle": "<?php the_title(); ?>",
		    				           //"price": "<?php echo $price; ?>"
									   <?php $priceCount = 1; if( have_rows('event_pricing') ) : ?>
									   	<?php while ( have_rows('event_pricing') ) : the_row(); ?>
									   		"price_<?php echo $priceCount; ?>": "<?php the_sub_field('event_pricing_price'); ?>",
									   		"label_<?php echo $priceCount; ?>": "<?php the_sub_field('event_pricing_label'); ?>",
									   	<?php $priceCount++; endwhile;  ?>
									   <?php else : endif; ?>
		    				       });
		    				    </script>
		    				<?php } ?>
		    				
		    			</div>
		    		
		    		<?php } ?>
		    	
		    	</div>
	    	
	    	</div>
	    
	    </div>
	</div>
</section>
	
<?php $priceStyle = 1; if( have_rows('event_pricing') ) : ?>
	<style><!--
		.label_1, .amount_1, 
		.label_2, .amount_2, 
		.label_3, .amount_3, 
		.label_4, .amount_4, 
		.label_5, .amount_5, 
		.label_6, .amount_6, 
		.label_7, .amount_7, 
		.label_8, .amount_8, 
		.label_9, .amount_9, 
		.label_10, .amount_10 {
			display: none;
		}
		<?php while ( have_rows('event_pricing') ) : the_row(); ?>
			.label_<?php echo $priceStyle; ?> { display: block; }
			.amount_<?php echo $priceStyle; ?> { display: block; }
		<?php $priceStyle++; endwhile;  ?>
	--></style>
<?php else : endif; ?>