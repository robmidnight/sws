<?php

$pageTitle = "Simple_Website_Strategies | Contact";
include("inc/sws_header.php");

?>
<div class='contact_wrapper'>
	<div class='contact_info'>
		<div> Robert Mezzanotte </div>
		<div> Owner/ Web Developer </div>
		<div> Phone: 508-272-3491 </div>
	</div>

	<form method="post" action="sws_contact_send.php">
        
    				
    	<input name="name" id='name_box' placeholder="Name (required)" class='input_boxes'>
    				<br><br>
            
    				
    	<input name="email" type="email" id='email_box' placeholder="Email (required)" class='input_boxes'>
    				<br><br>

    	<input name="phone_number" type="phone_number" id='phone_number_box' placeholder="Phone Number (required)" class='input_boxes'>
    				<br><br>
            
    	<textarea id='text_box' name="message" placeholder="Type your message here (required)"></textarea>
            		<br></br>
    	<input id="submit" name="submit" type="submit" value="Submit">
        
	</form>

</div>
<?php

include("inc/sws_footer.php");

?>