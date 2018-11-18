<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

<?php if (false !== strpos($url,'?event=' )) { ?>
<?php } else { ?>

	<?php 
	    $posts = get_posts(array(
		    'post_type' => 'events',
		    'post__not_in' => array(45,134,152,190,210,223,240),
		    'meta_query' => array(
		        array(
		            'key' => 'keep_details_page_private', 
		            'compare' => '=', 
		            'value' => '0',
		            )
		        ), 
		    'meta_key' => 'event_date',
		    'orderby' => 'meta_value_num',
		    'order' => 'DESC',
		    'posts_per_page' => 1,
	    ));
	    if( $posts ): 
	?>
		<?php foreach( $posts as $post ):setup_postdata( $post ) ?>
		
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/queryString.js"></script>
			<script type="text/javascript">
			   reloadWithQueryStringVars({
			       "event": "<?php the_id(); ?>", 
			   });
			</script>
				
		<?php endforeach; ?>
		
	<?php else : endif; ?>
	
<?php } ?>

<div class="header divider"></div>

<section class="marquee slim bg--primary dark">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 lg-padding--vertical">
                
                <h2 class="subheading">
                    Event Registrants Database
                </h2>
                
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>

<div class="header divider"></div>

<div class="container-fluid lg-margin--top default-margin--bottom">
	
	<div class="float--right">
		
		<?php 
		    $posts = get_posts(array(
			    'post_type' => 'events',
			    'post__not_in' => array(45,134,152,190,210,223,240),
			    'meta_query' => array(
			        array(
			            'key' => 'event_date', 
			            'compare' => '>=', 
			            'value' => $today, 
			            'type' => 'DATE'
			            )
			        ), 
			    'meta_key' => 'event_date',
			    'orderby' => 'meta_value_num',
			    'order' => 'DESC',
			    'posts_per_page' => -1,
		    ));
		    if( $posts ): 
		?>
			<div class="btn-group default-margin--bottom">
				<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Select to Choose Another Event <span class="glyphicon glyphicon-chevron-down default-margin--left" aria-hidden="true"></span>
				</button>
				<ul class="dropdown-menu">
			
					<?php foreach( $posts as $post ):setup_postdata( $post ) ?>
					
						<li<?php if ( get_field('keep_details_page_private') == true ) { ?> class="hidden"<?php } ?>><a href="?event=<?php the_id(); ?>"><?php the_title(); ?></a></li>
					
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
			
				</ul>
			</div>
			
		<?php else : endif; ?>
	
	</div>
	
	<?php 
	    $posts = get_posts(array(
		    'post_type' => 'events',
		    'post__not_in' => array(45,134,152,190,210,223,240),
		    'meta_query' => array(
		        array(
		            'key' => 'event_date', 
		            'compare' => '>=', 
		            'value' => $today, 
		            'type' => 'DATE'
		            )
		        ), 
		    'meta_key' => 'event_date',
		    'orderby' => 'meta_value_num',
		    'order' => 'ASC',
		    'posts_per_page' => -1,
	    ));
	    if( $posts ): 
	?>
	
		<?php foreach( $posts as $post ):setup_postdata( $post ) ?>
		
			<?php
				$id = get_the_id();
			?>
			
			<script>
			    $(document).ready(function() {
			        $('#eventRegistrants<?php echo $id; ?>').DataTable({
			        	   "order": [[ 1, "desc" ]],
			               "pageLength": 100,
			               dom: 'Bfrtip',
			               bAutoWidth: false,
			               buttons: [
			                   'csv', 'excel'
			               ]
			           });
			        $('div.dataTables_filter input').addClass('input-text');
			        $('div.dataTables_filter input').removeClass('input-sm');
			        $('.dt-button').addClass('btn btn-primary btn-sm');
			        $('.dt-buttons').addClass('float--left default-margin--bottom');
			    } );
			</script>
		
			<?php if (false !== strpos($url,'?event=' . $id . '' )) { ?>
			
				<?php $date = get_field('event_date', false, false); $date = new DateTime($date); ?>
			
				<p class="no-margin--bottom default-margin--top font-family--headline">Registrants for:</p>
				<h3 class="no-margin--top"><?php the_title(); ?></h3>
				<p><?php echo $date->format('F jS, Y'); ?>, <?php the_field('event_location'); ?></p>
				
				<style><!--
					table#eventRegistrants<?php echo $id; ?> thead td:first-child {
						pointer-events: none;
					}
					table#eventRegistrants<?php echo $id; ?> thead td:first-child.sorting:after {
						display: none;
					}
				--></style>
				
				<table class="table font-size--sm default-margin--top" id="eventRegistrants<?php echo $id; ?>">
				
				    <thead>
				    	<tr>
							<td class="text-nowrap">
								&nbsp;
							</td>
					    	<td class="text-nowrap hidden">
					    		Event
					    	</td>
				    		<td class="text-nowrap">
				    			Date
				    		</td>
				    		<td class="text-nowrap">
				    			First Name
				    		</td>
				    		<td class="text-nowrap">
				    			Last Name
				    		</td>
				    		<td class="text-nowrap">
				    			Company
				    		</td>
				    		<td class="text-nowrap">
				    			Email
				    		</td>
				    		<td class="text-nowrap">
				    			Phone
				    		</td>
				    		<!--<td class="text-nowrap">
				    			PayPal Transaction ID
				    		</td>
				    		<td class="text-nowrap">
				    			Name on Credit Card
				    		</td>-->
				    		<td class="text-nowrap">
				    			Paid
				    		</td>
				    		<td class="text-nowrap">
				    			Items Purchased
				    		</td>
				    		<td class="text-nowrap">
				    			Membership
				    		</td>
				    		<td class="text-nowrap">
				    			Notes
				    		</td>
				    	</tr>
				    </thead>
				    
				    <tbody>
				    
				        <?php 
				        	$eventName = get_the_title();
				            $posts = get_posts(array(
				        		'post_type'	=> 'eventregistrants',
				        		'posts_per_page' => -1,
				        		'meta_query' => array(
				        		    array(
				        		        'key' => 'event', 
				        		        'compare' => '=', 
				        		        'value' => $eventName
				        		        )
				        		    ), 
				        	));
				        	if( $posts ) {
				        		foreach( $posts as $post ) {
				        			setup_postdata( $post ); ?>
									
								<?php 
									$matchingVariable = '(0 @ $';
									$display_one = get_field('item_one_label'); 
									$display_two = get_field('item_two_label'); 
									$display_three = get_field('item_three_label'); 
									$display_four = get_field('item_four_label'); 
									$display_five = get_field('item_five_label'); 
									$display_six = get_field('item_six_label'); 
									$display_seven = get_field('item_seven_label'); 
									$display_eight = get_field('item_eight_label'); 
									$display_nine = get_field('item_nine_label'); 
									$display_ten = get_field('item_ten_label'); 
								?>
				        			
				        		<tr>
									<td data-label="View Invoice">
										<a href="<?php echo site_url(); ?>/event/confirmation/?template=invoice&tickets=1&firstName=<?php the_field('first_name'); ?>&lastName=<?php the_field('last_name'); ?>&email=<?php the_field('email_address'); ?>&company=<?php the_field('company'); ?>&event=<?php the_field('event'); ?>&price=<?php the_field('amount_paid'); ?>&phone=<?php the_field('phone'); ?>&transactionid=<?php the_field('paypal_transaction_id'); ?>&creditcardname=<?php the_field('name_on_credit_card'); ?>&label_1=<?php the_field('item_one_label'); ?>&label_2=<?php the_field('item_two_label'); ?>&label_3=<?php the_field('item_three_label'); ?>&label_4=<?php the_field('item_four_label'); ?>&label_5=<?php the_field('item_five_label'); ?>&label_6=<?php the_field('item_six_label'); ?>&label_7=<?php the_field('item_seven_label'); ?>&label_8=<?php the_field('item_eight_label'); ?>&label_9=<?php the_field('item_nine_label'); ?>&label_10=<?php the_field('item_ten_label'); ?><?php if( get_field('membership_included') ) { ?>&membership=checked<?php } ?>&guests=<?php the_field('guests'); ?>" target="_blank">
											<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
										</a>
									</td>
				        			<td data-label="Event" class="text-nowrap hidden">
										<?php the_field('event'); ?>
				        			</td>
				        			<td data-label="Date Registered" class="text-nowrap">
				        				<?php the_field('registration_date'); ?>
				        			</td>
				        			<td data-label="First Name" class="text-nowrap">
				        				<?php the_field('first_name'); ?>
				        			</td>
				        			<td data-label="Last Name" class="text-nowrap">
				        				<?php the_field('last_name'); ?>
				        			</td>
				        			<td data-label="Company" class="text-nowrap">
				        				<?php the_field('company'); ?>
				        			</td>
				        			<td data-label="Email Address" class="text-nowrap">
				        				<?php the_field('email_address'); ?>
				        			</td>
				        			<td data-label="Phone Number" class="text-nowrap">
				        				<?php the_field('phone'); ?>
				        			</td>
				        			<!--<td data-label="PayPal Transaction ID" class="text-nowrap">
				        				<?php the_field('paypal_transaction_id'); ?>
				        			</td>
				        			<td data-label="Name on Credit Card" class="text-nowrap">
				        				<?php the_field('name_on_credit_card'); ?>
				        			</td>-->
				        			<td data-label="Amount Paid" class="text-nowrap">
				        				$<?php the_field('amount_paid'); ?>
				        			</td>
				        			<td data-label="Tickets Purchased" class="text-nowrap">
				        				<?php if( get_field('tickets_purchased') ) { ?>
											<?php the_field('tickets_purchased'); ?><br>
										<?php } else { ?>
											<?php if (strpos($display_one, $matchingVariable) == false) { ?>
												<?php the_field('item_one_label'); ?><br>
											<?php } ?>
											<?php if (strpos($display_two, $matchingVariable) == false) { ?>
												<?php the_field('item_two_label'); ?><br>
											<?php } ?>
											<?php if (strpos($display_three, $matchingVariable) == false) { ?>
												<?php the_field('item_three_label'); ?><br>
											<?php } ?>
											<?php if (strpos($display_four, $matchingVariable) == false) { ?>
												<?php the_field('item_four_label'); ?><br>
											<?php } ?>
											<?php if (strpos($display_five, $matchingVariable) == false) { ?>
												<?php the_field('item_five_label'); ?><br>
											<?php } ?>
											<?php if (strpos($display_six, $matchingVariable) == false) { ?>
												<?php the_field('item_six_label'); ?><br>
											<?php } ?>
											<?php if (strpos($display_seven, $matchingVariable) == false) { ?>
												<?php the_field('item_seven_label'); ?><br>
											<?php } ?>
											<?php if (strpos($display_eight, $matchingVariable) == false) { ?>
												<?php the_field('item_eight_label'); ?><br>
											<?php } ?>
											<?php if (strpos($display_nine, $matchingVariable) == false) { ?>
												<?php the_field('item_nine_label'); ?><br>
											<?php } ?>
											<?php if (strpos($display_ten, $matchingVariable) == false) { ?>
												<?php the_field('item_ten_label'); ?>
											<?php } ?>
										<?php } ?>
				        			</td>
				        			<td data-label="Membership Included" class="text-nowrap">
				        				<?php if( get_field('membership_included') ) { ?>
				        					Yes (1 @ $100)
				        				<?php } ?>
				        			</td>
				        			<td data-label="Notes" class="text-nowrap">
										<?php if( get_field('notes') ) { ?>
				        					<?php the_field('notes'); ?><br><br>
										<?php } ?>
										<?php if( get_field('guests') ) { ?>
											Guests: <?php the_field('guests'); ?>
										<?php } ?>
				        			</td>
				        		</tr>
				            
				        <?php } wp_reset_postdata(); } ?>
				    
				    </tbody>
				
				</table>
			
			<?php } ?>
		
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
	
	<?php else : endif; ?>
	
</div>
