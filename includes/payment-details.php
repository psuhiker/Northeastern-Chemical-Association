<?php include (TEMPLATEPATH . '/includes/script-query.php' ); ?>

<?php if ( is_page('335') ) { // New Membership Payment ?>

    <?php 
        $display_title = 'New Membership Dues';
        $display_price = $_GET['display_price'];
        $display_expires = 'Expires: 12/31/' . date('Y');
        $display_name = $_GET['display_name'];
        $display_company = $_GET['display_company'];
        $display_email = $_GET['display_email'];
        $display_phone = $_GET['display_phone'];
        $redirect_url = site_url() . '/membership/application/confirmation/';
        $display_description = 'New Membership Dues';
    ?>

<?php } elseif ( is_page('472') ) { // Membership Renewal Payment ?>

    <?php 
        $display_title = 'Membership Renewal';
        $display_price = $_GET['display_price'];
        $display_expires = 'Expires: 12/31/' . date('Y', strtotime('+1 year'));
        $display_name = $_GET['display_name'];
        $display_company = $_GET['display_company'];
        $display_email = $_GET['display_email'];
        $display_phone = $_GET['display_phone'];
        $redirect_url = site_url() . '/membership/renew/processing/?update';
        $display_description = 'Membership Renewal';
    ?>

<?php } elseif ( is_page('345') ) { // Donation Payment ?>

    <?php 
        $display_title = 'Corporate Donation';
        $display_price = $_GET['display_price'];
        $display_name = $_GET['display_name'];
        $display_company = $_GET['display_company'];
        $display_email = $_GET['display_email'];
        $display_phone = $_GET['display_phone'];
        $display_address = $_GET['display_address'];
        $display_city = $_GET['display_city'];
        $display_state = $_GET['display_state'];
        $display_zip = $_GET['display_zip'];
        $redirect_url = site_url() . '/donate/confirmation/?display_name=' . $display_name . '&display_email=' . $display_email . '&display_phone=' . $display_phone . '&display_company=' . $display_company . '&display_address=' . $display_address . '&display_city=' . $display_city . '&display_state=' . $display_state . '&display_zip=' . $display_zip . '&display_price=' . $display_price . '';
        $display_description = 'Corporate/Indvidual Donation';
    ?>

<?php } elseif ( is_page('493') ) { // Event Payment ?>

    <?php 
        $display_title = 'Event Registration: <span class=\'text-nowrap\'>' . $_GET['event'] . '<span>';
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
        $display_amount_one = $_GET['amount_1'];
        $display_price_one = $_GET['price_1'];
        $display_label_two = $_GET['label_2'];
        $display_amount_two = $_GET['amount_2'];
        $display_price_two = $_GET['price_2'];
        $display_label_three = $_GET['label_3'];
        $display_amount_three = $_GET['amount_3'];
        $display_price_three = $_GET['price_3'];
        $display_label_four = $_GET['label_4'];
        $display_amount_four = $_GET['amount_4'];
        $display_price_four = $_GET['price_4'];
        $display_label_five = $_GET['label_5'];
        $display_amount_five = $_GET['amount_5'];
        $display_price_five = $_GET['price_5'];
        $display_label_six = $_GET['label_6'];
        $display_amount_six = $_GET['amount_6'];
        $display_price_six = $_GET['price_6'];
        $display_label_seven = $_GET['label_7'];
        $display_amount_seven = $_GET['amount_7'];
        $display_price_seven = $_GET['price_7'];
        $display_label_eight = $_GET['label_8'];
        $display_amount_eight = $_GET['amount_8'];
        $display_price_eight = $_GET['price_8'];
        $display_label_nine = $_GET['label_9'];
        $display_amount_nine = $_GET['amount_9'];
        $display_price_nine = $_GET['price_9'];
        $display_label_ten = $_GET['label_10'];
        $display_amount_ten = $_GET['amount_10'];
        $display_price_ten = $_GET['price_10'];
        $display_guests = $_GET['guests'];
    ?>
    
    <?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
    <?php if (false !== strpos($url,'membership=Checked' )) { ?>
        <?php 
            //$price = ($_GET['price'] * $_GET['tickets']) + 100;
            $price = (($_GET['price_1'] * $_GET['amount_1']) + ($_GET['price_2'] * $_GET['amount_2']) + ($_GET['price_3'] * $_GET['amount_3']) + ($_GET['price_4'] * $_GET['amount_4']) + ($_GET['price_5'] * $_GET['amount_5']) + ($_GET['price_6'] * $_GET['amount_6']) + ($_GET['price_7'] * $_GET['amount_7']) + ($_GET['price_8'] * $_GET['amount_8']) + ($_GET['price_9'] * $_GET['amount_9']) + ($_GET['price_10'] * $_GET['amount_10']) + 100);
            $display_price = number_format($price, 2, '.', ',');
            $display_address_one = $_GET['address_one'];
            $display_address_two = $_GET['address_two'];
            $display_city = $_GET['city'];
            $display_state = $_GET['state'];
            $display_zip = $_GET['zip'];
            //$redirect_url = site_url() . '/event/confirmation/?membership=checked&tickets=' . $display_tickets . '&firstName=' . $display_name . '&lastName=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&price=' . $display_price . '&phone=' . $display_phone . '&address_one=' . $display_address_one . '&address_two=' . $display_address_two . '&city=' . $display_city . '&state=' . $display_state . '&zip=' . $display_zip . '';
            $redirect_url = site_url() . '/event/payment/paypal/?membership=checked&tickets=' . $display_tickets . '&firstname=' . $display_name . '&lastname=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&paid=' . $display_price . '&phone=' . $display_phone . '&address_one=' . $display_address_one . '&address_two=' . $display_address_two . '&city=' . $display_city . '&state=' . $display_state . '&zip=' . $display_zip . '&transactionid=' . $display_transactionid . '&creditcardname=' . $display_atransactionid . '&price_one=' . $display_price_one . '&amount_one=' . $display_amount_one . '&label_one=' . $display_label_one . '&price_two=' . $display_price_two . '&amount_two=' . $display_amount_two . '&label_two=' . $display_label_two . '&price_three=' . $display_price_three . '&amount_three=' . $display_amount_three . '&label_three=' . $display_label_three . '&price_four=' . $display_price_four . '&amount_four=' . $display_amount_four . '&label_four=' . $display_label_four . '&price_five=' . $display_price_five . '&amount_five=' . $display_amount_five . '&label_five=' . $display_label_five . '&price_six=' . $display_price_six . '&amount_six=' . $display_amount_six . '&label_six=' . $display_label_six . '&price_seven=' . $display_price_seven . '&amount_seven=' . $display_amount_seven . '&label_seven=' . $display_label_seven . '&price_eight=' . $display_price_eight . '&amount_eight=' . $display_amount_eight . '&label_eight=' . $display_label_eight . '&price_nine=' . $display_price_nine . '&amount_nine=' . $display_amount_nine . '&label_nine=' . $display_label_nine . '&price_ten=' . $display_price_ten . '&amount_ten=' . $display_amount_ten . '&label_ten=' . $display_label_ten . '&guests=' . $display_guests . '';
            $display_description = $_GET['event'] . ' Event Registration - ' . $display_tickets . ' ticket(s)  & New Membership Membership Renewal';
        ?>
    <?php } elseif (false !== strpos($url,'renew=true' )) { ?>
    	<?php 
    	    //$price = ($_GET['price'] * $_GET['tickets']) + 100;
    	    $price = (($_GET['price_1'] * $_GET['amount_1']) + ($_GET['price_2'] * $_GET['amount_2']) + ($_GET['price_3'] * $_GET['amount_3']) + ($_GET['price_4'] * $_GET['amount_4']) + ($_GET['price_5'] * $_GET['amount_5']) + ($_GET['price_6'] * $_GET['amount_6']) + ($_GET['price_7'] * $_GET['amount_7']) + ($_GET['price_8'] * $_GET['amount_8']) + ($_GET['price_9'] * $_GET['amount_9']) + ($_GET['price_10'] * $_GET['amount_10']) + 100);
    	    $display_price = number_format($price, 2, '.', ',');
    	    //$redirect_url = site_url() . '/event/confirmation/?renew=true&tickets=' . $display_tickets . '&firstName=' . $display_name . '&lastName=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&price=' . $display_price . '&phone=' . $display_phone . ''; 
    	    $redirect_url = site_url() . '/event/payment/paypal/?renew=true&tickets=' . $display_tickets . '&firstname=' . $display_name . '&lastname=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&paid=' . $display_price . '&phone=' . $display_phone . '&transactionid=' . $display_transactionid . '&creditcardname=' . $display_atransactionid . '&price_one=' . $display_price_one . '&amount_one=' . $display_amount_one . '&label_one=' . $display_label_one . '&price_two=' . $display_price_two . '&amount_two=' . $display_amount_two . '&label_two=' . $display_label_two . '&price_three=' . $display_price_three . '&amount_three=' . $display_amount_three . '&label_three=' . $display_label_three . '&price_four=' . $display_price_four . '&amount_four=' . $display_amount_four . '&label_four=' . $display_label_four . '&price_five=' . $display_price_five . '&amount_five=' . $display_amount_five . '&label_five=' . $display_label_five . '&price_six=' . $display_price_six . '&amount_six=' . $display_amount_six . '&label_six=' . $display_label_six . '&price_seven=' . $display_price_seven . '&amount_seven=' . $display_amount_seven . '&label_seven=' . $display_label_seven . '&price_eight=' . $display_price_eight . '&amount_eight=' . $display_amount_eight . '&label_eight=' . $display_label_eight . '&price_nine=' . $display_price_nine . '&amount_nine=' . $display_amount_nine . '&label_nine=' . $display_label_nine . '&price_ten=' . $display_price_ten . '&amount_ten=' . $display_amount_ten . '&label_ten=' . $display_label_ten . '&guests=' . $display_guests . ''; 
    	    $display_description = $_GET['event'] . ' Event Registration - ' . $display_tickets . ' ticket(s)  & Membership Renewal';
    	?>
    <?php } elseif (false !== strpos($url,'newmember=true' )) { ?>
    	<?php 
    	    //$price = ($_GET['price'] * $_GET['tickets']) + 100;
    	    $price = (($_GET['price_1'] * $_GET['amount_1']) + ($_GET['price_2'] * $_GET['amount_2']) + ($_GET['price_3'] * $_GET['amount_3']) + ($_GET['price_4'] * $_GET['amount_4']) + ($_GET['price_5'] * $_GET['amount_5']) + ($_GET['price_6'] * $_GET['amount_6']) + ($_GET['price_7'] * $_GET['amount_7']) + ($_GET['price_8'] * $_GET['amount_8']) + ($_GET['price_9'] * $_GET['amount_9']) + ($_GET['price_10'] * $_GET['amount_10']) + 100);
    	    $display_price = number_format($price, 2, '.', ',');
    	    //$redirect_url = site_url() . '/event/confirmation/?renew=true&tickets=' . $display_tickets . '&firstName=' . $display_name . '&lastName=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&price=' . $display_price . '&phone=' . $display_phone . ''; 
    	    $redirect_url = site_url() . '/event/payment/paypal/?renew=true&tickets=' . $display_tickets . '&firstname=' . $display_name . '&lastname=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&paid=' . $display_price . '&phone=' . $display_phone . '&transactionid=' . $display_transactionid . '&creditcardname=' . $display_atransactionid . '&price_one=' . $display_price_one . '&amount_one=' . $display_amount_one . '&label_one=' . $display_label_one . '&price_two=' . $display_price_two . '&amount_two=' . $display_amount_two . '&label_two=' . $display_label_two . '&price_three=' . $display_price_three . '&amount_three=' . $display_amount_three . '&label_three=' . $display_label_three . '&price_four=' . $display_price_four . '&amount_four=' . $display_amount_four . '&label_four=' . $display_label_four . '&price_five=' . $display_price_five . '&amount_five=' . $display_amount_five . '&label_five=' . $display_label_five . '&price_six=' . $display_price_six . '&amount_six=' . $display_amount_six . '&label_six=' . $display_label_six . '&price_seven=' . $display_price_seven . '&amount_seven=' . $display_amount_seven . '&label_seven=' . $display_label_seven . '&price_eight=' . $display_price_eight . '&amount_eight=' . $display_amount_eight . '&label_eight=' . $display_label_eight . '&price_nine=' . $display_price_nine . '&amount_nine=' . $display_amount_nine . '&label_nine=' . $display_label_nine . '&price_ten=' . $display_price_ten . '&amount_ten=' . $display_amount_ten . '&label_ten=' . $display_label_ten . '&guests=' . $display_guests . ''; 
    	    $display_description = $_GET['event'] . ' Event Registration - ' . $display_tickets . ' ticket(s)  & New Membership Dues';
    	?>
    <?php } else { ?>
    	<?php
    		$price = (($_GET['price_1'] * $_GET['amount_1']) + ($_GET['price_2'] * $_GET['amount_2']) + ($_GET['price_3'] * $_GET['amount_3']) + ($_GET['price_4'] * $_GET['amount_4']) + ($_GET['price_5'] * $_GET['amount_5']) + ($_GET['price_6'] * $_GET['amount_6']) + ($_GET['price_7'] * $_GET['amount_7']) + ($_GET['price_8'] * $_GET['amount_8']) + ($_GET['price_9'] * $_GET['amount_9']) + ($_GET['price_10'] * $_GET['amount_10']));
    		$display_price = number_format($price, 2, '.', ',');
    		$redirect_url = site_url() . '/event/payment/paypal/?tickets=' . $display_tickets . '&firstname=' . $display_name . '&lastname=' . $display_lastname . '&email=' . $display_email . '&company=' . $display_company . '&event=' . $display_event . '&paid=' . $display_price . '&phone=' . $display_phone . '&transactionid=' . $display_transactionid . '&creditcardname=' . $display_atransactionid . '&price_one=' . $display_price_one . '&amount_one=' . $display_amount_one . '&label_one=' . $display_label_one . '&price_two=' . $display_price_two . '&amount_two=' . $display_amount_two . '&label_two=' . $display_label_two . '&price_three=' . $display_price_three . '&amount_three=' . $display_amount_three . '&label_three=' . $display_label_three . '&price_four=' . $display_price_four . '&amount_four=' . $display_amount_four . '&label_four=' . $display_label_four . '&price_five=' . $display_price_five . '&amount_five=' . $display_amount_five . '&label_five=' . $display_label_five . '&price_six=' . $display_price_six . '&amount_six=' . $display_amount_six . '&label_six=' . $display_label_six . '&price_seven=' . $display_price_seven . '&amount_seven=' . $display_amount_seven . '&label_seven=' . $display_label_seven . '&price_eight=' . $display_price_eight . '&amount_eight=' . $display_amount_eight . '&label_eight=' . $display_label_eight . '&price_nine=' . $display_price_nine . '&amount_nine=' . $display_amount_nine . '&label_nine=' . $display_label_nine . '&price_ten=' . $display_price_ten . '&amount_ten=' . $display_amount_ten . '&label_ten=' . $display_label_ten . '&guests=' . $display_guests . ''; 
            $display_description = $_GET['event'] . ' Event Registration - ' . $display_tickets . ' ticket(s) ';
        ?>
    <?php } ?>

<?php } ?>

<h3>Payment Summary</h3>
<p class="subheading subheading--no-shadow"><?php echo $display_title; ?></p>
<hr>

<div class="row">

    <?php if ( is_page('345') ) { // Donation Payment ?>

    	<div class="col-xs-6 no-padding--left details">
    	
    		<p class="no-margin--bottom font-size--md">
    		    <strong>
    		        <?php echo $display_name; ?>, <?php echo $display_company; ?>
    		    </strong>
    		</p>
    		
    		<p class="no-margin--bottom">
    		    <?php echo $display_address; ?>
    		</p>
    		
    		<p>
    		    <?php echo $display_city; ?>, <?php echo $display_state; ?> <?php echo $display_zip; ?>
    		</p>
    		
    		<p class="no-margin--bottom">
    		    <?php echo $display_email; ?>
    		</p>
    		
    		<p>
    		    <?php echo $display_phone; ?>
    		</p>
    		
    	</div>
    	
    <?php } elseif ( is_page('493') ) { // Event Payment ?>
    
        <div class="col-xs-6 no-padding--left details">
        
            <p class="no-margin--bottom font-size--md">
        	    <strong>
        	        <?php echo $display_name; ?> <?php echo $display_lastname; ?>
        	    </strong>
        	</p>
        	
        	<p class="no-margin--bottom font-size--md">
        	    <?php echo $display_company; ?>
        	</p>
        	
        	<p class="no-margin--bottom">
        	    <?php echo $display_email; ?>
        	</p>
        	
        	<p>
        	    <?php echo $display_phone; ?>
        	</p>
        	
        </div>
    	
    <?php } else { ?>
    
        <div class="col-xs-6 no-padding--left details">
        
        	<p class="no-margin--bottom font-size--md">
        	    <strong>
        	        <?php echo $display_name; ?>
        	    </strong>
        	</p>
        	
        	<p class="no-margin--bottom font-size--md">
        	    <?php echo $display_company; ?>
        	</p>
        	
        	<p class="no-margin--bottom">
        	    <?php echo $display_email; ?>
        	</p>
        	
        	<p>
        	    <?php echo $display_phone; ?>
        	</p>
        	
        </div>
    
    <?php } ?>
	
	<div class="col-xs-6">
	
		<p class="font-size--lg text-right">
		    <strong>
		        $<?php echo $display_price; ?>
		    </strong>
		</p>
		
		<p class="text-right">
		    <?php echo $display_expires; ?>
		</p>
		
	</div>
	
	<?php if ( is_page('493') ) { // Event Payment ?>
	
		<div class="col-xs-12 no-padding--horizontal">
		
			<table class="table">
		
				<?php if($display_amount_one != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_one; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_one; ?> @ $<?php echo $display_price_one; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if($display_amount_two != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_two; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_two; ?> @ $<?php echo $display_price_two; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if($display_amount_three != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_three; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_three; ?> @ $<?php echo $display_price_three; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if($display_amount_four != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_four; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_four; ?> @ $<?php echo $display_price_four; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if($display_amount_five != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_five; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_five; ?> @ $<?php echo $display_price_five; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if($display_amount_six != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_six; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_six; ?> @ $<?php echo $display_price_six; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if($display_amount_seven != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_seven; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_seven; ?> @ $<?php echo $display_price_seven; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if($display_amount_eight != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_eight; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_eight; ?> @ $<?php echo $display_price_eight; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if($display_amount_nine != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_nine; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_nine; ?> @ $<?php echo $display_price_nine; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if($display_amount_ten != '0') { ?>
					<tr>
						<td>
							<strong><?php echo $display_label_ten; ?></strong>
						</td>
						<td>
							<?php echo $display_amount_ten; ?> @ $<?php echo $display_price_ten; ?> each
						</td>
					</tr>
				<?php } ?>
				
				<?php if (false !== strpos($url,'membership=Checked' )) { ?>
				
					<tr>
						<td>
							<strong>Membership Application Fee</strong>
						</td>
						<td>
							$100.00
						</td>
					</tr>
				
				<?php } elseif (false !== strpos($url,'renew=true' )) { ?>
				
					<tr>
						<td>
							<strong>Membership Renewal Fee</strong>
						</td>
						<td>
							$100.00
						</td>
					</tr>
				
				<?php } ?>
			
			</table>
			
			<?php if($display_guests != '') { ?>
			
				<div class="font-size--sm" style="padding-left: 8px;">
					<em>
						Guests include: <?php echo $display_guests; ?>
					</em>
				</div>
			
			<?php } ?>
	    
	    </div>
	
	<?php } ?>
	
</div>