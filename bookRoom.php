<!DOCTYPE html>
<?php
	$roomType = $_GET["type"];
?>
<html>
<script src="scripts/validate_user.js"></script>
<head>
	<title>Seminar Hall</title>
	<link rel="stylesheet" type="text/css" href="css/common-styles.css">
	<style type="text/css">
		input, textarea {
	    width: 100%;
	    font: 100% arial;
	    background: #FFF;
	    color: #47433F;
	}
	</style>
</head>
<body style="background-color: #595959">
	<div class="navbar-wrapper">
		<div class="navbar">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li class="active"><a href="booking.html">Book</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="about.html">About</a></li>
				<li style="float: right;" id="login">Login</li>
			</ul>
		</div>
	</div>
	<center><h1 style="color: #fff; margin-top: 50px;">Best Deals</h2></center>
	<div class="grid-wrapper">
		<div class="card grid-item" style="background-color: #fff; color: #000; margin-left: 100px;">
			<div>
			<center>
				<span>BASIC</span>
				<br>
				<span>Cost: 25,000/month</span>
			</center>
			</div>
			<hr>
			<div style="background-color: #fff">
			<center>
				<span>5 bookable spaces</span><br>
				<span>Single office building</span><br>
				<span>Unlimited Usage</span><br>
				<span>24-hr Support</span><br>
				<span>Easy scheduling of meets</span>
			</center>
			</div>
		</div>
		<div class="card grid-item"  style="background-color: #fff; color: #000; margin-left: 30px; margin-right: 30px;">
			<center>
				<div style="background-color: #fff;">
					<span>PRO</span>
					<br>
					<span>Cost: 50000/month</span>
				</div>
				<hr>
				<div style="background-color: #fff">
				<center>
					<span>15 bookable spaces</span><br>
					<span>Unlimited office building</span><br>
					<span>Unlimited Usage</span><br>
					<span>24-hr Support</span><br>
					<span>Easy scheduling of meets</span><br>
					<span>Amenities</span><br>
					<span>Issue Reporting</span>
				</center>
				</div>
			</center>
		</div>
		<div class="card grid-item" style="background-color: #fff; color: #000; margin-right: 100px;">
			<center>
				<span>ENTERPRISE</span>
				<br>
				<span>Cost: 5,00,000/yr</span>
			</center>
				<hr>
				<div style="background-color: #fff">
				<center>
					<span>25+ bookable spaces</span><br>
					<span>Unlimited office building</span><br>
					<span>Unlimited Usage</span><br>
					<span>24-hr Support</span><br>
					<span>Easy scheduling of meets</span><br>
					<span>Food and Refreshments provided</span><br>
					<span>Amenities</span><br>
					<span>Issue Reporting</span><br>
					<span>Floor Plan</span><br>
					<span>Catering</span><br>
				</center>
				</div>
		</div>
	</div>

	<center><h1 style="color: #fff; margin-top: 50px">Customized Booking</h1></center>

<!-- TODO Display form only when logged in and autofill profile details -->

		<form style="margin-right: 50px; margin-left: 50px; margin-bottom: 70px;">
			<!-- <h2 style="color: #fff">Personal Details</h>
			<hr>
			<p><input type="text" name="name" id="name" placeholder="Username"></p>
			<p><input type="number" name="mobile" id="mobile" placeholder="Contact No."></p>
			<p><input type="email" name="email" id="email" placeholder="E-Mail"></p>
			<p><textarea rows="8" cols="50" name="address" id="address" placeholder="Address..."></textarea></p> -->

			<div class="grid-wrapper" style="grid-template-columns: 50% 50%;">
				<div class="card-no-hover grid-item" style="background-color: #fff; color: #000; margin-left: 100px;">
					<div>
					<center>
						<span>Personal Details</span>
					</center>
					</div>
					<hr>
					<div style="background-color: #fff">
					<!-- <center>
						<span>5 bookable spaces</span><br>
						<span>Single office building</span><br>
						<span>Unlimited Usage</span><br>
						<span>24-hr Support</span><br>
						<span>Easy scheduling of meets</span>
					</center> -->
					<p><input type="text" name="name" id="name" placeholder="Username" required></p>
					<p><input type="number" name="mobile" id="mobile" placeholder="Contact No." required></p>
					<p><input type="email" name="email" id="email" placeholder="E-Mail" required></p>
					<p><textarea rows="8" name="address" id="address" placeholder="Address..." required></textarea></p>
					</div>
				</div>
				<div class="card-no-hover grid-item"  style="background-color: #fff; color: #000; margin-left: 30px; margin-right: 30px;">
					<center>
						<div style="background-color: #fff;">
							<span>Room Details</span>
						</div>
					</center>
					<hr>
					<div style="background-color: #fff">
						<p style="width: 100%">

<!-- TODO select default based on type param -->
							<span>Type of room:</span>
							<select id="type" name="type" required style="margin-left: 30px;">
								<option value="1">Seminar Hall</option>
								<option value="2">Meeting Room</option>
								<option value="3">Conference Room</option>
							</select>
						</p>
						<p>
							<span>Date Required:</span>
							<input type="date" name="date" id="date" required>
						</p>
						<p><input type="text" name="comp_name" id="comp_name" placeholder="Company Name" required></p>
						<p><input type="number" name="total_people" id="total_people" placeholder="Total People" required></p>
						<p><textarea rows="4" name="add_deets" id="add_deets" placeholder="Additional Details"></textarea></p>

						<button type="submit" style="float: right;">Confirm Booking</button>
					</div>
				</div>
			</div>

		</form>
	

	<div id="loginModal" class="modal">
	  <div class="modal-content">
	    <div class="modal-header">
	      <span class="close" id="closeModal">&times;</span>
	      <h2>Login</h2>
	    </div>
	    <div class="modal-body">
		    <center>
		    	<form style="padding: 20px; margin: 10px;">
		    		<input type="text" name="username" id="username" required placeholder="Username"><br><br>
		    		<input type="password" name="password" id="password" required placeholder="Password"><br><br>
		    		<button type="button" onclick="validate_user(document.getElementById('username').value, document.getElementById('password').value);">Login</button>
		    	</form>
		    	Don't have an account?<a href="signup.html"> Sign up here</a>
		    </center>
	    </div>
	    <!-- <div class="modal-footer">
	      <h3>Modal Footer</h3>
	    </div> -->
	  </div>
	</div>

	<script type="text/javascript" src="scripts/modal.js"></script>
</body>
</html>
<!-- fd4b46 -->