<?php include (TEMPLATEPATH . '/includes/script-query.php' ); ?>

<?php 
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	$display_event = $_GET['event'];
	$display_name = $_GET['firstName'];
	$display_lastname = $_GET['lastName'];
	$display_company = $_GET['company'];
	$display_email = $_GET['email'];
	$display_phone = $_GET['phone'];
	$display_tickets = $_GET['tickets'];
	$display_transactionid = $_GET['transactionid'];
	$display_creditcardname = $_GET['creditcardname'];
	$display_label_one = $_GET['label_1'];
	$display_label_two = $_GET['label_2'];
	$display_label_three = $_GET['label_3'];
	$display_label_four = $_GET['label_4'];
	$display_label_five = $_GET['label_5'];
	$display_label_six = $_GET['label_6'];
	$display_label_seven = $_GET['label_7'];
	$display_label_eight = $_GET['label_8'];
	$display_label_nine = $_GET['label_9'];
	$display_label_ten = $_GET['label_10'];
	$display_price = $_GET['price'];
	$display_guests = $_GET['guests'];
	//$display_price = number_format($price, 2, '.', ',');
?>

	<?php if (false !== strpos($url,'membership=checked' )) {
	
		//$tickets_price = ($_GET['price'] - 100) * ($_GET['tickets']); 
		//$price = $tickets_price + 100;
		//$price = (($_GET['price_1'] * $_GET['amount_1']) + ($_GET['price_2'] * $_GET['amount_2']) + ($_GET['price_3'] * $_GET['amount_3']) + ($_GET['price_4'] * $_GET['amount_4']) + ($_GET['price_5'] * $_GET['amount_5']) + ($_GET['price_6'] * $_GET['amount_6']) + ($_GET['price_7'] * $_GET['amount_7']) + ($_GET['price_8'] * $_GET['amount_8']) + ($_GET['price_9'] * $_GET['amount_9']) + ($_GET['price_10'] * $_GET['amount_10']) + 100);
	
	} elseif (false !== strpos($url,'renew=true' )) {
	
		//$tickets_price = ($_GET['price'] - 100) * ($_GET['tickets']);
		//$price = $tickets_price + 100;
		//$price = (($_GET['price_1'] * $_GET['amount_1']) + ($_GET['price_2'] * $_GET['amount_2']) + ($_GET['price_3'] * $_GET['amount_3']) + ($_GET['price_4'] * $_GET['amount_4']) + ($_GET['price_5'] * $_GET['amount_5']) + ($_GET['price_6'] * $_GET['amount_6']) + ($_GET['price_7'] * $_GET['amount_7']) + ($_GET['price_8'] * $_GET['amount_8']) + ($_GET['price_9'] * $_GET['amount_9']) + ($_GET['price_10'] * $_GET['amount_10']) + 100);
		//$price = $_GET['paid'];
		//$display_price = number_format($price, 2, '.', ',');
	
	} else {
	
		//$tickets_price = ($_GET['price']);
		//$price = ($_GET['price']);
		//$price = (($_GET['price_1'] * $_GET['amount_1']) + ($_GET['price_2'] * $_GET['amount_2']) + ($_GET['price_3'] * $_GET['amount_3']) + ($_GET['price_4'] * $_GET['amount_4']) + ($_GET['price_5'] * $_GET['amount_5']) + ($_GET['price_6'] * $_GET['amount_6']) + ($_GET['price_7'] * $_GET['amount_7']) + ($_GET['price_8'] * $_GET['amount_8']) + ($_GET['price_9'] * $_GET['amount_9']) + ($_GET['price_10'] * $_GET['amount_10']));
		//$price = $_GET['paid'];
		//$display_price = number_format($price, 2, '.', ',');
	
	} ?>

<section class="default bg--tertiary-2">
    <div class="container">
        <div class="row">
        
            <div class="paypal">
        
                <div class="col-xs-6 col-sm-4">
                	
                	<div class="xl-padding--vertical">
                		<img src="<?php echo esc_url( get_theme_mod( 'themesimages_logo' ) ); ?>">
                	</div>
                	
                	<div class="">
                		<p><?php echo ( get_theme_mod( 'siteinformation_address' ) ); ?></p>
                	</div>
                	
                </div>
                
                <div class="clearfix"></div>
            
            </div>
        
        	<div class="col-md-8">
        	    
        	    <div class="col-xs-12 no-padding--horizontal lg-margin--top">
        	    	<p class="font-size--lg font-family--headline">
        	    		<strong>
        	    			<span class="paypal">Event Name:</span> <?php echo $display_event; ?>
        	    		</strong>
        	    	</p>
        	    	<p class="no-margin--bottom font-size--md">
        	    	    <strong>
        	    	        <?php echo $display_name; ?> <?php echo $display_lastname; ?>, <?php echo $display_company; ?>
        	    	    </strong>
        	    	</p>
        	    	
        	    	<p class="no-margin--bottom">
        	    	    <?php echo $display_email; ?>
        	    	</p>
        	    	
        	    	<p>
        	    	    <?php echo $display_phone; ?>
        	    	</p>
					
					<?php if($display_guests != '') { ?>
					
						<div class="font-size--sm">
							<em>
								Guests include: <?php echo $display_guests; ?>
							</em>
						</div>
					
					<?php } ?>
					
        	    	<p class="lg-margin--top font-size--md">
        	    		<strong>
        	    			Purchase Summary
        	    		</strong>
        	    	</p>
					
					<table class="table">
				
						<?php if (strpos($display_label_one, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									<strong><?php echo $display_label_one; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (strpos($display_label_two, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									<strong><?php echo $display_label_two; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (strpos($display_label_three, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									<strong><?php echo $display_label_three; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (strpos($display_label_four, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									<strong><?php echo $display_label_four; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (strpos($display_label_five, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									<strong><?php echo $display_label_five; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (strpos($display_label_six, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									<strong><?php echo $display_label_six; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (strpos($display_label_seven, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									<strong><?php echo $display_label_seven; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (strpos($display_label_eight, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									<strong><?php echo $display_label_eight; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (strpos($display_label_nine, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									<strong><?php echo $display_label_nine; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (strpos($display_label_ten, '0 @ $') === FALSE) { ?>
							<tr>
								<td>
									dd<strong><?php echo $display_label_ten; ?></strong>
								</td>
							</tr>
						<?php } ?>
						
						<?php if (false !== strpos($url,'membership=checked' )) { ?>
							<tr>
								<td>
									<strong>NECA Membership (1 @ $100.00)</strong>
								</td>
							</tr>
						<?php } elseif (false !== strpos($url,'membership=true' )) { ?>
							<tr>
								<td>
									<strong>NECA Membership Renewal (1 @ $100.00)</strong>
								</td>
							</tr>
						<?php } ?>
						
						<tr>
							<td style="border-width: 2px; border-color: #000;">
								<strong>Total Price: $<?php echo $display_price; ?></strong>
							</td>
						</tr>
					
					</table>
        	    	
        	    	<!--<div class="paypal">
        	    		
        	    		<p class="lg-margin--top font-size--md">
        	    			<strong>
        	    				Transaction Details
        	    			</strong>
        	    		</p>
        	    		<dl class="row">
        	    			<dt class="col-xs-5">
        	    				Transaction ID: 
        	    			</dt>
        	    			<dd class="col-xs-7">
        	    				<?php echo $display_transactionid; ?>
        	    			</dd>
        	    			<dt class="col-xs-5">
        	    				Name on Card: 
        	    			</dt>
        	    			<dd class="col-xs-7">
        	    				<?php echo $display_creditcardname; ?>
        	    			</dd>
        	    		</dl>
        	    		
        	    	</div>-->
        	    
        	    	<?php
        	    	    
        	    	    $current_user = wp_get_current_user();
        	    		$member_id = get_current_user_id();
        	    		$field_key = "member_events_registered";
        	    		$existing_registered = get_field('member_events_registered', 'user_' . $member_id);
        	    		$display_date_registered = date('n/j/y');
        	    		
        	    		update_user_meta( $member_id, $field_key, $existing_registered . '<tr><td data-label="Event"><p class="no-margin--bottom">' . $display_event . '</p></td><td data-label="Date Registered">' . $display_date_registered . '</td><td data-label="Purchase Details">' . $display_tickets . ' tickets</td><td data-label="Amount Paid">$' . $tickets_price . '</td></tr>' );
        	    	
        	    	?>
        	    	
        	    </div>
        	
        	</div>
        
        </div>
    </div>
</section>