<html>

	<head>
		<title> <?php echo $pageTitle; ?>  </title>
		<link REL="SHORTCUT ICON" href="sws.ico">
		<link href="https://fonts.googleapis.com/css?family=Oswald, Bangers|Bungee+Shade|Faster+One|Frijole|Londrina+Shadow|Monoton|Mystery+Quest|Shojumaru|Muli|Alfa+Slab+One|Montserrat|Orbitron|Ubuntu|Oxygen" rel="stylesheet">  
		<link type= "text/css" href= "style/sws.css" rel="stylesheet" media="screen and (min-width:883px)" />
		<link type= "text/css" href= "style/sws_tablet.css" rel="stylesheet" media="screen and (max-width:882px) and (min-width:515px )" />
		<link type= "text/css" href= "style/sws_phone.css" rel="stylesheet" media="screen and (max-width:515px )" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript">
		</script>
		<script src='sws_dropdown.js'></script>
		<script src='easy_button.js'></script>
	</head>
	<body>
		<div class='header_wrapper'>

			<img class='header_img' src='img/header_img.png'>

			<ul class="menu_items">
                <li class="home"><a href="sws_home.php">HOME</a></li>
                <li class="menu_line"> | </li>
                <li class="contact"><a href="sws_contact.php">CONTACT</a></li>
                <li class="menu_line"> | </li>
                <li class="about"><a href="sws_about.php">ABOUT</a></li>
            </ul>

		
			<div class='dropdown'>
				<div class='dropdown_line' id='line1'></div>
				
				<div class='dropdown_line' id='line2'></div>

				<div class='dropdown_line' id='line3'></div>
			</div> 
			<div class='dropdown_items'>

				<ul class='dropdown_about'>
					<a href="sws_about.php"> ABOUT </a>
				</ul>
				<ul class='dropdown_contact'>
					<a href='sws_contact.php'> CONTACT </a>
				</ul>
				<ul class='dropdown_home'>
					<a href='sws_home.php'> HOME </a>
				</ul>

			</div>
		</div>
		