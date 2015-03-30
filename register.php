<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="register.php">Register</a></li>
					<li><a href="personlogin.php">Login</a></li>
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">My Account</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" /></a>
			</div>
			  <div class="cart">
			  	   <p>Welcome to our Online Store! <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"> 0 item(s) - $0.00
			  	   	<ul class="dropdown">
							<li>you have no items in your Shopping cart</li>
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.html">Home</a></li>
			    	<li><a href="about.html">About</a></li>
			    	<li><a href="delivery.html">Delivery</a></li>
			    	<li><a href="news.html">News</a></li>
			    	<li><a href="contact.html">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form>
	     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>	     
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Categories</h3>
				      <li><a href="#">Mobile Phones</a></li>
				      <li><a href="#">Desktop</a></li>
				      <li><a href="#">Laptop</a></li>
				      <li><a href="#">Accessories</a></li>
				      <li><a href="#">Software</a></li>
				       <li><a href="#">Sports &amp; Fitness</a></li>
				       <li><a href="#">Footwear</a></li>
				       <li><a href="#">Jewellery</a></li>
				       <li><a href="#">Clothing</a></li>
				       <li><a href="#">Home Decor &amp; Kitchen</a></li>
				       <li><a href="#">Beauty &amp; Healthcare</a></li>
				       <li><a href="#">Toys, Kids &amp; Babies</a></li>
				  </ul>
				</div>					
	  	     </div>
 <div class="main">
    <div class="content">
    	<div class="register_account">
    		<h3>Register New Account</h3>
    		<form method ="post" action="signup.php">
		   			 <table>
		   				<tbody><tr><td><div><input type="text" name="FName" id="FName" placeholder="First Name"></div>
		    			<div><input type="text" placeholder="Last Name" id="LName" name="LName"></div>
		    			<div><input type="text" placeholder="E-Mail" name="Email" id="Email"></div>
		    			<div><input type="password" placeholder="Password" name="password" id="password"></div>
		    			 </td>
		    			<td><div><input type="text" placeholder="Address" name="Address" id="Address"></div>
		    			<div><input type="text" placeholder="City" name="City" id="City"></div>
						<div><select id="Country" name="Country" onchange="change_country(this.value)" class="frm-field required">
					            <option value="null">Select a Country</option>         
					            <option value="AX">Åland Islands</option>
					            <option value="AF">Afghanistan</option>
					            <option value="AL">Albania</option>
					            <option value="DZ">Algeria</option>
					            <option value="AS">American Samoa</option>
					            <option value="AD">Andorra</option>
					            <option value="AO">Angola</option>
					            <option value="AI">Anguilla</option>
					            <option value="AQ">Antarctica</option>
					            <option value="AG">Antigua And Barbuda</option>
					            <option value="AR">Argentina</option>
					            <option value="AM">Armenia</option>
					            <option value="AW">Aruba</option>
					            <option value="AU">Australia</option>
					            <option value="AT">Austria</option>
					            <option value="AZ">Azerbaijan</option>
					            <option value="BS">Bahamas</option>
					            <option value="BH">Bahrain</option>
					            <option value="BD">Bangladesh</option>
					            <option value="BB">Barbados</option>
					            <option value="BY">Belarus</option>
					            <option value="BE">Belgium</option>
					            <option value="BZ">Belize</option>
					            <option value="BJ">Benin</option>
					            <option value="BM">Bermuda</option>
					            <option value="BT">Bhutan</option>
					            <option value="BO">Bolivia</option>
					            <option value="BA">Bosnia and Herzegovina</option>
					            <option value="BW">Botswana</option>
					            <option value="BV">Bouvet Island</option>
					            <option value="BR">Brazil</option>
					            <option value="IO">British Indian Ocean Territory</option>
					            <option value="BN">Brunei</option>
					            <option value="BG">Bulgaria</option>
					            <option value="BF">Burkina Faso</option>
					            <option value="BI">Burundi</option>
					            <option value="KH">Cambodia</option>
					            <option value="CM">Cameroon</option>
					            <option value="CA">Canada</option>
					            <option value="CV">Cape Verde</option>
					            <option value="KY">Cayman Islands</option>
					            <option value="CF">Central African Republic</option>
					            <option value="TD">Chad</option>
					            <option value="CL">Chile</option>
					            <option value="CN">China</option>
					            <option value="CX">Christmas Island</option>
					            <option value="CC">Cocos (Keeling) Islands</option>
					            <option value="CO">Colombia</option>
					            <option value="KM">Comoros</option>
					            <option value="CG">Congo</option>
					            <option value="CD">Congo, Democractic Republic</option>
					            <option value="CK">Cook Islands</option>
					            <option value="CR">Costa Rica</option>
					            <option value="CI">Cote D'Ivoire (Ivory Coast)</option>
					            <option value="HR">Croatia (Hrvatska)</option>
					            <option value="CU">Cuba</option>
					            <option value="CY">Cyprus</option>
					            <option value="CZ">Czech Republic</option>
					            <option value="DK">Denmark</option>
					            <option value="DJ">Djibouti</option>
					            <option value="DM">Dominica</option>
					            <option value="DO">Dominican Republic</option>
					            <option value="TP">East Timor</option>
					            <option value="EC">Ecuador</option>
					            <option value="EG">Egypt</option>
					            <option value="SV">El Salvador</option>
					            <option value="GQ">Equatorial Guinea</option>
					            <option value="ER">Eritrea</option>
					            <option value="EE">Estonia</option>
					            <option value="ET">Ethiopia</option>
					            <option value="FK">Falkland Islands (Islas Malvinas)</option>
					            <option value="FO">Faroe Islands</option>
					            <option value="FJ">Fiji Islands</option>
					            <option value="FI">Finland</option>
					            <option value="FR">France</option>
					            <option value="FX">France, Metropolitan</option>
					            <option value="GF">French Guiana</option>
					            <option value="PF">French Polynesia</option>
					            <option value="TF">French Southern Territories</option>
					            <option value="GA">Gabon</option>
					            <option value="GM">Gambia, The</option>
					            <option value="GE">Georgia</option>
					            <option value="DE">Germany</option>
					            <option value="GH">Ghana</option>
					            <option value="GI">Gibraltar</option>
					            <option value="GR">Greece</option>
					            <option value="GL">Greenland</option>
					            <option value="GD">Grenada</option>
					            <option value="GP">Guadeloupe</option>
					            <option value="GU">Guam</option>
					            <option value="GT">Guatemala</option>
					            <option value="GG">Guernsey</option>
					            <option value="GN">Guinea</option>
					            <option value="GW">Guinea-Bissau</option>
					            <option value="GY">Guyana</option>
					            <option value="HT">Haiti</option>
					            <option value="HM">Heard and McDonald Islands</option>
					            <option value="HN">Honduras</option>
					            <option value="HK">Hong Kong S.A.R.</option>
					            <option value="HU">Hungary</option>
					            <option value="IS">Iceland</option>
					            <option value="IN">India</option>
					            <option value="ID">Indonesia</option>
					            <option value="IR">Iran</option>
					            <option value="IQ">Iraq</option>
					            <option value="IE">Ireland</option>
					            <option value="IM">Isle of Man</option>
					            <option value="IL">Israel</option>
					            <option value="IT">Italy</option>
					            <option value="JM">Jamaica</option>
					            <option value="JP">Japan</option>
					            <option value="JE">Jersey</option>
					            <option value="JO">Jordan</option>
					            <option value="KZ">Kazakhstan</option>
					            <option value="KE">Kenya</option>
					            <option value="KI">Kiribati</option>
					            <option value="KR">Korea</option>
					            <option value="KP">Korea, North</option>
					            <option value="KW">Kuwait</option>
					            <option value="KG">Kyrgyzstan</option>
					            <option value="LA">Laos</option>
					            <option value="LV">Latvia</option>
					            <option value="LB">Lebanon</option>
					            <option value="LS">Lesotho</option>
					            <option value="LR">Liberia</option>
					            <option value="LY">Libya</option>
					            <option value="LI">Liechtenstein</option>
					            <option value="LT">Lithuania</option>
					            <option value="LU">Luxembourg</option>
					            <option value="MO">Macau S.A.R.</option>
					            <option value="MK">Macedonia</option>
					            <option value="MG">Madagascar</option>
					            <option value="MW">Malawi</option>
					            <option value="MY">Malaysia</option>
					            <option value="MV">Maldives</option>
					            <option value="ML">Mali</option>
					            <option value="MT">Malta</option>
					            <option value="MH">Marshall Islands</option>
					            <option value="MQ">Martinique</option>
					            <option value="MR">Mauritania</option>
					            <option value="MU">Mauritius</option>
					            <option value="YT">Mayotte</option>
					            <option value="MX">Mexico</option>
					            <option value="FM">Micronesia</option>
					            <option value="MD">Moldova</option>
					            <option value="MC">Monaco</option>
					            <option value="MN">Mongolia</option>
					            <option value="ME">Montenegro</option>
					            <option value="MS">Montserrat</option>
					            <option value="MA">Morocco</option>
					            <option value="MZ">Mozambique</option>
					            <option value="MM">Myanmar</option>
					            <option value="NA">Namibia</option>
					            <option value="NR">Nauru</option>
					            <option value="NP">Nepal</option>
					            <option value="NL">Netherlands</option>
					            <option value="AN">Netherlands Antilles</option>
					            <option value="NC">New Caledonia</option>
					            <option value="NZ">New Zealand</option>
					            <option value="NI">Nicaragua</option>
					            <option value="NE">Niger</option>
					            <option value="NG">Nigeria</option>
					            <option value="NU">Niue</option>
					            <option value="NF">Norfolk Island</option>
					            <option value="MP">Northern Mariana Islands</option>
					            <option value="NO">Norway</option>
					            <option value="OM">Oman</option>
					            <option value="PK">Pakistan</option>
					            <option value="PW">Palau</option>
					            <option value="PS">Palestinian Territory, Occupied</option>
					            <option value="PA">Panama</option>
					            <option value="PG">Papua new Guinea</option>
					            <option value="PY">Paraguay</option>
					            <option value="PE">Peru</option>
					            <option value="PH">Philippines</option>
					            <option value="PN">Pitcairn Island</option>
					            <option value="PL">Poland</option>
					            <option value="PT">Portugal</option>
					            <option value="PR">Puerto Rico</option>
					            <option value="QA">Qatar</option>
					            <option value="RE">Reunion</option>
					            <option value="RO">Romania</option>
					            <option value="RU">Russia</option>
					            <option value="RW">Rwanda</option>
					            <option value="SH">Saint Helena</option>
					            <option value="KN">Saint Kitts And Nevis</option>
					            <option value="LC">Saint Lucia</option>
					            <option value="PM">Saint Pierre and Miquelon</option>
					            <option value="VC">Saint Vincent And The Grenadines</option>
					            <option value="WS">Samoa</option>
					            <option value="SM">San Marino</option>
					            <option value="ST">Sao Tome and Principe</option>
					            <option value="SA">Saudi Arabia</option>
					            <option value="SN">Senegal</option>
		         			</select></div>
						<div><input type="text" placeholder="Credit Card Number" name="CCard" id="CCard"></div>
		    		</td>
		    	</tr> 
		    </tbody></table>
			<p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p></br></br>
		   <div class="search"><div><button class="grey" type="submit">Create Account</button></div></div>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>
   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#"><span>Advanced Search</span></a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="contact.html"><span>Contact Us</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="faq.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html"><span>Site Map</span></a></li>
						<li><a href="preview-2.html"><span>Search Terms</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="personlogin.php">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="faq.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
							      <li><a href="#" target="_blank"> <img src="images/dribbble.png" alt="" /></a></li>
							      <li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>Compant Name © All rights Reseverd | Design by  <a href="http://w3layouts.com">W3Layouts</a> </p>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>

