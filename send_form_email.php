<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "luke@activefactory.co.za";
    $email_subject = "Active Factory Online Contact Form";
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
    
  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }

    
  $email_message = "Form details below.\n\n";
  $email_message .= "First Name: ".clean_string($first_name)."\n";
  $email_message .= "Last Name: ".clean_string($last_name)."\n";
  $email_message .= "Email: ".clean_string($email_from)."\n";
  $email_message .= "Telephone: ".clean_string($telephone)."\n";
  $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

if(! strlen($error_message) > 0) { 
  @mail($email_to, $email_subject, $email_message, $headers);  
}
?>
 
<!-- include your own success html here -->
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Active Factory</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<div id="home" class="header">
		<img src="images/slide41.jpg" alt="Slide 41" class="responsive">
		<div class="text-overlay">Manufactured to last</div>
	</div>

	<div id="navbar">
		<a href="#home" class="logo">
			<img id="logo" src="images/logo.jpg" alt="Logo">
		</a>
		<div id="navbar-right">
			<a href="#home">Home</a>
			<a href="#products">Products</a>
			<a href="#faq">FAQ</a>
			<a href="#contact">Contact</a>
		</div>
	</div>
	
	<div class="content container">

		<div id="about" class="row">
			<div class="column left">
				<h2>About Us</h2>
				<p>We are South Africa’s largest producer of wooden toilet seats. Quality, service and value are at the core of this Family owned/managed company. We are committed to these values and back all our products with a hassle free two year guarantee.</p>
				<p>	In 2003 an entrepreneur and owner of a home renovation firm spotted a gap in the market for a locally produced, good quality toilet seat. Rick Baker enlisted the help of people and resources from wherever he could find them and set out to manufacture the best seat in the world. Eight years later the Active Factory has come a long way and has made many innovations and improvements to the benchmark that was set all those years before. The Active Factory is now a successful manufacturer of quality products that are distributed in over 100 retail outlets all over southern Africa.</p>
			</div>
			<div id="photo" class="column right">
				<img src="images/father-son.jpg" alt="" class="responsive">
			</div>
		</div> <!-- row -->
		
		<div id="products" class="row">
			<div class="column left">
				<h2>Our Products</h2>
				<div id="mixedSlider1" class="mixedSlider">
					<h3>Toilet seats</h3>
                    <div class="MS-content">
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">BETTA-CLASSICO</p>
                                <img src="images/seats/BETTA-CLASSICO.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">BETTA-CONSUL</p>
                                <img src="images/seats/BETTA-CONSUL.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">BETTA-HYGENIX-500</p>
                                <img src="images/seats/BETTA-HYGENIX-500.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">BETTA-HYGENIX-1000</p>
                                <img src="images/seats/BETTA-HYGENIX-1000.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">BETTA-IQWAAMBASSADOR</p>
                                <img src="images/seats/BETTA-IQWAAMBASSADOR.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">BETTA-MIRAGE</p>
                                <img src="images/seats/BETTA-MIRAGE.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">BETTA-OLD-MIRAGE</p>
                                <img src="images/seats/BETTA-OLD-MIRAGE.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">GLASS-INLAY-UNIVERSAL</p>
                                <img src="images/seats/GLASS-INLAY-UNIVERSAL.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">JUNIOR</p>
                                <img src="images/seats/JUNIOR.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">R.A.K-COMPACT-WALL-HUNG</p>
                                <img src="images/seats/R.A.K-COMPACT-WALL-HUNG.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">R.A.K-LIWA</p>
                                <img src="images/seats/R.A.K-LIWA.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">UNIVERSAL-MAHOGANY</p>
                                <img src="images/seats/UNIVERSAL-MAHOGANY.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">UNIVERSAL-WHITE-GLOSS</p>
                                <img src="images/seats/UNIVERSAL-WHITE-GLOSS.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">VAAL-CONCORD</p>
                                <img src="images/seats/VAAL-CONCORD.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">VAAL-ORCHID</p>
                                <img src="images/seats/VAAL-ORCHID.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">VAAL-TUSCANY</p>
                                <img src="images/seats/VAAL-TUSCANY.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><i class="fas fa-angle-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fas fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                </div> <!-- .mixedSlider -->

				<div id="mixedSlider2" class="mixedSlider">
					<h3>Accessories</h3>
                    <div class="MS-content">
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">Soap Dish</p>
                                <img src="images/accessories/soap-dish.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">Toilet-roll Holder</p>
                                <img src="images/accessories/toilet-roll-holder.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">Toothbrush Holder</p>
                                <img src="images/accessories/toothbrush-holder.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">Towel Rail</p>
                                <img src="images/accessories/towel-rail.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">Towel Ring</p>
                                <img src="images/accessories/towel-ring.jpg" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="imgTitle">
                                <p class="blogTitle">Coat Hook</p>
                                <img src="images/accessories/coat-hook.jpg" alt="" />
                            </div>
						</div>
                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><i class="fas fa-angle-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fas fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                </div> <!-- .mixedSlider -->
				<div id="colours">
					<img class="responsive" src="images/colours.png" alt="">
					<div class="text-overlay">Available in 9 colours</div>
				</div>
			</div> <!-- column -->

			<div class="column right">
				<div>
					<h3>Finishing Process</h3>
					<p>	The wood we use has been specially selected from Brazil and is suitable for the production of toilet seats. After shaping the seat it is sealed in a dipping tank using a high quality penetrating sealer. After being sealed the seat is coated with multiple layers of top quality paint which is then baked in an oven to ensure a hard, hygienic, long lasting, scratch resistant finish.</p>
				</div>
				<div>
					<h3>Steel Hinges</h3>
					<p>	Our hinge is manufactured using high grade “304” stainless steel. The hinge is then polished for several hours to achieve a smooth, high gloss finish. Our hinge will therefore never rust, peel nor break. The hinge is also fitted with a top fastening mechanism to ensure fast, hassle free fitment to the pan.</p>
				</div>
				<div>
					<h3>OEM</h3>
					<p>	We can take over at any stage in the design process and will get samples out to you in unbelievable turn around times. By using different profiles and designs we can create either a contemporary or classic look, either way our seats will add to the value and complement the design of your pans. We will ensure that you get the best solution for your seat requirements.</p>
				</div>
			</div> <!-- column -->
		</div> <!-- row -->
		
		<div id="faq" class="row" >
			<div class="vspace"></div>
			<div class="column left">
				<h2>Frequently Asked Questions</h2>
				<button class="accordion">Where can I buy an Active Factory toilet seat?</button>
				<div class="panel">
					<p>You can buy our seats from most retail outlets. CTM, On tap and Plumblink are the larger retailers that stock our seats.</p>
				</div>

				<button class="accordion">The seat is broken, what should I do?</button>
				<div class="panel">
					<p>There is a 2-year guarantee on your toilet seat. Take your receipt and go to the shop where you purchased the seat. They will then contact their supplier and arrange for a replacement seat if within the guarantee period.</p>
				</div>

				<button class="accordion">The hinge is becoming rusty, what can I do?</button>
				<div class="panel">
					<p>Clean the hinges thoroughly with a soft cloth and hot soapy water. It is possible that the brown appearance has been caused by dirt and cleaning will solve the problem. The hinge might get tarnished over time and can be polished up using a product like Brasso. Our hinges are made out of high grade stainless steel, and therefore will not rust.</p>
				</div>			

				<button class="accordion">How do I clean my toilet seat?</button>
				<div class="panel">
					<p>Use a mild soapy Solution and a soft damp cloth, then dry seat and hinges. Please do not put the cover down until seat and cover are completely dry. The seat and hinges should not get in contact with the cleaner for the pan itself so please make sure that seat and cover are in an upright position until all the cleaner has been flushed away.</p>
				</div>			
			</div>
			<div class="column right">
				<img class="responsive" src="images/slide1-1.jpg" alt="">
			</div>
			
		</div> <!-- row -->
		
		<div id="contact" class="row">
			<div class="vspace"></div>
			<div class="column left">
				<h2>Contact Us</h2>
				<div class="map-responsive">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14357.270020102456!2d28.070071!3d-25.891931!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2b4745b14e85d88!2sThe+Active+Factory!5e0!3m2!1sen!2sza!4v1550381218609" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="column right">
          
          <?php
            if(strlen($error_message) > 0) { 
          ?>
            <div class="alert alert-success"><strong>Please double check your info: <br /></strong><?php echo $error_message; ?></div>
          <?php 
            }
          ?>
          <div class="alert alert-success"><strong>Thank you!</strong> We will be in touch with you shortly.</div>

			</div>
			
		</div> <!-- row -->
		
	</div> <!-- container -->
	
	<footer class="panel-footer">
		<div class="row">
			<div id="contact-links" class="column left">
				<div><a href="tel:+27126683216">
					<i class="fas fa-phone"></i> +27 12 668 3216 / 46</a></div>
				<div><a href="tel:+27866593340">
					<i class="fas fa-fax"></i> +27 86 659 3340</a></div>
				<div><a href="mailto:luke@activefactory.co.za">
					<i class="fas fa-envelope"></i> luke@activefactory.co.za</a></div>	
			</div>
			<div id="hours" class="column right">
				<span>Hours:</span>
				<br>Mon-Fri: 7:30am - 4:30pm
				<br>Sat, Sun: Closed
			</div>				
		</div>
	</footer>		
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/multislider.js"></script>
	<script src="js/script.js"></script>
	
</body>
</html>


<?php
 
}
?>