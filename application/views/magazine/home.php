<!DOCTYPE html>
<html>
<?php
if(isset($this->session->userdata['log_in'])){
	$sesion_a = $this->session->userdata['log_in'];
}else{
	redirect('Login_controller/validateform', 'refresh');
}
 ?>
<head>
<title>Project Test</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/style.css">
<script src="<?php echo base_url();?>/assets/js/jquery-3.2.1.js"></script>
<script language="javascript" src="<?php echo base_url();?>/assets/js/slide.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/show.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/validate.js"></script>


</script>
</head>

<body>
<h1 style="color:orange;" ><center>Welcome <?php echo $sesion_a['username'];?> to summoner's rift !  </center></h1>
	<div class="container">
		<div class="footer-top">
			<div id="text">
				<img src="<?php echo base_url();?>/upload/image/phone.png">
				<p>+84322341</p>
				<img src="<?php echo base_url();?>/upload/image/mail.png">
				<p>info@premiumcoding.com</p>
				<img src="<?php echo base_url();?>/upload/image/time.png">
				<p>Monday - Friday , 8.00-20.00</p>
			</div>
			<div id="menu-top">
				<a href="" >Lastest News</a>
				<a href="">About Us</a>
				<a href="">What the hell</a>
				<?php if(!isset($sesion_a)){ ?>
				<a href="<?php echo site_url('Login_controller/validateform') ;?>">Login</a>
				<?php }
				else { ?>
					<a href="<?php echo site_url('Login_controller/logout') ;?>">Logout</a>
					<?php
					} 
				?>

			
				
			</div>

		</div>
		
		<div class="header">
			
				<img src="<?php echo base_url();?>/upload/image/title.png">
				<br>
				<h3>CREATIVE BUSINESS THEME FOR CORPORATIONS </h3>
		</div>

			
		<div class="menu">
			<div class="menu-link">
			<?php foreach ($menu as $item) {
				# code...
			?>
				<a href=""><?php echo $item->menu_name; ?>
					<img src="<?php echo base_url();?>/upload/image/arrow.png">
				</a>
			<?php } ?>
			</div>
		
		</div>
		
		
		<div class="banner">
			<img src="<?php echo base_url();?>/upload/image/banner.jpg" width="1200px">

		</div>
		
		<div class="slide">
			<div id="text">
				<h2>Check our lastest Wordpress Theme which implements a Page Bulder and a Revolution Slider</h2>
				<p>Learn how to build Wordpress Themes with ease with a premium Page Builder aloows you to new Pages in seconds</p>
			</div>	
			<div class="circle">
					
						<img src="<?php echo base_url();?>/upload/image/circle.png" width="80%">
						
				
					
			</div>
		</div>
		<div class="fluid">
			
			<div class="recent">
						<h2>RECENT PORFOLIO</h2>
						<img src="<?php echo base_url();?>/upload/image/line.png">
						<p>Lorem ipsum dolor sit amet, sed sint cetero sdew cssc vulputate novo te.</p>
						<div id="nextback">
							<img src="<?php echo base_url();?>/upload/image/back.png">
							<img src="<?php echo base_url();?>/upload/image/next.png">

						</div>
						<div id="slide">
						<?php foreach ($recent as $value) {
						?>
					
							<img src="<?php echo base_url();?>/upload/image/<?php echo $value->Recent_img;?>" width="20%">
							<?php } ?>
						</div>
					
				</div>	
					<div class="question">
						<div id="comment">
							<h2>TESTIMONIALS</h2>
							<img src="<?php echo base_url();?>/upload/image/line4.png">
							<br>
							<br>
								<img src="<?php echo base_url();?>/upload/image/comment.png " >
								<img src="<?php echo base_url();?>/upload/image/comment.png">
						</div>
						<div id="feq">
							<h2>FREQUENTLY ASK QUESTIONS</h2>
							<img src="<?php echo base_url();?>/upload/image/line4.png">
							<br>
							<br>
							<ul>
							<?php foreach($question as $index=>$key){ ?>
								<li><button class="link1" data-p-id="<?=$index?>"><?php echo $key->ques_name; ?></button></li>
								<p class="p1" id="p_toggle_<?=$index?>"><?php echo $key->answer; ?></p>
								<?php } ?>
							</ul>

						</div>
					</div>	
			</div>
				
		
				
				<div class="ads">
					<div class="imgads">	
						<img src="<?php echo base_url();?>/upload/image/ads1.jpg " width="15%">
						<img src="<?php echo base_url();?>/upload/image/ads2.jpg" width="15%">
						<img src="<?php echo base_url();?>/upload/image/ad3.jpg" width="15%">
						<img src="<?php echo base_url();?>/upload/image/ads4.jpg" width="15%">
						<img src="<?php echo base_url();?>/upload/image/ads5.jpg" width="15%">
					</div>
					<br>
					<div>
						<img src="<?php echo base_url();?>/upload/mage/buttonads.png">
					</div>
				</div>
				
				<div class="search">
					<div>
						<img src="<?php echo base_url();?>/upload/image/textsocial.png " width="80%">
					</div>
					<div>
						<img src="<?php echo base_url();?>/upload/image/socialicon.png" width="80%">
					</div>
					<div>
						<img src="<?php echo base_url();?>/upload/image/searchtext.png" width="80%">
					</div>
					<div id="searchtext">
						<form>
							<input  type="text" name="fsearch" placeholder="Search..." required>
							<button></button>
						</form>
						
					</div>
				</div>
				
				<div class="bottom">
					<div id="cl1">
						<img src="<?php echo base_url();?>/upload/image/revenent.png " width="85%">
						
					</div>
					<div id="cl2">
						<h3>Recent Posts</h3>
						<img src="<?php echo base_url();?>/upload/image/imgbot1.png" width="85%">
						<br>
						<br>
						<img src="<?php echo base_url();?>/upload/image/imgbot2.png" width="85%">
					</div>
					<div id="cl3">
						<h3>Contacts</h3>
						<p>1000 jhasdasd</p>
						<p>Cahuuscjka jasbc 123</p>
						<p>Country Vietnam</p>
						
						<p>Phone:(+84) 234 21343</p>
						<p>Mobile:(+84) 2342 234</p>
						
						<p>Info@diamond.com</p>
					</div>
					<div id="cl4"> 
						<h3>Sign to Newsletter</h3>
						<form action="js/validate.js" name="myForm" onsubmit=" return validateMail()" method="post">
							<input id="type" type="text" placeholder ="Name" required>
							<input id="type" type="text"  name="fmail" placeholder ="Email" required>
							<input id="submit" type="submit" value="SUBCRIBE"> 
						</form>
					</div>
				</div>
				
				<div class="footer-bot">
					<div id="menu-bot">
						<p>HOME PORFOLIO SITEMAP CONTACT</p>
					</div>
					<div id="sign">
						<p>Revenant @ 2013 by PremiumCoding | All Rights Reserved</p>
					</div>
			</div>
				</div>
			
			</div>
	</div>
</body>
</html>

